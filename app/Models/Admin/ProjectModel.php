<?php

namespace App\Models\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\DetailProjectModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_project';
    protected $primaryKey = 'id_project';
    protected $fillable = ['title', 'type', 'area_size', 'design_style', 'address', 'status' ,'date', 'description', 'image_thumbnail'];
    
    //for insert tbl_detail_project
    public function detailImage()
    {
      return $this->hasMany(DetailProjectModel::class);
    }
}
