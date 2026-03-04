<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// lap 7
Route::get('/', [HomeController::class, 'index']);

Route::get('/products', [ProductController::class, 'list']);

Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

// lap 6

Route::get('/about', function () {
    return "Họ và tên: Tiêu Trung Kiên. Mã sinh viên: 23810310129";
});

// 1. Route tính tổng: Nhận 2 tham số {a} và {b}
Route::get('/tong/{a}/{b}', function ($a, $b) {
    $tong = $a + $b;
    return "Tổng của $a và $b là: $tong";
});

// 2. Route thông tin sinh viên: Tham số {age} có dấu '?' là tùy chọn
Route::get('/sinh-vien/{name}/{age?}', function ($name, $age = 20) {
    return "Sinh viên: $name - Tuổi: $age";
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Chào mừng Admin";
    });

    Route::get('/users', function () {
        return "Danh sách người dùng";
    });
});

Route::get('/check-date/{day}/{month}/{year}', function ($day, $month, $year) {
    return "Bạn đã nhập ngày: $day/$month/$year (Định dạng hợp lệ)";
})->where([
    'day'   => '(0?[1-9]|[12][0-9]|3[01])',
    'month' => '(0?[1-9]|1[0-2])',
    'year'  => '[0-9]{4}'
]);