<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = ["name", "description", "type", "birth_date"];

    public function getDaysSinceBirthAttribute()
    {
        $birth_date =  Carbon::parse($this->attributes['birth_date']);
        return round($birth_date->diffInDays(Carbon::now()));
    }

    public function getMonthsSinceBirthAttribute()
    {
        $birth_date =  Carbon::parse($this->attributes['birth_date']);
        return round($birth_date->diffInMonths(Carbon::now()));
    }

    public function walks()
    {
        return $this->hasMany(PetWalk::class);
    }
}
