<?php

namespace App\Http\Controllers\Frontend;

use App\Models\{Home, Experience, Testimonials};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        $data['home'] = Home::first();
        $data['testimonial'] = Testimonials::get();
        $data['experience'] = Experience::take(3)->get();
        return view('frontend.index', $data);
    }
}
