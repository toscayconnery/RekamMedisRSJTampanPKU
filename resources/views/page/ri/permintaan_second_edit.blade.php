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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PERMINTAAN PENDAPAT LAIN (SECOND OPINION)</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Permintaan Pendapat Lain (Second Opinion)
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
                  <td>Permintaan Pendapat Lain</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                     <a class="btn btn-primary" href="{{url('')}}/ri_permintaan_second_pdf">PDF</a>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_permintaan_second_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Pemohon
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <div class="col-sm-8">
                    Yang bertanda tangan dibawah ini, saya
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama" value="{{$nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur" value="{{$umur}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" value="1" {{$jk == 1 ? 'checked' : ''}}>
                        Laki-laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" value="0" {{$jk == 0 ? 'checked' : ''}}>
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat" value="{{$alamat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="agama" value="{{$agama}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    Dengan ini menyatakan permintaan untuk mendapatkan second opinion atas :
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="permintaan_opini" value="{{$permintaan_opini}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pasien (Bila pasien tidak kompeten atau tidak mau menerima informasi)
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_hub" value="{{$nama_hub}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur_hub" value="{{$umur_hub}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk_hub" value="1" {{$jk_hub == 1 ? 'checked' : ''}}>
                        Laki-laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk_hub" value="0" {{$jk_hub == 0 ? 'checked' : ''}}>
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_hub" value="{{$alamat_hub}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="agama_hub" value="{{$agama_hub}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No.Telp</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp_hub" value="{{$no_telp_hub}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    Saya memahami perlunya dan manfaat second opinion tersebut sebagaimana telah dijelaskan kepada saya. Sya telah mendapat kesempatan untuk bertanya dan telah mendapat jawaban yang memuaskan. Saya juga menyadari bahwa oleh karena ilmu kedokteran bukanlah ilmu pasti dan selalu berkembang, maka perbedaan pendapat ahli adalah biasa terjadi dalam dunia kedokteran.
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    Saya menyadari beban biaya second opinion menjadi tanggung jawab saya.
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
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal" value="{{$tanggal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Saksi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_saksi" value="{{$nama_saksi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pasien/Wali</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pasien_wali" value="{{$nama_pasien_wali}}">
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