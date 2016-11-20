<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Productos extends FormRequest
{
  // protected $errorBag = 'create';
    /**
     * Determine if the user is authorized to make this request.
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
          'title' => 'required',
          'photo_1' => 'file',
          // 'photo_2' => '',
          // 'photo_3' => '',
          // 'photo_4' => '',
          // 'photo_5' => '',
          'description' => 'required',
        ];
    }
    public function messages() {
        return [
            'title.required'     => 'El producto debe tener un titulo',
            'photo_1.required'    => 'Debes ingresar al menos una imagen',
            'description.required'=> 'Debes ingresar una descripcion',
        ];
    }
}
