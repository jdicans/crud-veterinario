<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Owner
 *
 * @property $id
 * @property $name
 * @property $emeil
 * @property $number
 * @property $CC
 * @property $created_at
 * @property $updated_at
 *
 * @property Citation[] $citations
 * @property Mascot[] $mascots
 * @property Report[] $reports
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Owner extends Model
{
    
    static $rules = [
		'name' => 'required',
		'emeil' => 'required',
		'number' => 'required',
		'CC' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','emeil','number','CC'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citations()
    {
        return $this->hasMany('App\Models\Citation', 'owner_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mascots()
    {
        return $this->hasMany('App\Models\Mascot', 'owner_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reports()
    {
        return $this->hasMany('App\Models\Report', 'owner_id', 'id');
    }
    

}
