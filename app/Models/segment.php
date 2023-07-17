<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class segment extends Model
{
    use HasFactory;
    protected $table = 'segment';
<<<<<<< HEAD
    protected $primarykey = 'id';
=======
    protected $primarykey = 'segment_id';
>>>>>>> b2e2675 (versaoBeta-1)
    protected $fillable = ['segment_name'];
}
