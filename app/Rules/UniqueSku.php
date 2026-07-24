<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Product;

class UniqueSku implements Rule
{
    protected $productName;
    protected $productId;

    public function __construct($productId = null)
    {
        $this->productId = $productId;
    }

    public function passes($attribute, $value)
    {
        if (is_null($value)) {
            return true; // Allow null SKUs
        }

        $existingProduct = Product::where('sku', $value)
            ->when($this->productId, function ($query) {
                return $query->where('id', '!=', $this->productId);
            })
            ->first();

        if ($existingProduct) {
            $this->productName = $existingProduct->name;
            return false;
        }

        return true;
    }

    public function message()
    {
        return "The sku has already been taken by product '{$this->productName}'.";
    }
}
