<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'fileName' => 'required',
            'file' => 'required|file|max:500000',
        ]);

        $fileName = $request->input('fileName');
        $file = $request->file('file');

        // Delete existing file with the same name, if exists
         if (Storage::exists($fileName)) {
             Storage::delete($fileName);
         }

        // Store the file in the upload directory
        Storage::putFileAs(config('filesystems.upload_dir'), $file, $fileName);

        return response()->json(['message' => 'File uploaded successfully'], 201);
    }

    public function download(Request $request)
    {
        $request->validate([
            'fileName' => 'required'
        ]);

        $fileName = $request->input('fileName');

        if (Storage::exists($fileName)) {
            $filePath = storage_path('app/' . config('filesystems.upload_dir') . '/' . $fileName);
            return response()->download($filePath);
        } else {
            return response()->json(['message' => 'File not found'], 404);
        }
    }
}

