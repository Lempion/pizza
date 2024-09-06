<?php

namespace App\Http\Requests\Admin;

use App\Enums\CategoryEnum;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class ProductStoreComboRequest extends FormRequest
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
            'category' => 'required|string|in:' . CategoryEnum::Combo->value . '|exists:categories,slug',
            'description' => 'required|string|min:50|max:250',
            'inStock' => 'required|integer|gt:0',
            'name' => 'required|string|min:5',
            'picture' => ['required', function ($attribute, $value, $fail) {
                $path = 'public/' . config('paths.temporary') . '/' . basename($value);
                if (!Storage::exists($path)) {
                    $fail('Your image was not found in the folder. Try reuploading it.');
                }
            },],
            'price' => 'required|integer|gt:0',
            'productForCombo' => 'required|array',
            'productForCombo.*.relatedProductId' => 'required|exists:products,id|distinct',
            'productForCombo.*.sizeProductId' => ['required', 'exists:size_products,id',
                function ($attribute, $value, $fail) {
                    $index = explode('.', $attribute)[1]; // Получаем индекс текущего элемента
                    $relatedProductId = request()->input("productForCombo.$index.relatedProductId"); // // Получаем текущий relatedProductId из массива productForCombo

                    $product = Product::find($relatedProductId);

                    if (!$product->sizeProducts()->where('size_product_id', $value)->exists()) {
                        $fail('The size of the product does not belong to the product
                        (product_id = ' . $relatedProductId . ', product_size_id = ' . $value . ').
                        Contact the administrator');
                    }
                },],
        ];
    }
}
