<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mascot
 *
 * @property $id
 * @property $name
 * @property $tapy_animal
 * @property $owner_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Citation[] $citations
 * @property Owner $owner
 * @property Report[] $reports
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mascot extends Model
{
    
    static $rules = [
		'name' => 'required',
		'tapy_animal' => 'required',
		'owner_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','tapy_animal','owner_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citations()
    {
        return $this->hasMany('App\Models\Citation', 'mascot_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner()
    {
        return $this->hasOne('App\Models\Owner', 'id', 'owner_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reports()
    {
        return $this->hasMany('App\Models\Report', 'mascot_id', 'id');
    }
    

}
