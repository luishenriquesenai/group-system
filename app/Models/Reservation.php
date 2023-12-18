<?php

namespace App\Models;

use App\Enum\ReservationStatusEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function servicesProvided()
    {
        return $this->belongsTo(ServicesProvided::class, 'id_services_provided');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function getReservedAtAttribute($value)
    {
        $date = (int) Carbon::createFromTimestamp($value)->toDateTimeString();

        return date('m / d / Y', $date);
    }

    public function getStatusColorAttribute()
    {
        return match ($this->status) {
            ReservationStatusEnum::CONFIRMED => 'bg-green-400 text-gray-50',
            ReservationStatusEnum::WAITING_CONFIRMATION => 'bg-yellow-400 text-gray-50',
            ReservationStatusEnum::CANCELED => 'bg-red-400 text-gray-50',
            default => 'bg-gray-400 text-gray-50',
        };
    }
}
