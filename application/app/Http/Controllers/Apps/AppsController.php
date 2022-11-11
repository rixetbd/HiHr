<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function chat()
    {
        return view('apps.chat');
    }

    public function file_manager()
    {
        return view('apps.file-manager');
    }
}
