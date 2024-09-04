<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'email',
        'body',
        'name',
    ];

    public function acticle()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
    protected $dates = ['created_at', 'updated_at'];
}
