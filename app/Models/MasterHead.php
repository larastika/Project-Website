<?php

namespace App\Models;

use Illuminate\Database\eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterHead extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "master_head";
    protected $guarded = ['id'];
}
