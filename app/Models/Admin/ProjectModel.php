<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_project';
    protected $primaryKey = 'id_project';
    protected $fillable = ['title', 'type', 'area_size', 'design_style', 'address', 'status' ,'date', 'description', 'image'];
    // public $timestamps = false;

}
