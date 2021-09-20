<?php

namespace App\Models;
use App\Http\Libraries\Datagrid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'warga';

    protected $fillable = [
    	'nama',
    	'alamat',
    	'tempat_lahir',
    	'tanggal_lahir',
    	'kontak',
    	'rt',
    	'rw',
    ];
}