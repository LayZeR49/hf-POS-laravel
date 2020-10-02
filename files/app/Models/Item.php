<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'item';
    protected $primaryKey = 'iid';

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'cid', 'cid');
    }
    
}
