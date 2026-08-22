<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "<h1>Đây là trang Danh sách sản phẩm</h1>";
    }

    public function show($id)
    {
        return "
        <h1>Chi tiết sản phẩm</h1>
        <p>Bạn đang xem sản phẩm có mã số: <strong>$id</strong></p>
        ";
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('product_name');
        $price = $request->input('product_price');
        $imagePath = '';

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $imagePath = $file->store('products', 'public');
        }
        return redirect()->route('products.create')
            ->with('success', "Đã thêm sản phẩm: $name với giá $price VNĐ")
            ->with('image_path', $imagePath);
    }
}
