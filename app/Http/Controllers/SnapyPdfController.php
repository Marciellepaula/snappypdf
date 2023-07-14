<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class snapyPdfController extends Controller
{

    public function dowloadpdf()
    {
        $html = '<html><body><h1>Hello, World!</h1></body></html>';


        $pdf = \PDF::html($html);
        return $pdf->download('document.pdf');
    }
}
