<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTourist extends Model
{
    use HasFactory;
    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $table = 'tourist_packages';
   protected $fillable = [
       'name',
       'detail',
       'price',
       'capacity'

   ];

   public function  detailSales()
   {
       return $this->hasMany('App/Models/DetailSale', 'id_package', 'id_package');
   }
}
