<?php

namespace App\Models;

use App\Models\Employee;


class HygieneInspection extends Model
{
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function getPercentageAttribute()
    {
        $result = (($this->flu + $this->diarrhea + $this->beard + $this->uniform +$this->hairnet + $this->shoes +$this->gloves + $this->pins+ $this->cleanness +$this->wounds + $this->nails + $this->mask + $this->accessories + $this->eating) / 84 * 100);
        return round($result, 2) . ' %';
    }

    public static function total($value)
    {
        $total = ($value->flu + $value->diarrhea + $value->beard + $value->uniform +$value->hairnet + $value->shoes +$value->gloves + $value->pins+ $value->cleanness +$value->wounds + $value->nails + $value->mask + $value->accessories + $value->eating);
        return $total;
    }

}
