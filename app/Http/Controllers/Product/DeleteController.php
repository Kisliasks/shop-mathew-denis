<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;

class DeleteController extends Controller
{
    public function __invoke(Product $product, ProductTag $product_tag, ColorProduct $color_product) {
        
       
        $product->delete();
        return redirect()->route('product.index');
    }
}
