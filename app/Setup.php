<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    protected $table = 'setups';

    protected $casts = [
        'equipments' => 'array',
    ];
}
