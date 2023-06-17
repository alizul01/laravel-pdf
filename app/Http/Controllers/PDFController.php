<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to Alizul blog', 'status' => 'Pacar'];
        $pdf = PDF::loadView('pdf', $data);
        return $pdf->download('zuuul.pdf');
    }
}
