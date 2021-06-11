<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manager;

class Location extends Model
{
    use HasFactory;
    public $table="location";
    protected $fillable = ['name', 'address', 'phone','email', 'company_id'];
    public $timestamps=false;
    public function manager()
    {
        return $this->hasMany(Manager::class);
    }

}
