<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gift;

class GiftController extends BaseAdminController
{
    protected $category,$gift,$storageFolder,$publicFolder;

    function __construct(Category $category, Gift $gift)
    {
        parent::__construct();
        $this->category = $category;
        $this->gift = $gift;
        $this->storageFolder = '/app/public/gifts';
        $this->publicFolder = 'storage/gifts/';
    }

    public function viewCategory()
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.parts.gifts.list-category',compact('categories'));
    }

    public function viewGifts()
    {
        $gifts = Gift::orderBy('created_at','desc')->get();
        return view('admin.parts.gifts.index',compact('gifts'));
    }

    public function createCategory()
    {
        return view('admin.parts.gifts.create-category');
    }

    public function createGift(Category $category = null)
    {
        $categories = $this->category::orderBy('name','asc')->get();

        return view('admin.parts.gifts.create',compact('categories','category'));
    }

    public function storeCategory(Request $request)
    {
        try {
            $validator = $this->validator::make($request->all(),[
                'name' => 'required|unique:categories'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first(),403);

            $this->category::create($request->all());

            return redirect()->route('dashboard.categories')->with('success','Category Created');

        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage],$th->getCode);
        }
    }

    public function deleteCategory(Category $category)
    {
        try {

            $category->delete();

            return back()->with('success','Category deleted');

        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage],505);
        }
    }

    public function storeGift(Request $request,Category $category=null)
    {
        try {

            $validator = $this->validator::make($request->all(),[
                'name'          =>'required',
                'price'         =>'required',
                'oldprice'      =>'required',
                'description'   =>'required',
                'height'        =>'required',
                'highlights'    =>'required',
                'collections'   =>'required|array',
                'collections.*' =>'mimes:jpg,jpeg,png',
                'cover_img'     =>'required|mimes:jpg,jpeg,png'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first(),403);

            $input = $request->all();


            if($request->has('collections'))
            {
                $collection=array();
                foreach($request->collections as $image)
                {
                    $imageName=$this->helper::upload_image($image,$this->storageFolder);
                    $collection['collections'][]=\URL::to($this->publicFolder.$imageName);
                }
                $input['collections'] = $collection['collections'];
            }

            if($request->has('cover_img'))
            {
                $imageName=$this->helper::upload_image($request->cover_img,$this->storageFolder);

                $input['cover_img']=\URL::to($this->publicFolder.$imageName);
            }


            $input['highlights'] = explode(',',$request->highlights);

            $category ? $category->gifts->create($input) : $this->gift::create($input);

            return redirect()->route('dashboard.gifts')->with('success','Gift item is inserted');

        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function deleteGift(Gift $gift)
    {
        try {
            if($gift->delete())
            {
                $this->helper::delete_image(basename($gift->cover_img),$this->storageFolder);
                foreach($gift->collections as $image)
                {
                    $this->helper::delete_image(basename($image),$this->storageFolder);
                }

            }
            return back()->with('success','Gift item has been deleted');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],505);
        }
    }

    public function showGift(Gift $gift)
    {
        return view('admin.parts.gifts.show',compact('gift'));
    }

    public function editGift(Gift $gift)
    {
        $categories = $this->category::orderBy('name','asc')->get();

        return view('admin.parts.gifts.edit',compact('gift','categories'));
    }

    public function updateGift(Request $request, Gift $gift)
    {
        try {

            $validator = $this->validator::make($request->all(),[
                'name'          =>'required',
                'price'         =>'required',
                'oldprice'      =>'required',
                'description'   =>'required',
                'height'        =>'required',
                'highlights'    =>'required',
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first(),403);

            $input = $request->all();

            $collection = array();

            if($request->has('collections'))
            {
                foreach($request->collections as $image)
                {
                    $imageName=$this->helper::upload_image($image,$this->storageFolder);
                    $collection['collections'][]=\URL::to($this->publicFolder.$imageName);
                }

                if($gift->collections)
                {
                    $collection['collections']=array_merge($gift->collections,$collection['collections']);
                }
                $input['collections'] = $collection['collections'];
            }

            if($request->has('cover_img'))
            {
                $imageName=$this->helper::upload_image($request->cover_img,$this->storageFolder);

                $input['cover_img']=\URL::to($this->publicFolder.$imageName);

                $this->helper::delete_image(basename($gift->cover_img),$this->storageFolder);
            }


            $input['highlights'] = explode(',',$request->highlights);

            $gift->update($input);

            return redirect()->route('dashboard.gifts')->with('success','Gift item is inserted');

        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function toggleOnOff(Gift $gift)
    {
        try {
            $gift->placeat_top?$gift->placeat_top=0:$gift->placeat_top=1;
            $gift->update();
            return back()->with('success','Position changed');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }
}
