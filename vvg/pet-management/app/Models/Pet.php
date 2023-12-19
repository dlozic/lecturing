<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'breed', 'weight',
        'age', 'photo', 'description',
        'user_id'];

    // if you don't want to write the fillable array,
    // you can use the $guarded[] array
    // protected $guarded = [];

}
