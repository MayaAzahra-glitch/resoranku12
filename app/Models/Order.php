<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    protected $fillable = ['order_code', 'user_id', 'subtotal', 'tax', 'grandtotal', 'status', 'table_number', 'payment_method', 'note', 'created_at', 'updated_at'];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function oderItem()
    {
        return $this->hasMany(OrderItem::class);

    }

}
