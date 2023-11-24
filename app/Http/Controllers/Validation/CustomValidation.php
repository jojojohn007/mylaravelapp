<?php
 namespace App\Http\Controllers\Validation;

use Illuminate\Foundation\Http\FormRequest;

 class CustomValidation extends FormRequest{
    public function rules(){

        return [
'name'=>'required|min:3'
        ];

    }
 }
