<?php
namespace App\Http\Controllers;

use App\Http\Resources\ProductsResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function getAll()
    {
        return response()->json(ProductsResource::collection(Product::all()));
    }


    public function getRand()
    {
        return response()->json(ProductsResource::collection(Product::inRandomOrder()->limit(8)->get()));
    }

    public function getProducts(Request $request)
    {

        $data = json_decode($request->getContent(), true);
        $products = [];

        if (isset($data['productIDs']) && !empty($data['productIDs']) ) {

            foreach ($data['productIDs'] as $product_id) {

                $products[] = new ProductsResource(Product::find($product_id));

            }

        }

        return response()->json($products);

    }



}
