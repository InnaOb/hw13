<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    public function column()
    {
        return $this->belongsTo(Column::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }

    public function notification()
    {
        return $this->hasMany(Notification::class);
    }
}
