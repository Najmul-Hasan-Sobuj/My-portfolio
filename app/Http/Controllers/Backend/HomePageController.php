<?php

namespace App\Http\Controllers\Backend;

use Helper;
use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['home'] = Home::get();
        return view('backend.home.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), [
            't_word'      => 'required',
            's_title'     => 'required',
            'description' => 'required',
            'image'       => 'required',
        ]);

        if ($validation->passes()) {
            $mainFile = $request->image;
            $globalFunImg =  Helper::imageUpload($mainFile);

            if ($globalFunImg['status'] == 1) {
                Home::create([
                    't_word'      => $request->t_word,
                    's_title'     => $request->s_title,
                    'description' => $request->description,
                    'image'       => $globalFunImg['filaName'],
                ]);
                Toastr::success('Post added successfully');
                return redirect()->back();
            } else {
                Toastr::warning('File extention not matching');
                return redirect()->back();
            }
        } else {
            $messages = $validation->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 10000]);
            }
            return redirect()->back()->withErrors($validation);
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
