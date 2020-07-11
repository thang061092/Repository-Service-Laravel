<?php


namespace App\Http\Services;


use App\Employee;
use App\Http\Repositories\EmployeeRepository;

class EmployeeService
{
    protected $employeeRepo;

    public function __construct(EmployeeRepository $employeeRepo)
    {
        $this->employeeRepo = $employeeRepo;
    }

    public function getAll()
    {
        return $this->employeeRepo->getAll();
    }

    public function create($request)
    {
        $employee = new Employee();
        $employee->idCode = $request->code;
        $employee->staffGroup = $request->group;
        $employee->birthday = $request->date;
        $employee->fullName = $request->name;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->idCard = $request->card;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();
    }

    public function findById($id)
    {
        return $this->employeeRepo->findById($id);
    }

    public function update($request, $employee)
    {
        $employee->idCode = $request->code;
        $employee->staffGroup = $request->group;
        $employee->birthday = $request->date;
        $employee->fullName = $request->name;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->idCard = $request->card;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $this->employeeRepo->save($employee);
    }

    public function destroy($id)
    {
        $this->employeeRepo->destroy($id);
    }


}
