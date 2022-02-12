<?php

namespace App\Http\Repositories;

use App\Models\Product;

class ProductRepository
{
    /**
     * @param $request
     */
    public function insert_product($request)
    {
        return Product::insert($this->get_product_request_data($request));
    }

    /**
     * @param $request
     */
    public function update_product($request)
    {
        return Product::where('id', $request->id)->update($request);
    }
    /**
     * @param $request
     * @return mixed
     */
    public function get_product_request_data($request)
    {
        return $request->only([
            'user_id',
            'title',
            'sort_description',
            'long_description',
            'image',
            'slug',
            'quantity',
            'accepting_order_type',
            'discount'
        ]);
    }
}
