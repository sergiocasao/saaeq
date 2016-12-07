<?php

namespace App;

use App\Models\Traits\UniqueSlugTrait;
use App\Models\Traits\PhotoableTrait;
use App\Models\Traits\PublishableTrait;
use App\Signature;

use Illuminate\Database\Eloquent\Model;

class Curse extends Model
{
    use UniqueSlugTrait;
    use PhotoableTrait;
    use PublishableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label','slug','description','publish_id','publish_at'
    ];

    protected $casts = [
        'label'         => 'string',
        'slug'          => 'string',
        'description'   => 'string',
        'publish_id'    => 'integer',
    ];

    protected $date = [
        'created_at',
        'updated_at',
        'publish_at',
    ];

    public function signatures()
    {
        return $this->hasMany(Signature::class);
    }
}
