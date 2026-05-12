<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['nome']; // com isso, você diz quais campos serão permitidos para fazer essa atribuição em massa, que poderia ser nome, qntd_ep, tempo, etc...

    //é uma lista de permissões (whitelist) definida no Model, indicando quais campos da tabela do banco de dados podem ser preenchidos automaticamente via atribuição em massa (mass assignment)
}
