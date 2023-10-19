<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['reference_no', 'product_id', 'quantity', 'price', 'payment_amount'];
    protected $hidden = [

    ];
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
