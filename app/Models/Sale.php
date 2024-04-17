<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $table = 'sales';
   protected $fillable = [
       'id_seller',
       'id_client',
       'date_salle',
       'amount'

   ];

   public function  seller()
   {
       return $this->belongsTo('App/Models/Seller', 'id_seller', 'id_seller');
   }
   public function  client()
   {
       return $this->belongsTo('App/Models/Client', 'id_client', 'id_client');
   }
   public function detailSale()
   {
       return $this->hasMany('App/Models/DetailSale', 'id_sale', 'id_sale');
   }
}
