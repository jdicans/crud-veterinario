<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consultation
 *
 * @property $id
 * @property $realization
 * @property $treatment
 * @property $citation_id
 * @property $professional_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Citation $citation
 * @property Professional $professional
 * @property Report[] $reports
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consultation extends Model
{
    
    static $rules = [
		'realization' => 'required',
		'treatment' => 'required',
		'citation_id' => 'required',
		'professional_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['realization','treatment','citation_id','professional_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function citation()
    {
        return $this->hasOne('App\Models\Citation', 'id', 'citation_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function professional()
    {
        return $this->hasOne('App\Models\Professional', 'id', 'professional_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reports()
    {
        return $this->hasMany('App\Models\Report', 'consultation_id', 'id');
    }
    

}
