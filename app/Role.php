<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = "roles";

    public $timestamps=false;

    protected $fillable = [
        "role_name", "role_desc"
    ];
}
