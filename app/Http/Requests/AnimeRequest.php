<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimeRequest extends FormRequest
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
            'nome'=>'required',
            'ep_qtd'=>'required|numeric'
        ];
    }
    
    public function messages()
    {
        return [
            'nome.required' => 'Coloque o título!',
            'ep_qtd.numeric'  => 'Coloque números para a quantidade de Episódios!',
        ];
    }
}
