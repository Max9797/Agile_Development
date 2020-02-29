<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_Model extends Model
{
    protected $table = 'property_tables';
    protected $fillable = ['name','gender_pref','available_bed','total_bed','address',',city','price','electricity_water','contact','email','distance','buildup','bathrooms','furnishing','amenities','facilities','Occupants','image'];
}
