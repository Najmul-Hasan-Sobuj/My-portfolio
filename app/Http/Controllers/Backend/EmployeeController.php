<?php

namespace App\Http\Controllers\Backend;

use Helper;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['employee'] = Employee::get();
        return view('backend.employee.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.employee.create');
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
            'name'       => 'required',
            'email'      => 'required',
            'phone'      => 'required',
            'address'    => 'required',
            'experience' => 'required',
            'image'      => 'required',
            'salary'     => 'required',
            'vacation'   => 'required',
            'city'       => 'required',
        ]);
        if ($Validator->passes()) {
            $mainFile = $request->image;
            $imgPath = 'global_assets/uploads';
            $globalFunImg =  Helper::uploadsFunction($mainFile, $imgPath, 940, 788);

            if ($globalFunImg['status'] == 1) {
                Employee::create([
                    'name'       => $request->name,
                    'email'      => $request->email,
                    'phone'      => $request->phone,
                    'address'    => $request->address,
                    'experience' => $request->experience,
                    'photo'      => $globalFunImg['file_name'],
                    'salary'     => $request->salary,
                    'vacation'   => $request->vacation,
                    'city'       => $request->city,
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
        $data['employee'] = Employee::find($id);
        return view('backend.employee.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['employee'] = Employee::find($id);
        return view('backend.employee.update', $data);
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
        $Validator = Validator::make($request->all(), [
            'name'       => 'required',
            'email'      => 'required',
            'phone'      => 'required',
            'address'    => 'required',
            'experience' => 'required',
            // 'image'      => 'required',
            'salary'     => 'required',
            'vacation'   => 'required',
            'city'       => 'required',
        ]);
        if ($Validator->passes()) {
            $employee = Employee::find($id);
            if (isset($request->image)) {
                if ($request->image != $employee->image) {
                    $mainFile = $request->image;
                    $imgPath = 'global_assets/uploads';
                    $globalFunImg = Helper::uploadsFunction($mainFile, $imgPath, 940, 788);

                    if ($globalFunImg['status'] == 1) {
                        File::delete(public_path($imgPath . '/') . $employee->image);
                        File::delete(public_path($imgPath . '/thumb/') . $employee->image);
                        File::delete(public_path($imgPath . '/requestImg/') . $employee->image);

                        Employee::find($id)->update([
                            'name'       => $request->name,
                            'email'      => $request->email,
                            'phone'      => $request->phone,
                            'address'    => $request->address,
                            'experience' => $request->experience,
                            'photo'      => $globalFunImg['file_name'],
                            'salary'     => $request->salary,
                            'vacation'   => $request->vacation,
                            'city'       => $request->city,
                        ]);
                        Toastr::success('Employee has been updated');
                        return redirect()->back();
                    } else {
                        $output['messege'] = $globalFunImg['errors'];
                        Toastr::warning($output['messege']);
                        return redirect()->back();
                    }
                } else {
                    Employee::find($id)->update([
                        'name'       => $request->name,
                        'email'      => $request->email,
                        'phone'      => $request->phone,
                        'address'    => $request->address,
                        'experience' => $request->experience,
                        'salary'     => $request->salary,
                        'vacation'   => $request->vacation,
                        'city'       => $request->city,
                    ]);
                    Toastr::success('Employee has been updated');
                    return redirect()->back();
                }
            } else {
                Employee::find($id)->update([
                    'name'       => $request->name,
                    'email'      => $request->email,
                    'phone'      => $request->phone,
                    'address'    => $request->address,
                    'experience' => $request->experience,
                    'salary'     => $request->salary,
                    'vacation'   => $request->vacation,
                    'city'       => $request->city,
                ]);
                Toastr::success('Employee has been updated');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $employee = Employee::find($id);
        File::delete(public_path('global_assets/uploads/') . $employee->photo);
        File::delete(public_path('global_assets/uploads/thumb/') . $employee->photo);
        File::delete(public_path('global_assets/uploads/requestImg/') . $employee->photo);
        $employee->delete();
    }
}
