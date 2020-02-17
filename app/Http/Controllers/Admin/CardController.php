<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends BaseAdminController
{
    protected $storageFolder,$publicFolder;

    function __construct()
    {
        parent::__construct();
        $this->storageFolder = '/app/public/cards';
        $this->publicFolder = '/storage/cards/';
    }
    public function index()
    {
        $cards = Card::orderBy('created_at','desc')->get();

        return view('admin.parts.cards.index',compact('cards'));
    }

    public function create()
    {
        return view('admin.parts.cards.create');
    }

    public function store(Request $request)
    {
        try {

            $validator = $this->validator::make($request->all(),[
                'title' =>'required',
                'name'  =>'required',
                'image' =>'required|mimes:png,jpg,jpeg'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $input = $request->all();

            if($request->has('image'))
            {
                $image = $this->helper::upload_image($request->image,$this->storageFolder);
                $input['image'] = \URL::to($this->publicFolder.$image);
            }

            Card::create($input);

            return redirect()->route('dashbaord.cards')->with('success','Card created');

        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function destroy(Card $card)
    {
        try {
            if($card->delete())
            {
                $this->helper::delete_image(basename($card->image),$this->storageFolder);
            }
            return back()->with('success','Card has been deleted.');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }
}
