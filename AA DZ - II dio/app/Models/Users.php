<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manager;

class Users extends Model
{
    use HasFactory;
    public $table="users";
    protected $fillable = ['name', 'password', 'role'];
    public $timestamps=false;
    public function manager()
    {
        return $this->hasMany(Manager::class);
    }

}
