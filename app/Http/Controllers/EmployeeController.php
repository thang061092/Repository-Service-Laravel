<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\ValidateForm;
use App\Http\Services\EmployeeService;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        $employees = $this->employeeService->getAll();
        return view('employees.list', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(ValidateForm $request)
    {
        $this->employeeService->create($request);

        toastr()->success('Thêm nhân viên thành công');
        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $employee = $this->employeeService->findById($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = $this->employeeService->findById($id);
        $this->employeeService->update($request, $employee);

        toastr()->success('Chỉnh sủa nhân viên thành công');
        return redirect()->route('employees.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $employees = Employee::where('idCode', 'LIKE', '%' . $keyword . '%')->
        orWhere('fullname', 'LIKE', '%' . $keyword . '%')->get();
        return view('employees.list', compact('employees'));
    }

    public function destroy($id)
    {
        $employee = $this->employeeService->findById($id);
        $this->employeeService->destroy($employee);

        toastr()->success('Xoa nhân viên thành công');
        return redirect()->route('employees.index');
    }

//    public function search(Request $request)
//    {
//        $codes = Employee::where('idCode', 'LIKE', '%' . $request->search . '%')->get();
//        return response()->json($codes);
//    }


}
