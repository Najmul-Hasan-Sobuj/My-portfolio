<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['about'] = About::first();
        return view('frontend.about', $data);
    }

    public function getDownload()
    {
        $about = About::first();
        $file = public_path('global_assets/uploads/' . $about->resume);
        $headers = ['Content-Type: pdf'];
        return Response::download($file, 'Najmul.pdf', $headers);
    }
}
