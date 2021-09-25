<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    // idカラムは外部からの変更を許可しない
    protected $guarded = [
        'id'
      ];
}
