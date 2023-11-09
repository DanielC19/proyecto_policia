<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EquipmentLog
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
class EquipmentLog extends Model
{
  protected $table = 'equipment_log';

  protected $perPage = 20;
}
