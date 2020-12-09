@extends('master')
@section('title', 'Chỉnh sửa Đại lý')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Chỉnh sửa Đại lý </h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('agency.update', $agency->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Mã số Đại lý</label>
                        <input type="text" class="form-control" name="maso" value="{{ $agency->maso }}">
                    </div>
                    <div class="form-group">
                        <label>Tên Đại lý</label>
                        <input type="text" class="form-control" name="name" value="{{ $agency->name }}">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại </label>
                        <input type="text" class="form-control" name="phone" value="{{ $agency->phone }}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $agency->email }}">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ </label>
                        <textarea class="form-control" name="address">
                            {{ $agency->address }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Tên nguời quản lý </label>
                        <input type="text" class="form-control" name="manager" value="{{ $agency->manager }}">
                    </div>
                    <div class="form-group">
                        <label>Trạng thái:</label>
                        <select name="status" class="form-control">
                            <option @if($agency->status =='Hoạt động') selected @endif>Hoạt động</option>
                            <option @if($agency->status =='Không hoạt động') selected @endif>Không hoạt động</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                        <a href="{{route('home')}}" class="btn btn-success">
                            Return Home
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
