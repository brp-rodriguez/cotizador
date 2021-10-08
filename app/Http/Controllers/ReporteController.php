<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ReporteController extends Controller
{
    public function download_create_html()
    {
        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML('<h1>Styde.net</h1>');
        return $pdf->download('mi-archivo.pdf');

    }

    public function download_from_template_blade()
    {
        $data = [
            'titulo' => 'Styde.net'
        ];

        $pdf = PDF::loadView('exportarPDF.vista', compact('data'));

        return $pdf->download('archivo.pdf');
    }

    public function download_stream()
    {
        $data = [
            'titulo' => 'Styde.net'
        ];

        return PDF::loadView('exportarPDF.cotizacion.example2.index', compact('data'))
            ->stream('archivo.pdf');
    }

}
