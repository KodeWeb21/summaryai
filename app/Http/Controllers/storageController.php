<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class storageController extends Controller
{
    public function store(Request $request){
        $request->validate([
            "pdfResume"=>"required"
        ]);
        // $storage = Storage::disk("public")->put('prueba',$request->pdfResume);
        $pathFilePdf = $request->file('pdfResume')->store('uploads');
    }
}
