<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Config;
use Carbon\Carbon;
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
        $empresa = [
            'nombre_comercial' => getenv('EMP_NOMBRE_ENPRESA'),
            'propietaria' => getenv('EMP_PROPIETARIA'),
            'ruc' =>getenv('EMP_RUC'),
            'direccion' =>getenv('EMP_DIRECCION'),
            'telefonos'=>getenv('EMP_TELEFONOS'),
            'correo'=>getenv('EMP_CORREO'),
        ];


        $cliente = [
            'contacto' => 'Sofia Lozano',
            'empresa' => 'Consorcio Oiltanking Peru S.A.',
            'ruc' => '10123322122',
            'celular' => '903922053',
            'correo' => 'sofia.lozano@oiltankingperu.com'
        ];

        $serie = "2021";
        $numero = "0040";
        $obs = "-M" ; // M Modificado, D Descuento:
        if($obs)
            $numeracion =  $serie . $numero. $obs;
        else
            $numeracion =  $serie . $numero ;

        $cotizacion = [
            'numeracion' => $numeracion,
            'saludo' => "De nuestra consideración. Nos es muy grato saludarle a través de la presente y a la vez alcanzarle nuestra cotización por la ejecución del servicio.",
            'forma_pago' => "30 dias",
            'validez_oferta' => "15 dias",
            'observacion' => 'Se confirmará la fecha de inicio del trabajo a través de correo electronico o whatsapp',
            'despido' => 'Sin otro particular y a la espera de sus noticias, nos despedimos',
            'fecha' => \Carbon\Carbon::now()->format('d-m-Y'),

            'hay_descuento' => true,
            'porc_subtotal' => 5/100,
            'monto_fijo' => 30,
        ];

        $datosb = [
            'titulo'=> "CUENTAS A NOMBRE DE " . strtoupper(getenv('EMP_PROPIETARIA')),

            'b1_banco'=> getenv('b1_banco'),
            'b1_tipo_moneda' =>getenv('b1_tipo_moneda'),
            'b1_cuenta_corriente' =>getenv('b1_cuenta_corriente'),
            'b1_codigo_interb' =>getenv('b1_codigo_interb'),

            'b2_banco'=> getenv('b2_banco'),
            'b2_tipo_moneda' =>getenv('b2_tipo_moneda'),
            'b2_cuenta_corriente' =>getenv('b2_cuenta_corriente'),
            'b2_codigo_interb' =>getenv('b2_codigo_interb'),
        ];

        $customPaper = array(0,0, 841.88976378,595.275590551); // Medidas de A4
        $customPaper = array(0,0, 1000.88976378,595.275590551); // Medidas de A4 + Extensión de Largo
        return PDF::loadView('exportarPDF.cotizacion.example2.index', compact('empresa','cliente','cotizacion','datosb'))
        ->setPaper($customPaper, 'landscape')->stream('archivo.pdf');
    }

}
