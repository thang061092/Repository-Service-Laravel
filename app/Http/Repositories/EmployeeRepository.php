<?php


namespace App\Http\Repositories;


use App\Employee;

class EmployeeRepository
{
    protected $employeeModel;

    public function __construct(Employee $employeeModel)
    {
        $this->employeeModel = $employeeModel;
    }

    public function getAll()
    {
        return $this->employeeModel->all();
    }

    public function save($employee)
    {
        $employee->save();
    }

    public function findById($id)
    {
        return $this->employeeModel->findOrFail($id);
    }

    public function destroy($employee)
    {
        $employee->delete();
    }

}
