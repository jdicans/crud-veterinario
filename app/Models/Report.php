<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Report
 *
 * @property $id
 * @property $characteristics
 * @property $date_entered
 * @property $date_deperture
 * @property $time_entered
 * @property $time_deperture
 * @property $general_note
 * @property $important_note
 * @property $price
 * @property $consultation_id
 * @property $professional_id
 * @property $mascot_id
 * @property $owner_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultation $consultation
 * @property Mascot $mascot
 * @property Owner $owner
 * @property Professional $professional
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Report extends Model
{
    
    static $rules = [
		'characteristics' => 'required',
		'date_entered' => 'required',
		'date_deperture' => 'required',
		'time_entered' => 'required',
		'time_deperture' => 'required',
		'general_note' => 'required',
		'important_note' => 'required',
		'price' => 'required',
		'consultation_id' => 'required',
		'professional_id' => 'required',
		'mascot_id' => 'required',
		'owner_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['characteristics','date_entered','date_deperture','time_entered','time_deperture','general_note','important_note','price','consultation_id','professional_id','mascot_id','owner_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consultation()
    {
        return $this->hasOne('App\Models\Consultation', 'id', 'consultation_id');
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
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function professional()
    {
        return $this->hasOne('App\Models\Professional', 'id', 'professional_id');
    }
    

}
