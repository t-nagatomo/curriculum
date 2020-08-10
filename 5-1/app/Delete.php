<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delete extends Model
{
    use SoftDeletes;

    protected $table = 'sns.tweets';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'body'
    ];
}
