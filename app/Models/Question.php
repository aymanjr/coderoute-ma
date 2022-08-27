<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['title', 'image', 'reponse1', 'reponse2', 'reponse3', 'reponse4', 'answer'];



    public function getNextAttribute()
    {
        return static::where('id', '>', $this->id)->orderBy('id', 'asc')->first();
    }


    public  function getPreviousAttribute()
    {

        return  static::where('id', '<', $this->id)->orderBy('id', 'desc')->first();

    }
}
