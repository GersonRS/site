<?php

namespace Site\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Company extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name',
        'lat',
        'lng',
        'website',
        'mail',
        'address'
    ];

    public function order()
    {
        return $this->hasMany(Order::Class);

    }

    public function category()
    {
        return $this->hasMany(Category::Class);
    }

    public function users()
    {
        return $this->hasMany(CompanyUser::class);
    }

}
