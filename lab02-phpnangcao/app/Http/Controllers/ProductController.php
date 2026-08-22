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
}
