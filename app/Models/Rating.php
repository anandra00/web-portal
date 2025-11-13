<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $primaryKey = 'id_rating';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_rating',
        'id_karya',
        'id_user',
        'nilai',
        'tanggal_rating',
    ];

    protected $casts = [
        'tanggal_rating' => 'date',
    ];

    // Relationships
    public function karya()
    {
        return $this->belongsTo(Karya::class, 'id_karya', 'id_karya');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
