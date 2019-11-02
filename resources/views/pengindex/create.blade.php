@extends('master')

@section('isi')



<div class="row">
  <div class="col-md-12 bingkai"id="site-content">
  {!! Form::open(['route' => 'pengindex.store'])!!}
    <b>1. Lembaga Pengindeks</b>
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
            <td width="300px">Lembaga Pengindeks</td>
            <td width="400px">{!! Form::text('Nama_lembaga', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>URL Pengindeks</td>
            <td>{!! Form::text('url_lembaga', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
      </table>
    </div>

  <div class="col-md-12 bingkai" id="site-content">
    <b>2. Impact Factor Jurnal</b>
    <br>
      <table>
        <div class="form-group">
          <tr>
            <td width="75px"></td>
            <td width="300px">Nilai IF</td>
            <td width="400px">{!! Form::text('Nilai_IF', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>Lembaga Penilai</td>
            <td>{!! Form::text('Lembaga_penilai', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>URL IF</td>
            <td>{!! Form::text('url_if', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
      </table>
    </div>

  <div class="col-md-12 bingkai" id="site-content">
    <b>3. H-Indeks Jurnal</b>
    <br>
      <table>
        <div class="form-group">
          <tr>
            <td width="75px"></td>
            <td width="300px">Nilai H Indeks</td>
            <td width="400px">{!! Form::text('Nilai_H_Indeks', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>Lembaga Penilai</td>
            <td>{!! Form::text('Lembaga_penilai', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>URL H Indeks</td>
            <td>{!! Form::text('url_h_index', null, ['class'=>'form-control']) !!}</td>
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