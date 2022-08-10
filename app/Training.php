<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = "training";

    protected $fillable = ['nim', 'ipk', 'diterimaBulanStlhLulus', 'masaStudiBulan', 'masaStudiTahun', 'fakultas', 'kemampuanBIng', 'pengalamanMagang', 'jenisPekerjaanPertama', 'hubStudidgnPekerjaan', 'ikutOrganisasi'];

}
