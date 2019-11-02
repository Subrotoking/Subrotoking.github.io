@extends('master')
@section('isi')
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<table class="table table-bordered table-hover table-striped">
<thead>
                    <tr>
                        <th>Nama Artikel</th>
                        <th>Nomer DOI Artikel</th>
                        <th>Cakupan Bidang Ilmu</th>
                        <th>Kontribusi</th>
                        <th>Jenis Artikel</th>
                        <th>Tanggal Penerbitan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($post as $post)
                    <tr>
                        <td>{{$post->Nama_Artikel}}</td>
                        <td>{{$post->Nomer_DOI_Artikel}}</td>
                        <td>{{$post->Cakupan_Bidang_Ilmu}}</td>
                        <td>{{$post->kontribusi}}</td>  
                        <td>{{$post->jenis_artikel}}</td>
                        <td>{{$post->Tanggal_Penerbitan}}</td>
                        <td>
                        {!! Form::model($post, ['route' => ['jurnal.destroy',$post], 'method'=>'delete', 'class' => 'forminline'])!!} 
                <a href="{{ route('jurnal0.edit', $post) }}" class="btn btn-xs btn-primary">edit</a> |
                {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger'])!!}
                {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
</table>

@endsection
