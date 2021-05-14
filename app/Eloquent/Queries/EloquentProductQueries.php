<?php


namespace App\Eloquent\Queries;


use App\Eloquent\Models\Product;
use App\Repositories\IProductDBRepository;

class EloquentProductQueries implements IProductDBRepository
{
    public function getProducts(string $filter = ''): array
    {
        if (isset($filter) == 'new'){
            $products = Product::whereNew(1)->get();
        }
        if (isset($filter) == 'features'){
            $products = Product::with('features')->get();
        }
        if (isset($filter) == 'discount'){
            $products = Product::whereDiscounted(1)->get();
        }
        return $products ? $products->toArray() : [];
    }

}