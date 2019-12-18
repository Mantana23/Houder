@extends('partials.header')
<div class="all-page-title" style="background-image:url(../assets/images/pattern-4.png);">
    <div class="container text-center">
        <h1>Kontak</h1>
    </div>
</div>

<div id="support" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Hubungi Kami</h3>
            <p class="lead">Anda dapat menghubungi kami dengan mengisi form dibawah</p>
        </div>
        <!-- end title -->
        <div class="row section wb">
            <div class="col-md-6">
                <br>
                <div class="contact_form">
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <form class="row" action="/contact/create" method="POST">
                        {{csrf_field()}}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Silahkan Masukkan Nama">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Silahkan Masukkan Email">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea class="form-control" name="deskripsi" id="comments" rows="6" placeholder="Silahkan Beri Komentar Ataupun Saran"></textarea>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                            <button type="submit" id="submit" class="btn btn-grd1 btn-block btn-grd">Contact</button>
                        </div>      
                    </form>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="map-box ">
                    <div id="custom-places" class="small-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7162225176107!2d119.43395551484372!3d-5.149303253488506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee33f5228d9ed%3A0xc7b98174107a7c1a!2sPELAYANAN%20KESEHATAN%20KELURGA%2C%20Jl.%20Pelita%203%20Utara%20No.2%2C%20Balla%20Parang%2C%20Kec.%20Rappocini%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan%2090232!5e0!3m2!1sid!2sid!4v1576422773508!5m2!1sid!2sid"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end section -->
@extends('partials.footer')
