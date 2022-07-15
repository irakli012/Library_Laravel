<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'release_date', 'status', 'description'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->Orwhere('description', 'like', '%' . request('search') . '%')
                ->Orwhere('author', 'like', '%' . request('search') . '%')
                ->Orwhere('release_date', 'like', '%' . request('search') . '%');
        }
    }
}
