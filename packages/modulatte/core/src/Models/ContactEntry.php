<?php

namespace Modulatte\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactEntry extends Model
{
    use HasFactory;

    protected $casts = [
        'data' => 'array',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'company',
        'email',
        'phone',
        'subject',
        'message',
        'form',
        'data',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function isTranslatable()
    {
        return false;
    }

    public function getSubmittedAtAttribute()
    {
        return $this->created_at->format('F d, Y h:i:s A');
    }
}
