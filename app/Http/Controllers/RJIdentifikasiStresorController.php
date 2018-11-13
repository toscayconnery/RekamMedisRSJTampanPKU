<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJIdentifikasiStresor;
use App\Models\ListDocument;
use Session;

class RJIdentifikasiStresorController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Identifikasi Stresor';
    }

    public function get_rj_identifikasi_stresor()
    {
    	return view('page.rj.identifikasi_stresor');
    }

    public function post_rj_identifikasi_stresor(Request $request)
    {
    	$data = new RJIdentifikasiStresor;
        $id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->lingkungan_fisik = $request->lingkungan_fisik;
    	$data->sosial_ekonomi_politik = $request->sosial_ekonomi_politik;
    	$data->keluarga = $request->keluarga;
    	$data->pekerjaan_karir = $request->pekerjaan_karir;
    	$data->hubungan_pribadi_lingkungan = $request->hubungan_pribadi_lingkungan;
    	$data->simptom = $request->simptom;
    	$data->cara_mengatasi = $request->cara_mengatasi;
    	$data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_identifikasi_stresor = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_rj_identifikasi_stresor_data()
    {
        $pasien = RJIdentifikasiStresor::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['lingkungan_fisik'] = $pasien->lingkungan_fisik;
        $this->data['sosial_ekonomi_politik'] = $pasien->sosial_ekonomi_politik;
        $this->data['keluarga'] = $pasien->keluarga;
        $this->data['pekerjaan_karir'] = $pasien->pekerjaan_karir;
        $this->data['hubungan_pribadi_lingkungan'] = $pasien->hubungan_pribadi_lingkungan;
        $this->data['simptom'] = $pasien->simptom;
        $this->data['cara_mengatasi'] = $pasien->cara_mengatasi;

    }

    public function get_rj_identifikasi_stresor_read()
    {
        $this->get_rj_identifikasi_stresor_data();
        return view('page.rj.identifikasi_stresor_read', $this->data);

    }

    public function get_rj_identifikasi_stresor_edit()
    {
        $this->get_rj_identifikasi_stresor_data();
        return view('page.rj.identifikasi_stresor_edit', $this->data);
    }

    public function post_rj_identifikasi_stresor_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJIdentifikasiStresor::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->lingkungan_fisik = $request->lingkungan_fisik;
        $data->sosial_ekonomi_politik = $request->sosial_ekonomi_politik;
        $data->keluarga = $request->keluarga;
        $data->pekerjaan_karir = $request->pekerjaan_karir;
        $data->hubungan_pribadi_lingkungan = $request->hubungan_pribadi_lingkungan;
        $data->simptom = $request->simptom;
        $data->cara_mengatasi = $request->cara_mengatasi;
        $data->save();
        return redirect('daftar_dokumen');
    }
}