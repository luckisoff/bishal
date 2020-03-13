<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\NoPermissionModels\Address;
use Illuminate\Http\Request;

class AddressController extends BaseAdminController
{
    public function store(Request $request)
    {
        $address  = Address::where('name',$request->name)->first();

        if(!$address)
        {
            if(Address::create($request->all()))
            {
                return response()->json(['status'=>true]);
            }
        } else {

            if($address->update($request->all()))
            {
                return response()->json(['status'=>true]);
            }
        }

        return response()->json(['status'=>false,'message'=>'Can not store address.']);
    }

    public function destroy(Address $address)
    {
        if($address->delete())
        {
            return response()->json(['status'=>true]);
        }
        return response()->json(['status'=>false,'message'=>'Can not delete address']);
    }

    public function get()
    {
        $address=Address::orderBy('name','asc')->get();
        return response()->json(['status'=>true,'locations'=>$address]);
    }
}
