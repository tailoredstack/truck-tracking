@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.truck.actions.show',  ['name' => $truck->id]))

@section('body')
    <div class="container-xl">

                <div class="card">

        <truck-form
            :action="'{{ url('admin/trucks') }}'"
            v-cloak
            inline-template
            :data="{{ $truck->toJson() }}"
            >

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>

                <div class="card-header">
                    <i class="fa fa-eye"></i> {{ trans('admin.truck.actions.show') }}
                </div>

                <div class="card-body">
                    @include('admin.truck.components.form-elements', ['mode' => 'show'])
                </div>

                @can('admin.truck.edit')
                <div class="card-footer">
                    <a href="{{$truck->resource_url}}/edit" role="button" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.edit') }}
                    </a >
                </div>
                @endcan

            </form>

        </truck-form>

        </div>

        </div>


@endsection
