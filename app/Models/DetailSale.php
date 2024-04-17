<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSale extends Model
{
    use HasFactory;
    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $table = 'detail_sales';
   protected $fillable = [
       'id_sale',
       'id_package',
       'amount',
       'price',
       'discount',
       'partial_amount',

   ];

   public function  sale()
   {
       return $this->belongsTo('App/Models/Sale', 'id_sale', 'id_sale');
   }
   public function  packageTourist()
   
   {
       return $this->belongsTo('App/Models/PackageTourist', 'id_package', 'id_package');
   }
}
