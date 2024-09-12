<?php

namespace App\Http\Requests\Admin;

use App\Enums\CategoryEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category' => 'required|string|not_in:' . CategoryEnum::Combo->value . '|exists:categories,slug',
            'description' => 'required|string|min:50|max:250',
            'inStock' => 'required|integer|gt:0',
            'name' => 'required|string|min:5',
            'picture' => ['required', function ($attribute, $value, $fail) {
                $path = 'public/' . config('paths.temporary') . '/' . basename($value);
                if (!Storage::exists($path)) {
                    $fail('Your image was not found in the folder. Try reuploading it.');
                }
            },],
            'productSizes' => 'required|array',
            'productSizes.*.size' => 'required|exists:size_products,id|distinct',
            'productSizes.*.price' => 'required|integer|gt:0',
            'productSizes.*.gram' => 'required|integer|gt:0',
            'productSizes.*.default_product' => 'required|boolean',
            'additionalProductActive' => 'required|boolean',
            'additionalProductsIds' => 'required_if:additionalProductActive,true|array',
            'additionalProductsIds*' => 'distinct|exists:additional_products,id',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $hasActive = collect($this->input('productSizes'))->contains('default_product', true);

            if (!$hasActive) $validator->errors()->add('default', 'No default size selected for product.');
        });
    }
}
