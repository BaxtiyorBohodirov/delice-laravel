<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends BaseModel
{
    use HasFactory;

    public function productImages()
    {
        return ProductImages::orderBy('order')->where(['status'=>1,'forPage'=>1,'product_id'=>$this->id])->get();
    }
    public function productDetails()
    {
        return ProductDetails::orderBy('order')->where(['status'=>1,'product_id'=>$this->id])->get();
    }
}
