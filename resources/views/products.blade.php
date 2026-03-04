<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
        table { width: 60%; border-collapse: collapse; margin: 20px auto; font-family: sans-serif; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        /* Class CSS để in chữ màu đỏ cho sản phẩm Vip */
        .text-red { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Danh sách Sản phẩm</h2>
    
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Giá (VNĐ)</th>
            </tr>
        </thead>
        <tbody>
            {{-- Sử dụng @foreach để lặp qua mảng sản phẩm --}}
            @foreach($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product['name'] }}</td>
                    
                    <td>
                        {{-- Logic kiểm tra giá > 10.000.000 --}}
                        @if($product['price'] > 10000000)
                            <span class="text-red">{{ number_format($product['price']) }} (Vip)</span>
                        @else
                            <span>{{ number_format($product['price']) }}</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>