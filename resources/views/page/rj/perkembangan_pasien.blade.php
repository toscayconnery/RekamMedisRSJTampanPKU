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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>Catatan Perkembangan Pasien Terintegrasi Rawat Jalan</h3>
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
                  <td>Catatan Perkembangan Pasien Terintegrasi</td>
                  <td>{{$tanggal_pengisian}}</td>
                  <td>{{$nama_pengisi}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_perkembangan_pasien">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_perkembangan_pasien_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_perkembangan_pasien_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_catatan_perkembangan_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal" method="post" action="rj_perkembangan_pasien">
            {{ csrf_field() }}
            <input type="hidden" name="jumlah_form" id="jumlah_form" value="5">
            <section class="panel">
              <header class="panel-heading">
                Hasil Pemeriksaan, Analisis, Rencana Penatalaksanaan Pasien 
              </header>
              <div class="form-group">
                <div class="col-sm-2"></div>
                <label class="col-sm-8 control-label"><center>(Dituliskan dengan Format SOAP/ADIME, disertai dengan Target yang Terukur, Evaluasi Hasil Tatalaksana dituliskan dalam Asesmen.</center></label>
                <div class="col-sm-2"></div>
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10%; text-align: center;">TGL & JAM</th>
                    <th style="width: 15%; text-align: center;">PROFESI/BAGIAN</th>
                    <th style="width: 67%; text-align: center;">HASIL PEMERIKSAAN, ANALISIS, RENCANA PENTATALAKSANAAN PASIEN</th>
                    <th style="width: 5%; text-align: center;">VERIFIKASI</th>
                    <th style="width: 3%; text-align: center;">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_1" required>
                      <input type="time" class="form-control" name="jam_1" required>
                    </td>
                    <td>
                      <input type="text" class="form-control" name="profesi_1" required>
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_1">S: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_1">O: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_1">A: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_1">P: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_1">Lainnya: </textarea>
                    </td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_2" required>
                      <input type="time" class="form-control" name="jam_2" required>
                    </td>
                    <td>
                      <input type="text" class="form-control" name="profesi_2" required>
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_2">S: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_2">O: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_2">A: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_2">P: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_2">Lainnya: </textarea>
                    </td>
                    <td><input type="checkbox" class="form-control" name="ttd_2"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_3" required>
                      <input type="time" class="form-control" name="jam_3" required>
                    </td>
                    <td>
                      <input type="text" class="form-control" name="profesi_3" required>
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_3">S: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_3">O: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_3">A: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_3">P: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_3">Lainnya: </textarea>
                    </td>
                    <td><input type="checkbox" class="form-control" name="ttd_3"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_4" required>
                      <input type="time" class="form-control" name="jam_4" required>
                    </td>
                    <td>
                      <input type="text" class="form-control" name="profesi_4" required>
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_4">S: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_4">O: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_4">A: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_4">P: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_4">Lainnya: </textarea>
                    </td>
                    <td><input type="checkbox" class="form-control" name="ttd_4"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_5" required>
                      <input type="time" class="form-control" name="jam_5" required>
                    </td>
                    <td>
                      <input type="text" class="form-control" name="profesi_5" required>
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_5">S: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_5">O: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_5">A: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_5">P: </textarea>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_5">Lainnya: </textarea>
                    </td>
                    <td><input type="checkbox" class="form-control" name="ttd_5"></td>
                    <td></td>
                  </tr>
                  <tr id="last_row">
                    <td colspan="4">
                      <div class="btn-group">
                        <button class="btn btn-primary" type="button" id="tambah_form"><i class="icon_plus_alt2"></i> Tambah</button>
                        <button class="btn btn-success" type="submit"><i class="icon_check_alt2"></i> Simpan</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
          </form>
        </div>
      </div>
    </section>
    

    @include('layouts.tailscript')

    {{-- menambah row inputan --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form').click(function() {
          var a = document.getElementById('jumlah_form').value;
          // alert('a');
          a = parseInt(a) + 1;
          $('#last_row').before('<tr id="form_'+a+'"><td><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_'+a+'" required><input type="time" class="form-control" name="jam_'+a+'" required></td><td><input type="text" class="form-control" name="profesi_'+a+'" value=""></td><td><textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_'+a+'">S: </textarea><textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_'+a+'">O: </textarea><textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_'+a+'">A: </textarea><textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_'+a+'">P: </textarea><textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="1" class="form-control" name="keterangan_'+a+'">Lainnya: </textarea></td><td><input type="checkbox" class="form-control" name="ttd_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
          document.getElementById('jumlah_form').value = a;
          $('.sandbox-container').datepicker({
            'format' : 'dd/mm/yyyy',
            'autoclose' : true,
            'todayHighlight' : true,
            'toggleActive': true
          });
        });
      });
    </script>

      {{-- menghapus row --}}
      <script type="text/javascript">
        $(document).ready(function() {
          $(document).on('click', '.tombol_hapus', function() {
            var x = $(this).attr('id');
            var nomor = x.substring(13)
            $('#form_'+nomor).remove();
          });
        });
      </script>

    </body>
    <html>