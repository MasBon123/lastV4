<?php

namespace App\Models;

use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;
    protected $table = "ruangs";
    protected $visible = ['keterangan'];

    protected $fillable = ['keterangan'];

    public $timestamps = true;

    public function pendaftaran()
    {
        return $this->hasMany('App\Models\Pendaftaran', 'id_ruang');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($ruang) {
            if ($ruang->pendaftaran->count() > 0) {
                Alert::error('Failed', 'Data not deleted');
                return false;
            }
        });
    }

}
