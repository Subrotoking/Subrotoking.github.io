@extends('layouts.app')

@section('content')

<div class="container" style="background-color: #F5F5F5;">
    <!-- head -->
    <div class="row">
        <div class="col-md-12 header" id="site-header" style="background-color: #FFFFFF;border-bottom: 10px solid #F5F5F5; padding-bottom: 10px;padding-top: 10px;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" >
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" ></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ ('img/malasngoding1.png') }}"  style="width: 1100px; height: 300px; " alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/malasngoding2.png" style="width: 1100px; height: 300px; " alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/malasngoding3.png" style="width: 1100px; height: 300px; " alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"  >
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #222d32 "></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" >
                    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #222d32 "></span>
                    <span class="sr-only" >Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- end of head -->
    <!-- mid -->
        <div class="row" style="background-color:white;">
        <!-- left content -->
        <div class="col-md-12 articles" id="site-content">
            <!-- mid -->
        <div class="row" style="background-color:white;">
        <!-- left content -->
        <div class="col-md-9 articles" id="site-content">
            <ul class="nav nav-tabs" style="padding: 10px 20px;margin-top: 10px;">
            <li class="nav-item">
                <a class="nav-link" href="#Tujuan" role="tab" data-toggle="tab">Tujuan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Sasaran" role="tab" data-toggle="tab">Sasaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#jmlhin" role="tab" data-toggle="tab">Jumlah Insentif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#perpen" role="tab" data-toggle="tab">Persyaratan Pengusulan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tcp" role="tab" data-toggle="tab">Tata Cara Pengusulan</a>
            </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="Tujuan">
            <p></p>
                                    <p>
                                        Program ini bertujuan untuk:
                                    </p>
                                    <ol>
                                        <li>
                                            Meningkatkan kemampuan para dosen/peneliti untuk mempublikasikan hasil
                                            penelitiannya dalam jurnal ilmiah yang bermutu dan bertaraf internasional dan
                                        </li>
                                        <li>
                                            Mendorong dosen/peneliti agar makin berani untuk menulis artikel dalam 
                                            jurnal ilmiah internasional
                                        </li>
                                    </ol>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="Sasaran">
            <p></p>
                                    <p>
                                        Sasaran dari program ini adalah diharapkan dapat terjadi peningkatan 
                                        publikasi ilmiah internasional dosen/peneliti serta akan meningkatkan 
                                        pula kualitas penelitian di Indonesia dan nama Indonesia di kancah peneliti internasional.
                                    </p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="jmlhin">
            <p></p>
                                    <p>
                                        Insentif  artikel ilmiah tahun anggaran 2017 diberikan kepada 125 (seratus dua puluh lima) 
                                        dosen/peneliti yang artikel ilmiahnya telah diterbitkan pada jurnal internasional maksimum 
                                        sebesar Rp. 35.000.000,- (tiga puluh lima juta rupiah) dipotong pajak sesuai ketentuan yang 
                                        berlaku (15%), dan telah direkomendasikan oleh reviewer berdasar hasil seleksi.
                                    </p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="perpen">
            <p></p>
                                    <p>
                                        Usulan insentif jurnal dapat diproses jika pengusul dan artikel memenuhi syarat sebagai berikut.
                                    </p>
                                    <ol>
                                        <li>
                                            Insentif diberikan kepada dosen/peneliti perguruan tinggi yang artikelnya telah 
                                            diterbitkan dalam jurnal ilmiah bertaraf internasional (bukan prosiding) setelah 1 Januari 2014.
                                        </li>
                                        <li>
                                            Artikel yang sedang diproses untuk diterbitkan tidak dapat diajukan.
                                        </li>
                                        <li>
                                            Artikel ilmiah merupakan karya pengusul dan bebas plagiarisme dan belum pernah memperoleh 
                                            insentif serupa yang dikuatkan dengan surat pernyataan.
                                        </li>
                                        <li>
                                            Artikel ilmiah ditulis dalam salah satu bahasa resmi dalam forum PBB: Inggris, Perancis, Spanyol, Cina, dan Arab.
                                        </li>
                                        <li>
                                            Artikel ilmiah merupakan hasil penelitian yang bukan bagian tesis atau disertasi 
                                            yang diajukan di perguruan tinggi luar negeri.
                                        </li>
                                        <li>
                                            Pengusul yang diperbolehkan mengikuti program ini adalah dosen/peneliti dari 
                                            perguruan tinggi di bawah binaan Kementerian Riset, Teknologi, dan Pendidikan Tinggi.
                                        </li>
                                        <li>
                                            Pengusul adalah penulis pertama dan atau penulis korespondensi dengan 
                                            jumlah penulis dalam artikel ilmiah tersebut maksimal 5 (lima) orang.
                                        </li>
                                        <li>
                                            Insentif artikel pada jurnal internasional hanya diberikan kepada penulis pertama atau penulis korespondensi.
                                        </li>
                                        <li>
                                            Penulis pertama dan atau penulis korespondensi harus berafiliasi pada institusi 
                                            Indonesia dan harus dicantumkan dalam artikel.
                                        </li>
                                        <li>
                                            Pengusul hanya diperbolehkan menerima satu kali insentif untuk satu periode pengusulan.
                                        </li>
                                        <li>
                                            Artikel yang telah mendapatkan insentif tidak dapat diusulkan kembali.
                                        </li>
                                    </ol>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tcp">
            <p></p>
                                    <p>
                                        Pengusulan insentif artikel ilmiah dilakukan dengan mengikuti prosedur sebagai berikut.
                                    </p>
                                    <ol>
                                        <li>
                                            Pengusul yang telah memiliki user dan password Simlitabmas bisa langsung mendaftarkan usulannya melalui Simlitabmas. 
                                        </li>
                                        <li>
                                            Pengusul yang belum memiliki user dan password Simlitabmas dapat menghubungi operator di LP/LPPM perguruan tinggi dimana pengusul bekerja.
                                        </li>
                                        <li>
                                            Melalui Simlitabmas, pengusul mengisi identitas dan mengunggah semua berkas yang dipersyaratkan dengan ketentuan sebagai berikut.
                                            <ul>
                                                <li>
                                                    Mengisi Identititas Usulan yang memuat identitas pengusul, identitas artikel, identitas jurnal, dan sumber dana penelitian.
                                                </li>
                                                <li>
                                                    Isian Identitas Usulan kemudian diunduh untuk mendapatkan pengesahan pimpinan perguruan tinggi sekurang-kurangnya setingkat dekan atau ketua LP/LPPM.
                                                </li>
                                                <li>
                                                    Identitas Usulan yang telah disahkan kemudian dipindai (di-scan) dan diunggah kembali ke Simlitabmas.
                                                </li>
                                                <li>
                                                    Mengunggah reprint/cetakan pdf artikel yang diusulkan untuk mendapatkan insentif.
                                                </li>
                                                <li>
                                                    Mengunggah file Biodata Pengusul yang telah ditandatangani dalam format PDF.
                                                </li>
                                                <li>
                                                    Mengunggah file pdf Surat Pernyataan Pengusul yang telah ditandatangani dalam format PDF.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Panduan Pengusulan Insentif Artikel Ilmiah Tahun 2017 melalui Simlitabmas dapat dilihat pada link berikut <a href="http://simlitabmas.ristekdikti.go.id/unduh_berkas/Panduan_Insentif_Artikel_Jurnal_Internasional_2019.pdf" target="_blank">here</a>
                                        </li>
                                    </ol>
            </div>
            </div>
                <article class="posts">
                        </article>
        </div>
        <!-- end of left content -->
        <!-- right content -->
        <div class="col-md-3 sidebar" id="site-sidebar">
                <aside class="widgets" style="background-color:white; padding: 10px 20px;margin-top: 20px;">
                        <h3 class="widget-title" style="font-style: italic;padding: 10px 20px;border-bottom: 4px solid #222d32;padding-bottom: 4px;">Pengumuman</h3>
                        <ul>
                                <li style="list-style: none;font-style: oblique;"><a href="">Pengumuman hasil insentif jurnal-prosiding 2019</a></li>
                        </ul>
                        </aside>
                        <aside class="widgets" style="background-color:white; padding: 10px 20px;margin-top: 20px;">
                        <h3 class="widget-title" style="font-style: italic;padding: 10px 20px;border-bottom: 4px solid #222d32;padding-bottom: 4px;">Panduan</h3>
                        <ul>
                                <li style="list-style: none;font-style: oblique;"><a href="https://drive.google.com/file/d/1Ipa7NpkScJzvud_aQL0cAyp5LPIpv9Vq/view?usp=drivesdk">Panduan insentif jurnal-prosiding 2019</a></li>
                        </ul>
                        </aside>
        </div>
        
        <!-- end of right content -->
        </div>
        <!-- end of mid -->
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
                                E-mail : <a href="">email@boongan.yo.iki</a>
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
