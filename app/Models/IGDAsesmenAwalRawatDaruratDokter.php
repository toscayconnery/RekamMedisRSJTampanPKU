<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IGDAsesmenAwalRawatDaruratDokter extends Model
{
    protected $table = 'igd_asesmen_awal_rawat_darurat_dokter';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'pewawancara',
        'keluhan_utama',
        'riwayat_penyakit_sekarang',
        'riwayat_penyakit_dahulu',
        'riwayat_napza',
        'lama_pemakaian',
        'jenis_zat',
        'cara_pemakaian',
        'latar_belakang_pemakaian',
        'kepribadian_sebelum_sakit',
        'riwayat_pendidikan',
        'riwayat_pekerjaan',
        'riwayat_perkawinan',
        'riwayat_penyakit_lain',
        'text_riwayat_penyakit_lain',
        'riwayat_operasi',
        'jenis_operasi',
        'waktu_operasi',
        'riwayat_tranfusi',
        'reaksi_tranfusi',
        'reaksi_tranfusi_timbul',
        'riwayat_penyakit_keluarga',
        'riwayat_pengobatan',
        'riwayat_alergi',
        'kepala',
        'leher',
        'dada',
        'jantung',
        'paru',
        'perut',
        'anggota_gerak',
        'status_lokalis',
        'penampilan',
        'kesadaran',
        'orientasi',
        'sikap_tingkah_laku',
        'proses_pikir',
        'bentuk_pikir',
        'isi_pikir',
        'mood',
        'afek',
        'halusinasi',
        'ilusi',
        'daya_konsentrasi',
        'daya_ingat',
        'pikiran_abstrak',
        'pengendalian_impuls',
        'daya_nilai',
        'tilikan',
        'taraf_dipercaya',
        'meningeal_sight',
        'nervus_cranialis',
        'sistem_motorik',
        'cerebellum',
        'vegetatif',
        'pemeriksaan_laboratorium',
        'hasil_laboratorium',
        'keterangan_laboratorium',
        'jam_pemeriksaan_laboratorium',
        'jam_hasil_laboratorium',
        'pemeriksaan_radiologi',
        'hasil_radiologi',
        'keterangan_radiologi',
        'jam_pemeriksaan_radiologi',
        'jam_hasil_radiologi',
        'pemeriksaan_ekg',
        'hasil_ekg',
        'keterangan_ekg',
        'jam_pemeriksaan_ekg',
        'jam_hasil_ekg',
        'pemeriksaan_lain',
        'hasil_lain',
        'keterangan_lain',
        'jam_pemeriksaan_lain',
        'jam_hasil_lain',
        'panssec',
        'gaff',
        'p4',
        'g8',
        'p7',
        'g14',
        'g4',
        'bangsal',
        'tanggal_pemeriksaan',
        'axis_1',
        'axis_2',
        'axis_3',
        'axis_4',
        'axis_5',
        'diagnosis_utama',
        'diagnosis_sekunder',
        'daftar_masalah',
        'tindak_lanjut',
        'kontrol',
        'tanggal_kontrol',
        'dirawat_di_ruang',
        'indikasi_rawat_inap',
        'alasan_menolak',
        'alasan_menolak_lainnya',
        'dirujuk_ke',
        'alasan_rujuk',
        'doa',
        'jam_keluar',
        'kesadaran_saat_keluar',
        'gcs',
        'kesadaran_lainnya',
        'tensi',
        'nadi',
        'pernafasan',
        'suhu',
    ];
}