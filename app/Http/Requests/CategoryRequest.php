<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request): array
    {
        if($request->method() == "POST"){
            return [
                "name" => "bail|required|min:2|max:255|unique:categories"
            ];
        }

        if($request->method() == "PATCH"){
            return [
                "name" => "bail|required|min:2|max:255|unique:categories,name,$request->name"
            ];
        }
    }
}
