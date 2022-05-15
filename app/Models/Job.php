<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'keywords',
        'title',
        'description',
        'location',
        'type'
    ];

    public function employer() {
        return $this->belongsTo(Employer::class);
    }
}
