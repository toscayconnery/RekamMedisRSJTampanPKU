<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJAsesmenKeperawatan extends Model
{
    protected $table = 'rj_asesmen_keperawatan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
    	'id_regis',
        'id_user',
        'alasan_kunjungan',
        'hubungan_keluarga',
        'status_psikososial',
        'status_psikologis_lain',
        'dilaporkan_ke',
        'konsep_diri',
        'persepsi',
        'motorik',
        'penampilan',
        'pikir',
        'perasaan',
        'status_fungsional',
        'perlu_bantuan',
        'waktu_laporan',
        'td',
        'tb',
        'nadi',
        'bb',
        'pernafasan',
        'golongan_darah',
        'suhu',
        'must_1',
        'must_2',
        'must_3',
        'bb_berkurang',
        'diagnosis_khusus',
        'skor_must',
        'sk_1',
        'sk_2',
        'sk_3',
        'sk_4',
        'skor_sk',
        'penyakit_malnutrisi',
        'pemberitahuan_fg',
        'waktu_pemberitahuan_fg',
        'tingkat',
        'skala',
        'lokasi',
        'durasi',
        'frekuensi',
        'hilang',
        'nyeri_hilang_input_text',
        'pemberitahuan_ny',
        'waktu_pemberitahuan_ny',
        'jenis_resiko_jatuh',
        'usia',
        'diagnosis_hd',
        'gangguan_kognitif',
        'faktor_lingkungan',
        'waktu_respon_obat',
        'penggunaan_obat',
        'riwayat_jatuh_mrs',
        'diagnosis_sekunder',
        'alat_bantu',
        'terpasang_infus',
        'gaya_berjalan',
        'status_mental_mrs',
        'umur_edm',
        'status_mental_edm',
        'eliminasi',
        'pengobatan',
        'diagnosa',
        'ambulasi',
        'nutrisi',
        'gangguan_pola_tidur',
        'riwayat_jatuh_edm',
        'umum',
        'umum_lainnya',
        'jiwa',
        'jiwa_lainnya',
        'obat_parental',
        'ekg',
        'implementasi',
        'evaluasi',
    ];
}
