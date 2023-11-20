<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Professional
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $speciality
 * @property $emeil
 * @property $number
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultation[] $consultations
 * @property Report[] $reports
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Professional extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'speciality' => 'required',
		'emeil' => 'required',
		'number' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','speciality','emeil','number'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->hasMany('App\Models\Consultation', 'professional_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reports()
    {
        return $this->hasMany('App\Models\Report', 'professional_id', 'id');
    }
    

}
