<?php

namespace App\Http\Controllers\Backend;

use Helper;
use App\Models\PickIcon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PickIconPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pickIcon'] = PickIcon::take(3)->get();
        return view('backend.icon.create', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'icon'            => 'required',
        ]);
        // dd($request->all());
        if ($Validator->passes()) {
            $mainFile = $request->icon;
            $imgPath = 'global_assets/uploads';
            $globalFunImg =  Helper::uploadsFunction($mainFile, $imgPath, 96, 87);

            if ($globalFunImg['status'] == 1) {
                PickIcon::create([
                    'icon'            => $globalFunImg['file_name'],
                ]);
                Toastr::success('Data Inserted Successfully');
            } else {
                $output['messege'] = $globalFunImg['errors'];
                Toastr::warning($output['messege']);
            }
            return redirect()->back();
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
        $pickIcon = PickIcon::find($id);
        File::delete(public_path('global_assets/uploads/') . $pickIcon->photo);
        File::delete(public_path('global_assets/uploads/thumb/') . $pickIcon->photo);
        File::delete(public_path('global_assets/uploads/requestImg/') . $pickIcon->photo);
        $pickIcon->delete();
    }
}
