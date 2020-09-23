import AppForm from '../app-components/Form/AppForm';

Vue.component('paciente-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                cpf:  '' ,
                nome:  '' ,
                rg:  '' ,
                cartao_sus:  '' ,
                sexo:  '' ,
                data_nascimento:  '' ,
                nome_mae:  '' ,
                telefone:  '' ,
                cep:  '' ,
                endereco:  '' ,
                numero:  '' ,
                complemento:  '' ,
                bairro:  '' ,
                cidade:  '' ,
                uf:  '' ,
                
            }
        }
    }

});