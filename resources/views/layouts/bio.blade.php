<div class="panel-body bio-graph-info">
  <h1>
    <input type="text" name="no_rm" placeholder="No. RM" disabled value="  {{Session::has('id_pasien') ? str_pad(Session::get('id_pasien'), 6, '0', STR_PAD_LEFT) : ''}}">
  </h1>
  <div class="row">
    <div class="bio-row">
      <p><span>Nama Pasien </span>: {{Session::has('nama') ? Session::get('nama') : ''}} </p>
    </div>
    <div class="bio-row">
      <p><span>Tanggal Lahir</span>: {{Session::has('tanggal_lahir') ? Session::get('tanggal_lahir') : ''}}</p>
    </div>
    <div class="bio-row">
      <p><span>Jenis Kelamin </span>: {{Session::has('jenis_kelamin') ? Session::get('jenis_kelamin') : ''}}</p>
    </div>
  </div>
</div>