@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('profile.update') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right"> </label>
                                            <div class="col-md-6">
                                            <div class="text-center">
                                                <img class="center-block" src="{{ asset(auth()->user()->image) }}" style="width: 100px; height: 100px; border-radius: 0%;">
                                            </div></div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="name" class="col-md-2 col-form-label text-md-left"></label>
                                            <label for="name" class="col-md-2 col-form-label text-md-left">Name</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="name" class="col-md-2 col-form-label text-md-left"></label>
                                            <label for="nidn" class="col-md-2 col-form-label text-md-left">NIDN</label>
                                            <div class="col-md-6">
                                                <input id="nidn" type="text" class="form-control" name="nidn" value="{{ old('nidn', auth()->user()->nidn) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="name" class="col-md-2 col-form-label text-md-left"></label>
                                            <label for="nidn" class="col-md-2 col-form-label text-md-left">NIP</label>
                                            <div class="col-md-6">
                                                <input id="nip" type="text" class="form-control" name="nip" value="{{ old('nip', auth()->user()->nip) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="name" class="col-md-2 col-form-label text-md-left"></label>
                                            <label for="nidn" class="col-md-2 col-form-label text-md-left">Fakultas</label>
                                            <div class="col-md-6">
                                                <input id="fakultas" type="text" class="form-control" name="fakultas" value="{{ old('fakultas', auth()->user()->fakultas) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="name" class="col-md-2 col-form-label text-md-left"></label>
                                            <label for="nidn" class="col-md-2 col-form-label text-md-left">Jurusan</label>
                                            <div class="col-md-6">
                                                <input id="jurusan" type="text" class="form-control" name="jurusan" value="{{ old('jurusan', auth()->user()->jurusan) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="name" class="col-md-2 col-form-label text-md-left"></label>
                                            <label for="nidn" class="col-md-2 col-form-label text-md-left">Email</label>
                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="name" class="col-md-2 col-form-label text-md-left"></label>
                                            <label for="nidn" class="col-md-2 col-form-label text-md-left">Profile Image</label>
                                            <div class="col-md-4">
                                                    <div class="btn btn-primary btn-sm float-left">
                                                    <span>Choose file</span>
                                                        <input id="profile_image" type="file" name="profile_image">
                                                        @if (auth()->user()->image)
                                                            <code>{{ auth()->user()->image }}</code>
                                                        @endif
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="name" class="col-md-2 col-form-label text-md-left"></label>
                                            <label for="password" class="col-md-2 col-form-label text-md-left">Password</label>
                                            <div class="col-md-6">
                                                <input id="password" type="text" class="form-control" name="password" value="{{ old('password', auth()->user()->password) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection