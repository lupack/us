<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Goods_photos extends Model
{
    //
    protected $table = 'Goods_photo';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $guarded = [];

    public function goods(){

        return $this->belongsTo('App\Model\Admin\Goods');
    }
}
