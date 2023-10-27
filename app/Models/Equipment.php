<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipment
 *
 * @property $id
 * @property $officer_id
 * @property $name
 * @property $type
 * @property $provider
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipment extends Model
{
    static $rules = [
		'officer_id' => 'required',
		'name' => 'required',
		'type' => 'required',
		'provider' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['officer_id','name','type','provider'];

    public function officer() {
      return $this->belongsTo(Officer::class);
    }

}
