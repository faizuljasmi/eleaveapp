<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  protected $fillable = [
    'name'
  ];

  //Relationship with posts, many-to-many
  public function users(){
    return $this->belongsToMany(User::class);
  }
}
