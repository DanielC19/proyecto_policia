<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfficersLog
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
class OfficersLog extends Model
{
  protected $table = 'officers_log';

  protected $perPage = 20;
}
