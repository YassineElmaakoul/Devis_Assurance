<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PdfgenerateController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'heading' => 'Welcome to Funda of Web IT',
            'description' => 'This description of Funda of Web IT'
        ];
        $pdf = PDF::loadView('yourPDF', $data);

        return $pdf->download('fundaofwebit.pdf');
    }


}
