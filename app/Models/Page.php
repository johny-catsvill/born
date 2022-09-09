<?php

namespace App\Models;

use App\Traits\Cropper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    use Cropper;

    public function categoryId() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
