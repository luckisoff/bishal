<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NoPermissionModels\Birthdate;

/**
 * @group Birthdate
 *
 * APIs for friends birthdates
 */
class BirthdateController extends BaseApiController
{

    /**
    *Create
    *@bodyParam name string required full name of friend
    *@bodyParam birth_date string required birthdate of the friend
    */

    public function store(Request $request, Birthdate $birthdate = null)
    {
        try {

            $validator = $this->validator::make($request->all(),[
                'name' =>'required',
                'birth_date' => 'required|date_format:Y-m-d'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $input = $request->all();

            $input['user_id'] = app()->request->user()->id;

            $birthdate ? $birthdate->update($input) : $birthdate = Birthdate::create($input);

            return $this->successResponse(['birth_date'=> $birthdate],'Birthdate saved');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }

    /**
    *Get
    *Get all your saved dates
    */
    public function getBirthdates()
    {
        try {

            $birthdates = Birthdate::where('user_id', app()->request->user()->id)->orderBy('name','asc')->get();

            return $this->successResponse(['birthdates' => $birthdates],'Birthdates listing');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }

    /**
    *Delete
    *@urlParam id required id of the birthdate to be deleted
    */
    public function destroy($id)
    {
        try {
            $birthdate = Birthdate::find($id);

            if(!$birthdate) throw new \Exception('No record found');

            $birthdate->delete();

            return $this->successResponse([],'Birthdate deleted');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),300);
        }
    }
}
