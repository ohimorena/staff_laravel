<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
  public function index() {
    $posits = Position::all();
    return view('positions.index', compact('posits'));
  }

  public function create() {
    return view('positions.create');
  }

  public function store(Request $request) {
    try {
      $data = $request->validate([
        'position' => 'required|string',
        'position_amount' => 'required|integer',
        'salary' => 'required|numeric'
      ]);
      Position::create($data);
      return redirect()->route('posits.index');
    } catch(\Exception $exception) {
      return $exception->getMessage();
    }
  }

  public function edit(Position $posit) {
    return view('positions.edit', compact('posit'));
  }

  public function update(Request $request, Position $posit) {
    try {
      $data = $request->validate([
        'position' => 'required|string',
        'position_amount' => 'required|integer',
        'salary' => 'required|numeric'
      ]);
      $posit->update($data);
      return redirect()->route('posits.index');
    } catch(\Exception $exception) {
      return $exception->getMessage();
    }
  }

  public function destroy(Position $posit) {
    $posit->delete();
    return redirect()->route('posits.index');
  }
}