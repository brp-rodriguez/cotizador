@extends('layouts.plantilla')
@section('tittle','Cotizaciones')
@section('content')

    <div class="flex items-center justify-center min-h-screen bg-gray-100 ">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-8/12 lg:w-8/12 sm:w-8/12 ">
            <h1 class="text-2xl font-sans font-semibold text-green-500 text-center">Registrar Cotización </h1>
                <form action="#" method="POST">
                    @csrf
                    <div class="mt-4">
                        <div class="flex flex-wrap -mx-3 mb-0">
                            <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">

                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                              mb-2 mt-3 focus:outline-none " for="grid-first-name">
                                Razón Social :
                              </label>

                              <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                            focus:ring-1 focus:ring-blue-600"
                                    type="text" name="contacto" value="{{old('contacto')}}">

                              @error('contacto')
                                    <br> <small>*{{$message}}</small><br>
                              @enderror
                              <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">
                                  <label class="block uppercase tracking-wide
                                        text-gray-700 text-xs font-bold mb-2 mt-3"
                                          for="grid-first-name">
                                        RUC
                                  </label>
                                  <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                            focus:ring-1 focus:ring-blue-600"
                                  type="text" name="ruc" value="{{old('ruc')}}">

                                  @error('ruc')
                                    <br> <small>*{{$message}}</small><br>
                                  @enderror

                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-0">
                            <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">

                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                              mb-2 mt-3 focus:outline-none focus:ring-1 focus:ring-blue-600" for="grid-first-name">
                                Contacto :
                              </label>

                              <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                            focus:ring-1 focus:ring-blue-600"
                                    type="text" name="contacto" value="{{old('contacto')}}">

                              @error('contacto')
                                    <br> <small>*{{$message}}</small><br>
                              @enderror
                              <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">
                                  <label class="block uppercase tracking-wide
                                        text-gray-700 text-xs font-bold mb-2 mt-3
                                          focus:outline-none focus:ring-1 focus:ring-blue-600"
                                          for="grid-first-name">
                                        Celular
                                  </label>
                                  <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                            focus:ring-1 focus:ring-blue-600"
                                  type="text" name="ruc" value="{{old('ruc')}}">

                                  @error('ruc')
                                    <br> <small>*{{$message}}</small><br>
                                  @enderror

                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-0">

                            <div class="w-full md:w-4/10 px-3 mb-0 md:mb-0">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>

                            <div class="w-full md:w-4/10 px-3 mb-0 md:mb-0">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>

                            <div class="w-full md:w-2/10 -ml-3 px-2 mb-0 md:mb-0 ¿">
                                <a onclick="crear_fila()" class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4
                                                rounded inline-flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                  </svg>
                                    <span class="px-2"> Nueva Fila</span>
                                </a>
                            </div>

                        </div>



                        <div id="fila_detalle" class="flex flex-wrap -mx-1 mb-0">
                            <div class="w-full md:w-6/9 px-1 mb-0 md:mb-0">

                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                                    mb-2 mt-3 focus:outline-none focus:ring-1 focus:ring-blue-600" for="grid-first-name">
                                        Descripción :
                                    </label>

                                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                                    focus:ring-1 focus:ring-blue-600"
                                            type="text" name="descripcion" value="{{old('descripcion')}}">

                                    @error('descripcion')
                                            <br> <small>*{{$message}}</small><br>
                                    @enderror
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>

                            <div class="w-full md:w-1/9 px-1 mb-0 md:mb-0">
                                  <label class="block uppercase tracking-wide
                                        text-gray-700 text-xs font-bold mb-2 mt-3
                                          focus:outline-none focus:ring-1 focus:ring-blue-600"
                                          for="grid-first-name">
                                        Precio
                                  </label>
                                  <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                            focus:ring-1 focus:ring-blue-600"
                                  type="text" name="ruc" value="{{old('ruc')}}">

                                  @error('ruc')
                                    <br> <small>*{{$message}}</small><br>
                                  @enderror

                            </div>

                            <div class="w-full md:w-1/9 px-1 mb-0 md:mb-0">
                                <label class="block uppercase tracking-wide
                                      text-gray-700 text-xs font-bold mb-2 mt-3
                                        focus:outline-none focus:ring-1 focus:ring-blue-600"
                                        for="grid-first-name">
                                      Cantidad
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                            focus:ring-1 focus:ring-blue-600"
                                        type="text" name="ruc" value="{{old('ruc')}}">

                                @error('ruc')
                                  <br> <small>*{{$message}}</small><br>
                                @enderror
                            </div>

                            <div class="w-full md:w-1/9 px-1 mb-0 md:mb-0">
                                <label class="block uppercase tracking-wide
                                      text-gray-700 text-xs font-bold mb-2 mt-3
                                        focus:outline-none focus:ring-1 focus:ring-blue-600"
                                        for="grid-first-name">
                                      Total
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                            focus:ring-1 focus:ring-blue-600"
                                type="text" name="ruc" value="{{old('ruc')}}">

                                @error('ruc')
                                  <br> <small>*{{$message}}</small><br>
                                @enderror
                            </div>
                        </div>


                    <div id="" class="flex flex-wrap -mx-1 mb-0">
                        <div class="w-full md:w-2/7 px-1 mb-0 md:mb-0">
                        </div>
                        <div class="w-full md:w-2/7 px-1 mb-0 md:mb-0">
                        </div>
                        <div class="flex w-full md:w-3/7 px-1 mb-0 md:mb-0">
                            <label class="uppercase tracking-wide
                                  text-gray-700 text-xs font-bold mb-2 mt-3 md:w-1/3
                                    focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    for="grid-first-name">
                                  Subtotal
                            </label>
                            <input class="appearance-none block md:w-2/3 bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                        focus:ring-1 focus:ring-blue-600"
                            type="text" name="subtotal" value="{{old('subtotal')}}">

                            @error('subtotal')
                              <br> <small>*{{$message}}</small><br>
                            @enderror
                        </div>
                    </div>

                    <div id="" class="flex flex-wrap -mx-1 mb-0">
                        <div class="w-full md:w-2/7 px-1 mb-0 md:mb-0">
                        </div>
                        <div class="w-full md:w-2/7 px-1 mb-0 md:mb-0">
                        </div>
                        <div class="flex w-full md:w-3/7 px-1 mb-0 md:mb-0">
                            <label class="uppercase tracking-wide
                                  text-gray-700 text-xs font-bold mb-2 mt-3 md:w-1/3
                                    focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    for="grid-first-name">
                                  Descuento
                            </label>
                            <input class="appearance-none block md:w-1/6 bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                        focus:ring-1 focus:ring-blue-600"
                            type="text" name="subtotal" value="{{old('subtotal')}}">

                            <label class="uppercase tracking-wide
                                  text-gray-700 text-xs font-bold mb-2 mt-3 md:w-1/6
                                    focus:outline-none focus:ring-1 focus:ring-blue-600 px-3"
                                    for="grid-first-name">
                                   %
                            </label>

                            <input class="appearance-none block md:w-1/3 bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                        focus:ring-1 focus:ring-blue-600"
                            type="text" name="subtotal" value="{{old('subtotal')}}">

                            @error('subtotal')
                              <br> <small>*{{$message}}</small><br>
                            @enderror
                        </div>
                    </div>

                    <div id="" class="flex flex-wrap -mx-1 mb-0">
                        <div class="w-full md:w-2/7 px-1 mb-0 md:mb-0">
                        </div>
                        <div class="w-full md:w-2/7 px-1 mb-0 md:mb-0">
                        </div>
                        <div class="flex w-full md:w-3/7 px-1 mb-0 md:mb-0">
                            <label class="uppercase tracking-wide
                                  text-gray-700 text-xs font-bold mb-2 mt-3 md:w-1/3
                                    focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    for="grid-first-name">
                                  IGV
                            </label>
                            <input class="appearance-none block md:w-2/3 bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                        focus:ring-1 focus:ring-blue-600"
                            type="text" name="igv" value="{{old('igv')}}">

                            @error('igv')
                              <br> <small>*{{$message}}</small><br>
                            @enderror
                        </div>
                    </div>

                    <div id="" class="flex flex-wrap -mx-1 mb-0">
                        <div class="w-full md:w-2/7 px-1 mb-0 md:mb-0">
                        </div>
                        <div class="w-full md:w-2/7 px-1 mb-0 md:mb-0">
                        </div>
                        <div class="flex w-full md:w-3/7 px-1 mb-0 md:mb-0">
                            <label class="uppercase tracking-wide
                                  text-gray-700 text-xs font-bold mb-2 mt-3 md:w-1/3
                                    focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    for="grid-first-name">
                                  Total
                            </label>
                            <input class="appearance-none block md:w-2/3 bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                        focus:ring-1 focus:ring-blue-600"
                            type="text" name="subtotal" value="{{old('subtotal')}}">

                            @error('subtotal')
                              <br> <small>*{{$message}}</small><br>
                            @enderror
                        </div>
                    </div>


                    <div class="flex flex-wrap -mx-3 mb-0">
                        <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">

                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                          mb-2 mt-3 focus:outline-none " for="grid-first-name">
                            Forma de Pago :
                          </label>

                          <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                        focus:ring-1 focus:ring-blue-600"
                                type="text" name="contacto" value="{{old('contacto')}}">

                          @error('contacto')
                                <br> <small>*{{$message}}</small><br>
                          @enderror
                          <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                        </div>

                        <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">
                              <label class="block uppercase tracking-wide
                                    text-gray-700 text-xs font-bold mb-2 mt-3"
                                      for="grid-first-name">
                                    Valor de la Oferta
                              </label>
                              <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                        focus:ring-1 focus:ring-blue-600"
                              type="text" name="ruc" value="{{old('ruc')}}">

                              @error('ruc')
                                <br> <small>*{{$message}}</small><br>
                              @enderror

                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-0">
                        <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">

                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                          mb-2 mt-3 focus:outline-none " for="grid-first-name">
                            Observación
                          </label>

                          <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                        focus:ring-1 focus:ring-blue-600"
                                type="text" name="contacto" value="{{old('contacto')}}">

                          @error('contacto')
                                <br> <small>*{{$message}}</small><br>
                          @enderror
                          <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                        </div>

                    </div>

                        <!--div class="mt-4">
                            <label for="precio_venta_con_igv">
                                Precio de Venta (Con IGV)
                                <input type="text" name="precio_venta_con_igv" id="precio_venta_con_igv"
                                class="w-full px-4 py-2 mt-2 border border-gray-400 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{old('precio_venta_con_igv')}}" disabled>
                            </label>
                            @error('precio_venta_con_igv')
                                <br> <small>*{{$message}}</small><br>
                            @enderror
                        </div-->



                        <div class="mt-4 flex items-center justify-center space-x-20">
                            <button type="submit"
                                    class="w-1/3 px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"
                            >Guardar</button>
                            <a href="{{route('cotizaciones.index')}}" class="flex w-1/3 px-6 py-2 mt-4 text-white  bg-red-600 rounded-lg hover:bg-red-900" href="https://www.google.com">
                                <button type="button"
                                    class="text-center mx-auto">
                                    Cancelar
                                </button>
                            </a>
                        </div>
                    </div>
                </form>
        </div>
    </div>

<script src="{{ asset('js/AddRowsCotiCreate.js') }}"></script>
@include('productos.modal.create')
@endsection
