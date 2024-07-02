<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $fillable = [
        'des',
        'image',
        'title',
        'status',  
    ];
    public function slider()
    {
        return $this->hasOne(sliders::class);
    }
}
