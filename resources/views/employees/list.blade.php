@extends('layout.home')
@section('title', 'Employees List')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Employees List</h1></div>
            <div class="col-12 mt-2"><a href="{{route('employees.create')}}" class="btn btn-primary">Thêm mới </a></div>
            <table class="table table-hover mt-3">
                <thead class="badge-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mã nhân viên </th>
                    <th scope="col">Nhóm nhân viên </th>
                    <th scope="col">Họ và tên </th>
                    <th scope="col">Giới tính  </th>
                    <th scope="col">Số điện thoại   </th>
                    <th scope="col">Chức năng </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($employees) == 0)
                    <tr>
                        <td colspan="6">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($employees as $key => $employee)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $employee->idCode }}</td>
                            <td>{{ $employee->staffGroup }}</td>
                            <td>{{ $employee->fullName }}</td>
                            <td>{{ $employee->gender }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>
                                <a href="{{route('employees.edit',$employee->id)}}"
                                       class="btn btn-primary">Edit</a>
                                <a href="{{route('employees.destroy',$employee->id)}}" class="btn btn-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
