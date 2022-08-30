<?php

namespace App\Http\Controllers\Backend;

use Helper;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ServicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['service'] = Service::get();
        return view('backend.service.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
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
            'icon'        => 'required',
            'title'       => 'required',
            'description' => 'required',
        ]);
        if ($Validator->passes()) {
            $mainFile = $request->icon;
            $filepath = 'global_assets/uploads';
            $globalFunFile = Helper::uploadsFile($mainFile, $filepath);

            if ($globalFunFile['status'] == 1) {
                Service::create([
                    'icon'        => $globalFunFile['file_name'],
                    'title'       => $request->title,
                    'description' => $request->description,
                ]);
                Toastr::success('Data Inserted Successfully');
                return redirect()->back();
            } else {
                $output['messege'] = $globalFunFile['errors'];
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['service'] = Service::find($id);
        return view('backend.service.update', $data);
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
        $validator = Validator::make($request->all(), [
            // 'icon'        => 'required',
            'title'       => 'required',
            'description' => 'required',
        ]);
        if ($validator->passes()) {
            $service = Service::find($id);
            if (isset($request->icon)) {
                if ($request->icon != $service->icon) {
                    $mainFile = $request->icon;
                    $filepath = 'global_assets/uploads';
                    $globalFunFile = Helper::uploadsFile($mainFile, $filepath);

                    if ($globalFunFile['status'] == 1) {
                        File::delete(public_path($filepath . '/') . $service->icon);
                        File::delete(public_path($filepath . '/thumb/') . $service->icon);
                        File::delete(public_path($filepath . '/requestImg/') . $service->icon);

                        Service::find($id)->update([
                            'title'       => $request->title,
                            'description' => $request->description,
                            'icon'        => $globalFunFile['file_name'],
                        ]);
                        Toastr::success('service has been updated');
                        return redirect()->back();
                    } else {
                        $output['messege'] = $globalFunFile['errors'];
                        Toastr::warning($output['messege']);
                        return redirect()->back();
                    }
                } else {
                    Service::find($id)->update([
                        'title'       => $request->title,
                        'description' => $request->description,
                    ]);
                    Toastr::success('service has been updated');
                    return redirect()->back();
                }
            } else {
                Service::find($id)->update([
                    'title'       => $request->title,
                    'description' => $request->description,
                ]);
                Toastr::success('service has been updated');
                return redirect()->back();
            }
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 10000]);
            }
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Service = Service::find($id);
        File::delete(public_path('global_assets/uploads/') . $Service->photo);
        File::delete(public_path('global_assets/uploads/thumb/') . $Service->photo);
        File::delete(public_path('global_assets/uploads/requestImg/') . $Service->photo);
        $Service->delete();
    }
}
