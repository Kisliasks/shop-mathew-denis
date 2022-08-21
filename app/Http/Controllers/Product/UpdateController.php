<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product, ProductTag $product_tag, ColorProduct $color_product) {
        $data = $request->validated();
       
        // dd($data);

        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        $tagsIds = $data['tags'];
        $colorsIds = $data['colors'];
        unset($data['tags'],  $data['colors']);
    
        $product->update($data);

        $product->product_tags()->sync($tagsIds);
       
        $product->product_colors()->sync($colorsIds);
        return view('product.show', compact('product'));
    }
}
