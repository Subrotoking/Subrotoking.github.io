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
            <a href="/prosiding/create" type="button" class="btn btn-success" > + Tambah</a>
        </div>
        
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Published</th>
                        <th>Pencipta</th>
                        <th>Kategori</th>
                        <th>Tag</th>
                        <th>Tanggal</th>
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
                        {!! Form::model($post, ['route' => ['prosiding.destroy',$post], 'method'=>'delete', 'class' => 'forminline'])!!} 
                <a href="{{ route('prosiding.edit', $post) }}" class="btn btn-xs btn-primary">edit</a> |
                {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger'])!!}
                {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Kambing 123
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title" id="myModalLabel">Universitas Muhammadiyah Malang</h4>
        </div>
        <div class="modal-body">
         UMM adalah Universita terseram di dunia dimana di kampus ini mempunyai banyak misteri dan suatu hal yang horor, akan tetapi dibalik semua itu
         UMM rata rata wanitanya cantik jadi bagi kalian yang ingin kuliah sekaligus cuci mata silahkan kuliah disini, spp dpp murah kok g mahal2 amat.
         ayo tunggu apalagi njing!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
                <article class="posts">
                        </article>
        </div>
        </div>
        <!-- end of mid -->
@endsection
