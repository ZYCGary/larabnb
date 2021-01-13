<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Place
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property string $available_on
 * @property string|null $rent
 * @property int $rental_type_id
 * @property string|null $published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\RentalType $rentalType
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Place newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Place newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Place query()
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereAvailableOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereRent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereRentalTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereUserId($value)
 * @mixin \Eloquent
 */
class Place extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'rental_type_id',
        'title',
        'description',
        'available_at',
        'published_at',
        'rent',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function rentalType(): BelongsTo
    {
        return $this->belongsTo(RentalType::class);
    }
}
