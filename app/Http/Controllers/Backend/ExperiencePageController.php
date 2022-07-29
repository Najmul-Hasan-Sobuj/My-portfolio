<?php

namespace App\Http\Controllers\Backend;

use Helper;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class ExperiencePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['experience'] = Experience::get();
        return view('backend.experience.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.experience.create');
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
            'starting_year' => 'required',
            'ending_year'   => 'required',
            'designation'   => 'required',
            'title'         => 'required',
            'details'       => 'required',
        ]);
        if ($Validator->passes()) {
            Experience::create([
                'starting_year' => $request->starting_year,
                'ending_year'   => $request->ending_year,
                'designation'   => $request->designation,
                'title'         => $request->title,
                'details'       => $request->details,
            ]);
            Toastr::success('Data Inserted Successfully');
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
        $data['experience'] = Experience::find($id);
        return view('backend.experience.update', $data);
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
            'starting_year' => 'required',
            'ending_year'   => 'required',
            'designation'   => 'required',
            'title'         => 'required',
            'details'       => 'required',
        ]);
        if ($Validator->passes()) {
            Experience::find($id)->update([
                'starting_year' => $request->starting_year,
                'ending_year'   => $request->ending_year,
                'designation'   => $request->designation,
                'title'         => $request->title,
                'details'       => $request->details,
            ]);
            Toastr::success('service has been updated');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Experience::find($id)->delete();
    }
}
