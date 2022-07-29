<?php

namespace App\Http\Controllers\Backend;

use Helper;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class TestimonialsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['testimonial'] = Testimonials::get();
        return view('backend.testimonial.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.create');
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
            'image'             => 'required',
            'clients_statement' => 'required',
            'name'              => 'required',
            'country'           => 'required',
            'icon'              => 'required',
            'number'            => 'required',
            'icon_name'         => 'required',
        ]);
        if ($Validator->passes()) {
            $mainFile = $request->image;
            $imgPath = 'global_assets/uploads';
            $globalFunImg =  Helper::uploadsFunction($mainFile, $imgPath, 230, 227);

            if ($globalFunImg['status'] == 1) {
                Testimonials::create([
                    'image'             => $globalFunImg['file_name'],
                    'clients_statement' => $request->clients_statement,
                    'name'              => $request->name,
                    'country'           => $request->country,
                    'icon'              => $request->icon,
                    'number'            => $request->number,
                    'icon_name'         => $request->icon_name,
                ]);
                Toastr::success('Data Inserted Successfully');
                return redirect()->back();
            } else {
                $output['messege'] = $globalFunImg['errors'];
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
