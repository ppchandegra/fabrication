<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'title',
        'image',
        'description',
        'status'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
} 