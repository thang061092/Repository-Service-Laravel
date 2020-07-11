@extends('layout.home')
@section('title', 'Chỉnh sủa nhân viên')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa nhân viên</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('employees.update',$employee->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Mã nhân viên :</label>
                        <input type="text" id="code" class="form-control" name="code" placeholder="Enter code " value="{{$employee->idCode}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nhóm nhân viên : </label>
                        <select name="group" class="form-control" id="group" required>
                            <option>Quản trị hệ thống  </option>
                            <option>Quản lý nhân sự </option>
                            <option>Lễ tân </option>
                            <option>Quản lý phòng </option>
                            <option>Quản lý dịch vụ </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Họ tên :  </label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter Full Name" required value="{{$employee->fullName}}">
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh : </label>
                        <input type="date" id="date" class="form-control" name="date" placeholder="Enter Date" readonly value="{{$employee->birthday}}">
                    </div>
                    <div class="form-group">
                        <label>Giới tính : </label>
                        <input type="text" id="gender" name="gender" readonly value="{{$employee->gender}}">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại : </label>
                        <input type="number" id="phone" class="form-control" name="phone" placeholder="VD: 0xxxxxxxxx" required value="{{$employee->phone}}">
                    </div>
                    <div class="form-group">
                        <label>CMND : </label>
                        <input type="number" id="card" class="form-control" name="card" placeholder="Enter card " required value="{{$employee->idCard}}">
                    </div>
                    <div class="form-group">
                        <label>Email : </label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="VD: xxxx@xxxx " required value="{{$employee->email}}">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ : </label>
                        <textarea  class="form-control" id="address" name="address" required >{{$employee->address}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection



