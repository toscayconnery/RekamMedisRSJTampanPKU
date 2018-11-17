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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> MENGIDENTIFIKASI SUMBER STRES (STRESOR)</h3>
        </div>
      </div>
      @include('layouts.bio')
      
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              MENGIDENTIFIKASI SUMBER STRES (STRESOR)
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
                  <td>Identifikasi Sumber Stres (Stresor)</td>
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
          <form class="form-horizontal" method="post" action="rj_identifikasi_stresor_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Pengaruh
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lingkungan Fisik</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: vertical;" name="lingkungan_fisik">{{$lingkungan_fisik}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sosisal, ekonomi, dan politik</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: vertical;" name="sosial_ekonomi_politik">{{$sosial_ekonomi_politik}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluarga</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: vertical;" name="keluarga">{{$keluarga}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan dan Karir</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: vertical;" name="pekerjaan_karir">{{$pekerjaan_karir}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan antar pribadi dan lingkungan</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: vertical;" name="hubungan_pribadi_lingkungan">{{$hubungan_pribadi_lingkungan}}</textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Simptom dan gejala
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Semua simptom-simptom (Gejala yang muncul) </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: vertical;" name="simptom">{{$simptom}}</textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Solusi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Cara menghadapi dan mengatasinya</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: vertical;" name="cara_mengatasi">{{$cara_mengatasi}}</textarea>
                  </div>
                </div>
              </div>
            </section>
            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

        </div>
      </div>
    </section>

    @include('layouts.tailscript')
    
  </body>
  <html>