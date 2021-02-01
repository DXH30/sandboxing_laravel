<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Berita;

class S3Controller extends Controller
{
    //
    public function uploadFile(Request $request)
    {
        $berita = new Berita();
        $judul_berita = $request->input('judulBerita');
        if ($request->has('gambarBerita')) {
            $file = $request->file('gambarBerita');
            $filename = $request->file('gambarBerita')->getClientOriginalName(); 
            Storage::disk('custom-s3')->put($filename, file_get_contents($file), array(
                'visibility' => 'public',
                /*'Metadata' => [
                'judul_berita' => $judul_berita,
                'organization_id' => '0',
                'uploader_id' => '123'
                ],
                 */ 
            ));
            $berita->nama_file = $filename;
        }
        $berita->judul_berita = $judul_berita;
        $berita->save();
        return redirect()->back();
    }

    public function uploadView(Request $request) {
        $obj = array(
            'storage' => Storage::disk('custom-s3')->listContents(),
            'cekstorage' => Storage::disk('custom-s3')
        );
        return view('s3.upload', $obj);
    }

    public function deleteFile(Request $request) {
        $path = $request->input('path');
        Storage::disk('custom-s3')->delete($path);
        return redirect()->back();
    }
}
