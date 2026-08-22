<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('products.index');
    Route::get('/products/{id}', 'show')->name('products.show');
});

Route::get('/shop', function () {
    // Giả lập dữ liệu truy vấn từ Database
    $danhSachSanpham = [
        [
            'id' => 1,
            'name' => 'Laptop Dell XPS 15',
            'price' => 35000000,
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGYzyk10xfccE3aVQfb7Ax9tT8RBy7mu_TWWPcEMvhAw&s=10'
        ],
        [
            'id' => 2,
            'name' => 'iPhone 15 Pro Max',
            'price' => 29000000,
            'image' => 'https://image.dienthoaivui.com.vn/x,webp,q90/https://media-asset.dienthoaivui.com.vn/uploads/dashboard/editor_upload/hinh-anh-iphone-16-1.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Bàn phím cơ Keychron',
            'price' => 2500000,
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgm-Dlcyx9FT0wGvjWhdXVxI5DtPHfky5CCqEgrjsFLWBCo_RM_Ekfoj8&s=10'
        ],
    ];
    // Trả về view 'shop_home' kèm dữ liệu
    return view('shop_home', compact('danhSachSanpham'));
});
