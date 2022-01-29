<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $guarded=[];

    /**
     * Set the value
     *
     */
    public function setCatAttribute($value)
    {
        dd( $this->attributes['core_values']);
        $this->attributes['core_values'] = json_encode($value);
    }
  
    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['core_values'] = json_decode($value);
    }
}
