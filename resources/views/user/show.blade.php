@extends('master')

@section('isi')
{!! Form::model($user, ['route' => ['user.update', $user],'method'=>'PUT']) !!}
<a href="/user/create" type="button" class="btn btn-primary"> + Tambah</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0 ?>
            @foreach ($user as $user)
            <?php $no++ ?>
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->level }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! Form::close() !!}
    
@stop
        
