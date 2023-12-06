<?php

namespace App\Models;

use App\Enum\ReservationStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_customer',
        'id_services_provided',
        'id_user',
        'status',
        'reserved_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => ReservationStatusEnum::class,
        'reserved_at' => 'timestamp',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'deleted_at' => 'timestamp',
    ];

    public function customer(): HasOne
    {
        return $this->hasOne(Customer::class, 'id_customer');
    }

    public function servicesProvided(): HasOne
    {
        return $this->hasOne(ServicesProvided::class, 'id_services_provided');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id_user');
    }
}
