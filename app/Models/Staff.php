<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specialization'
    ];

    public function getTable()
    {
        return config('timex.tables.staff.name', 'staff');
    }
}
