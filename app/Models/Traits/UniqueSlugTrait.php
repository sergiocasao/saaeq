<?php namespace App\Models\Traits;

use DB;

trait UniqueSlugTrait {

    /**
     * genera un nombre de usuario unico a partir del nombre y apellido
     * @param  string $name     nombre
     * @return string           slug
     */
    public static function generateUniqueSlug($name)
    {
        $slug = str_slug(trim($name));

        $slug_is_not_unique = true;
        $gluter = "-";

        while ($slug_is_not_unique) {
            if (!static::slugExist($slug)) {
                $slug_is_not_unique = false;
            }else {
                $slug.= $gluter.rand(0,9);
            }
            $gluter = "";
        }

        return $slug;
    }

    public static function slugExist($slug)
    {
        return DB::table($this->table)->where('slug', $slug)->count() > 0;
    }

    public function scopeGetModelBySlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }

    public static function getObjectBySlug($slug)
    {
        $models = static::getModelBySlug($slug)->get();
        return $models->count() > 0 ? $models->first() : null;
    }

}
