<?php

namespace App\Http\Controllers\Backend;

use Helper;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AboutPageController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data['about'] = About::first();
        return view('backend.about.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $about = About::first();
        if (!empty($about->video_url)) {
            $validator = [
                'video_url' => 'required',
                'title'     => 'required',
                'details'   => 'required',
            ];
        } else {
            $validator = [
                'video_url' => 'required',
                'title'     => 'required',
                'details'   => 'required',
                'resume'    => 'required',
            ];
        }
        $validator = Validator::make($request->all(), $validator);
        if ($validator->passes()) {
            if (isset($request->resume)) {
                $mainFile = $request->resume;
                $filepath = 'global_assets/uploads';
                $globalFunFile = Helper::uploadsFile($mainFile, $filepath);
                if (!empty($about)) {
                    if ($request->resume != $about->resume) {
                        if ($globalFunFile['status'] == 1) {
                            File::delete(public_path($filepath . '/') . $about->resume);
                            $about->update([
                                'video_url' => $request->video_url,
                                'title'     => $request->title,
                                'details'   => $request->details,
                                'resume'    => $globalFunFile['file_name'],
                            ]);
                            Toastr::success('Data has been updated');
                        }
                    }
                } else {
                    About::create([
                        'video_url' => $request->video_url,
                        'title'     => $request->title,
                        'details'   => $request->details,
                        'resume'    => $globalFunFile['file_name'],
                    ]);
                    Toastr::success('Data has been created');
                }
            } else {
                $about->update([
                    'video_url' => $request->video_url,
                    'title'     => $request->title,
                    'details'   => $request->details,
                ]);
                Toastr::success('Data has been updated');
            }
            return redirect()->back();
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 10000]);
            }
            return redirect()->back()->withErrors($validator);
        }
    }
}
