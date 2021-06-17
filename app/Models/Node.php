<?php

namespace App\Models;
use Illuminate\Contracts\Validation\Validator;
 use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;
    protected $fillable = [
    'Graph_id'

  ];


  public function graphs(){

 return $this->belongsTo('App\Models\Graph');

}
}
