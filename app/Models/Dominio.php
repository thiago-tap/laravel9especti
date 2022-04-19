<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dominio extends Model
{
    use HasFactory;

    protected $fillable = [
        'dominio',
        'idTitular',
        'nomeTitular',
        'emailTitular',
        'idTecnico',
        'nomeTecnico',
        'emailTecnico',
        'idFinanceiro',
        'nomeFinanceiro',
        'emailFinanceiro',
        'servidoresDNS',
        'expiracao',
        'status',
        'a',
        'mx',
        'cname',
        'ns',
        'soa',
        'txt'
    ];
}
