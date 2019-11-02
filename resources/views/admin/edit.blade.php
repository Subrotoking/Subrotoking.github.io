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
  {!! Form::model($post, ['route' => ['admin.update', $post],'method'=>'PUT']) !!}
    <b>LULUS / TIDAK LULUS</b>
    <br>
    <table>
      <div class="form-group">
        <tr>
          <td width="70px"></td>
          <td width="300px">KETERANGAN</td>
          <td width="200px">{!! Form::radio('keterangan', 'Lulus',null, ['class'=>'form-radio']) !!} Lulus
                    {!! Form::radio('keterangan', 'Tidak Lulus',null, ['class'=>'form-radio']) !!}Tidak Lulus
            </td>
        </tr>
      </div>
      <div class="form-group">
        <tr>
    </table>
  </div>
  <div class="col-md-12 " id="site-content" style="margin-top:20px";>
  <div class="form-group row">
    <div class="col-md-12">
        <div class="text-right">
        {!! Form::submit('simpan', ['class'=>'btn btn-primary'])!!}
        </div>
    </div>
</div>

  </div>
</div>

{!! Form::close() !!}
@stop