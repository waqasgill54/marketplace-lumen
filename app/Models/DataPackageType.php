<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPackageType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'data_package_types';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
