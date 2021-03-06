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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> CATATAN PENGGUNAAN OBAT (CPO)</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_document_alt"></i> Dokumen</th>
                  <th><i class="icon_calendar"></i> Tanggal Pengisian</th>
                  <th><i class="icon_profile"></i> Pengisi</th>
                  <th><i class="icon_cogs"></i> Aksi</th>
                  <th><i class="icon_document"></i> Cetak Dokumen</th>
                </tr>
                <tr>
                  <td>Penggunaan Obat (CPO)</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_penggunaan_obat">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_penggunaan_obat_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_penggunaan_obat_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_cpo_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>
      <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_penggunaan_obat">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Ruang Bangsal</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="ruang_bangsal" value="{{$ruang_bangsal}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> No. Reg.</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="no_reg" value="{{$no_reg}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Masuk Tanggal</label>
                    <div class="col-sm-6">
                      <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_masuk" value="{{$tanggal_masuk}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Keluar Tanggal</label>
                    <div class="col-sm-6">
                      <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_keluar" value="{{$tanggal_keluar}}">
                    </div>
                  </div>
                </div>
              </section>  
            </div>
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Diagnosis</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="diagnosis" value="{{$diagnosis}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Dokter</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="dokter" value="{{$dokter}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Riwayat Alergi</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="riwayat_alergi" value="{{$riwayat_alergi}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Konsumen</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="konsumen" value="{{$konsumen}}">
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
     
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Catatan Penggunaan Obat
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label"> Nama Obat, Dosis dan Kekuatan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="obat">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"> Jumlah obat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jumlah" value="{{$jumlah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"> Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_penggunaan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="inputSuccess">Waktu</label>
                  <div class="col-sm-8">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="waktu_penggunaan_1"> Pagi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="waktu_penggunaan_2"> Siang
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="waktu_penggunaan_3"> Sore
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="waktu_penggunaan_4"> Malam
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"> Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan" value="{{$keterangan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"> Perawat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="perawat">
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

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