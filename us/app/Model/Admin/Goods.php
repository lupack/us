<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //
    protected $table = 'goods';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $guarded = [];
    public function gis()
    {
        return $this->hasMany('App\Model\Admin\Goods_photos','gid');
    }
}
