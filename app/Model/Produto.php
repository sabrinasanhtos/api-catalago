<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $connection = 'mysql';
    protected $table = 'produto';
}
