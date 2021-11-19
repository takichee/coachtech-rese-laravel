<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'number',
        'user_id',
        'shop_id'
    ];

    /**
     * 予約を所有しているユーザーを取得
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }

    /**
     * 予約を所有している店舗を取得
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class, 'foreign_key');
    }
}
