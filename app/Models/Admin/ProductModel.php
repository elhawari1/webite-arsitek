<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_product';
    protected $primaryKey = 'id_product';
    protected $fillable = ['title', 'type', 'width', 'height', 'colour', 'image'];
    
}
