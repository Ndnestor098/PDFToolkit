<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function html()
    {
        return $this->belongsToMany(html::class);
    }
}
