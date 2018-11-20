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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> SURAT PERJANJIAN RESIDEN</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Surat Perjanjian Residen
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
                  <td>Surat Perjanjian Residen</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_residen_pdf">PDF</a>
                      <a class="btn btn-success" href="#">EDIT</a>
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
          <form class="form-horizontal form-validate" id="register_form">
            <section class="panel">
              <header class="panel-heading">
                Perjanjian Residen
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <div class="col-sm-12">
                    Sebagai Residen, saya menerima dan menyetujui peraturan dan kebijakan yang dibuat oleh Terapi dan Rehabilitasi NAPZA Rumah sakit Jiwa Tampan Provinsi Riau sebagai berikut:
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">1. </label>
                  <div class="col-sm-8">
                    Bersedia mengikuti dengan baik program rehabilitasi NAPZA <br>selama 3 bulan.
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">2. </label>
                  <div class="col-sm-8">
                    Bersedia mengikuti peraturan-peraturan<br> yang ada dalam fasility.
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">3. </label>
                  <div class="col-sm-8">
                    Apabila Residen keluar dari fasility tanpa seizin staf, <br>maka itu diluar tanggung jawab dari T & R NAPZA Rumah Sakit Jiwa Tampan.
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">4. </label>
                  <div class="col-sm-10">
                    Batas-batas bahwa Residen itu keluar dari fasility Rehabilitasi NAPZA adalah sudah melewati pagar yang ada, apabila Residen melarikan diri / melewati pagar fasility maka tindakan yang akan dilakukan petugas T & R NAPZA Rumah Sakit Jiwa Tampan adalah melakukan pencarian di sekitar fasility dan menghubungi orang tua / wali dari Residen yang bersangkutan. 
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">5. </label>
                  <div class="col-sm-8">
                    Tindakan selanjutnya kami akan menghubungi dan menyerahkan kasus tersebut <br>kepada pihak yang berwajib (kepolisian) setempat.
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">6. </label>
                  <div class="col-sm-10">
                    Residen wajib disiplin dan menjaga diri masing-masing, baik di dalam maupun aktivitas bersama di luar fasility, apabila terjadi hal-hal diluar kehendak bersama sehingga menyebabkan akibat yang tidak diinginkan maka petugas T & R NAPZA Rumah Sakit Jiwa Tampan tidak bertanggung jawab dan tidak dapat dituntut secara hukum.
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Tanda Tangan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal" value="{{$tanggal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Konselor</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="konselor" value="{{$konselor}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kepala Ruangan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="kepala_ruangan" value="{{$kepala_ruangan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Residen</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="residen" value="{{$residen}}">
                  </div>
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