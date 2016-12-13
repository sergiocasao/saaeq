<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\UniqueSlugTrait;
use App\Models\Traits\PhotoableTrait;
use App\Models\Traits\PublishableTrait;
use App\Curse;
use App\Theme;

class Signature extends Model
{
    use UniqueSlugTrait;
    use PhotoableTrait;
    use PublishableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'signatures';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label','slug','description','curse_id'
    ];

    protected $casts = [
        'label'         => 'string',
        'slug'          => 'string',
        'description'   => 'string',
        'curse_id'      => 'integer',
    ];

    public function curse()
    {
        return $this->belongsTo(Curse::class);
    }

    public function themes()
    {
        return $this->hasMany(Theme::class);
    }
}
