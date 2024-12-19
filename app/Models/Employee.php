<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Position;

class Employee extends Model
  {
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'employees';
    protected $guarded = [];

    public function positions() {
      return $this->belongsToMany(Position::class, 'employee_positions', 'empl_id', 'posit_id');
    }
  } 
