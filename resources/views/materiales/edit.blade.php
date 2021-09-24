@extends('layouts.plantilla')
@section('tittle','Materiales')
@section('content')

    
    <div class="flex items-center justify-center min-h-screen bg-gray-100 ">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-8/12 lg:w-8/12 sm:w-8/12 ">
            <h1 class="text-2xl font-sans font-semibold text-green-500 text-center">Material</h1>
                <form action="{{route('materiales.update',$material)}}" method="POST">                
                @csrf
                @method('PUT')    
                    <div class="mt-4">
                        <div>
                            <label class="block" for="name">
                                Nombre
                                <input type="text" name="name"            
                                class="w-full px-4 py-2 mt-2 border-gray-400 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" 
                                value="{{$material->nombre}}">  
                            </label>        
                        </div>

                        <div class="mt-4">
                            <label for="unidad">
                                Unidad Abreviatura
                                <input type="text" name="unidad"
                                class="w-full px-4 py-2 mt-2 border-gray-400 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{$material->unidad}}">
                            </label>
                        </div>

                        <div class="mt-4">
                            <label for="nombre_unidad">
                                Unidad de Medida 
                                <input type="text" name="nombre_unidad"
                                class="w-full px-4 py-2 mt-2 border-gray-400 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{$material->nombre_unidad}}">
                            </label>
                        </div>

                        <div class="mt-4">
                            <label for="descripcion">
                                Descripción
                                <input type="text" name="descripcion"
                                class="w-full px-4 py-2 mt-2 border-gray-400 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{$material->descripcion}}">
                            </label>
                        </div>

                        <div class="mt-4">
                            <label for="foto">
                                Foto  
                                <input type="text" name="foto"
                                class="w-full px-4 py-2 mt-2 border-gray-400 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{$material->foto}}">
                            </label>
                        </div>

                        <div class="mt-4">
                            <label for="precio_compra">
                                Precio de Compra
                                <input type="text" name="precio_compra"
                                class="w-full px-4 py-2 mt-2 border-gray-400 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{$material->precio_compra}}">
                            </label>
                        </div>

                        <div class="mt-4">
                            <label for="precio_venta">
                                Precio de Venta
                                <input type="text" name="precio_venta"
                                class="w-full px-4 py-2 mt-2 border border-gray-400 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{$material->precio_venta}}">
                            </label>
                        </div>

                        <div class="mt-4">
                            <label for="lugar_compra">
                                Lugar de Compra
                                <input type="text" name="lugar_compra"
                                class="w-full px-4 py-2 mt-2 border border-gray-400 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                value="{{$material->lugar_compra}}" >
                            </label>
                        </div>

                        <div class="mt-4 flex items-center justify-center space-x-20">
                            <button type="submit"
                            class="w-1/3 px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"
                            >Guardar</button>                            
                            
                                <button type="button"
                                    onclick="window.history.back();"
                                    class="w-1/3 px-6 py-2 mt-4 text-white bg-red-600 rounded-lg hover:bg-red-900">
                                    Cancelar
                                </button>
                            
                        </div>
                    </div>
              </form>  
        </div>
    </div>

@endsection