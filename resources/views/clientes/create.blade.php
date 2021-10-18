@extends('layouts.plantilla')
@section('tittle','Clientes')
@section('content')

    <div class="flex items-center justify-center bg-gray-100">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-8/12 lg:w-8/12 sm:w-8/12 ">
            <h1 class="text-2xl font-sans font-semibold text-green-500 text-center">Registrar Cliente </h1>
                <form action="{{ route('clientes.store') }}" method="POST">
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
                                    type="text" name="razon_social" value="{{old('razon_social')}}">

                              @error('razon_social')
                                    <br> <small>*{{$message}}</small><br>
                              @enderror
                              <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>

                            <div class="w-full md:w-1/4 px-3 mb-0 md:mb-0">
                                  <label class="block uppercase tracking-wide
                                        text-gray-700 text-xs font-bold mb-2 mt-3"
                                          for="grid-first-name">
                                        Nombre Corto
                                  </label>
                                  <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                            focus:ring-1 focus:ring-blue-600"
                                  id="nombre_corto" type="text" name="nombre_corto" value="{{old('nombre_corto')}}">

                                  @error('nombre_corto')
                                    <br> <small>*{{$message}}</small><br>
                                  @enderror

                            </div>

                            <div class="w-full md:w-1/4 px-3 mb-0 md:mb-0">
                                <label class="block uppercase tracking-wide
                                      text-gray-700 text-xs font-bold mb-2 mt-3"
                                        for="grid-first-name">
                                      RUC
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                          focus:ring-1 focus:ring-blue-600"
                                id="ruc" type="text" name="ruc" value="{{old('ruc')}}">

                                @error('ruc')
                                  <br> <small>*{{$message}}</small><br>
                                @enderror

                          </div>
                        </div>
                        

                        <div class="flex flex-wrap -mx-3 mb-0">
                            <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">

                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                              mb-2 mt-3 focus:outline-none focus:ring-1 focus:ring-blue-600" for="grid-first-name">
                                Nombre de Contacto :
                              </label>

                              <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                            focus:ring-1 focus:ring-blue-600"
                                    type="text" name="contacto_nombre" value="{{old('contacto_nombre')}}">

                              @error('contacto_nombre')
                                    <br> <small>*{{$message}}</small><br>
                              @enderror
                              <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">


                            </div>
                        </div>

                    <div class="flex flex-wrap -mx-3 mb-0">                        
                        <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">
                              <label class="block uppercase tracking-wide
                                    text-gray-700 text-xs font-bold mb-2 mt-3"
                                      for="grid-first-name">
                                  Correo de Contacto
                              </label>
                              <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                        focus:ring-1 focus:ring-blue-600"
                              type="text" name="contacto_correo" value="{{old('contacto_correo')}}">

                              @error('contacto_correo')
                                <br> <small>*{{$message}}</small><br>
                              @enderror

                        </div>

                        <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">

                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                          mb-2 mt-3 focus:outline-none " for="grid-first-name">
                            Celular de Contacto
                          </label>

                          <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                        focus:ring-1 focus:ring-blue-600"
                                type="text" name="contacto_celular" value="{{old('contacto_celular')}}">

                          @error('contacto_celular')
                                <br> <small>*{{$message}}</small><br>
                          @enderror
                          <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-0">                        
                        <div class="w-full md:w-full px-3 mb-0 md:mb-0">
                              <label class="block uppercase tracking-wide
                                    text-gray-700 text-xs font-bold mb-2 mt-3"
                                      for="grid-first-name">
                                  Información Extra
                              </label>
                              <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white
                                        focus:ring-1 focus:ring-blue-600"
                              type="text" name="info_extra" value="{{old('info_extra')}}">

                              @error('info_extra')
                                <br> <small>*{{$message}}</small><br>
                              @enderror

                        </div>
                    </div>
                        <div class="mt-4 flex items-center justify-center space-x-20">
                            <button type="submit"
                                    class="w-1/3 px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"
                            >Guardar</button>
                            <a href="{{route('materiales.index')}}" class="flex w-1/3 px-6 py-2 mt-4 text-white  bg-red-600 rounded-lg hover:bg-red-900" href="https://www.google.com">
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
<script src="{{ asset('js/CalcularMontos.js') }}"></script>
<script src="{{ asset('js/ValidarMontos.js') }}"></script>

@include('productos.modal.create')
@endsection
