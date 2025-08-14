<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'profile_image',
        'password',
        'role', // 0: admin 1: owner 2: responsible
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function image(): string
    {
        if ($this->profile_image) {
            return asset('storage/' . $this->profile_image);
        } else {
            return asset('img/theme/user.png');
        }
    }

    public function isAdmin(): bool
    {
        return $this->role === 0;
    }

     public function isOwner(): bool
    {
        return $this->role === 1;
    }

    public function isResponsible(): bool
    {
        return $this->role === 2;
    }

    public function movements()
    {
        return $this->hasMany(Movement::class);
    }
}
