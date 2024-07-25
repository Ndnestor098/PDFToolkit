<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class html extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(Images::class);
    }

    public function icons()
    {
        return $this->hasMany(Icon::class);
    }

    public function pdfImage()
    {
        return $this->hasMany(ImagePDF::class);
    }

    public function pdfIcon()
    {
        return $this->hasMany(ImagePDF::class);
    }
}
