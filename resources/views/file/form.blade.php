@extends('master')
    @section('isi')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="text-center">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('post') }}
                            <div class="text-center">
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
                                        <td width="70px"></td>
                                        <td width="70px"></td>
                                        <td width="200px">
                                            <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                                                <label>Upload Lampiran</label>
                                                <input type="file" name="file">
                                                <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td width="70px"></td>
                                    <td width="300px"><a href="https://drive.google.com/file/d/1-7OyE9xNZVA7r-4bJuIXkfGIOrXqvqGw/view?usp=drivesdk">
                                    <button type="button" class="btn btn-primary" value="Download Lampiran">Download Lampiran</button></td>
                                    <td width="70px"></td>
                                    <td width="400px">
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">Upload Lampiran</button>
                                            </div>
                                        </td>
                                    </tr>
                                </div>
                                </table>

                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
  