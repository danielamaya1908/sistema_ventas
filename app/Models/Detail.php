<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = ['bill_id', 'cantidad', 'product_id'];

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}