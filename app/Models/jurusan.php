<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'jurusan';

    public function getJurusan(){
        return $this->all();
    }

    public function jurusan(){
        return $this->belongaTo(UserModel::class, 'Fakultas');
    }
}
