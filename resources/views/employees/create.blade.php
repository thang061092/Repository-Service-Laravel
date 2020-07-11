@extends('layout.home')
@section('title', 'Thêm nhân viên')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm nhân viên</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('employees.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Mã nhân viên :</label>
                        <input type="text" class="form-control" name="code" placeholder="Enter code " >
                        @if($errors->first('code'))
                            <p class="text-danger">{{ $errors->first('code') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nhóm nhân viên : </label>
                        <select name="group" class="form-control" >
                            <option>Quản trị hệ thống  </option>
                            <option>Quản lý nhân sự </option>
                            <option>Lễ tân </option>
                            <option>Quản lý phòng </option>
                            <option>Quản lý dịch vụ </option>
                        </select>
                        @if($errors->first('group'))
                            <p class="text-danger">{{ $errors->first('group') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Họ tên :  </label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Full Name" >
                        @if($errors->first('name'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh : </label>
                        <input type="date" class="form-control" name="date" placeholder="Enter Date" >
                        @if($errors->first('date'))
                            <p class="text-danger">{{ $errors->first('date') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Giới tính : </label>
                        <select name="gender" class="form-control" >
                            <option>Nam  </option>
                            <option>Nữ </option>
                        </select>
                        @if($errors->first('gender'))
                            <p class="text-danger">{{ $errors->first('gender') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại : </label>
                        <input type="number" class="form-control" name="phone" placeholder="VD: 0xxxxxxxxx" >
                        @if($errors->first('phone'))
                            <p class="text-danger">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>CMND : </label>
                        <input type="number" class="form-control" name="card" placeholder="Enter card " >
                        @if($errors->first('card'))
                            <p class="text-danger">{{ $errors->first('card') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email : </label>
                        <input type="email" class="form-control" name="email" placeholder="VD: xxxx@xxxx " >
                        @if($errors->first('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ : </label>
                        <textarea  class="form-control" name="address"  ></textarea>
                        @if($errors->first('address'))
                            <p class="text-danger">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection



