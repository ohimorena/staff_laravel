<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Employee;


class Position extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'positions';
  protected $guarded = [];

  public function employees() {
    return $this->belongsToMany(Employee::class, 'employee_positions', 'posit_id', 'empl_id',);
  }
}
