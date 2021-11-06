@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.truck.actions.edit', ['name' => $truck->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <truck-form
                :action="'{{ $truck->resource_url }}'"
                :data="{{ $truck->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.truck.actions.edit', ['name' => $truck->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.truck.components.form-elements', ['mode' => 'edit'])
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </truck-form>

        </div>
    
</div>

@endsection