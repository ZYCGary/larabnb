<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Property
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
 * @method static Builder|Property newModelQuery()
 * @method static Builder|Property newQuery()
 * @method static Builder|Property published()
 * @method static Builder|Property query()
 * @method static Builder|Property whereAvailableOn($value)
 * @method static Builder|Property whereCreatedAt($value)
 * @method static Builder|Property whereDescription($value)
 * @method static Builder|Property whereId($value)
 * @method static Builder|Property wherePublishedAt($value)
 * @method static Builder|Property whereRent($value)
 * @method static Builder|Property whereRentalTypeId($value)
 * @method static Builder|Property whereTitle($value)
 * @method static Builder|Property whereUpdatedAt($value)
 * @method static Builder|Property whereUserId($value)
 * @mixin \Eloquent
 */
class Property extends Model
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

    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('published_at');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function rentalType(): BelongsTo
    {
        return $this->belongsTo(RentalType::class);
    }
}
