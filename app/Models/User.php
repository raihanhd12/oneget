<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Instagram;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'google_id',
        'verify_key'
    ];

    public function Instagrams()
    {
        return $this->hasMany(Instagram::class);
    }

    public function Facebooks()
    {
        return $this->hasMany(Facebook::class);
    }

    public function Tiktoks()
    {
        return $this->hasMany(Tiktok::class);
    }
    public function Tabs()
    {
        return $this->hasMany(Tabs::class);
    }

    public function UserSubscription()
    {
        return $this->hasOne(UserSubscription::class);
    }

    public function IdeGenerator()
    {
        return $this->hasMany(IdeGenerator::class);
    }

    public function HasilLaporan()
    {
        return $this->hasMany(HasilLaporan::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getIsActiveAttribute()
    {
        if (!$this->LastActiveUserSubscription) {
            return false;
        }
        $dateNow = Carbon::now();
        $dateExpired = Carbon::create($this->LastActiveUserSubscription->expired_date);

        return $dateNow->lessThanOrEqualTo($dateExpired);
    }

    /**
     * Get the LastActiveUserSubscription associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function LastActiveUserSubscription(): HasOne
    {
        return $this->hasOne(UserSubscription::class)->wherePaymentStatus('paid')->latest();
    }
}
