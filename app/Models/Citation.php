<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Citation
 *
 * @property $id
 * @property $date
 * @property $time
 * @property $query_type
 * @property $mascot_id
 * @property $owner_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultation[] $consultations
 * @property Mascot $mascot
 * @property Owner $owner
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Citation extends Model
{
    
    static $rules = [
		'date' => 'required',
		'time' => 'required',
		'query_type' => 'required',
		'mascot_id' => 'required',
		'owner_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date','time','query_type','mascot_id','owner_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->hasMany('App\Models\Consultation', 'citation_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mascot()
    {
        return $this->hasOne('App\Models\Mascot', 'id', 'mascot_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner()
    {
        return $this->hasOne('App\Models\Owner', 'id', 'owner_id');
    }
    

}
