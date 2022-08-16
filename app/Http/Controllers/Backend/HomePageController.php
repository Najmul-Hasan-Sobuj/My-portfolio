<?php

namespace App\Http\Controllers\Backend;

use Helper;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data['home'] = Home::first();
        return view('backend.home.update', $data);
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
        DB::beginTransaction();
        $home = Home::first();
        if (!empty($home)) {
            $validator = [
                'color_word' => 'required',
                'title'      => 'required',
                'quote'      => 'required',
            ];
        } else {
            $validator = [
                'color_word' => 'required',
                'title'      => 'required',
                'quote'      => 'required',
                'image'      => 'required',
            ];
        }
        $validator = Validator::make($request->all(), $validator);
        if ($validator->passes()) {
            if (isset($request->image)) {
                $imageFile = $request->image;
                // $resumeFile = $request->cv;
                $uploadPath = 'global_assets/uploads';
                $globalFunImg = Helper::uploadsFunction($imageFile, $uploadPath, 475, 822);
                // $globalFunFile = Helper::uploadsFunction($resumeFile, $uploadPath, ['zip', 'rar', 'pdf'], false);
                if (!empty($home)) {
                    if ($request->image != $home->image) {
                        if ($globalFunImg['status'] == 1) {
                            File::delete(public_path($uploadPath . '/') . $home->image);
                            File::delete(public_path($uploadPath . '/thumb/') . $home->image);
                            File::delete(public_path($uploadPath . '/requestImg/') . $home->image);

                            $home->update([
                                'color_word' => $request->color_word,
                                'title'      => $request->title,
                                'quote'      => $request->quote,
                                // 'cv'         => $globalFunFile['file_name'],
                                'image'      => $globalFunImg['file_name'],
                            ]);
                            Toastr::success('Data has been updated');
                        }
                    }
                } else {
                    Home::create([
                        'color_word' => $request->color_word,
                        'title'      => $request->title,
                        'quote'      => $request->quote,
                        // 'cv'         => $globalFunFile['file_name'],
                        'image'      => $globalFunImg['file_name'],
                    ]);
                    Toastr::success('Data has been created');
                }
            } else {
                $home->update([
                    'color_word' => $request->color_word,
                    'title'      => $request->title,
                    'quote'      => $request->quote,
                ]);
                Toastr::success('Data has been updated');
            }
            DB::commit();
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
