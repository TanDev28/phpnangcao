@extends('layouts.master')
@section('title', 'Danh sách Sản phẩm - Laravel Shop')
@section('content')
<h1 style="border-bottom: 2px solid #343a40; padding-bottom: 10px;">
    Sản phẩm nổi bật
</h1>
<div style="display: flex; justify-content: space-between; flex-wrap: wrap; margin-top: 20px;">
    @foreach ($danhSachSanpham as $sp)
    <x-product-card
        :tenSp="$sp['name']"
        :giaTien="$sp['price']"
        :hinhAnh="$sp['image']">
        <button style="background-color: #2ecc71; color: white; border: none; padding: 8px 15px; cursor: pointer; border-radius: 4px;">
            Thêm vào giỏ
        </button>

        <a href="#" style="color: #3498db; margin-left: 10px; text-decoration: none;">Xem chi tiết</a>

    </x-product-card>
    @endforeach

</div>
@endsection