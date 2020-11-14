<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','body','category_id','image'];
    public $directrory='images/';
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function gettitleAttribute($value){
        return strtoupper($value);
    }
    // public function getbodyAttribute($value){
    //     return ucfirst($value);
    // }
    public function getimageAttribute($value){
        return $this->directrory.$value;
    }
    public function setbodyAttribute($value){
        $this->attributes['body']=ucwords($value);
    }
    public function scopeLatest($query){
        return $query->orderBy('id','desc')->get();
    }
}
