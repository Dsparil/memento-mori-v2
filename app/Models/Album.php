<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Album.
 *
 * @package namespace App\Models;
 */
class Album extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    public function review(): HasOne
    {
        return $this->hasOne(Review::class);
    }

}
