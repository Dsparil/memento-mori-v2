<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Artist.
 *
 * @package namespace App\Models;
 */
class Artist extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }

    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }

}
