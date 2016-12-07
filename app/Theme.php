<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\UniqueSlugTrait;
use App\Models\Traits\PhotoableTrait;
use App\Models\Traits\PublishableTrait;
use App\Signature;

class Theme extends Model
{
    use UniqueSlugTrait;
    use PhotoableTrait;
    use PublishableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'themes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label','slug','description','signature_id'
    ];

    protected $casts = [
        'label'         => 'string',
        'slug'          => 'string',
        'description'   => 'string',
        'signature_id'  => 'integer',
    ];

    public function signature()
    {
        return $this->belongsTo(Signature::class);
    }

}
