<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function getText($file){
        $namePDF = $file->hashName();
        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile(storage_path("app/uploads/$namePDF"));
        $text = $pdf->getText();
        echo $text;
    }
}
