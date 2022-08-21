<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = false;
    use SoftDeletes;

    public function product_tags(){
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id');
    }

    public function product_colors(){
        return $this->belongsToMany(Color::class, 'color_products', 'product_id', 'color_id');
    }

}
