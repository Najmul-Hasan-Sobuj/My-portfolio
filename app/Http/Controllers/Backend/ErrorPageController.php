<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorPageController extends Controller
{
    public function error_403()
    {
        return view('backend.error.error_403');
    }

    public function error_404()
    {
        return view('backend.error.error_404');
    }

    public function error_405()
    {
        return view('backend.error.error_405');
    }

    public function error_500()
    {
        return view('backend.error.error_500');
    }

    public function error_503()
    {
        return view('backend.error.error_503');
    }

    public function error_offline()
    {
        return view('backend.error.error_offline');
    }
}
