<?php

namespace App\Http\Requests\Admin\Paciente;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePaciente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.paciente.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'cpf' => ['required', 'string'],
            'nome' => ['required', 'string'],
            'rg' => ['required', 'string'],
            'cartao_sus' => ['required', 'string'],
            'sexo' => ['required', 'integer'],
            'data_nascimento' => ['required', 'date'],
            'nome_mae' => ['required', 'string'],
            'telefone' => ['required', 'string'],
            'cep' => ['required', 'string'],
            'endereco' => ['required', 'string'],
            'numero' => ['required', 'integer'],
            'complemento' => ['required', 'string'],
            'bairro' => ['required', 'string'],
            'cidade' => ['required', 'string'],
            'uf' => ['required', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
