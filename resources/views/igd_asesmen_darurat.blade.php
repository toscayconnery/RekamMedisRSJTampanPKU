<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Asesmen Awal Pasien Rawat Darurat</title>

  <!-- Bootstrap CSS -->
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{url('')}}/admin_bootstrap/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{url('')}}/admin_bootstrap/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{url('')}}/admin_bootstrap/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{url('')}}/admin_bootstrap/css/owl.carousel.css" type="text/css">
  <link href="{{url('')}}/admin_bootstrap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!--datepicker styles -->
  <link href="{{url('')}}/admin_bootstrap/css/daterangepicker.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{url('')}}/admin_bootstrap/css/fullcalendar.css">
  <link href="{{url('')}}/admin_bootstrap/css/widgets.css" rel="stylesheet">
  <link href="{{url('')}}/admin_bootstrap/css/style.css" rel="stylesheet">
  <link href="{{url('')}}/admin_bootstrap/css/style-responsive.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/xcharts.min.css" rel=" stylesheet">
  <link href="{{url('')}}/admin_bootstrap/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN RAWAT DARURAT</h3>
            <!--<ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-file-text-o"></i>Form elements</li>
            </ol>-->
          </div>
        </div>
        <div class="panel-body bio-graph-info">
          <h1><input type="text" name="no_rm" placeholder="No. RM"></h1>
          <div class="row">
            <div class="bio-row">
              <p><span>Nama Pasien </span>: [Nama Pasien] </p>
            </div>
            <div class="bio-row">
              <p><span>Tanggal Lahir</span>: 27 Agustus 1996</p>
            </div>
            <div class="bio-row">
              <p><span>Jenis Kelamin </span>: L</p>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Dokumen Asesmen Awal Pasien Rawat Darurat
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
                    <td>Asesmen Awal Pasien Rawat Darurat</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
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

            <section class="panel">
              <header class="panel-heading">
                Data Medis
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Kedatangan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam Kedatangan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                  	<label class="control-label col-sm-2">Cara Datang</label>
                    	<div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="q1" id="optionsRadios1" value="" checked>
                                                      Datang sendiri
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="q1" id="optionsRadios1" value="" checked>
                                                      Diantar
                                                  </label>
                          </div>
                    	</div>
                   </div>

					<div class="form-group">
                        <label class="control-label col-sm-2">Transportasi ke IGD</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="q2" id="optionsRadios1" value="" checked>
                                                      Kendaraan Pribadi
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="q2" id="optionsRadios1" value="" checked>
                                                      Ambulance
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="q2" id="optionsRadios1" value="" checked>
                                                      Angkutan Umum
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="q2" id="optionsRadios1" value="" checked>
                                                      Lainnya
                                                  </label>
                          </div>

                        </div>
                      </div>
                  	   <div class="form-group">
                        <label class="control-label col-sm-2">Rujukan dari</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="q3" id="optionsRadios1" value="yes" checked>
                                                      Puskesmas/Dokter Keluarga
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="q3" id="optionsRadios1" value="no" checked>
                                                      Rumah Sakit
                                                  </label>
                          </div>
                        </div>
                      </div>

	                  <div class="form-group">
	                    <label class="col-sm-2 control-label">Nama Rumah Sakit</label>
	                    <div class="col-sm-8">
	                      <input type="text" class="form-control">
	                    </div>
	                  </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2">Dikirim ke IGD</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="q4" id="optionsRadios1" value="yes" checked>
                                                      Dengan disertai VISUM ET REPERTUM PSIKIATRIKUM
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="q4" id="optionsRadios1" value="no" checked>
                                                      Tidak disertai VISUM ET REPERTUM PSIKIATRIKUM
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
	                    <label class="control-label col-lg-2" for="inputSuccess">Macam Kasus</label>
	                    <div class="col-lg-4">
	                      <div class="checkbox">
	                        <label>
	                          <input type="checkbox" value="">
	                          Jiwa
	                        </label>
	                      </div>
	                      <div class="checkbox">
	                        <label>
	                          <input type="checkbox" value="">
	                          KLL
	                        </label>
	                      </div>
	                      <div class="checkbox">
	                        <label>
	                          <input type="checkbox" value="">
	                          KDRT
	                        </label>
	                      </div>
	                      <div class="checkbox">
	                        <label>
	                          <input type="checkbox" value="">
	                          Kecelakaan Kerja
	                        </label>
	                      </div>
	                      <div class="checkbox">
	                        <label>
	                          <input type="checkbox" value="">
	                          Stroke
	                        </label>
	                      </div>
	                      <div class="checkbox">
	                        <label>
	                          <input type="checkbox" value="">
	                          Trauma
	                        </label>
	                      </div>
	                      <div class="checkbox">
	                        <label>
	                          <input type="checkbox" value="">
	                          Non Trauma
	                        </label>
	                      </div>
	                      <div class="checkbox">
	                        <label>
	                          <input type="checkbox" value="">
	                          Kekerasaan Anak
	                        </label>
	                      </div>
	                    </div>
	                  </div>

	              <h3>Keadaan Pra Hospital</h3>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tensi</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nadi</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pernafasan</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Suhu</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">TB</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">BB</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                <h3>GCS</h3>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">E</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">V</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">M</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                 </div>

            	<div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Pra Hospital</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          CPR/RJP
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          O2
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Infus
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          NGT
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          ETT
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Bebat Tekan
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Bidai
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Kateter Urin
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Lain-lain
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Obat-Obatan
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Daftar Obat-obatan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Alasan Kunjungan
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alasan Kunjungan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>
            <form class="form-horizontal " method="post" action="rj_asesmen_awal_fisik_gizi">
              {{ csrf_field() }}
              <section class="panel">
                <header class="panel-heading">
                  Pemeriksaan Fisik dan Screening Gizi
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">TD</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="td">
                    </div>
                    <label class="col-sm-1 control-label">TB</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="tb">
                    </div>
                    <label class="col-sm-1 control-label">Nadi</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="nadi">
                    </div>
                    <label class="col-sm-1 control-label">BB</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="bb">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pernafasan</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="pernafasan">
                    </div>
                    <label class="col-sm-1 control-label">Golongan Darah</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="golongan_darah">
                    </div>
                    <label class="col-sm-1 control-label">Suhu</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="suhu">
                    </div>
                  </div>

                  <div class="col-lg-2"></div><h5>Berdasarkan Malnutrition Universal Screening Tool (MUST)</h5>
                  <div class="form-group" id="must_1_form">
                    <label class="control-label col-lg-2" for="inputSuccess">Apakah pasien mengalami penurunan BB yang tidak diinginkan dalam 6 bulan terakhir?</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="must_1" id="must_1_1" value="0" checked>
                          Tidak ada penurunan berat badan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="must_1" id="must_1_2" value="2">
                          Tidak yakin/ tidak tahu/ terasa baju longgar 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="must_1" id="must_1_3" value="0">
                          Ya
                        </label>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="form-group" id="must_1_bb_berkurang">
                    <label class="control-label col-lg-2" for="inputSuccess">Jika ya berapa penurunan berat badan tersebut?</label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15" name="must_1_input_bb_berkurang">
                        <option value="1">1 – 5 kg </option>
                        <option value="2">6 – 10 kg </option>
                        <option value="3">11 – 15 kg </option>
                        <option value="4">> - 15 kg </option>
                      </select>
                    </div>
                  </div> --}}

                  <div class="form-group" id="must_23_form">
                    <label class="control-label col-lg-2" for="inputSuccess">Apakah asupan makan berkurang karena tidak nafsu makan?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="must_2" value="0" checked>
                          Tidak 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="must_2" value="1" checked>
                          Ya 
                        </label>
                      </div>
                    </div>

                    <label class="control-label col-lg-3" for="inputSuccess">Pasien dengan diagnosis khusus?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="must_3" id="must_3_1" value="True" checked>
                          Ya 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="must_3" id="must_3_2" value="False" checked>
                          Tidak 
                        </label>
                      </div>
                    </div>
                  </div>

                  {{-- <div class="form-group" id="list_diagnosis_khusus">
                    <label class="control-label col-lg-2" for="inputSuccess"></label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" name="diagnosis_khusus_1"> DM
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" name="diagnosis_khusus_2"> Kemoterapi
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" name="diagnosis_khusus_3"> Hemodialisa
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" name="diagnosis_khusus_4"> Geriatri
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" name="diagnosis_khusus_5"> Immunitas Menurun
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" name="diagnosis_khusus_6"> Lain-lain
                      </label>
                      <label class="checkbox-inline">
                        <div class="col-lg-4">
                          <input type="text" class="form-control">
                        </div>
                      </label>
                    </div>
                  </div> --}}

                  <div class="col-lg-2"></div><h5>Berdasarkan Adaptasi Strong-Kid</h5>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Apa pasien tampak kurus?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="sk_1" value="0" checked>
                          Tidak 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sk_1" value="1">
                          Ya 
                        </label>
                      </div>
                    </div>

                    <label class="control-label col-lg-3" for="inputSuccess">Apakah terdapat penurunan BB selama satu bulan terakhir? Berdasarkan penilaian objektif data BB bila ada ATAU penilaian subjektif orangtua pasien ATAU untuk bayi < 1 tahun : BB tidak naik selama 3 bulan terakhi?r</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="sk_2" id="optionsRadios1" value="0" checked>
                          Tidak 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sk_2" id="optionsRadios1" value="1">
                          Ya 
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Apakah terdapat salah satu dari kondisi berikut?</label>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="sk_3_checkbox[]" id="sk_3_check_1">
                          Diare ≥ 5 kali/hari dan atau muntah ? 3 kali/hari dalam seminggu terakhir
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="sk_3_checkbox[]" id="sk_3_check_2">
                          Asupan makanan berkurang selama 1 minggu terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" id="sk_3_1" name="sk_3_show_only" checked disabled="">
                          Tidak 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" id="sk_3_2" name="sk_3_show_only" disabled="">
                          Ya 
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Apa terdapat penyakit atau keadaan yang mengakibatkan pasien beresiko mengalami malnutrisi?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="sk_4" value="0" checked>
                          Tidak 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sk_4" value="1">
                          Ya 
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Daftar Penyakit/keadaan yang bersiko mengakibatkan malnutrisi</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_1">
                          Diare Kronik (lebih dari 2 minggu)
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_2">
                          (Tersangka) Penyakit jantung bawaan
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_3">
                          (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_4">
                          (Tersangka) Kanker
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_5">
                          Penyakit hati kronik
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_6">
                          Penyakit ginjal kronik
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_7">
                          TB Paru
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_8">
                          Luka bakar luas
                        </label>
                      </div>

                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_9">
                          Kelainan anatomi daerah mulut yang menyebabkan kesulitan makan (misal:bibir sumbing)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_10">
                          Trauma
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_11">
                          Kelainan metabolik bawaan (Inborn Error Metabolism)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_12">
                          (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_13">
                          Retardasi mental
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_14">
                          Rencana / paska operasi mayor (misal: laparatomi, tokaratomi)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_15">
                          Terpasang stoma
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="penyakit_malnutrisi_16">
                          Lain-lain...
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Diberitahukan ke dokter?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="pemberitahuan" id="pemberitahuan_1" value="1">
                          Ya 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pemberitahuan" id="pemberitahuan_2" value="0" checked>
                          Tidak 
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pukul</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" id="waktu_pemberitahuan" name="waktu_pemberitahuan" disabled="">
                    </div>
                  </div>
                  <button type="submit">Simpan</button>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  Penilaian Tingkat Nyeri
                </header>
                <div class="panel-body">
                  
                  <div class="form-group">  
                    <div class="col-lg-6">
                      <img src="img/nyeri.jpg" alt="Smiley face" height="300" width="550">
                    </div>
                    <div class="col-lg-6">
                      <center><b>Status Lokalis</b></center>
                      <center><img src="img/body.jpg" alt="Smiley face" height="300" width="450"></center>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tingkat nyeri</label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15">
                        <option>Tidak ada nyeri</option>
                        <option>Nyeri Kronis</option>
                        <option>Nyeri Akut</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Skala Nyeri </label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>

                    <label class="col-sm-2 control-label">Lokasi Nyeri </label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Durasi Nyeri</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>

                    <label class="col-sm-2 control-label">Frekuensi Nyeri</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Nyeri hilang, bila </label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Minum Obat
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Mendengar Musik
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Istirahat
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Berubah posisi/tidur
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Lain-lain
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan </label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Diberitahukan ke dokter?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="cc" id="optionsRadios1" value="Baik" checked>
                          Ya 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="cc" id="optionsRadios1" value="Tidak Baik" checked>
                          Tidak 
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diberitahukan ke dokter pukul</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  Penilaian Risiko Jatuh
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Risiko Jatuh</label>
                    <div class="col-lg-4">
                      <div class="radio">
                        <label>
                          <input type="radio" name="cc" id="optionsRadios1" value="Baik" checked>
                          HUMPTY DUMPTY (Anak-anak) 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="cc" id="optionsRadios1" value="Tidak Baik" checked>
                          MORSE (Dewasa) 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="cc" id="optionsRadios1" value="Tidak Baik" checked>
                          EDMUNSON (Jiwa) 
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  HUMPTY DUMPTY (Anak-anak)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>HUMPTY DUMPTY (Anak-anak) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">USIA</label>
                    <div class="col-lg-2">
                      <select class="form-control m-bot15">
                        <option>Dibawah 3 tahun </option>
                        <option>3 – 7 tahun </option>
                        <option>7 – 13 tahun </option>
                        <option>> 13 tahun </option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Kelainan Neurologi </option>
                        <option>Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                        <option>Kelainan psikis / prilaku</option>
                        <option>Diagnosis lain</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GANGGUAN KOGNITIF</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental</option>
                        <option>Lupa keterbatasan (anak yang hiperaktif)</option>
                        <option>Mengetahui kemampuan diri</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">FAKTOR LINGKUNGAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Riwayat jatuh dari tempat tidur saat bayi</option>
                        <option>Pasien menggunakan alat bantu atau box meubel</option>
                        <option>Pasien berada di tempat tidur</option>
                        <option>Di luar ruang rawat</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RESPON TERHADAP OPERASI/OBAT PENENANG/EFEK ANASTESI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Dalam 24 Jam</option>
                        <option>Dalam 48 Jam</option>
                        <option>> 48 Jam</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGGUNAAN OBAT</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik</option>
                        <option>Salah satu Pengobatan di atas</option>
                        <option>Pengobatan lain</option>
                      </select>
                    </div>
                  </div>

                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  MORSE (Dewasa)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>MORSE (Dewasa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15">
                        <option>Ya</option>
                        <option>Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS SEKUNDER</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15">
                        <option>Ya</option>
                        <option>Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ALAT BANTU</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Perabot</option>
                        <option>Tongkat/Alat Penopang</option>
                        <option>Tidak ada/Kursi Roda/Perawat/Tirah Baring</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">TERPASANG INFUS</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15">
                        <option>Ya</option>
                        <option>Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GAYA BERJALAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Terganggu</option>
                        <option>Lemah</option>
                        <option>Normal/Tirah Baring/Imobilisasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Sering lupa akan keterbatasan yang dimiliki</option>
                        <option>Orientasi baik terhadap kemampuan diri sendiri</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  EDMUNSON (Jiwa)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>EDMUNSON (Jiwa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-2">
                      <select class="form-control m-bot15">
                        <option>Kesadaran baik/orientasi baik setiap saat </option>
                        <option>Agitasi/Ansietas</option>
                        <option>Kadang-kadang bingung</option>
                        <option>Bingung/Disorientasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Mandiri dan mampi mengontrol BAB/BAK</option>
                        <option>Dower Catheter/Colostomy</option>
                        <option>Eliminasi dengan bantuan</option>
                        <option>Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)</option>
                        <option>Inkontinesia tetapi mampu untuk mobilisasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGOBATAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Tanpa obat-obatan</option>
                        <option>Obat-obatan jantung</option>
                        <option>Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)</option>
                        <option>Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSA</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Bipolar/ Gangguan Schizoaffective</option>
                        <option>Penggunaan Obat-obatan terlarang/ketergantungan alkohol</option>
                        <option>Gangguan Depresi Mayor</option>
                        <option>Dimensia/ Delirium</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">AMBULASI /KESEIMBANGAN </label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Mandiri/Keseimbangan Baik/Immobilisasi</option>
                        <option>Dengan Alat Bantu (Kursi roda, walker,dll)</option>
                        <option>Vertigo/kelemahan</option>
                        <option>Goyah/membutuhkan mantuan dan menyadari kemampuan</option>
                        <option>Goyah tapi lupa keterbatasan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">NUTRISI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option>
                        <option>Tidak ada kelainan dengan nafsu makan</option>
                        <option>Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                        <option>Tidak ada riwayat jatuh</option>
                        <option>Ada riwayat jatuh dalam 3 bulan terakhir</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  Diagnosa Keperawatan
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Diagnosa Keperawatan Umum</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko bersihan jalan nafas tidak efektif
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko aspirasi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko pola nafas tidak efektif
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko gangguan pertukaran gas
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ penurunan curah jantung
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko gangguan perfusi jaringan celebral/perifer
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko gangguan keseimbangan cairan
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko gangguan keseimbangan kontinuitas jaringan
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko infeksi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Resiko cedera / jatuh
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Hypertermi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Nyeri
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Gangguan kebutuhan nutrisi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Lainnya
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Diagnosa keperawatan jiwa</label>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Gangguan persepsi sensori : halusinasi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Perilaku kekerasan
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Isolasi sosial
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Gangguan konsep diri
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Resiko bunuh diri
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Intoleransi aktifitas
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Waham
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Defisit perawatan diri
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Kerusakan komunitas verbal
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Koping individu tidak efektif
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/Resiko Cemas/Takut
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Lainnya
                        </label>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Obat Parental </label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">EKG </label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  Evaluasi Tindakan Keperawatan
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Implementasi </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Evaluasi </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  Data Medis
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Wawancara dengan </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keluhan Utama </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Penyakit Sekarang </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Penyakit Dahulu (gangguan kejiwaan) </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Riwayat Napza </label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="asupan" id="optionsRadios1" value="Baik" checked>
                          Tidak ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="asupan" id="optionsRadios1" value="Tidak Baik" checked>
                          Ada
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lama Pemakaian </label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Cara Pemakaian</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Latar Belakang Pemakaian</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Pendidikan </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Pekerjaan </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Perkawinan </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Riwayat Penyakit Lainnya</label>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Hipertensi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Liver
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Diabetes
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Cancer
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Jantung
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          TBC
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Stroke
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Glaukoma
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Dialysis
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          STD
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Asthma
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Perdarahan
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Kejang
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
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
                          <input type="radio" name="asupan" id="optionsRadios1" value="Baik" checked>
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="asupan" id="optionsRadios1" value="Tidak Baik" checked>
                          Ya
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Riwayat transfusi </label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="asupan" id="optionsRadios1" value="Baik" checked>
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="asupan" id="optionsRadios1" value="Tidak Baik" checked>
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
                          <input type="radio" name="asupan" id="optionsRadios1" value="Baik" checked>
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="asupan" id="optionsRadios1" value="Tidak Baik" checked>
                          Ya
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Reaksi yang timbul </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Penyakit dalam keluarga  </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Pengobatan </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Alergi </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  Obat yang Diminum Saat Ini
                </header>
                <div class="panel-body">

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Obat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dibawa</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tidak Dibawa</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  Pemeriksaan Fisik
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kepala</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Leher</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dada</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jantung</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Paru-paru</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Perut</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Anggota Gerak</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Lokalis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
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
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kesadaran</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Orientasi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sikap & Tingkah laku </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2"></div><h4>Gangguan Berpikir</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Proses Pikir </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Bentuk Pikir </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Isi Pikir </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2"></div><h4>Alam Perasaan</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Mood </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Afek </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2"></div><h4>Persepsi</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Halusinasi </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Ilusi </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2"></div><h4>Fungsi Intelektual</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Daya Konsentrasi  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Daya Ingat  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pikiran Abstrak  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pengendalian Impuls  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Daya Nilai  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tilikan/Insight  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Taraf dapat dipercaya  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
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
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil Pemeriksaan Nervus Cranialis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pemeriksaan Sistem Motorik</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Koordinasi Gait Keseimbangan (fungsi cerebellum)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Vegetatif </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  Pemeriksaan Penunjang
                </header>
                <div class="panel-body">

                  <div class="col-lg-2"></div><h4>Laboratorium</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pemeriksaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam pemeriksaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Koordinasi Gait Keseimbangan (fungsi cerebellum)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam hasil</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-lg-2"></div><h4>Radiologi</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pemeriksaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam pemeriksaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Koordinasi Gait Keseimbangan (fungsi cerebellum)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam hasil</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-lg-2"></div><h4>EKG</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pemeriksaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam pemeriksaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Koordinasi Gait Keseimbangan (fungsi cerebellum)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam hasil</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-lg-2"></div><h4>Lain-lain</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pemeriksaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam pemeriksaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Koordinasi Gait Keseimbangan (fungsi cerebellum)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam hasil</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
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
                          <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                          Tidak ada - definisi tidak dipenuhi
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p4" id="optionsRadios1" value="Tidak Baik" checked>
                          Minimal – patologis diragukan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                          Ringan – sedikit agitatif, waspada berlebihan, atau sedikit mudah terangsang selama wawancara, tanpa episode yang jelas dari gaduh gelisah atau labilitas alam perasaan yang mecolok. Pembicaraan mungkin sedikit mendesah
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                          Sedang – agitasi atau mudah terangsang yang jelas, ledakan-ledakan episodik
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                          Agak berat – hiperaktivitas yang bermakna, sering terjadi ledakan-leadakan atau aktivitas mototrik, sulit untuk tetap duduk
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                          Berat – gaduh gelisah yang mencolok mempengaruhi fungsi sehari-hari seperti makan  dan tidur
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                          Sangat berat – gaduh gelisah yang mencolok, mempengaruhi kegiatan makan dan tidur, serta jelas tidak memungkinkan interaksi interpersonal. Percepatan dan pembicaraan dan aktivitas motorik dapat menimbulkan inkoherensi dan kelelahan
                        </label>
                      </div>
                    </div>
                    <label class="control-label col-lg-2" for="inputSuccess">G8. KETIDAKOPERATIFAN</label>
                    <div class="col-lg-3">
                      <div class="radio">
                        <label>
                          <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
                          Tidak ada - definisi tidak dipenuhi
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g8" id="optionsRadios1" value="Tidak Baik" checked>
                          Minimal – patologis diragukan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
                          Ringan – patuh tapi disertai sikap marah tidak sabar atau sarkasme, mungkin ada penolakan yang tidak mengganggu terhadap penyelidikan yang sensitif selama wawancara
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
                          Sedang – kadang-kadang terdapat penolakan langsung untuk patuh, memproyeksikan hostilitas, defensif atau bersifat negatif tetapi biasanya masih dapat diatasi
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
                          Agak berat – seringkali tidak patuh, jelas defensif atau iritabilitas terhadap pewawancara dan mungkin tidak bersedia menghadapi banyak pertanyaan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
                          Berat – sangat tidak kooperatif, negativistik dan suka membangkang. Menolak untuk patuh, tidak mau memulai atau mengikuti wawancara sepenuhnya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
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
                          <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                          Tidak ada - definisi tidak dipenuhi
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p7" id="optionsRadios1" value="Tidak Baik" checked>
                          Minimal – patologis diragukan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                          Ringan – melampiaskan kemarahan secara tidak langsung atau ditahan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                          Sedang – sikap bermusuhan yang nyata
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                          Agak berat – pasien sangat mudah marah dan kadang-kadang memaki dengan kata-kata kasar atau mengancam
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                          Berat – tidak kooperatif dan mencaci maki dengan kasar atau mengancam, dapat beringas dan merusak tetapi tidak menyerang orang lain secara fisik
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                          Sangat berat – kemarahan yang hebat berakibat sangat tidak kooperatif, menghalangi interaksi, atau secara episodik melakukan penyerangan fisik terhadap orang lain
                        </label>
                      </div>
                    </div>
                    <label class="control-label col-lg-2" for="inputSuccess">G14. PENGENDALIAN IMPULS</label>
                    <div class="col-lg-3">
                      <div class="radio">
                        <label>
                          <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
                          Tidak ada - definisi tidak dipenuhi
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g14" id="optionsRadios1" value="Tidak Baik" checked>
                          Minimal – patologis diragukan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
                          Ringan – cenderung mudah marah dan frustasi bila menghadapi stres atau pemuasannya ditolak tetapi jarang bertindak impulsif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
                          Sedang – dengan provokasi yang minimal, pasien menjadi marah dan mencaci maki. Mungkin sekali-kali mengancam, merusak atau terdapat satu atau dua episode yang melibatkan konfrontasi fisik atau perselisihan ringan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
                          Agak berat – memperlihatkan episode impulsif yang berulang, termasuk mencaci maki, merusak harta benda atau ancaman fisik. Mungkin ada satu atau dua episode yang melibatkan serangn serius
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
                          Berat – agresif secara impulsif, mengancam, menuntut dan merusak, tanpa pertimbangan terhadap konsekuensinya. Menunjukkan perilaku menyerang
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
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
                          <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                          Tidak ada - definisi tidak dipenuhi
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g4" id="optionsRadios1" value="Tidak Baik" checked>
                          Minimal – patologis diragukan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                          Ringan – postur dan gerakan-gerakan menunjukkan kekhawatiran ringan, ketidaktenangan yang sekali-kali, perubahan posisi, atau tremor tangan yang halus dan cepat
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                          Sedang – nyata-nyata gelisah seperti perilaku tidak tenang, tremor tangan yang nyata, keringat berlebihan, atau manerisme karena gugup
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                          Agak berat – ketegangan yang berat, manifestasi seperti gemetar karena gugup, keringat sangat berlebihan dan ketidaktenangan, perilaku selama wawancara tidak terpengaruh secara bermakna
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                          Berat – Ketegangan berat, taraf interaksi terganggu. Misalnya terus-menerus bergerak, tidak dapat tetap duduk, hiperventilasi
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                          Sangat berat – ketegangan sangat mencolok, tanda panik atau percepatan gerakan motorik kaar, ketidak mampuan tetap duduk > 1 menit yang menyebabkan percakapan tidak mungkin diteruskan
                        </label>
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Bangsal   </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Pemeriksaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">gaff   </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
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
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Axis 2</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Axies 3</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Axis 4</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Axis 5</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2"></div><h4>Diagnosis Non Psikiatri</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diagnosis Utama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diagnosis Sekunder</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tindakan Terapi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Daftar Masalah</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <form class="form-horizontal " method="get">
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
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Baik" checked>
                          Pulang
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Tidak Baik" checked>
                          Dirawat
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Baik" checked>
                          Menolak dirawat
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Baik" checked>
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
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Baik" checked>
                          Tidak perlu kontrol
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Tidak Baik" checked>
                          Perlu Kontrol
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Perlu kontrol pada tanggal</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dirawat di ruang</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Indikasi Rawat Inap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Alasan menolak dirawat</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Masalah biaya" checked>
                          Masalah biaya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Masalah Lokasi Rumah" checked>
                          Masalah lokasi rumah
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Kondisi pasien" checked>
                          Kondisi pasien
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Baik" checked>
                          Lainnya
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dirujuk ke</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Alasan Rujuk</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Masalah biaya" checked>
                          Tempat Penuh
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Masalah Lokasi Rumah" checked>
                          Perlu Fasilitas Lebih
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Kondisi pasien" checked>
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
                        <input type="checkbox" id="inlineCheckbox1" value="Compos Mentis"> Compos Mentis
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="Apatis"> Apatis
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="Delirium"> Delirium
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="Sopor"> Sopor
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="Koma"> Koma
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="GCS"> GCS
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="Lain-lain"> Lain-lain
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2"></div><h5>Tanda-tanda vital</h5>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tensi</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>

                    <label class="col-sm-2 control-label">Nadi</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pernafasan</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Suhu</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </section>
            </form>


            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          </div>
        </div>
      </section>


      <!-- javascripts -->
      <script src="{{url('')}}/js/jquery.js"></script>
      <script src="{{url('')}}/js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="{{url('')}}/js/jquery.scrollTo.min.js"></script>
      <script src="{{url('')}}/js/jquery.nicescroll.js" type="text/javascript"></script>

      <!-- jquery ui -->
      <script src="{{url('')}}/js/jquery-ui-1.9.2.custom.min.js"></script>

      <!--custom checkbox & radio-->
      <script type="{{url('')}}/text/javascript" src="{{url('')}}/admin_bootstrap/js/ga.js"></script>
      <!--custom switch-->
      <script src="{{url('')}}/js/bootstrap-switch.js"></script>
      <!--custom tagsinput-->
      <script src="{{url('')}}/js/jquery.tagsinput.js"></script>

      <!-- colorpicker -->

      <!-- bootstrap-wysiwyg -->
      <script src="{{url('')}}/js/jquery.hotkeys.js"></script>
      <script src="{{url('')}}/js/bootstrap-wysiwyg.js"></script>
      <script src="{{url('')}}/js/bootstrap-wysiwyg-custom.js"></script>
      <script src="{{url('')}}/js/moment.js"></script>
      <script src="{{url('')}}/js/bootstrap-colorpicker.js"></script>
      <script src="{{url('')}}/js/daterangepicker.js"></script>
      <script src="{{url('')}}/js/bootstrap-datepicker.js"></script>
      <!-- ck editor -->
      <script type="text/javascript" src="{{url('')}}/assets/ckeditor/ckeditor.js"></script>
      <!-- custom form component script for this page-->
      <script src="{{url('')}}/js/form-component.js"></script>
      <!-- custome script for all page -->
      <script src="{{url('')}}/js/scripts.js"></script>

      <!-- javascripts -->
      <script src="{{url('')}}/admin_bootstrap/js/jquery.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery-ui-1.10.4.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="{{url('')}}/admin_bootstrap/js/jquery-ui-1.9.2.custom.min.js"></script>
      <!-- bootstrap -->
      <script src="{{url('')}}/admin_bootstrap/js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="{{url('')}}/admin_bootstrap/js/jquery.scrollTo.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.nicescroll.js" type="text/javascript"></script>
      <!-- charts scripts -->
      <script src="{{url('')}}/admin_bootstrap/assets/jquery-knob/js/jquery.knob.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.sparkline.js" type="text/javascript"></script>
      <script src="{{url('')}}/admin_bootstrap/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/owl.carousel.js"></script>
      <!-- jQuery full calendar -->
      <script src="{{url('')}}/admin_bootstrap/js/fullcalendar.min.js"></script>
      <!-- Full Google Calendar - Calendar -->
      <script src="{{url('')}}/admin_bootstrap/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
      <!--script for this page only-->
      <script src="{{url('')}}/admin_bootstrap/js/calendar-custom.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.rateit.min.js"></script>
      <!-- custom select -->
      <script src="{{url('')}}/admin_bootstrap/js/jquery.customSelect.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/assets/chart-master/Chart.js"></script>

      <!--custome script for all page-->
      <script src="{{url('')}}/admin_bootstrap/js/scripts.js"></script>
      <!-- custom script for this page-->
      <script src="{{url('')}}/admin_bootstrap/js/sparkline-chart.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/easy-pie-chart.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery-jvectormap-world-mill-en.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/xcharts.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.autosize.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.placeholder.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/gdp-data.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/morris.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/sparklines.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/charts.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.slimscroll.min.js"></script>
      {{-- <script>
        $(document).ready( function() {
          var i = 1;
          $('#add').click( function() {
            i++;
            $('#dynamic_field').append('<div class="panel-body"><div class="form-group"><label class="col-sm-2 control-label">Nama</label><div class="col-sm-10"><input type="text" class="form-control" name="nama_pj[]"></div></div><div class="form-group"><label class="col-sm-2 control-label">Alamat</label><div class="col-sm-10"><input type="text" class="form-control" name="alamat_pj[]"></div></div><div class="form-group"><label class="col-sm-2 control-label">Hubungan</label><div class="col-sm-10"><input type="text" class="form-control" name="hubungan_pj[]"></div></div><div class="form-group"><label class="col-sm-2 control-label">Telp</label><div class="col-sm-10"><input type="text" class="form-control" name="no_telp_pj[]"></div></div></div>');
          });
        });
      </script> --}}

      {{-- status fungsional --}}
      <script type="text/javascript">
        $(document).ready( function() {
          $('input[type=radio][name=status_fungsional]').change(function() {
            if(this.value == 'Perlu Bantuan') {
              $('#status_fungsional').after('<div class="form-group" id="perlu_bantuan"><label class="col-sm-2 control-label">Perlu Bantuan</label><div class="col-sm-10"><input type="text" class="form-control" name="perlu_bantuan"></div></div>');
            }
            else if(this.value == 'Mandiri') {
              $('#perlu_bantuan').hide();
            }
            else if(this.value == 'Ketergantungan Total') {
              $('#perlu_bantuan').hide();
            }
          });
        });
      </script>

      <script type="text/javascript">
        $(document).ready( function() {
          $('input[type=radio][name=must_1]').change(function() {
            if(this.id == 'must_1_3') {
              $('#must_1_form').after('<div class="form-group" id="must_1_bb_berkurang"><label class="control-label col-lg-2" for="inputSuccess">Jika ya berapa penurunan berat badan tersebut?</label><div class="col-lg-3"><select class="form-control m-bot15" name="must_1_input_bb_berkurang"><option value="1">1 – 5 kg </option><option value="2">6 – 10 kg </option><option value="3">11 – 15 kg </option><option value="4">> - 15 kg </option></select></div></div>');
            }
            else if(this.id == 'must_1_1') {
              $('#must_1_bb_berkurang').hide();
            }
            else if(this.id == 'must_1_2') {
              $('#must_1_bb_berkurang').hide();
            }
          });
        })
      </script>

      <script type="text/javascript">
        $(document).ready( function() {
          $('input[type=radio][name=must_3]').change(function() {
            if(this.id == 'must_3_1') {
              $('#must_23_form').after('<div class="form-group" id="list_diagnosis_khusus"><label class="control-label col-lg-2" for="inputSuccess"></label><div class="col-lg-10"><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_1"> DM</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_2"> Kemoterapi</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_3"> Hemodialisa</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_4"> Geriatri</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_5"> Immunitas Menurun</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_6"> Lain-lain</label><label class="checkbox-inline"><div class="col-lg-4"><input type="text" class="form-control"></div></label></div></div>');
            }
            else if(this.id == 'must_3_2') {
              $('#list_diagnosis_khusus').hide();
            }
          });
        });
      </script>

      <script type="text/javascript">
        $(document).ready( function() {
          $('input[type=checkbox][name="sk_3_checkbox[]"]').change(function() {
            var atLeastOneIsChecked = $('input[name="sk_3_checkbox[]"]:checked').length > 0;
            // alert("HAHAH");
            if(atLeastOneIsChecked == true) {
              $('#sk_3_2').prop('checked', true);
              $('#sk_3_hidden').hide();
              $('#sk_3_2').after('<input type="hidden" id="sk_3_hidden" name="sk_3" value="1"></input>');
            }
            else if(atLeastOneIsChecked == false) {
              $('#sk_3_1').prop('checked', true);
              $('#sk_3_hidden').hide();
              $('#sk_3_2').after('<input type="hidden" id="sk_3_hidden" name="sk_3" value="0"></input>');
            }
          });
        });
      </script>

      <script type="text/javascript">
        $(document).ready( function() {
          $('#pemberitahuan_1').click( function() {
            $('#waktu_pemberitahuan').prop('disabled', false);
          });
        });
      </script>
      <script type="text/javascript">
        $(document).ready( function() {
          $('#pemberitahuan_2').click( function() {
            $('#waktu_pemberitahuan').prop('disabled', true);
          });
        });
      </script>


      {{-- <script type="text/javascript">
        $(document).ready( function() {
          $('#status_fungsional_2').click( function() {
            $("#status_fungsional").after('<div class="form-group" id="perlu_bantuan"><label class="col-sm-2 control-label">Perlu Bantuan</label><div class="col-sm-10"><input type="text" class="form-control" name="perlu_bantuan"></div></div>');
          });
        });
      </script>
      <script type="text/javascript">
        $(document).ready( function() {
          $('#status_fungsional_1, #status_fungsional_3').click( function() {
            $('#perlu_bantuan').hide();
          });
        });
      </script> --}}
      {{-- <script type="text/javascript">
        $(document).ready( function() {
          $('#status_fungsional_3').click( function() {
            $('#perlu_bantuan').hide();
          });
        });
      </script> --}}

      {{-- must --}}
      {{-- <script type="text/javascript">
        $(document).ready( function() {
          $('#must_1_3').click( function() {
            $('#must_1_form').after('<div class="form-group" id="must_1_bb_berkurang"><label class="control-label col-lg-2" for="inputSuccess">Jika ya berapa penurunan berat badan tersebut?</label><div class="col-lg-3"><select class="form-control m-bot15" name="must_1_input_bb_berkurang"><option value="1">1 – 5 kg </option><option value="2">6 – 10 kg </option><option value="3">11 – 15 kg </option><option value="4">> - 15 kg </option></select></div></div>');
          });
        });
      </script>
      <script type="text/javascript">
        $(document).ready( function() {
          $('#must_1_1').click( function() {
            $('#must_1_bb_berkurang').hide();
          });
        });
      </script>
      <script type="text/javascript">
        $(document).ready( function() {
          $('#must_1_2').click( function() {
            $('#must_1_bb_berkurang').hide();
          });
        });
      </script> --}}
  </body>


  <html>
