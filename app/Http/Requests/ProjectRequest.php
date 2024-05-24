<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:100',
            'link' => 'required|min:10',
            'original_image_name' => 'max:80'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Inserire un titolo',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il titolo non deve contenere più di :max caratteri',

            'link.required' => 'Inserire un link',
            'link.min' => 'Il link deve contenere almeno :min caratteri',

            'original_image_name.max' => 'Il nome dell\'immagine non deve contenere più di :max caratteri'
        ];
    }
}
