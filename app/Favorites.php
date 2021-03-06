<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'favorites';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public function scopeWhereUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
    public function product()
    {
        return Products::find($this->product_id);
    }
}
