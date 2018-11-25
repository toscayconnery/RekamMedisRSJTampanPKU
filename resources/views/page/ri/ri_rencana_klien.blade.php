<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Rencana Tindakan Keperawatan Klien</title>

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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>RENCANA TINDAKAN KEPERAWATAN KLIEN</h3>
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
                Rencana Tindakan Keperawatan Klien
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_document_alt"></i> Dokumen</th>
                    <th><i class="icon_calendar"></i> Tanggal Pengisian</th>
                    <th><i class="icon_profile"></i> Pengisi</th>
                    <th><i class="icon_cogs"></i> Status</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tr>
                    <td>Rencana Tindakan Keperawatan Klien Dengan Perilaku Kekerasan</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>Tidak Terisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#">Lihat</a>
                        <a class="btn btn-success" href="#">PDF</a>
                        <a class="btn btn-info" href="#">Edit</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Rencana Tindakan Keperawatan Klien Dengan Gangguan Konsep Diri : Harga Diri Rendah</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>Tidak Terisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#">Lihat</a>
                        <a class="btn btn-success" href="#">PDF</a>
                        <a class="btn btn-info" href="#">Edit</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Rencana Tindakan Keperawatan Klien Dengan Pola Pikir : WAHAM</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>Tidak Terisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#">Lihat</a>
                        <a class="btn btn-success" href="#">PDF</a>
                        <a class="btn btn-info" href="#">Edit</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Rencana Tindakan Keperawatan Klien Dengan Menarik Diri</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>Tidak Terisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#">Lihat</a>
                        <a class="btn btn-success" href="#">PDF</a>
                        <a class="btn btn-info" href="#">Edit</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Rencana Tindakan Keperawatan Klien Dengan Defisit Perawatan Diri</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>Tidak Terisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#">Lihat</a>
                        <a class="btn btn-success" href="#">PDF</a>
                        <a class="btn btn-info" href="#">Edit</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Rencana Tindakan Keperawatan Klien Dengan Gangguan Persepsi Sensori : Halusinasi</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>Tidak Terisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#">Lihat</a>
                        <a class="btn btn-success" href="#">PDF</a>
                        <a class="btn btn-info" href="#">Edit</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Rencana Tindakan Keperawatan Klien Dengan Risiko Bunuh Diri</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>Tidak Terisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#">Lihat</a>
                        <a class="btn btn-success" href="#">PDF</a>
                        <a class="btn btn-info" href="#">Edit</a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
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