<?php

namespace App\Models\Admin;

use App\Models\Admin\ProjectModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailProjectModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_detail_project';
    protected $primaryKey = 'id_detail_project';
    protected $fillable=[
        'id_project',
        'image_detail',
    ];

    public function project()
    {
        return $this->belongsTo(ProjectModel::class);
    }

    public function detailProject($id_project)
    {
        return DB::table('tbl_detail_project')->where('id_project', $id_project)->first();
    }
}
