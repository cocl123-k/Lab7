<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Nguyen Van A';
        $age = 20;
        $school = 'Đại học CNTT';

        return view('welcome', compact('name', 'age', 'school'));
    }

    public function multiplication($n)
    {
        // Kiểm tra xem $n có phải là số hợp lệ không
        $isValidNumber = is_numeric($n);

        // Truyền giá trị $n và trạng thái hợp lệ sang View
        return view('multiplication', compact('n', 'isValidNumber'));
    }
}