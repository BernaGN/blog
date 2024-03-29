<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:1', 'max:30'],
            'post' => ['required', 'string', 'min:1', 'max:100'],
            'image' => ['image'],
            'user_id' => ['exists:users,id', 'integer'],
            'category_id' => ['exists:categories,id', 'integer'],
        ];
    }
}
