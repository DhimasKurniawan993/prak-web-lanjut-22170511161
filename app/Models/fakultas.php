<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'fakultas';

    public function getFakultas(){
        return $this->all();
    }

    public function fakultas(){
        return $this->hasMany(UserModel::class, 'jurusan_id');
    }
}
