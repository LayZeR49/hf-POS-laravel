<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentOrder extends Model
{
    use HasFactory;
    protected $table = 'currentorder';
    protected $primaryKey = 'coid';

    public function item()
    {
        return $this->hasOne('App\Models\Item', 'iid', 'iid');
    }
}
