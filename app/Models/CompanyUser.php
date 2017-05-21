<?php

namespace Site\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class CompanyUser extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'user_id',
        'establishment_id',
        'admin'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
