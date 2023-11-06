<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    use HasFactory;

    protected $table = "tbl_article";
    protected $primaryKey = "id_article";
    protected $fillable = ['title', 'description', 'image_thumbnal', 'date_publication'];
}
