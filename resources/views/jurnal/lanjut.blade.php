@extends('master')
    @section('isi')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload New File</div>
                    <div class="panel-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('post') }}
                            <div class="form-group {{ !$errors->has('Nama_Artikel') ?: 'has-error' }}">
                                <label>Nama_Artikel</label>
                                <input type="text" name="Nama_Artikel" class="form-control">
                                <span class="help-block text-danger">{{ $errors->first('Nama_Artikel') }}</span>
                            </div>
                            <div class="form-group {{ !$errors->has('lampiran1') ?: 'has-error' }}">
                                <label>File</label>
                                <input type="file" name="lampiran1">
                                <span class="help-block text-danger">{{ $errors->first('lampiran1') }}</span>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection