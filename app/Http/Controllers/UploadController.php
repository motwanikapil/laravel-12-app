<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class UploadController extends Controller
{
    public function upload(Request $request) {
        $file = $request->file('file');
        $path = $file->store('', 'public');
        return view('display-image', ['path' => $path]);
    }
    
    
}
