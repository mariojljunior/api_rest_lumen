<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        "name",
        "telephone",
        "cpf_cnpj",
        "zip_code",
        "street",
        "district",
        "city",
        "state",
        "ibge"
    ];
}