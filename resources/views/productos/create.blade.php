@extends('layouts.plantilla')
@section('tittle','Productos')
@section('content')

    <div class="flex items-center justify-center min-h-screen bg-gray-100 ">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-8/12 lg:w-8/12 sm:w-8/12 ">
            <h1 class="text-2xl font-sans font-semibold text-green-500 text-center">Registrar Producto </h1>
                <form action="{{route('productos.store')}}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <div>
                            <label class="block" for="name">
                                Nombre
                                <input type="text" name="name"            
                                class="w-full px-4 py-2 mt-2 border-gray-400 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{old('name')}}">
                            </label>                            
                            @error('name')
                                <br> <small>*{{$message}}</small><br>
                            @enderror        
                        </div>

                        <div class="mt-4">
                            <label for="descripcion">
                                Descripción
                                <input type="text" name="descripcion"
                                class="w-full px-4 py-2 mt-2 border-gray-400 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{old('descripcion')}}" >
                            </label>
                            @error('descripcion')
                                <br> <small>*{{$message}}</small><br>
                            @enderror

                        </div>

                        <div class="mt-4">
                            <label for="tipo">
                                Tipo
                                <input type="text" name="tipo"
                                class="w-full px-4 py-2 mt-2 border-gray-400 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{old('tipo')}}" >
                            </label>
                            @error('tipo')
                                <br> <small>*{{$message}}</small><br>
                            @enderror

                        </div>
                        

                        <div class="mt-4">
                            <label for="precio_venta_sin_igv">
                                Precio de Venta (Sin IGV)
                                <input type="text" id="precio_venta_sin_igv" name="precio_venta_sin_igv"
                                class="w-full px-4 py-2 mt-2 border-gray-400 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{old('precio_venta_sin_igv')}}">
                            </label>
                            @error('precio_venta_sin_igv')
                                <br> <small>*{{$message}}</small><br>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="precio_venta_con_igv">
                                Precio de Venta (Con IGV)
                                <input type="text" name="precio_venta_con_igv" id="precio_venta_con_igv"
                                class="w-full px-4 py-2 mt-2 border border-gray-400 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{old('precio_venta_con_igv')}}" disabled> 
                            </label>
                            @error('precio_venta_con_igv')
                                <br> <small>*{{$message}}</small><br>
                            @enderror
                        </div>                        

                        <div class="mt-4 flex items-center justify-center space-x-20">
                            <button type="submit"
                                    class="w-1/3 px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"
                            >Guardar</button>   
                            <a href="{{route('productos.index')}}" class="flex w-1/3 px-6 py-2 mt-4 text-white  bg-red-600 rounded-lg hover:bg-red-900" href="https://www.google.com">
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

@endsection