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
    
    public function allData()
    {
        return DB::table('tbl_project')->get();
    }

    public function detailData($id_project)
    {
        return DB::table('tbl_project')->where('id_project', $id_project)->first();
    }

    //for insert tbl_detail_project
    public function detailImage()
    {
        return $this->hasMany(DetailProjectModel::class);
    }



    public function updateData($id_project, $data)
    {
        return DB::table('tbl_project')->where('id_project', $id_project)->update($data);
    }

    public function deleteData($id_project)
    {
        return DB::table('tbl_project')->where('id_project', $id_project)->delete();
    }

}
