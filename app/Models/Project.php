<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'estimated_hours',
        'start_date',
        'user_id'
    ];

    protected $casts = [
        'start_date' => 'date',
        'estimated_hours' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}