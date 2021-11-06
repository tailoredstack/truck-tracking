@extends('partials.body')

@section('title', trans('admin.admin-user.actions.index'))

@section('body')
    <truck-listing
    :data="{{ $data->toJson() }}"
    :url="'{{ url('admin/trucks') }}'"
    inline-template>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> {{ trans('admin.truck.actions.index') }}
                    @can('admin.truck.create')
                    <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/trucks/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.truck.actions.create') }}</a>
                    @endcan
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
                                    <th is='sortable' :column="'id'">{{ trans('admin.truck.columns.id') }}</th>
                                    <th is='sortable' :column="'manufacturer'">{{ trans('admin.truck.columns.manufacturer') }}</th>
                                    <th is='sortable' :column="'type'">{{ trans('admin.truck.columns.type') }}</th>
                                    <th is='sortable' :column="'color'">{{ trans('admin.truck.columns.color') }}</th>
                                    <th is='sortable' :column="'no_of_wheels'">{{ trans('admin.truck.columns.no_of_wheels') }}</th>
                                    <th is='sortable' :column="'plate_no'">{{ trans('admin.truck.columns.plate_no') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                    <td>@{{ item.id }}</td>
                                    <td>@{{ item.manufacturer }}</td>
                                    <td>@{{ item.type }}</td>
                                    <td>@{{ item.color }}</td>
                                    <td>@{{ item.no_of_wheels }}</td>
                                    <td>@{{ item.plate_no }}</td>
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
                            @can('admin.truck.create')
                            <a class="btn btn-primary btn-spinner" href="{{ url('admin/trucks/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.truck.actions.create') }}</a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </truck-listing>
@endsection
