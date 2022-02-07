<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nome', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    // public function payroll(): BelongsTo
    // {
    //     return $this->belongsTo(Payroll::class);
    // }
}
