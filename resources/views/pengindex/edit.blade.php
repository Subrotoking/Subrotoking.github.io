@extends('master')

@section('isi')
{!! Form::model($pindex, ['route' => ['pengindex.update', $pindex],'method'=>'PUT']) !!}
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
</style>

<div class="row">
  <div class="col-md-12 bingkai" id="site-content">
    <b>1. Lembaga Pengindeks</b>
    <br>
      <table>
        <div class="form-group">
          <tr>
            <td width="75px"></td>
            <td width="300px">Lembaga Pengindeks</td>
            <td width="400px">{!! Form::text('Lembaga_Pengindeks', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>URL Pengindeks</td>
            <td>{!! Form::text('URL_Penfindeks', null, ['class'=>'form-control']) !!}</td>
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
            <td>{!! Form::text('Lembaga_Penilai', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>URL IF</td>
            <td>{!! Form::text('URL_IF', null, ['class'=>'form-control']) !!}</td>
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
            <td width="400px">{!! Form::text('Nilai_HIndeks', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>Lembaga Penilai</td>
            <td>{!! Form::text('Lembaga_Penilai', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td></td>
            <td>URL H Indeks</td>
            <td>{!! Form::text('URL_HIndeks', null, ['class'=>'form-control']) !!}</td>
          </tr>
        </div>
      </table>
    </div>
</div>
{!! Form::submit('Save', ['class'=>'btn btn-primary'])
!!}
{!! Form::close() !!}
@stop