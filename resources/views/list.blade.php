@extends('master')
@section('title','Agency')
@section('content')
    <div class="col-12">
        <div class="row">
            <h1><a href="{{route('home')}}">Danh Sách Đại Lý</a></h1>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <div>
            <a class="btn btn-primary mb-2" href="{{route('agency.create')}}">Thêm mới đại lý</a>
                <form action="{{route('agency.search')}}" method="post">
                    @csrf
                    <input class="mb-2" style="border-radius: 10px" type="search" name="tim" placeholder="Tìm kiếm đại lý">
                    <button type="submit" style="border-radius: 10px" >Search</button>
                </form>
            </div>
            <table class="table table-striped" style="border-radius: 10px!important;">
                <thead>
                <tr class="item-group" style="background-color: aqua">
                    <th scope="col">Mã số đại lý</th>
                    <th scope="col">Tên đại lý</th>
                    <th scope="col">Điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Tên người quản lý</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col" colspan="2">Chức năng</th>
                </tr>
                </thead>
                <tbody>

                @forelse($agency as $key => $value)
                    <tr>
                        <td>{{ $value->maso }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->phone }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->address }}</td>
                        <td>{{ $value->manager }}</td>
                        <td>{{ $value->status }}</td>
                        <td><a class="btn btn-success" href="{{ route('agency.edit', $value->id) }}">sửa</a></td>
                        <td><a  href="{{ route('agency.destroy', $value->id) }}" class=" btn btn-danger"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
