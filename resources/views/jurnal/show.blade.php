@extends('master')

@section('isi')
<!-- mid -->
<div class="row" style="background-color:white;">
        <!-- left content -->
        <div class="col-md-12 articles" id="site-content">
        <!-- alert -->
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> IKUTI PETUNJUK WOY!!!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <!-- +data -->
        <div class="text-right" style="padding-bottom: 10px;">
            <a href="/jurnal/create" type="button" class="btn btn-success" > + Tambah</a>
        </div>
        
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama_Artikel</th>
                        <th>Nomer_DOI_Artikel</th>
                        <th>Cakupan_Bidang_Ilmu</th>
                        <th>kontribusi</th>
                        <th>Bidang_Ilmu_Pengusul</th>
                        <th>Lembaga_Pemberi_Dana</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($post as $post)
                    <tr>
                        <td></td>
                        <td>{{$post->Nama_Artikel}}</td>
                        <td>{{$post->Nomer_DOI_Artikel}}</td>
                        <td>{{$post->Cakupan_Bidang_Ilmu}}</td>
                        <td>{{$post->kontribusi}}</td>  
                        <td>{{$post->Bidang_Ilmu_Pengusul}}</td>
                        <td>{{$post->Tanggal_Penerbitan}}</td>
                        <td>{{$post->Lembaga_Pemberi_Dana}}</td>
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
