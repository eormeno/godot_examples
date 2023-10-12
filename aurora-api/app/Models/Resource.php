<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resource extends Model
{
    use HasFactory;

    // the attributes that are mass assignable
    protected $fillable = [
        'name',
        'parent_id',
        'user_id'
    ];

    // the attributes that should be hidden for arrays
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // the attributes that should be cast to native types
    protected $casts = [
        'id' => 'integer',
        'parent_id' => 'integer',
        'user_id' => 'integer',
    ];

    public function ownedBy()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(Resource::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Resource::class, 'parent_id');
    }

}
