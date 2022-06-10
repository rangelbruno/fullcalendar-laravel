<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'start', 'end', 'color'];

    public function getStartAttribute($value)
    {
        $dateStart = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('Y-m-d');
        $timeStart = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('H:i:s');

        return $this->start = ($timeStart == '00:00:00' ? $dateStart : $value);
    }
    public function getEndAttribute($value)
    {
        $dateEnd = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('Y-m-d');
        $timeEnd = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('H:i:s');

        return $this->end = ($timeEnd == '00:00:00' ? $dateEnd : $value);
    }
}