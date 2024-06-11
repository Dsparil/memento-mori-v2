<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Review.
 *
 * @package namespace App\Models;
 */
class Review extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }

}
