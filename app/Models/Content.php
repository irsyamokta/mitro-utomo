<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title', 'link', 'type'
    ];
}
