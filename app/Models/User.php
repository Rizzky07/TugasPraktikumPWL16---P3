<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $keyType = 'string'; // Gunakan string jika NPM ada karakter selain angka

    protected $fillable = [
        'npm', 'username', 'first_name', 'last_name', 'email', 'password',
    ];

    // Accessor untuk Nama Lengkap
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->first_name. ' ' . $this->last_name
        );
    }

    // Relasi ke Peminjaman
    public function loans()
    {
        return $this->hasMany(Loan::class, 'user_npm', 'npm');
    }
}