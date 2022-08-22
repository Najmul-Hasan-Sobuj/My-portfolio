<?php

namespace App\Http\Controllers\Backend;

use Helper;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class BlogPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog'] = Blog::join('categories', 'blogs.category_id', '=', 'categories.id');
        return view('backend.blog.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::select('categories.category_title', 'categories.id')->get();
        return view('backend.blog.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'category_name' => 'required',
            'title'         => 'required',
            'cover_image'   => 'required',
            'pro_pic'       => 'required',
            'name'          => 'required',
            'post'          => 'required',
        ]);
        if ($Validator->passes()) {
            $mainFileOne = $request->cover_image;
            $mainFileTwo = $request->pro_pic;
            $imgPath = 'global_assets/uploads';
            $globalFunImgOne =  Helper::uploadsFunction($mainFileOne, $imgPath, 373, 466);
            $globalFunImgTwo =  Helper::uploadsFunction($mainFileTwo, $imgPath, 100, 95);

            if ($globalFunImgOne['status'] == 1 && $globalFunImgTwo['status'] == 1) {
                Blog::create([
                    'category_id' => $request->category_name,
                    'title'       => $request->title,
                    'image'       => $globalFunImgOne['file_name'],
                    'writer_logo' => $globalFunImgTwo['file_name'],
                    'writer_name' => $request->name,
                    'post'        => $request->post,
                ]);
                Toastr::success('Data Inserted Successfully');
                return redirect()->back();
            } else {
                $output['messege'] = $globalFunImgOne['errors'];
                $output['messege'] = $globalFunImgTwo['errors'];
                Toastr::warning($output['messege']);
                return redirect()->back();
            }
        } else {
            $messages = $Validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 10000]);
            }
            return redirect()->back()->withErrors($Validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
