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
                    <th>No</th>
                    <th>Nama Lembaga</th>
                    <th>URL Lembaga</th>
                    <th>Lembaga Penilai</th>
                    <th>Nilai IF & Url</th>
                    <th>Nilai H-Index & URL</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($post as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>fgisa</td>
                        <td>fgisa</td>
                        <td>fgisa</td>  
                        <td>fgisa</td>
                        <td>fgisa</td>
                        <td>fgisa</td>
                        <td>
                        {!! Form::model($pindex, ['route' => ['pengindex.destroy',$pindex], 'method'=>'delete', 'class' => 'forminline'])!!} 
                <a href="{{ route('pengindex.edit', $pindex) }}" class="btn btn-xs btn-primary">edit</a> |
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
