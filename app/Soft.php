<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Soft
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soft newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soft newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soft query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soft whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soft whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soft whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soft whereUpdatedAt($value)
 */
class Soft extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];
}
