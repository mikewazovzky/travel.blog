<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Post;

class PostUpdateRequest extends FormRequest
{
	/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
		$post = $this->route('post');
		$user = auth()->user();
		
		return $user->isAdmin() or $user->ownes($post);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $post = $this->route('post');
				
		return [
            'title' => [
				'required',
				'max:20',
				Rule::unique('posts', 'title')->ignore($post->id),
			],
            'excert' => 'required',
			'country' => 'required',
			'featured' => 'sometimes|mimes:jpeg,jpg|max:500'
        ];
    }
}
