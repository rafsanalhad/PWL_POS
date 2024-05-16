<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request)
    {
        // Validate the incoming file upload and nama_gambar field
        $request->validate([
            'berkas' => 'required|file|image|max:5000', // Validate file upload
            'nama_gambar' => 'required', // Validate nama_gambar field
        ]);

        // Generate a unique file name
        $extfile = $request->berkas->getClientOriginalExtension();
        $namafile = time() . $request->input('nama_gambar') . '.' . $extfile;

        // Store the file in the 'public' disk with the generated file name
        $path = $request->berkas->storeAs('image-uploaded', $namafile);

        // Prepare the URL to display the uploaded image
        $imageUrl = asset('storage/app/image-uploaded/' . $namafile);

        $namaFile = $request->nama_gambar . "." . $extfile;

        // Redirect to a view to display the uploaded image
        return view('uploaded-image', ['imageUrl' => $imageUrl, 'nama_file' => $namaFile]);
    }
}
