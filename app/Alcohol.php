<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Alcohol
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alcohol newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alcohol newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alcohol query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alcohol whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alcohol whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alcohol whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alcohol whereUpdatedAt($value)
 */
class Alcohol extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];
}
