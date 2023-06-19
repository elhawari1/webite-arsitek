<?php

namespace App\Models\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DashboardModel extends Model
{
    use HasFactory;
    protected $table ='tbl_banner';
    protected $primaryKey = 'id_banner';

    public function detailData($id_banner)
    {
        return DB::table('tbl_banner')->where('id_banner', $id_banner)->first();
    }

    public function insertData($data)
    {
        DB::table('tbl_banner')->insert($data);
    }

    public function updateData($id_banner, $data)
    {
        DB::table('tbl_banner')->where('id_banner', $id_banner)->update($data);
    }

    public function deleteData($id_banner)
    {
        DB::table('tbl_banner')->where('id_banner', $id_banner)->delete();
    }
}
