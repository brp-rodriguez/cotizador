<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cotización</title>
    <link href="{{ asset('css/stylew.css') }}" rel="stylesheet">
  </head>
  <body>
    <header class="clearfix">
        <div id="logo">
            <img src="{{asset('imagenes/logoCM.jpg')}}" style="height: 100px">
            <br>
        </div>

        <div id="company">
            <h2 class="name">{{$empresa['ruc']}}</h2>
            <h2 class="name">{{$empresa['nombre_comercial']}}</h2>
            <div> {{$empresa['propietaria']}}</div>
            <div>{{$empresa['direccion']}}</div>
            <div>{{$empresa['telefonos']}}</div>
            <div><a href="mailto:{{$empresa['correo']}}">{{$empresa['correo']}}</a></div>
        </div>

    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to"> <b>Atección</b></div>
          <div class="address">Contacto: {{$cliente['contacto']}}</div>
          <div class="address">Celular: {{$cliente['celular']}}</div>
          <br>
          <div class="to"> <b>Empresa</b></div>
          <div class="address">Razón Social: {{$cliente['empresa']}}</div>
          <div class="address">RUC: {{$cliente['ruc']}}</div>
        </div>
        <div id="invoice">
          <h1>COTIZACIÓN {{$cotizacion['numeracion']}} </h1>
        </div>
      </div>
      <div id="parrafo"> <p>{{$cotizacion['saludo']}}</p></div>
      <table cellspacing="0" cellpadding="0">
        <thead id="table_header">
          <tr>
            <th class="" style="width: 3%;font-size: 0.8rem;">#</th>
            <th class="" style="font-size: 0.8rem;">DESCRIPCIÓN</th>
            <th class="" style="width: 6%;font-size: 0.8rem;">PRECIO</th>
            <th class="" style="width: 6%;font-size: 0.8rem;">CANTIDAD</th>
            <th class="" style="width: 6%;font-size: 0.8rem;">TOTAL</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td class="no">01</td>
                <td class="desc"> Creating a recognizable Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis obcaecati facilis, incidunt esse ipsa volupt</td>
                <td class="unit">$40.00</td>
                <td class="qty">30</td>
                <td class="total">$1,200.00</td>
              </tr>
              <tr>
                <td class="no">01</td>
                <td class="desc"> Creating a recognizable Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis obcaecati facilis, incidunt esse ipsa volupt</td>
                <td class="unit">$40.00</td>
                <td class="qty">30</td>
                <td class="total">$1,200.00</td>
              </tr>
          <tr>
            <td class="no">01</td>
            <td class="desc"> Creating a recognizable Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis obcaecati facilis, incidunt esse ipsa volupt</td>
            <td class="unit">$40.00</td>
            <td class="qty">30</td>
            <td class="total">$1,200.00</td>
          </tr>
          <tr>
            <td class="no">02</td>
            <td class="desc">Developing a Content Management Lorem, ipsum dio, possimus quasi officia praesentium, commodi maiores corrupti. At exercitationem vel perferendis. </td>
            <td class="unit">$40.00</td>
            <td class="qty">80</td>
            <td class="total">$3,200.00</td>
          </tr>
          <tr>
            <td class="no">03</td>
            <td class="desc">Optimize the site for search engicusamus minus? Ea cumque possimus dolorum aperiam esse rerum iure? Quasi aliquid optio dolores ducimus praesentium nostrum doloribus alias ipsa.</td>
            <td class="unit">$40.00</td>
            <td class="qty">20</td>
            <td class="total">$800.00</td>
          </tr>
          <tr>
            <td class="no">03</td>
            <td class="desc">>Optimize the site for search engicusamus minus? Ea cumque possimus dolorum aperiam esse rerum iure? Quasi aliquid optio dolores ducimus praesentium nostrum doloribus alias ipsa.</td>
            <td class="unit">$40.00</td>
            <td class="qty">20</td>
            <td class="total">$800.00</td>
          </tr>

        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">
            </td>
            <td colspan="2">SUBTOTAL</td>
            <td>$5,200.00</td>
          </tr>

          @if($cotizacion['hay_descuento'])
          <tr>
            <td colspan="2">
            </td>
            <td colspan="2">DESCUENTO:</td>
            <td>$5,200.00</td>
          </tr>
          @endif
          <tr>
            <td colspan="2"></td>
            <td colspan="2">IGV 25%</td>
            <td>$1,300.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TOTAL</td>
            <td>$6,500.00</td>
          </tr>
        </tfoot>
      </table>

      <!--div>
       <h4 style="color: black;"><u> Condiciones de Servicio</u> </h4>
          <div style="display: inline; text-align: left; width: 20%; padding-top: -20px">
            Forma de pago: Crédito
          </div>
          <div style="display: inline; text-align: right; width: 20%;">
            30 dias
          </div>
      </div>
      <br>
      <div style="display: inline-block">
        <h4 style="color: black;"><u> Observación</u> </h4>
        <div style="display: inline; text-align: left; width: 40%">
          La entrega se realizar en la casa del Pueblo
        </div>
      </div-->

      <div>
        <h4 style="color: black; margin-top: -80px">
            <u> Condiciones de Servicio</u>
        </h4>
        <div style="display: inline;">
            <div style="display: inline-block; width: 30%">
                <p style="margin-top: -10px;">Forma de Pago:</p>
            </div>
            <div style="display: inline-block; width: 20%;">
                <p style="margin-top: -10px">30 dias</p>
            </div>
        </div>
        <br>
        <div style="display: inline;">
            <div style="display: inline-block; width: 30%;">
                <p style="margin-top: -10px;">Validez de la Oferta:</p>
            </div>
            <div style="display: inline-block; width: 30%;">
                <p style="margin-top: -10px;">15 dias</p>
            </div>
        </div>
      </div>

      <div>
        <h4 style="color: black; margin-top: -20px">
            <u> Observación</u>
        </h4>
        <div style="display: inline;">
            <div style="display: inline-block; width: 60%">
                <p style="margin-top: -10px;">La calle queda y el vnio por whatsap</p>
            </div>
        </div>
      </div>

      <div>
        <h4 style="margin-top:0px; padding: 0; color: black;">
            <u> Cuentas a Nombre de {{$empresa['propietaria']}} </u> </h4>
      </div>
      <table cellspacing="0" cellpadding="0">
        <thead >
          <tr style="line-height: 7px;">
            <th style="width: 150px"> <b> BANCO  </b></th>
            <th> <b> MONEDA </b></th>
            <th> <b> N° CUENTA CORRIENTE </b></th>
            <th> <b> N° CUENTA INTERBANCARIA </b></th>
          </tr>
        </thead>
        <tbody>
          <tr style="line-height: 7px;">
            <td class="bank"><h3>{{$datosb['b1_banco']}}</h3> </td>
            <td class="tipo_m">{{$datosb['b1_tipo_moneda']}}</td>
            <td class="cc">{{$datosb['b1_cuenta_corriente']}}</td>
            <td class="cci">{{$datosb['b1_codigo_interb']}}</td>
          </tr>
          <tr  style="line-height: 7px;">
            <td class="bank"><h3>{{$datosb['b2_banco']}}</h3> </td>
            <td class="tipo_m">{{$datosb['b2_tipo_moneda']}}</td>
            <td class="cc">{{$datosb['b2_cuenta_corriente']}}</td>
            <td class="cci">{{$datosb['b2_codigo_interb']}}</td>
          </tr>
        </tbody>
      </table>

      <div>
        <p style="margin-top:-5px; padding: 0;"> *Cuenta de Detracciones</p>
        <p style="margin-top:10px; padding: 0;"> Sin otro particular y a la espera de sus noticias, nos despedimos.</p>
        <p style="margin-top:-10px; padding: 0;"> Atentamente:</p>
      </div>

      <div class="outer">
        <div class="inner">
            <img style="margin-top: 4px; margin-bottom:0; margin-left: 190; height: 50px;"
            src="{{asset('imagenes/firma.jpg')}}">
            <p style="margin-top: -5px; margin-left: 180; padding: 0;"> <b>Nombre:</b> Magali Padilla Galvan</p>
            <p style="margin-top: -10px; margin-left: 170; padding: 0;"> <b>Cargo:</b> Especialista de Operaciones</p>
         </div>
     </div>
      <div id="notices">
        <div class="date" style="text-align: right">Fecha: {{ $cotizacion['fecha'] }}</div>
      </div>
    </main>
    <footer>
      MICRO-ERP-Milagritos : Desarrollado por Brayan Rodriguez
    </footer>
  </body>
</html>
