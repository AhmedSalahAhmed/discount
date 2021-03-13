<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $fillable = [
        'store_name', 'store_img', 'fb_acc', 't_acc', 'insta_acc'
       ];
}
