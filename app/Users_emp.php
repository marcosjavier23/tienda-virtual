<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_emp extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'type_document_emp', 'nro_document_emp', 'name_emp','tlf_local_emp', 'tlf_movil_emp','fecha_contrato_ini','fecha_contrato_final', 'email', 'password',
    ];

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}


