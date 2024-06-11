<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ArtistRepository;
use App\Models\Artist;
use App\Validators\ArtistValidator;

/**
 * Class ArtistRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class ArtistRepositoryEloquent extends BaseRepository implements ArtistRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Artist::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
