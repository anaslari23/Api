<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualificationModel extends Model
{
    use HasFactory;

    protected $table = 'qualification';

    protected $fillable = [
        'name',
        'category',
        'duration',
        'description',
    ];

    public function getCategories()
    {
        return $this->hasMany(CategoryModel::class,'qualification_id');
    }
}


