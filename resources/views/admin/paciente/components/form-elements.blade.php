<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cpf'), 'has-success': fields.cpf && fields.cpf.valid }">
    <label for="cpf" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.cpf') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cpf" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cpf'), 'form-control-success': fields.cpf && fields.cpf.valid}" id="cpf" name="cpf" placeholder="{{ trans('admin.paciente.columns.cpf') }}">
        <div v-if="errors.has('cpf')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cpf') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nome'), 'has-success': fields.nome && fields.nome.valid }">
    <label for="nome" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.nome') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nome" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nome'), 'form-control-success': fields.nome && fields.nome.valid}" id="nome" name="nome" placeholder="{{ trans('admin.paciente.columns.nome') }}">
        <div v-if="errors.has('nome')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nome') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('rg'), 'has-success': fields.rg && fields.rg.valid }">
    <label for="rg" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.rg') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.rg" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('rg'), 'form-control-success': fields.rg && fields.rg.valid}" id="rg" name="rg" placeholder="{{ trans('admin.paciente.columns.rg') }}">
        <div v-if="errors.has('rg')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('rg') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cartao_sus'), 'has-success': fields.cartao_sus && fields.cartao_sus.valid }">
    <label for="cartao_sus" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.cartao_sus') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cartao_sus" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cartao_sus'), 'form-control-success': fields.cartao_sus && fields.cartao_sus.valid}" id="cartao_sus" name="cartao_sus" placeholder="{{ trans('admin.paciente.columns.cartao_sus') }}">
        <div v-if="errors.has('cartao_sus')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cartao_sus') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('sexo'), 'has-success': fields.sexo && fields.sexo.valid }">
    <label for="sexo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.sexo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.sexo" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('sexo'), 'form-control-success': fields.sexo && fields.sexo.valid}" id="sexo" name="sexo" placeholder="{{ trans('admin.paciente.columns.sexo') }}">
        <div v-if="errors.has('sexo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('sexo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('data_nascimento'), 'has-success': fields.data_nascimento && fields.data_nascimento.valid }">
    <label for="data_nascimento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.data_nascimento') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.data_nascimento" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('data_nascimento'), 'form-control-success': fields.data_nascimento && fields.data_nascimento.valid}" id="data_nascimento" name="data_nascimento" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('data_nascimento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('data_nascimento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nome_mae'), 'has-success': fields.nome_mae && fields.nome_mae.valid }">
    <label for="nome_mae" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.nome_mae') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nome_mae" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nome_mae'), 'form-control-success': fields.nome_mae && fields.nome_mae.valid}" id="nome_mae" name="nome_mae" placeholder="{{ trans('admin.paciente.columns.nome_mae') }}">
        <div v-if="errors.has('nome_mae')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nome_mae') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telefone'), 'has-success': fields.telefone && fields.telefone.valid }">
    <label for="telefone" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.telefone') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telefone" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telefone'), 'form-control-success': fields.telefone && fields.telefone.valid}" id="telefone" name="telefone" placeholder="{{ trans('admin.paciente.columns.telefone') }}">
        <div v-if="errors.has('telefone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telefone') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cep'), 'has-success': fields.cep && fields.cep.valid }">
    <label for="cep" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.cep') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cep" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cep'), 'form-control-success': fields.cep && fields.cep.valid}" id="cep" name="cep" placeholder="{{ trans('admin.paciente.columns.cep') }}">
        <div v-if="errors.has('cep')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cep') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('endereco'), 'has-success': fields.endereco && fields.endereco.valid }">
    <label for="endereco" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.endereco') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.endereco" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('endereco'), 'form-control-success': fields.endereco && fields.endereco.valid}" id="endereco" name="endereco" placeholder="{{ trans('admin.paciente.columns.endereco') }}">
        <div v-if="errors.has('endereco')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('endereco') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('numero'), 'has-success': fields.numero && fields.numero.valid }">
    <label for="numero" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.numero') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.numero" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('numero'), 'form-control-success': fields.numero && fields.numero.valid}" id="numero" name="numero" placeholder="{{ trans('admin.paciente.columns.numero') }}">
        <div v-if="errors.has('numero')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('numero') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('complemento'), 'has-success': fields.complemento && fields.complemento.valid }">
    <label for="complemento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.complemento') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.complemento" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('complemento'), 'form-control-success': fields.complemento && fields.complemento.valid}" id="complemento" name="complemento" placeholder="{{ trans('admin.paciente.columns.complemento') }}">
        <div v-if="errors.has('complemento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('complemento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('bairro'), 'has-success': fields.bairro && fields.bairro.valid }">
    <label for="bairro" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.bairro') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.bairro" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('bairro'), 'form-control-success': fields.bairro && fields.bairro.valid}" id="bairro" name="bairro" placeholder="{{ trans('admin.paciente.columns.bairro') }}">
        <div v-if="errors.has('bairro')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('bairro') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cidade'), 'has-success': fields.cidade && fields.cidade.valid }">
    <label for="cidade" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.cidade') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cidade" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cidade'), 'form-control-success': fields.cidade && fields.cidade.valid}" id="cidade" name="cidade" placeholder="{{ trans('admin.paciente.columns.cidade') }}">
        <div v-if="errors.has('cidade')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cidade') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('uf'), 'has-success': fields.uf && fields.uf.valid }">
    <label for="uf" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.paciente.columns.uf') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.uf" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('uf'), 'form-control-success': fields.uf && fields.uf.valid}" id="uf" name="uf" placeholder="{{ trans('admin.paciente.columns.uf') }}">
        <div v-if="errors.has('uf')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('uf') }}</div>
    </div>
</div>


