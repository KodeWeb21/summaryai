<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\pdfController;

class storageController extends Controller
{
    public function store(Request $request){
        $request->validate([
            "pdfResume"=>"required"
        ]);
        $request->file('pdfResume')->store('uploads');
        $pdf = new pdfController();
        $pdf->getText($request->file('pdfResume'));
    }
}
