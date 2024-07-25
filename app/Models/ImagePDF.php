<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePDF extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'imagePDF';

    public function html()
    {
        return $this->belongsToMany(html::class);
    }
}
