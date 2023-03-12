<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'unique:posts', 'max:150'],
            'content' => ['nullable'],
            'author' => ['nullable'],
            'type_id' => ['nullable', 'exists:types,id'],
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
        'title.required' => 'Il titolo è richiesto',
        'title.unique' => 'é presente un post con questo titolo',
        'title.max' =>  'Il post non può essere lungo più di :max caratteri'
    ];
}
}
