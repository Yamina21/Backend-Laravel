<?php

namespace App\Models;

use Illuminate\Contracts\Validation\Validator;
 use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'description'

  ];


  public function nodes(){
     return $this->hasMany('App\Models\Node');

  }
}
