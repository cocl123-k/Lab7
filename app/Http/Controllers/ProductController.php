<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        // Tạo dữ liệu giả: Mảng chứa các sản phẩm có tên và giá
        $products = [
            ['name' => 'Chuột không dây Logitech', 'price' => 450000],
            ['name' => 'Bàn phím cơ Keychron', 'price' => 2500000],
            ['name' => 'Laptop Dell XPS 15', 'price' => 35000000],
            ['name' => 'Màn hình LG 24 inch', 'price' => 3500000],
            ['name' => 'MacBook Pro M3', 'price' => 55000000],
        ];

        // Trả về view 'products' kèm theo biến $products
        return view('products', compact('products'));
    }
}