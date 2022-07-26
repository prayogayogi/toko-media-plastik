<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction_item extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'users_id',
        'product_id',
        'transaction_id',
        'quantity'
    ];

    /**
     * Get all of the Product for the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Product(): HasMany
    {
        return $this->hasMany(Product::class, "id", "product_id");
    }

    /**
     * Get the Transaction that owns the Transaction_item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
}
