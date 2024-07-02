<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avis_offre extends Model
{
    use HasFactory;
    public function appelOffres()
    {
        return $this->hasMany(appel_offre::class, 'avis_offre_id');
    }
}
