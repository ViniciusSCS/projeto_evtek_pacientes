<?php

namespace App\Http\Requests\Admin\Paciente;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePaciente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.paciente.edit', $this->paciente);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'cpf' => ['sometimes', 'string'],
            'nome' => ['sometimes', 'string'],
            'rg' => ['sometimes', 'string'],
            'cartao_sus' => ['sometimes', 'string'],
            'sexo' => ['sometimes', 'integer'],
            'data_nascimento' => ['sometimes', 'date'],
            'nome_mae' => ['sometimes', 'string'],
            'telefone' => ['sometimes', 'string'],
            'cep' => ['sometimes', 'string'],
            'endereco' => ['sometimes', 'string'],
            'numero' => ['sometimes', 'integer'],
            'complemento' => ['sometimes', 'string'],
            'bairro' => ['sometimes', 'string'],
            'cidade' => ['sometimes', 'string'],
            'uf' => ['sometimes', 'string'],
            
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
