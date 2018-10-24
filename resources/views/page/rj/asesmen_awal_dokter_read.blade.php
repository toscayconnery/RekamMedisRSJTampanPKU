<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.headscript')
</head>

<body>
  <section id="container" class="">
    @include('layouts.header')
    @include('layouts.sidebar')
  </section>
  <!-- container section start -->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL RAWAT JALAN</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Asesmen Awal Rawat Jalan
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_document_alt"></i> Dokumen</th>
                  <th><i class="icon_calendar"></i> Tanggal Pengisian</th>
                  <th><i class="icon_profile"></i> Pengisi</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
                <tr>
                  <td>Diisi oleh Perawat</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_perawat"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="{{url('')}}/view_rj_asesmen_awal_perawat"><i class="icon_check_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Diisi oleh Dokter</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_dokter"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="{{url('')}}/view_rj_asesmen_awal_dokter"><i class="icon_check_alt2"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <form class="form-horizontal " method="post" action="rj_asesmen_awal_dokter">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Data Medis
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Wawancara dengan </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pewawancara">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluhan Utama </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keluhan_utama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Penyakit Sekarang </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="riwayat_penyakit_sekarang">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Penyakit Dahulu (gangguan kejiwaan) </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="riwayat_penyakit_dahulu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat Napza </label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_napza" value="false" checked>
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_napza" value="true">
                        Ada
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lama Pemakaian</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="lama_pemakaian">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Cara Pemakaian</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="cara_pemakaian">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Latar Belakang Pemakaian</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="latar_belakang_pemakaian">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Pendidikan </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="riwayat_pendidikan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Pekerjaan </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="riwayat_pekerjaan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Perkawinan </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="riwayat_perkawinan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat Penyakit Lainnya</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_1">
                        Hipertensi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_2">
                        Liver
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_3">
                        Diabetes
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_4">
                        Cancer
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_5">
                        Jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_6">
                        TBC
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_7">
                        Stroke
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_8">
                        Glaukoma
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_9">
                        Dialysis
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_10">
                        STD
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_11">
                        Asthma
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_12">
                        Perdarahan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_13">
                        Kejang
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_14">
                        Lainnya 
                      </label>
                    </div>

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat Operasi</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_operasi" value="false" checked>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_operasi" value="true">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="jenis_operasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kapan </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="waktu_operasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat transfusi </label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_tranfusi" value="false" checked>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_tranfusi" value="true" checked>
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Reaksi Transfusi </label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="reaksi_tranfusi" value="false" checked>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="reaksi_tranfusi" value="true">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Reaksi yang timbul </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="reaksi_timbul">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Penyakit dalam keluarga  </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="riwayat_penyakit_dalam_keluarga">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Pengobatan </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="riwayat_pengobatan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Alergi </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="riwayat_alergi">
                  </div>
                </div>

              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Obat yang Diminum Saat Ini
              </header>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 3%">No.</th>
                    <th style="width: 38%">Nama Obat</th>
                    <th style="width: 11%">Dibawa</th>
                    <th style="width: 7%">Jumlah</th>
                    <th style="width: 11%">Tidak Dibawa</th>
                    <th style="width: 27%">Keterangan</th>
                    <th style="width: 3%">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td><input type="text" class="form-control" name="nama_obat"></td>
                    <td><input type="text" class="form-control" name="dibawa"></td>
                    <td><input type="text" class="form-control" name="jumlah"></td>
                    <td><input type="text" class="form-control" name="tidak_dibawa"></td>
                    <td><input type="text" class="form-control" name="keterangan"></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#</td>
                    <td colspan="6">
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i> Tambah</a>
                        <button class="btn btn-success" type="submit"><i class="icon_check_alt2"></i> Simpan</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Pemeriksaan Fisik
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kepala</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kepala">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Leher</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="leher">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dada</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dada">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jantung</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jantung">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Paru-paru</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="paru">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perut</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="perut">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anggota Gerak</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="anggota_gerak">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Psikiatri
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h4>Keadaan Umum</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penampilan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="penampilan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kesadaran</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kesadaran">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Orientasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="orientasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sikap & Tingkah laku </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="sikap">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Gangguan Berpikir</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Proses Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="proses_pikir">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bentuk Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="bentuk_pikir">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Isi Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="isi_pikir">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Alam Perasaan</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mood </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="mood">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Afek </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="afek">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Persepsi</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Halusinasi </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="halusinasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ilusi </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ilusi">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Fungsi Intelektual</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Konsentrasi  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="konsentrasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Ingat  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ingat">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pikiran Abstrak  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="abstrak">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pengendalian Impuls  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="impuls">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Nilai  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nilai">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tilikan/Insight  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tilikan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Taraf dapat dipercaya  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dipercaya">
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                Status Neurologi
              </header>
              <div class="panel-body">

                <div class="col-lg-2"></div><h4>Pemeriksaan Khusus</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Meningeal Sight   </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="meningeal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hasil Pemeriksaan Nervus Cranialis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nervus">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pemeriksaan Sistem Motorik</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="motorik">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Koordinasi Gait Keseimbangan (fungsi cerebellum)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="cerebellum">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Vegetatif </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="vegetatif">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Instrumen Penilaian
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">P4. GADUH GELISAH</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="1">
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="2">
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="3">
                        Ringan – sedikit agitatif, waspada berlebihan, atau sedikit mudah terangsang selama wawancara, tanpa episode yang jelas dari gaduh gelisah atau labilitas alam perasaan yang mecolok. Pembicaraan mungkin sedikit mendesah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="4">
                        Sedang – agitasi atau mudah terangsang yang jelas, ledakan-ledakan episodik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="5">
                        Agak berat – hiperaktivitas yang bermakna, sering terjadi ledakan-leadakan atau aktivitas mototrik, sulit untuk tetap duduk
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="6">
                        Berat – gaduh gelisah yang mencolok mempengaruhi fungsi sehari-hari seperti makan  dan tidur
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="7">
                        Sangat berat – gaduh gelisah yang mencolok, mempengaruhi kegiatan makan dan tidur, serta jelas tidak memungkinkan interaksi interpersonal. Percepatan dan pembicaraan dan aktivitas motorik dapat menimbulkan inkoherensi dan kelelahan
                      </label>
                    </div>
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">G8. KETIDAKOPERATIFAN</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="1">
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="2">
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="3">
                        Ringan – patuh tapi disertai sikap marah tidak sabar atau sarkasme, mungkin ada penolakan yang tidak mengganggu terhadap penyelidikan yang sensitif selama wawancara
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="4">
                        Sedang – kadang-kadang terdapat penolakan langsung untuk patuh, memproyeksikan hostilitas, defensif atau bersifat negatif tetapi biasanya masih dapat diatasi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="5">
                        Agak berat – seringkali tidak patuh, jelas defensif atau iritabilitas terhadap pewawancara dan mungkin tidak bersedia menghadapi banyak pertanyaan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="6">
                        Berat – sangat tidak kooperatif, negativistik dan suka membangkang. Menolak untuk patuh, tidak mau memulai atau mengikuti wawancara sepenuhnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="7">
                        Sangat berat – resistensi aktif, menolak untuk ikut dalam aktivitas sosial apapun, mengurus kebersihan diri, bercakap-cakap dengan keluarga atau staf dan bahkan untuk berpartisipasi dalam wawancara singkat
                      </label>
                    </div>
                  </div>

                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">P7. PERMUSUHAN</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="1">
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="2">
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="3">
                        Ringan – melampiaskan kemarahan secara tidak langsung atau ditahan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="4">
                        Sedang – sikap bermusuhan yang nyata
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="5">
                        Agak berat – pasien sangat mudah marah dan kadang-kadang memaki dengan kata-kata kasar atau mengancam
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="6">
                        Berat – tidak kooperatif dan mencaci maki dengan kasar atau mengancam, dapat beringas dan merusak tetapi tidak menyerang orang lain secara fisik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="7">
                        Sangat berat – kemarahan yang hebat berakibat sangat tidak kooperatif, menghalangi interaksi, atau secara episodik melakukan penyerangan fisik terhadap orang lain
                      </label>
                    </div>
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">G14. PENGENDALIAN IMPULS</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="1">
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="2">
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="3">
                        Ringan – cenderung mudah marah dan frustasi bila menghadapi stres atau pemuasannya ditolak tetapi jarang bertindak impulsif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="4">
                        Sedang – dengan provokasi yang minimal, pasien menjadi marah dan mencaci maki. Mungkin sekali-kali mengancam, merusak atau terdapat satu atau dua episode yang melibatkan konfrontasi fisik atau perselisihan ringan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="5">
                        Agak berat – memperlihatkan episode impulsif yang berulang, termasuk mencaci maki, merusak harta benda atau ancaman fisik. Mungkin ada satu atau dua episode yang melibatkan serangn serius
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="6">
                        Berat – agresif secara impulsif, mengancam, menuntut dan merusak, tanpa pertimbangan terhadap konsekuensinya. Menunjukkan perilaku menyerang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="7">
                        Sangat berat – memperlihatkan serangan kebrutalan dan berbahaya
                      </label>
                    </div>
                  </div>

                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">G4. Ketegangan</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="1">
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="2">
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="3">
                        Ringan – postur dan gerakan-gerakan menunjukkan kekhawatiran ringan, ketidaktenangan yang sekali-kali, perubahan posisi, atau tremor tangan yang halus dan cepat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="4">
                        Sedang – nyata-nyata gelisah seperti perilaku tidak tenang, tremor tangan yang nyata, keringat berlebihan, atau manerisme karena gugup
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="5">
                        Agak berat – ketegangan yang berat, manifestasi seperti gemetar karena gugup, keringat sangat berlebihan dan ketidaktenangan, perilaku selama wawancara tidak terpengaruh secara bermakna
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="6">
                        Berat – Ketegangan berat, taraf interaksi terganggu. Misalnya terus-menerus bergerak, tidak dapat tetap duduk, hiperventilasi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="7">
                        Sangat berat – ketegangan sangat mencolok, tanda panik atau percepatan gerakan motorik kaar, ketidak mampuan tetap duduk > 1 menit yang menyebabkan percakapan tidak mungkin diteruskan
                      </label>
                    </div>
                  </div>

                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Bangsal   </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="bangsal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pemeriksaan</label>
                  <div class="col-sm-8">
                    <input type="text" id="dp1" size="16" class="form-control" name="tanggal_pemeriksaan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Panss Ec</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="panss_ec">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gaff</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="gaff">
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                Diagnosis dan Tindakan Terapi
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h4>Diagnosis Psikiatri</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 1</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="axis1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 2</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="axis2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axies 3</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="axis3">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 4</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="axis4">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 5</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="axis5">
                  </div>
                </div>
                <h4>Diagnosis Non Psikiatri</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosis Utama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="utama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosis Sekunder</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="sekunder">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="jam">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tindakan Terapi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tindakan_terapi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daftar Masalah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="daftar_masalah">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Tindak Lanjut
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindak Lanjut</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tindak_lanjut" value="1">
                        Pulang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tindak_lanjut" value="2">
                        Dirawat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tindak_lanjut" value="3">
                        Menolak dirawat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tindak_lanjut" value="4">
                        Dirujuk
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jika pulang</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="perlu_dikontrol" value="false">
                        Tidak perlu kontrol
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="perlu_dikontrol" value="true">
                        Perlu Kontrol
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perlu kontrol pada tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" id="dp2" size="16" class="form-control" name="tanggal_kontrol">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dirawat di ruang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ruangan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Indikasi Rawat Inap</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="indikasi_rawat_inap">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alasan menolak dirawat</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_menolak" value="Masalah biaya">
                        Masalah biaya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_menolak" value="Masalah lokasi rumah">
                        Masalah lokasi rumah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_menolak" value="Kondisi pasien">
                        Kondisi pasien
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_menolak" value="Lainnya">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alasan_lainnya">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dirujuk ke</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dirujuk_ke">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alasan Rujuk</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_dirujuk" value="tempat penuh">
                        Tempat Penuh
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_dirujuk" value="Perlu fasilitas lebih">
                        Perlu Fasilitas Lebih
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_dirujuk" value="Permintaan pasien/keluarga">
                        Permintaan Pasien/Keluarga
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Kondisi Pasien Saat Keluar</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="kesadaran_1"> Compos Mentis
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="kesadaran_2"> Apatis
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="kesadaran_3"> Delirium
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="kesadaran_4"> Sopor
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="kesadaran_5"> Koma
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="kesadaran_6"> GCS
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="kesadaran_7"> Lain-lain
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kesadaran_lainnya">
                  </div>
                </div>
                <div class="col-lg-2"></div><h5>Tanda-tanda vital</h5>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tensi</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="tensi">
                  </div>

                  <label class="col-sm-2 control-label">Nadi</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="nadi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pernafasan</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="pernafasan">
                  </div>
                  <label class="col-sm-2 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="suhu">
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </section>
          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')

  </body>
  <html>