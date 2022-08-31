<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['category','title','description','image'];

    

    public function getNextAttribute()
    {
        return static::where('id', '>', $this->id)->orderBy('id', 'asc')->first();
    }


    public  function getPreviousAttribute()
    {

        return  static::where('id', '<', $this->id)->orderBy('id', 'desc')->first();

    }
}
