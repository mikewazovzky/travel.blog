<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostModifyRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => [
				'required',
				'max:20',
				Rule::unique('posts', 'title')->ignore(isset($post) ? $post->id : null),
			],
            'excert' => 'required',
			'country' => 'required',
			'featured' => 'sometimes|mimes:jpeg,jpg|max:500'
        ];
    }
}
