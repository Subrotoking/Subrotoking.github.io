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
<div class="col-md-12 bingkai" id="site-content">
{!! Form::open(['route' => 'pengesahan.store'])!!}
    <b>Identitas Pengesahan</b>
    <br>
      <table>
        <div class="form-group">
        <tr>
                                    <td width="75px"></td>
                                    <td width="300px">{!! Form::label('id_post', 'Artikel') !!}</td>
                                    <td width="400px">@if(count($list_post)>0)
                                            {!! Form::select('id',$list_post, null,
                                            ['class'=>'form-control','id_post'=>'id','placeholder'=>'Pilih Artikel']) !!}
                                        @else
                                            <p>tidak ada pilihan Artikel</p>
                                        @endif</td>
                                </tr>
          <tr>
            <td width="75px"></td>
            <td width="300px">Nama Pimpinan</td>
            <td width="400px">{!! Form::text('nama_pimpinan', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>Jabatan Pimpinan</td>
            <td>{!! Form::text('jabatan_pimpinan', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>NIP/NIK Pengesahan</td>
            <td>{!! Form::text('NIP_pengesahan', null, ['class'=>'form-control']) !!}</td>
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