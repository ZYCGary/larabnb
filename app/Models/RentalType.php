<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RentalType
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|RentalType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RentalType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RentalType query()
 * @method static \Illuminate\Database\Eloquent\Builder|RentalType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RentalType whereName($value)
 * @mixin \Eloquent
 */
class RentalType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    protected $fillable = ['name'];
}
