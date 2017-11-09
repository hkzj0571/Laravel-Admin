<?php

namespace App\Models;

use Route;
use App\Models\Traits\Helpers;
use App\Exceptions\RouteNotFoundException;

use Illuminate\Database\Eloquent\Model;

class Router extends Model
{
    use Helpers;

    protected $guarded = [];

    /**
     * @param $query
     * @param int $parent
     * @return mixed
     */
    public function scopeTops($query, $parent = 0)
    {
        return $query->where('parent_id', $parent);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function routers()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(self::class);
    }

    /**
     * @param $date
     * @return mixed
     */
    public function getCreatedAtAttribute($date)
    {
        return $this->hommization($date);
    }

    /**
     * @param $date
     * @return mixed
     */
    public function getUpdatedAtAttribute($date)
    {
        return $this->hommization($date);
    }
}
