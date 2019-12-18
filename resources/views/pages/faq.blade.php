@extends('partials.header')

<div class="all-page-title" style="background-image:url(../assets/images/pattern-4.png);">
    <div class="container text-center">
        <h1>FAQ</h1>
    </div>
</div>
<!-- end section -->

{{-- <svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
  <path d="M-5 100 Q 0 20 5 100 Z
        M0 100 Q 5 0 10 100
        M5 100 Q 10 30 15 100
        M10 100 Q 15 10 20 100
        M15 100 Q 20 30 25 100
        M20 100 Q 25 -10 30 100
        M25 100 Q 30 10 35 100
        M30 100 Q 35 30 40 100
        M35 100 Q 40 10 45 100
        M40 100 Q 45 50 50 100
        M45 100 Q 50 20 55 100
        M50 100 Q 55 40 60 100
        M55 100 Q 60 60 65 100
        M60 100 Q 65 50 70 100
        M65 100 Q 70 20 75 100
        M70 100 Q 75 45 80 100
        M75 100 Q 80 30 85 100
        M80 100 Q 85 20 90 100
        M85 100 Q 90 50 95 100
        M90 100 Q 95 25 100 100
        M95 100 Q 100 15 105 100 Z">
  </path>
</svg> --}}

<div id="mu-faq " class="section wb">

    <div class="container">
        <div class="section-title text-center">
            <h3>Ada Pertanyaan?</h3>
        </div>
        <div class="row">

            <div class="mu-faq-content">

                <div class="panel-group" id="accordion">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">
                                    <span class="fa fa-plus"></span> Apa itu Houder?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>
                                    Houder adalah sebuah sistem layanan <b><i>"Smart Work"</i></b> yang bergerak dibidang jasa khususnya hunian. Selain itu Houder juga merupakan jembatan bagi para pencari hunian dengan pemilik hunian.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <span class="fa fa-plus"></span> Bagaimana cara penggunaan aplikasi Houder?

                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li>1. <a href="https://play.google.com/store/apps/details?id=com.houder.admin">Download</a> aplikasi Houder terlebih dahulu.</li>
                                    <li>2. Install aplikasi dan cari hunian yang anda butuhkan dan kemudian sewa.</li>
                                    <li>3. Bayar sewa hunian anda </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <span class="fa fa-plus"></span> Bagaimana cara menjadi mitra?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li>1. <a href="https://play.google.com/store/apps/details?id=com.houder.pemilikkost">Download</a> aplikasi Houder Mitra.</li>
                                    <li>2. Install aplikasi kemudian isikan data diri anda.</li>
                                    <li>3. Isi data Hunian yang anda miliki. </li>
                                    <li>4. Tunggu tim lapangan kami untuk mensurvey hunian anda</li>
                                    <li>5. Setelah disurvey dan lulus survey anda dapat melakukan pengaktifan hunian anda untuk dipublikasi.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <span class="fa fa-plus"></span>Bagaimana cara aktifasi hunian?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li>1. Anda dapat mengaktifasi hunian anda ke tim lapangan kami yang mensurvey hunian anda jika lulus survey.</li>
                                    <li>2. Dapat juga melakukan aktifasi dengan TopUp sejumlah Rp. 50.000,-.</li>
                                    <li>3. TopUp dapat dilakukan dengan mennggunakan aplikasi.</li>
                                    <li>4. melakukan pembayaran di bank dengan nomor rekening yang diberikan menggunakan email (cs@houder.co.id).</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                    <span class="fa fa-plus"></span> Bagaimana jika terjadi pelanggaran kode etik?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li>1. Pemutusan kerjasama antara Mitra dengan Houder</li>
                                    <li>2. Pelaporan kepada pihak yang berwajib.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Silahkan Bertanya</h3>
        </div>
        <div class="col-md-12">
            <div class="contact_form">
                <form class="row" action="/faq/create" method="POST">
                    {{csrf_field()}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Silahkan Masukkan Email">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="6" placeholder="Silahkan Bertanya"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                        <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Kirim</button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</div>

@extends('partials.footer')
