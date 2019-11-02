@extends('master')

@section('isi')          
        
  <style>
.bingkai {
  border-top: 6px solid #00CED1;
  border-bottom: 1px solid black;
  border-right: 1px solid black;
  border-left: 1px solid black;
  background-color: white;
  padding-top: 10px;
  padding-left: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
}
.error {
  color: #FF0000;
}
</style>
  <div class="row">
  <div class="col-md-12 col-xs-12 bingkai" id="site-content">
  {!! Form::model($post, ['route' => ['jurnal.update', $post],'method'=>'PUT']) !!}
    <b>1. Identitas Pengusul</b>
    <br>
      <table>
        <div class="form-group">
            
          <tr>
            <td width="75px"></td>
            <td width="300px">Nama Pengusul</td>
            <td width="400px">{{ Auth::user()->name }}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>NIDN</td>
            <td>{{ Auth::user()->nidn }}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>NIP/NIK</td>
            <td>{{ Auth::user()->nip }}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>Bidang Ilmu Pengusul</td>
            <td>{!! Form::text('Bidang_Ilmu_Pengusul', null, ['class'=>'form-control']) !!}</td>
          </tr>
        <div class="form-group">
          <tr>
            <td></td>
            <td>Kontribusi</td>
            <td width="200px">{!! Form::radio('kontribusi', 'Penulis pertama',null, ['class'=>'form-radio']) !!} Penulis pertama
                    {!! Form::radio('kontribusi', 'Penulis koresponden',null, ['class'=>'form-radio']) !!} Penulis koresponden
            </td>
          </tr>
          <tr>
            <td></td>
            <td>Jenis Artikel</td>
            <td width="200px">{!! Form::radio('jenis_artikel', 'Jurnal',null, ['class'=>'form-radio']) !!} Jurnal
                    {!! Form::radio('jenis_artikel', 'Prosiding',null, ['class'=>'form-radio']) !!} Prosiding
            </td>
          </tr>
        </div>
      </table>
    </div>

  <div class="col-md-12 col-xs-12 bingkai" id="site-content">
    <b>2. Identitas Artikel yang Diusulkan</b>
    <br>
    <table>
      <div class="form-group">
        <tr>
          <td width="70px"></td>
          <td width="300px">Judul Artikel</td>
          <td width="400px">{!! Form::text('Nama_Artikel', null, ['class'=>'form-control']) !!}</td>
        </tr>
      </div>
      <div class="form-group">
        <tr>
          <td></td>
          <td>Nomor DOI Artikel</td>
          <td>{!! Form::text('Nomer_DOI_Artikel', null, ['class'=>'form-control']) !!}</td>
        </tr>
      <div class="form-group">
        <tr>
          <td></td>
          <td>Tanggal Diterbitkan</td>
          <td>{!! Form::date('Tanggal_Penerbitan', null, ['class'=>'form-control']) !!}</td>
        </tr>
      <div class="form-group">
    </table>
  </div>

  <div class="col-md-12 bingkai" id="site-content">
    <b>3. Identitas Jurnal Ilmiah (tempat artikel diterbitkan)</b>
    <br>
    <table>
      <div class="form-group">
        <tr>
          <td width="70px"></td>
          <td width="300px"><label>Nama Jurnal  </label></td>
          <td width="400px">{!! Form::text('Nama_Artikel', null, ['class'=>'form-control']) !!}</td>
        </tr>
      </div>
      <div class="form-group">
        <tr>
          <td></td>
          <td><label>Cakupan Bidang Ilmu  </label></td>
          <td>{!! Form::text('Cakupan_Bidang_Ilmu', null, ['class'=>'form-control']) !!}</td>
        </tr>
      </div>
      <div class="form-group">
        <tr>
          <td></td>
          <td><label>Alamat Redaksi  </label></td>
          <td>{!! Form::text('Alamat_Redaksi', null, ['class'=>'form-control']) !!}</td>
        </tr>
      </div>
      <div class="form-group">
        <tr>
          <td></td>
          <td><label>Alamat URL  </label></td>
          <td>{!! Form::text('Alamat_URL', null, ['class'=>'form-control']) !!}</td>
        </tr>
      </div>
      <div class="form-group">
        <tr>
          <td></td>
          <td><label>Penerbit  </label></td>
          <td>{!! Form::text('Penerbit', null, ['class'=>'form-control']) !!}</td>
        </tr>
      </table>
    </div>

  <div class="col-md-12 bingkai" id="site-content">
    <b>4. Identitas Penelitian (yang menghasilkan artikel)</b>
    <br>
    <table>
      <div class="form-group">
        <tr>
          <td width="70px"></td>
          <td width="300px"><label>Nama Program  </label></td>
          <td width="400px">{!! Form::text('Nama_Program', null, ['class'=>'form-control']) !!}</td>
        </tr>
      </div>
      <div class="form-group">
        <tr>
          <td></td>
          <td><label>Nomor Kontrak  </label></td>
          <td>{!! Form::text('Nomor_Kontrak', null, ['class'=>'form-control']) !!}</td>
        </tr>
      </div>
      <div class="form-group">
        <tr>
          <td></td>
          <td><label>Lembaga Pemberi Dana  </label></td>
          <td>{!! Form::text('Lembaga_Pemberi_Dana', null, ['class'=>'form-control']) !!}</td>
        </tr>
      </div>
      <div class="form-group">
        <tr>
          <td></td>
          <td><label>Tempat Penelitian  </label></td>
          <td>{!! Form::text('Tempat_Penelitian', null, ['class'=>'form-control']) !!}</td>
        </tr>
      </div>
    </table>
  </div>
  <div class="col-md-12 " id="site-content" style="margin-top:20px";>
  <div class="form-group row">
    <div class="col-md-1">
        <div class="text-right">
            <a href="/jurnal"><input type="button" class="btn btn-secondary" value="Batal"></a>
        </div>
        
    </div>
    <div class="col-md-2">
    <a href="/jurnal"><input type="button" class="btn btn-secondary" value="Sebelumnya"></a>
    </div>
    <div class="col-md-9">
        <div class="text-right">
        {!! Form::submit('Berikutnya', ['class'=>'btn btn-primary'])!!}
        </div>
    </div>
</div>

  </div>
</div>

{!! Form::close() !!}
@stop