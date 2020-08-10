<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tweet extends Model
{
  protected $guarded = array('id');

  // 以下を追記
  public static $rules = array(
      'body' => 'required',
      'user_id' => 'integer',
  );

  public function user()
  {
      
  return $this->belongsTo('app\User');

  }

  use SoftDeletes;

  protected $table = 'sns.tweets';

  protected $dates = ['deleted_at'];

  protected $fillable = [
      'body'
  ];

}