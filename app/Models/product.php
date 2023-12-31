<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primarykey = 'product_id';
    protected $fillable = ['product_name','product_desc','product_cod','productType_id','product_weight','product_unid'];
}
