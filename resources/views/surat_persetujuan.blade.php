<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Surat dan Persetujuan</title>

   <!-- Bootstrap CSS -->
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{url('')}}/admin_bootstrap/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{url('')}}/admin_bootstrap/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{url('')}}/admin_bootstrap/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{url('')}}/admin_bootstrap/css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
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
 <header class="header dark-bg">
 		<a href="{{url('')}}/index" class="logo">REKAM MEDIS <span class="lite">RSJ TAMPAN</span></a> 
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          
          
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username">Syauki Aulia Thamrin</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li>
            <a class="" href="{{url('')}}/identifikasi">
                          <i class="icon_document_alt"></i>
                          <span><font size="2">Identifikasi Pasien Baru</font></span>
                      </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>RAWAT JALAN</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="form_component.html">Asesmen Awal</a></li>
              <li><a class="" href="form_component.html">Asesmen Awal Gigi</a></li>
              <li><a class="" href="form_validation.html">Informasi dan Edukasi</a></li>
              <li><a class="" href="form_validation.html">Lapor dan Rehabilitasi</a></li>
              <li><a class="" href="form_validation.html">Perkembangan Pasien</a></li>
              <li><a class="" href="form_validation.html">Identifikasi Stresor</a></li>
              <li><a class="" href="form_validation.html">Tumbuh Kembang</a></li>
              <li><a class="" href="form_validation.html">Konsultasi Psikiatri</a></li>
              <li><a class="" href="form_validation.html">Pemeriksaan Fisioterapi</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>IGD</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="form_component.html">Triase Pasien</a></li>
              <li><a class="" href="form_component.html">Asesmen Rawat Darurat</a></li>
              <li><a class="" href="form_validation.html">Suicide - Kekerasan Fisik</a></li>
              <li><a class="" href="form_validation.html">Catatan Kemajuan</a></li>
              <li><a class="" href="form_validation.html">Perkembangan Pasien</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>RAWAT INAP</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{url('')}}/surat_persetujuan">Surat dan Persetujuan</a></li>
              <li><a class="" href="form_component.html">Resume Medis</a></li>
              <li><a class="" href="form_component.html">DPJP dan Case Manager</a></li>
              <li><a class="" href="form_component.html">Persetujuan Umum</a></li>
              <li><a class="" href="form_component.html">Hak Kewajiban Pasien</a></li>
              <li><a class="" href="form_component.html">Asesmen Rawat Inap</a></li>
              <li><a class="" href="form_component.html">Suicide Kekerasan Fisik</a></li>
              <li><a class="" href="form_component.html">Keperawatan NAPZA</a></li>
              <li><a class="" href="form_component.html">Penilaian Edmunson</a></li>
              <li><a class="" href="form_component.html">Penilaian Risiko Nyeri</a></li>
              <li><a class="" href="form_component.html">Catatan Perkembangan</a></li>
              <li><a class="" href="form_component.html">Rencana Keperawatan</a></li>
              <li><a class="" href="form_component.html">Evaluasi Keperawatan</a></li>
              <li><a class="" href="form_component.html">Monitoring Observasi</a></li>
              <li><a class="" href="form_component.html">Penggunaan Obat</a></li>
              <li><a class="" href="form_component.html">Riwayat Obat</a></li>
              <li><a class="" href="form_component.html">Efek Samping Obat</a></li>
              <li><a class="" href="form_component.html">Edukasi Pasien Keluarga</a></li>
              <li><a class="" href="form_validation.html">Rencana Pemulangan</a></li>
              <li><a class="" href="form_validation.html">PANSS EC</a></li>
              <li><a class="" href="form_validation.html">Penilaian PANSS EC</a></li>
              <li><a class="" href="form_validation.html">Lembar Konsultasi</a></li>
              <li><a class="" href="form_validation.html">Transfer Internal</a></li>
              <li><a class="" href="form_validation.html">Transfer Eksternal</a></li>
              <li><a class="" href="form_validation.html">Pemberian Informasi</a></li>
              <li><a class="" href="form_validation.html">Pemeriksaan Psikologis</a></li>
              <li><a class="" href="form_validation.html">Transfer Internal</a></li>
              <li><a class="" href="form_validation.html">Serah Terima Pulang</a></li>
            </ul>
          </li>

          <li>
            <a class="" href="widgets.html">
                          <i class="icon_document_alt"></i>
                          <span><font size="2">Penundaan Pelayanan</font></span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>


 </section>
  <!-- container section start -->
 <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Surat dan Persetujuan</h3> 
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
        <br>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Daftar Dokumen
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_document_alt"></i> Nama Dokumen</th>
                    <th><i class="icon_calendar"></i> Tanggal Dokumen</th>
                    <th><i class="icon_mail_alt"></i> Status Dokumen</th>

                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tr>
                    <td>Surat Pengantar Dirawat (SPD)</td>
                    <td>14/09/2018</td>
                    <td>Telah Diisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                     <td>Permintaan Kebutuhan Privasi</td>
                    <td>14/09/2018</td>
                    <td>Telah Diisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Permintaan Pelayanan Rohani</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Permintaan Pendapat Lain (Second Opinion)</td>
                    <td>14/09/2018</td>
                    <td>Telah Diisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Surat Pernyataan Jangan Dilakukan Resusitasi (Do Not Resucitate)</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Intruksi Jangan Dilakukan Resusitasi (Do Not Resucitate)</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Persetujuan Tindakan Kedokteran</td>
                    <td>14/09/2018</td>
                    <td>Telah Diisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Penolakan Tindakan Kedokteran</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Surat Pernyataan Pulang Paksa</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Surat Perjanjian Residen</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Surat Kuasa</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Surat Pernyataan</td>
                    <td>-</td>
                    <td>-</td>
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