<?php

namespace App\Models;

use App\Models\Employee;


class HygieneInspection extends Model
{
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
