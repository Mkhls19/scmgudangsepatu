<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Ambil semua produk dari database

        return view('dataproduk.produk', ['products' => $products]);
    }
}
