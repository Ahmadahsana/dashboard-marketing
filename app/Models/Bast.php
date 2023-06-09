<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bast extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function status()
    {
        return $this->belongsTo(Status_bast::class, 'status_bast_id', 'id');
    }

    public function detail()
    {
        return $this->hasMany(Bast_detail::class);
    }
}
