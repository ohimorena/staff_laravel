<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;
use App\Models\Employee;


class PositionController extends Controller
{
  public function index() {
    $positions = Position::all();
    return view('positions.index', compact('positions'));
  }


  public function create() {
    return view('positions.create');
  }


  public function store() {
    $data = request()->validate([
      'position' => '',
      'position_amount' => '',
      'salary' => ''
    ]);
    Position::create($data);
    return redirect()->route('positions.index');
  }


  public function edit(Position $position) {
    return view('positions.edit', compact('position'));
  }


  public function update(Position $position) {
    $data = request()->validate([
      'position' => '',
      'position_amount' => '',
      'salary' => ''
    ]);
    $position->update($data);
    return redirect()->route('positions.index');
  }


  public function destroy(Position $position) {
    $position->delete();
    return redirect()->route('positions.index');
  }

}