<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productType extends Model
{
    use HasFactory;
    protected $table = 'productType';
    protected $primarykey = 'productType_id';
    protected $fillable = ['productType_name'];
    
}
