<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
{
  protected $errorBag = 'registro';
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
          'name' => 'required|max:255',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6|confirmed',
          'date' => 'required|date',
      ];
  }

  public function messages() {
      return [
          'name.required'      => 'Debes ingresar un nombre',
          'name.max'           => 'El nombre no puede superar los 255 caracteres',
          'email.required'     => 'Debes ingresar un mail',
          'email.email'        => 'El mail no es valido',
          'email.unique'       => 'Ya existe una cuenta con este mail',
          'password.required'  => 'Debes ingresar una contraseña',
          'password.min'       => 'La contraseña debe tener un minimo de 6 catacteres',
          'date.required'      => 'Por favor ingrese una fecha',
      ];
  }
}
