<?php

namespace App\Models\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectModel extends Model
{
    // use HasFactory;

    // protected $table = 'tbl_project';
    // protected $primaryKey = 'id_project';
    // protected $fillable = ['title', 'type', 'area_size', 'design_style', 'address', 'status' ,'date', 'description', 'image'];
    // // public $timestamps = false;

    public function allData()
    {
        return DB::table('tbl_project')->get();
    }

    public function detailData($id_project)
    {
        return DB::table('tbl_project')->where('id_project', $id_project)->first();
    }

    public function insertData($data)
    {
        DB::table('tbl_project')->insert($data);
    }

    public function updateData($id_project)
    {
        return DB::table('tbl_project')->where('id_project', $id_project)->update();
    }

    public function deleteData($id_project)
    {
        return DB::table('tbl_project')->where('id_project', $id_project)->delete();
    }

}
