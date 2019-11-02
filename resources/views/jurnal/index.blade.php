@extends('master')

@section('isi')

    
<!-- mid -->
<div class="row" style="background-color:white;">
<div class="col-md-12 infogan" id="site-content">
  <a href=""><span class="glyphicon glyphicon-info-sign"></span></a>
  <b><span class="blink info font">INFO</span></b>
  <br>Panduan pengisian bisa diunduh di beranda</br>
</div>
        <!-- left content -->
        <div class="col-md-12 articles" id="site-content">
        <!-- +data -->
        <div class="text-right" style="padding-bottom: 10px;">
            <a href="/jurnal/create" type="button" class="btn btn-success" > + Tambah</a>
        </div>
        
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
                <a href="{{ route('jurnal.edit', $post) }}" class="btn btn-xs btn-primary">edit</a> |
                {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger'])!!}
                {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <article class="posts">
                        </article>
        </div>
        </div>
        <!-- end of mid -->
@endsection
