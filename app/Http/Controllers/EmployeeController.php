<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
  public function index() {
    $empls = Employee::paginate(7);
    return view('empls.index', compact('empls'));
  }

  public function create() {
    $posits = Position::all();
    return view('empls.create', compact('posits'));
  }

  public function store(Request $request) {
    try {
      DB::transaction(function() use($request) {
        $data = $request->validate([
          'name' => 'required|string',
          'surname' => 'required|string',
          'patronymic' => 'required|string',
          'sex' => 'required',
          'date_of_birth' => 'required',
          'posit_id' => 'required'
        ]);
        $posit = $data['posit_id'];
        unset($data['posit_id']);
        $new_empl = Employee::create($data);
        $new_empl->positions()->attach($posit);
      });
      return redirect()->route('empls.index');
    } catch(\Exception $exception) {
      return $exception->getMessage();
    }
  }

  public function show (Employee $empl) {
    return view('empls.show', compact('empl'));
  }

  public function edit(Employee $empl) {
    $posits = Position::all();
    return view('empls.edit', compact('empl', 'posits'));
  }

  public function update(Request $request, Employee $empl) {
    try {
      DB::transaction(function() use($request, $empl) {
        $data = $request->validate([
          'id' => '',
          'name' => 'required|string',
          'surname' => 'required|string',
          'patronymic' => 'required|string',
          'sex' => 'required',
          'date_of_birth' => 'required',
          'posit_id' => 'required'
        ]);
        $posit = $data['posit_id'];
        unset($data['posit_id']);
        $empl->update($data);
        $empl->positions()->sync($posit);
      });
      return redirect()->route('empls.show', $empl->id);
    } catch(\Exception $exception) {
      return $exception->getMessage();
    }
  }

  public function destroy(Employee $empl) {
    $empl->delete();
    return redirect()->route('empls.index');
  }
}