<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Manager extends Model
{
    use HasFactory;
    public $table="manager";
    protected $fillable = ['name', 'location_id', 'users_id'];
    public $timestamps=false;

    public function setLocationIdAttribute($input)
    {
        $this->attributes['location_id'] = $input ? $input : null;
    }
    

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function setUsersIdAttribute($input)
    {
        $this->attributes['users_id'] = $input ? $input : null;
    }
    

    public function users()
    {
        return $this->belongsTo(Users::class, 'users_id');
    }
}

