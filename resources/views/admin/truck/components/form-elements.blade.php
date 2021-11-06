@if($mode === 'create')

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('color'), 'has-success': fields.color && fields.color.valid }">
    <label for="color" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.color') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.color" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('color'), 'form-control-success': fields.color && fields.color.valid}" id="color" name="color" placeholder="{{ trans('admin.truck.columns.color') }}">
        <div v-if="errors.has('color')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('color') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('manufacturer'), 'has-success': fields.manufacturer && fields.manufacturer.valid }">
    <label for="manufacturer" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.manufacturer') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.manufacturer" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('manufacturer'), 'form-control-success': fields.manufacturer && fields.manufacturer.valid}" id="manufacturer" name="manufacturer" placeholder="{{ trans('admin.truck.columns.manufacturer') }}">
        <div v-if="errors.has('manufacturer')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('manufacturer') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('no_of_wheels'), 'has-success': fields.no_of_wheels && fields.no_of_wheels.valid }">
    <label for="no_of_wheels" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.no_of_wheels') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.no_of_wheels" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('no_of_wheels'), 'form-control-success': fields.no_of_wheels && fields.no_of_wheels.valid}" id="no_of_wheels" name="no_of_wheels" placeholder="{{ trans('admin.truck.columns.no_of_wheels') }}">
        <div v-if="errors.has('no_of_wheels')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('no_of_wheels') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('plate_no'), 'has-success': fields.plate_no && fields.plate_no.valid }">
    <label for="plate_no" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.plate_no') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.plate_no" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('plate_no'), 'form-control-success': fields.plate_no && fields.plate_no.valid}" id="plate_no" name="plate_no" placeholder="{{ trans('admin.truck.columns.plate_no') }}">
        <div v-if="errors.has('plate_no')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('plate_no') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">
    <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.type" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('type'), 'form-control-success': fields.type && fields.type.valid}" id="type" name="type" placeholder="{{ trans('admin.truck.columns.type') }}">
        <div v-if="errors.has('type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('type') }}</div>
    </div>
</div>


@endif

@if($mode === 'edit')

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('color'), 'has-success': fields.color && fields.color.valid }">
    <label for="color" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.color') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.color" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('color'), 'form-control-success': fields.color && fields.color.valid}" id="color" name="color" placeholder="{{ trans('admin.truck.columns.color') }}">
        <div v-if="errors.has('color')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('color') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('manufacturer'), 'has-success': fields.manufacturer && fields.manufacturer.valid }">
    <label for="manufacturer" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.manufacturer') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.manufacturer" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('manufacturer'), 'form-control-success': fields.manufacturer && fields.manufacturer.valid}" id="manufacturer" name="manufacturer" placeholder="{{ trans('admin.truck.columns.manufacturer') }}">
        <div v-if="errors.has('manufacturer')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('manufacturer') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('no_of_wheels'), 'has-success': fields.no_of_wheels && fields.no_of_wheels.valid }">
    <label for="no_of_wheels" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.no_of_wheels') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.no_of_wheels" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('no_of_wheels'), 'form-control-success': fields.no_of_wheels && fields.no_of_wheels.valid}" id="no_of_wheels" name="no_of_wheels" placeholder="{{ trans('admin.truck.columns.no_of_wheels') }}">
        <div v-if="errors.has('no_of_wheels')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('no_of_wheels') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('plate_no'), 'has-success': fields.plate_no && fields.plate_no.valid }">
    <label for="plate_no" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.plate_no') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.plate_no" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('plate_no'), 'form-control-success': fields.plate_no && fields.plate_no.valid}" id="plate_no" name="plate_no" placeholder="{{ trans('admin.truck.columns.plate_no') }}">
        <div v-if="errors.has('plate_no')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('plate_no') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">
    <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.type" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('type'), 'form-control-success': fields.type && fields.type.valid}" id="type" name="type" placeholder="{{ trans('admin.truck.columns.type') }}">
        <div v-if="errors.has('type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('type') }}</div>
    </div>
</div>



@endif

@if($mode === 'show')

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('color'), 'has-success': fields.color && fields.color.valid }">
    <label for="color" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.color') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <span v-text="form.color" />
        </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('manufacturer'), 'has-success': fields.manufacturer && fields.manufacturer.valid }">
    <label for="manufacturer" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.manufacturer') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <span v-text="form.manufacturer" />
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('no_of_wheels'), 'has-success': fields.no_of_wheels && fields.no_of_wheels.valid }">
    <label for="no_of_wheels" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.no_of_wheels') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <span v-text="form.no_of_wheels" />
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('plate_no'), 'has-success': fields.plate_no && fields.plate_no.valid }">
    <label for="plate_no" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.plate_no') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <span v-text="form.plate_no" />
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">
    <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.truck.columns.type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <span v-text="form.type" />
    </div>
</div>
@endif
