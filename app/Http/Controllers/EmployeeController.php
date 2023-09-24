<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Position;


class EmployeeController extends Controller
{
  public function index() {
    $empls = Employee::all();
    return view('empls.index', compact('empls'));
  }


  public function create() {
      $posits = Position::all();
      return view('empls.create', compact('posits'));
    }


    public function store() {
      $data = request()->validate([
        'name' => '',
        'surname' => '',
        'patronymic' => '',
        'sex' => '',
        'date_of_birth' => ''
      ]);
      $posit = request()->validate([
        'posit_id' => ''
      ]);
      $new_empl = Employee::create($data);
      $new_empl->positions()->attach($posit);
      return redirect()->route('empls.index');
    }


    public function show (Employee $empl) {
      return view('empls.show', compact('empl'));
    }


    public function edit(Employee $empl) {
      return view('empls.edit', compact('empl'));
    }
  

    public function update(Employee $empl) {
      $data = request()->validate([
        'name' => 'string',
        'surname' => 'string',
        'patronymic' => 'string',
        'sex' => '',
        'date_of_birth' => ''
      ]);
      $empl->update($data);
      return redirect()->route('empls.show', $empl->id);
    }
  
  
    public function destroy(Employee $empl) {
        $empl->delete();
        return redirect()->route('empls.index');
    }
}
