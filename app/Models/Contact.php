<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'phone',
    //     'email',
    //     'area',
    //     'image'

    // ];
    //بدل ما اضل اعبي كل الاعمدة عندي هاي طريقة تانية
    protected $guarded = [] ;

}
