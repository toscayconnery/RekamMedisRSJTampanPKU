<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Rencana Tindakan Keperawatan Intensif</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>RENCANA TINDAKAN KEPERAWATAN INTENSIF</h3>
            <!--<ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-file-text-o"></i>Form elements</li>
            </ol>-->
          </div>
        </div>
        <div class="panel-body bio-graph-info">
                        <h1>[No. RM]</h1>
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
                Rencana Tindakan Keperawatan Intensif
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
                    <td>Rencana Tindakan Keperawatan Intensif Resiko Bunuh Diri</td>
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
                 Rencana Tindakan Keperawatan Intensif
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Tanggal Pengkajian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Jam Pengkajian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Ruangan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Diagnosa Medis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Keperawatan Intensif</label>
                    <div class="col-lg-5">
                      <select class="form-control m-bot15">
                                              <option>Bunuh Diri</option>
                                              <option>Defisit Perawatan Diri</option>
                                              <option>Gangguan Persepsi Sensori: Halusinasi</option>
                                              <option>Perilaku kekerasan</option>
                                              <option>Panik</option>
                                              <option>Waham</option>
                                              <option>Isolasi Sosial: Menarik Diri</option>
                                          </select>
                    </div>
                  </div>

                </form>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <section class="panel">
              <header class="panel-heading">
                 Rencana Tindakan Keperawatan Intensif Resiko Bunuh Diri
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif I</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tempatkan di tempat yang mudah diawasi
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Awasi kondisi pasien dengan ketat
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Observasi variatif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Berikan psikofarmaka
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Pertimbangkan mengusulkan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  ECT jika perlu
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif II</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dengarkan keluhan pasien tanpa menghakimi
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Buat kontrak keamanan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tingkatkan harga diri pasien
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kerahkan dukungan sosial
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Awasi dengan ketat
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Beripsikofarmaka: anti depresan oral
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif III</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dengarkan keluhan pasien
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Latih cara mengendalikan dorongan bunuh diri
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Awasi dengan ketat
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Pertahankan pemberian psikofarmaka oral: anti depresan
                                              </label>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <section class="panel">
              <header class="panel-heading">
                 Rencana Tindakan Keperawatan Intensif Defisit Perawatan Diri
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif I</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bantuan total dalam perawatan diri (sesuaikan dengan jenis perawatan diri yang mengalami kemunduran)
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Jelaskan manfaat melakukan perawatan diri
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif II</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Jelaskan cara melakukan upaya perawatan diri
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bombing melakukan perawatan diri dengan benar (sesuai jenis perawatan diri yang mengalami kemunduran)
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif III</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Ingatkan pasien melakukan perawatan diri
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bimbing jika masih ada perawatan diri yang tidak benar (sesuai jenis perawatan diri yang mengalami kemunduran)
                                              </label>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <section class="panel">
              <header class="panel-heading">
                 Rencana Tindakan Keperawatan Intensif Gangguan Persepsi Sensori: Halusinasi
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif I</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dengarkan ungkapan klien
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Yakinkan pasien dalam keadaan tenang
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Berikan psikofarmaka parental: anti psikotik
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif II</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dengarkan keluhan pasien tanpa menghakimi
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Latih cara mengontrol halusinasi dengan menghardik
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Berikan psikofarmaka parenteral: anti psikotik oral
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif III</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dengarkan keluhan pasien
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Latih cara mengontrol halusinasi dengan bercakap dengan orang lain, dan melakukan aktivitas terjadwal
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Pertahankan pemberian psikofarmaka oral: anti psikotik
                                              </label>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <section class="panel">
              <header class="panel-heading">
                 Rencana Tindakan Keperawatan Intensif Perilaku Kekerasan
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif I</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kendalika secara verbal
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Pengikatan atau isolasi
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Psikofarmaka parenteral: anti psikotik
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif II</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dengarkan keluhan pasien tanpa menghakimi
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Latih cara fisik mengendalikan marah: Nafas dalam
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Beri psikofarmaka: antipsikotik oral
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif III</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dengarkan keluhan pasien
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Latih cara mengendalikan marah dengan cara verbal, spiritual
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Pertahankan psikofarmaka oral: antipsikotik
                                              </label>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <section class="panel">
              <header class="panel-heading">
                 Rencana Tindakan Keperawatan Intensif Panik
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif I</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Yakinkan pasien dalam keadaan aman
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Reaksi tenang
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Beri anti ansietas parenteral
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif II</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Yakinkan pasien aman
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Respons tenang
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Berikan anti ansietas parenteral
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Ajarkan tentang cara relaksasi: nafas dalam
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif III</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dengarkan keluhan pasien
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Latih cara mengendalikan marah dengan cara verbal dan spiritual
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Pertahankan pemberian psikofarmaka oral: anti ansietas
                                              </label>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <section class="panel">
              <header class="panel-heading">
                 Rencana Tindakan Keperawatan Intensif Waham
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif I</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dengarkan ungkapan klien walaupun terkait wahamnya tanpa membantah atau mendukung
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Berkomunikasi sesuai dengan kondisi obyektif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Psikofarmaka: anti psikotik parenteral, anti ansietas
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif II</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dengarkan keluhan pasien tanpa menghakimi
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Komunikasi sesuai kondisi obyektif pasien
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Beri psikofarmaka anti psikotik oral
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif III</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dengarkan keluhan pasien
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bantu identifikasi stimulus waham dan usahakan menghindari stimulus tersebut
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Pertahankan pemberian psikofarmaka oral: anti psikotik
                                              </label>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <section class="panel">
              <header class="panel-heading">
                 Rencana Tindakan Keperawatan Intensif Isolasi Sosial: Menarik Diri
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif I</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Penuhi kebutuhan dasar pasien (tidur makan, personal hyegene)
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kolaborasi dengan dokter untuk pemberian obat yang dibutuhkan pasien
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif II</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kaji tingkat masah isolasi sosial pada pasien
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Penuhi kebutuhan dasar (tidur,makan,personal hyegene)
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Latih pasien berhubungan dengan perawat
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif III</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bantu pasien mengenal penyebab isolasi
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bantu klien mengenal keuntungan berhubungan dengan orang lain
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bantu pasien mengenal kerugian bila tidak berhubungan dengan orang lain
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bantu pasien berinteraksi dengan orang lain secara bertahap
                                              </label>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </section>
          </div>
        </div>

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
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
</body>


<html>