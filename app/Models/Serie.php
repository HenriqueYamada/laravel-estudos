<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Serie extends Model
{
    protected $with = ['temporadas'];
    protected $fillable = ['nome']; // com isso, você diz quais campos serão permitidos para fazer essa atribuição em massa, que poderia ser nome, qntd_ep, tempo, etc...

    //é uma lista de permissões (whitelist) definida no Model, indicando quais campos da tabela do banco de dados podem ser preenchidos automaticamente via atribuição em massa (mass assignment)


    public function temporadas() {
        return $this->hasMany(Season::class, 'series_id');
    }    

    protected static function booted() {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome');
        });
    }

    /*public function scopeActive(Builder $query) {
        return $query->where('active', true)
    }*/
}