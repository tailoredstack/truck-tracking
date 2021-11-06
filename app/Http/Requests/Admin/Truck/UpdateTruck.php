<?php

namespace App\Http\Requests\Admin\Truck;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateTruck extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.truck.edit', $this->truck);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'color' => ['sometimes', 'string'],
            'manufacturer' => ['sometimes', 'string'],
            'no_of_wheels' => ['sometimes', 'integer'],
            'plate_no' => ['sometimes', 'string'],
            'type' => ['sometimes', 'string'],
            
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
