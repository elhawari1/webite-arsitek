<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProjectModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_detail_project';
    protected $fillable=[
        'id_project',
        'image_detail',
    ];

    public function project()
    {
        return $this->belongTo(ProjectModel::class);
    }
}
