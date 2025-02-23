<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'type', 'details'];

    public function user()
    {
        return $this->belongsTo(FinanceUser::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
