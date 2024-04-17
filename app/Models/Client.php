<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'clients';
    protected $fillable = [
        'first_name',
        'second_name',
        'lastname_f',
        'lastname_m',
        'num_dni',
        'phone',
        'email',
        'address',
        'birthdate',

    ];

    public function  sales()
    {
        return $this->hasMany('App/Models/Sale', 'id_seller', 'id_sale');
    }
    public function user(){
        return $this->belongsTo('App\Models\User', 'id_client', 'id_user');
    }
}
