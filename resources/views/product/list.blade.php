@extends('layout.index')
@section('title')
    <title>Danh sach sp</title>
@endsection
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h2>Danh Sách sản phẩm</h2></div>
            <a class="btn btn-primary" href="{{ route('product.add') }}">Thêm mới</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên sản phẩm</th>
                    <th>giá</th>
                    <th>ảnh</th>
                    <th>loại</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($products as $key => $product)

                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td><img width="60px" src="{{asset('storage/'.$product->image)}}"></td>
                        <td>{{ $product->origin }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection
