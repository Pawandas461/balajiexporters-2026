<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\UniqueSku;
class ProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'slug' => [
                'nullable',
                'string',
                'max:255',
                Rule::unique('products')->ignore($this->product),
            ],
            'short_desc' => 'nullable|string',
            'full_desc' => 'nullable|string',
            'hsn' => 'nullable|digits_between:4,8',
            'gst' => 'nullable|numeric|max:100',
            'stock' => 'required|numeric|min:0|max:100',
            'meta_title' => 'nullable|string',
            'meta_desc' => 'nullable|string',
            'meta_keys' => 'nullable|string',
            'featured' => 'required|boolean',
            'orderable' => 'required|boolean',
            'active' => 'required|boolean',
            'tag' => 'nullable|string',
            'base_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'publish_at' => 'required|date',
            'priority' => 'nullable|numeric|min:1|max:100',
            'regular_price' => 'required|numeric',
            'offer_price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'sale_start_at' => 'nullable|date',
            'sale_end_at' => 'nullable|date',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'attributes' => 'nullable|array',
            'sku' => [
                'nullable',
                'string',
                'max:255',
                new UniqueSku($this->product),
            ],
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'discount' => $this->discount ?? 0,
        ]);
    }
}
