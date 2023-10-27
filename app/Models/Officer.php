<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Officer
 *
 * @property $id
 * @property $name
 * @property $police_id
 * @property $birth
 * @property $address
 * @property $rh
 * @property $rank
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Officer extends Model
{

    static $rules = [
		'id' => 'required',
		'name' => 'required',
		'police_id' => 'required',
		'birth' => 'required',
		'address' => 'required',
		'rh' => 'required',
		'rank' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name','police_id','birth','address','rh','rank'];



}
