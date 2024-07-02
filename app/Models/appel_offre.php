<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appel_offre extends Model
{
    use HasFactory;
    protected $fillable = [
        'avis_offre_id',
        'np',
        'ttc',
        'ht',
        'con',
        'cituation_provisoire',
    ];
    public function avisOffre()
    {
        return $this->belongsTo(avis_offre::class);
    }
}
