<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //  return true to force authentication
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
             "title" => "required|max:255|unique:posts,title," .$this->id,
            "body" => "required",
            "excerpt" => "required",
            "image" => ["mimes:png,jpg, jpeg", "max:5048"],
            "min_to_read" => "min:0|max:60"
        ];

        // checking if a request is a post method or not
        if (in_array($this->method(), ["POST"])) {
            $rules["image"] = ["required", "mimes:png,jpg, jpeg", "max:5048"];
        }

        return $rules;
    }
}