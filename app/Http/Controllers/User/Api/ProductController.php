<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Product::orderBy('id', 'desc')->where('status', 1)->get();
            if (count($products) > 0) {
                return response()->json([
                    'success' => true,
                    'products' => $products
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'products not found'
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ]);
        }
    }

    public function searchProduct($value)
    {
        try {
            $searchData = '%' . $value . '%';
            $products = Product::orderBy('id', 'desc')->where(['status' => 1])->orWhere('product_title', 'LIKE', $searchData)->get();
            if (count($products) > 0) {
                return response()->json([
                    'success' => true,
                    'products' => $products
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'products not found'
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ]);
        }
    }


    public function productDetail($id)
    {
        try {
            $products = Product::with(['category:id,category_name','owners:id,name,email'])->findOrFail($id);
                return response()->json([
                    'success' => true,
                    'products' => $products
                ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ]);
        }
    }
}
