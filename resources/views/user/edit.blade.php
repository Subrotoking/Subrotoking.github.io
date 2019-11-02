@extends('layouts.app')

@section('content')

<div class="container" style="background-color: #F5F5F5;">
    <!-- head -->
    <div class="row">
        <div class="col-md-12 header" id="site-header" >
        </div>
    </div>
    <!-- end of head -->
    <!-- mid -->
        <div class="row" style="background-color:white;">
        <!-- left content -->
        <div class="col-md-12 articles" id="site-content">
        {!! Form::model($user, ['route' => ['user.update', $user],'method'=>'PUT']) !!}
        @include('user._user-form')
            
        {!! Form::close() !!}
                <article class="posts">
                        </article>
        </div>
        </div>
        <!-- end of mid -->
        <!-- footer -->
        <div class="row" >
        <div class="col-md-12 footer" id="site-footer"style="background-color:#CC3300; color:white;padding: 10px 20px;margin-top: 20px;">
            <div class="col-md-4 footer" id="site-footer">
            <h3 class="widget-title">Kontak</h3>
                        <div class="widget-body">
                            <p>
                                <span style="font-size: 14px; font-weight: bold;">Ditjen Penguatan Riset dan Pengembangan<br>
                                    Kementerian Riset, Teknologi, dan Pendidikan Tinggi<br>
                                </span>
                                <br>
                                Gedung D Lantai 4, Pintu I Senayan<br>
                                Jl. Jenderal Sudirman, Senayan,<br>
                                Jakarta 10270<br>
                                Telp : (021) 57946100 Ext. 0447, 0448<br>
                                Fax : (021) 5731846<br>
                                E-mail : <a href="mailto:simlitabmas@dikti.go.id">simlitabmas@dikti.go.id</a>
                            </p>
                        </div>
                </div>
            </div>
        <div class="col-md-12 footer" id="site-footer"style="background-color:#003333; color:white;padding: 10px 20px;">
                <footer class="copyright text-center"><p>&copy; 2019 insentif-jurnal-prosiding.com</p></footer>
            </div>
        </div>
        <!-- end of footer -->
</div>
@endsection

