<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $primaryKey = 'oid';

    public function items()
    {
        return $this->belongsToMany('App\Models\Item', 'orderdetail', 'oid', 'iid')
            ->withPivot('iqty');
    }
}
