<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialStoreRequest extends FormRequest
{
    /**
     * Determine if  the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:value',            
            'unidad'=>'required',
            'nombre_unidad'=>'required',
            'descripcion'=>'required',
            'foto'=>'required',    
            'precio_compra'=>'required|gt:0',
            'precio_venta'=>'required|gt:0',
            'lugar_compra'=>'required',
        ];
    }

    public function attributes(){
        // Personalizacion de mensajes para enviar al front solo con los campos
        return [
            'name'=>'Nombre del Material',
            'unidad'=>'Abreviatura de la Unidad',
            'nombre_unidad'=>'Unidad de Medida',
            'descripcion'=>'Descripción',
            'foto'=>'Foto',    
            'precio_compra'=>'Precio de Compra',
            'precio_venta'=>'Precio de Venta',
            'lugar_compra'=>'Lugar de Compra'];
    }

}
