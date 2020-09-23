@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.paciente.actions.index'))

@section('body')

    <paciente-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/pacientes') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.paciente.actions.index') }}
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/pacientes/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.paciente.actions.create') }}</a>
                    </div>
                    <div class="card-body" v-cloak>
                        <div class="card-block">
                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto form-group ">
                                        <select class="form-control" v-model="pagination.state.per_page">
                                            
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>
                                        <th class="bulk-checkbox">
                                            <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                            <label class="form-check-label" for="enabled">
                                                #
                                            </label>
                                        </th>

                                        <th is='sortable' :column="'id'">{{ trans('admin.paciente.columns.id') }}</th>
                                        <th is='sortable' :column="'cpf'">{{ trans('admin.paciente.columns.cpf') }}</th>
                                        <th is='sortable' :column="'nome'">{{ trans('admin.paciente.columns.nome') }}</th>
                                        <th is='sortable' :column="'rg'">{{ trans('admin.paciente.columns.rg') }}</th>
                                        <th is='sortable' :column="'cartao_sus'">{{ trans('admin.paciente.columns.cartao_sus') }}</th>
                                        <th is='sortable' :column="'sexo'">{{ trans('admin.paciente.columns.sexo') }}</th>
                                        <th is='sortable' :column="'data_nascimento'">{{ trans('admin.paciente.columns.data_nascimento') }}</th>
                                        <th is='sortable' :column="'nome_mae'">{{ trans('admin.paciente.columns.nome_mae') }}</th>
                                        <th is='sortable' :column="'telefone'">{{ trans('admin.paciente.columns.telefone') }}</th>
                                        <th is='sortable' :column="'cep'">{{ trans('admin.paciente.columns.cep') }}</th>
                                        <th is='sortable' :column="'endereco'">{{ trans('admin.paciente.columns.endereco') }}</th>
                                        <th is='sortable' :column="'numero'">{{ trans('admin.paciente.columns.numero') }}</th>
                                        <th is='sortable' :column="'complemento'">{{ trans('admin.paciente.columns.complemento') }}</th>
                                        <th is='sortable' :column="'bairro'">{{ trans('admin.paciente.columns.bairro') }}</th>
                                        <th is='sortable' :column="'cidade'">{{ trans('admin.paciente.columns.cidade') }}</th>
                                        <th is='sortable' :column="'uf'">{{ trans('admin.paciente.columns.uf') }}</th>

                                        <th></th>
                                    </tr>
                                    <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                        <td class="bg-bulk-info d-table-cell text-center" colspan="18">
                                            <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/pacientes')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                        href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                            <span class="pull-right pr-2">
                                                <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/pacientes/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                            </span>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                        <td class="bulk-checkbox">
                                            <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                            <label class="form-check-label" :for="'enabled' + item.id">
                                            </label>
                                        </td>

                                    <td>@{{ item.id }}</td>
                                        <td>@{{ item.cpf }}</td>
                                        <td>@{{ item.nome }}</td>
                                        <td>@{{ item.rg }}</td>
                                        <td>@{{ item.cartao_sus }}</td>
                                        <td>@{{ item.sexo }}</td>
                                        <td>@{{ item.data_nascimento | date }}</td>
                                        <td>@{{ item.nome_mae }}</td>
                                        <td>@{{ item.telefone }}</td>
                                        <td>@{{ item.cep }}</td>
                                        <td>@{{ item.endereco }}</td>
                                        <td>@{{ item.numero }}</td>
                                        <td>@{{ item.complemento }}</td>
                                        <td>@{{ item.bairro }}</td>
                                        <td>@{{ item.cidade }}</td>
                                        <td>@{{ item.uf }}</td>
                                        
                                        <td>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-spinner btn-info" :href="item.resource_url + '/edit'" title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <form class="col" @submit.prevent="deleteItem(item.resource_url)">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" v-if="pagination.state.total > 0">
                                <div class="col-sm">
                                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                                </div>
                                <div class="col-sm-auto">
                                    <pagination></pagination>
                                </div>
                            </div>

                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier"></i>
                                <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                                <a class="btn btn-primary btn-spinner" href="{{ url('admin/pacientes/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.paciente.actions.create') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </paciente-listing>

@endsection