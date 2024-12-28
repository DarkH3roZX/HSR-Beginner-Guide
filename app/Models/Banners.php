<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $table = 'warp_history';
    public $timestamps = false;
    protected $fillable = [
        'version',
        'phase1Slot1',
        'phase1Slot2',
        'phase1Slot3',
        'phase1Slot4',
        'phase2Slot1',
        'phase2Slot2',
        'phase2Slot3',
        'phase2Slot4'
    ];
}
