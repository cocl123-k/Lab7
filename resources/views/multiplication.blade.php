@extends('layouts.master')

@section('title', 'Bảng Cửu Chương')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            
            {{-- Kiểm tra điều kiện: Nếu KHÔNG phải là số --}}
            @if(!$isValidNumber)
                <div class="alert alert-danger" role="alert">
                    <strong>Lỗi!</strong> Giá trị "<b>{{ $n }}</b>" bạn nhập không phải là một số hợp lệ.
                </div>
            
            {{-- Nếu là số hợp lệ thì in vòng lặp --}}
            @else
                <h3 class="mb-4 text-primary">Bảng Cửu Chương {{ $n }}</h3>
                <ul class="list-group text-start">
                    @for ($i = 1; $i <= 10; $i++)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $n }} x {{ $i }} = {{ $n * $i }}</span>
                        </li>
                    @endfor
                </ul>
            @endif

        </div>
    </div>
@endsection