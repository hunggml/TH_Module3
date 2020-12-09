@extends('master')
@section('title', 'Thêm mới đại lý')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới Đại Lý </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('agency.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Mã số đại lý </label>
                        <input value="{{old('maso')}}" type="text" class="form-control" name="maso" placeholder=" Nhập  mã số đại lý ">
                        @error('maso')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tên Đại lý </label>
                        <input value="{{old('name')}}" type="text" class="form-control" name="name" placeholder="Nhập tên đại lý ">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Điện thoại </label>
                        <input  value="{{old('phone')}}" type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại ">
                        @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email </label>
                        <input value="{{old('email')}}" type="text" class="form-control" name="email" placeholder="Nhập email ">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ </label>
                        <textarea class="form-control"  name="address">
                            {{old('address')}}
                        </textarea>
                        @error('address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tên người quản lý </label>
                        <input value="{{old('manager')}}" type="text" class="form-control" name="manager" placeholder="Nhập tên người quản lý ">
                        @error('manager')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Trạng thái:</label>
                        <select name="status" class="form-control">
                            <option>Hoạt động</option>
                            <option>Không hoạt động</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('home')}}" class="btn btn-success">
                            Return Home
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
