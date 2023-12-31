<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //protected $guarded=[];

    protected $fillable = [
        'name',
        'price',
        'description',
        'category_id',
        'serial_number',
    ];
    // protected $table='product';

}
