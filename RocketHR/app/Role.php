<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $fillable = [
    'name'
  ];
  //Relationship with posts, many-to-many
  public function users(){
    return $this->belongsToMany(User::class);
  }
}
