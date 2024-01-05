<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::all();
        return view('employeedata', compact('data'));
    }

    public function addemployee()
    {
        return view('addemployee');
    }

    public function insertdata(Request $request)
    {
        Employee::create($request -> all());
        return redirect() -> route('employee') -> with('success', 'Data berhasil ditambahkan');
    }

    public function getdata($id)
    {
        $data = Employee::find($id);
        return view('editemployee', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Employee::find($id);
        $data -> update($request -> all());
        return redirect() -> route('employee') -> with('success', 'Data berhasil diperbarui');
    }

    public function deletedata($id)
    {
        $data = Employee::find($id);
        $data -> delete();
        return redirect() -> route('employee') -> with('success', 'Data berhasil dihapus');
    }
}
