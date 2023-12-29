@extends('layouts.user')

@section('content')


<header class="masthead" style="background-image: url('{{ asset('/img/seafood.jpg') }}');">
    <div class="container">
        <div class="masthead-subheading">SELAMAT DATANG DI</div>
        <div class="masthead-heading text-uppercase">BERKAH SLAMET MANDIRI</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services" style="color: #FF8A00;">Selengkapnya</a>
    </div>
</header>
<!-- Tentang Kami-->
<section class="page-section" id="tentang_kami">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Tentang Kami</h2>
            <p>CV Berkah Slamet Mandiri adalah sebuah perusahaan yang berdedikasi pada bisnis distribusi ikan yang telah teruji dan terpercaya. Dengan fokusnya dalam menjaga kualitas, kebersihan, dan keamanan produk, perusahaan ini telah menjadi pilihan utama dalam menyediakan berbagai jenis ikan segar kepada pelanggan dan mitra bisnisnya. Dengan komitmen untuk memberikan layanan terbaik, CV Berkah Slamet Mandiri menjadi salah satu pelopor dalam memenuhi kebutuhan pasar akan pasokan ikan yang berkualitas tinggi, menjadikan mereka sebagai mitra yang diandalkan dalam industri distribusi ikan.</p>
        
</section>
<!-- Produk-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Produk</h2>
            <h3 class="section-subheading text-muted">Kami menyediakan berbagai macam ikan.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Produk item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('img/portfolio/udang2.jpg ')}}"alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Udang</div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Produk item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('img/portfolio/ikankakap2.webp')}}"alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Ikan Kakap</div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Produk item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('img/portfolio/gambarcumi.jpeg')}}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Cumi</div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <!-- Produk item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('img/portfolio/ikanbandeng2.webp')}}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"> Ikan Bandeng</div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <!-- Produk item 5-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('img/portfolio/ikangurame.webp')}}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Ikan Gurame</div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Produk item 6-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('img/portfolio/ikanmujaer.jpeg')}}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Ikan Mujaer</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hubungi Kami-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
        </div>
        
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Nama -->
                        <input class="form-control" id="nama" type="text" placeholder="Masukan nama *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="nama:required">A nama is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Nomer telp -->
                        <input class="form-control" id="telp" type="telp" placeholder="Masukan Nomor telp *" data-sb-validations="required,telp" />
                        <div class="invalid-feedback" data-sb-feedback="telp:required">An telp is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="telp:telp">telp is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Jenis Dan Produk-->
                        <input class="form-control" id="jenis produk" type="tel" placeholder="Masukan jenis produk dan size *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="jenis produk:required">A jenis produk number is required.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Masukan pesan -->
                        <textarea class="form-control" id="pesan" placeholder="Masukan pesan *" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="pesan:required">A pesan is required.</div>
                    </div>
                </div>
            </div>
            <!-- Submit success pesan-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccesspesan">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error pesan-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorpesan"><div class="text-center text-danger mb-3">Error sending pesan!</div></div>
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send pesan</button></div>
        </form>
    </div>
</section>

        
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Udang</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/portfolio/udang2.jpg') }}" alt="..." />
                                    
                                    <ul class="list-inline" style="font-size: 20px;">
                                        <li>
                                        <strong>Jenis:</strong>
                                            <div>-bambu</div>
                                            <div>-lobster</div>
                                        </li>
                                        <li>
                                        <strong>Size:</strong>
                                            <div>-S</div>
                                            <div>-L</div>
                                            <div>-XL</div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" style="font-size: 18px; padding: 10px 20px;" onclick="redirectToForm()">
                                        Pesan
                                    </button>
                                    
                                    <script>
                                        function redirectToForm() {
                                            window.location.href = "{{ route('form') }}";
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Ikan Kakap</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/portfolio/ikankakap2.webp') }}" alt="..." />
                                    
                                    <ul class="list-inline" style="font-size: 20px;">
                                        <li>
                                            <strong>Jenis:</strong>
                                            <div>-Kakap Merah</div>
                                            <div>-Kakap Putih</div>
                                        </li>
                                        <li>
                                            <strong>Size:</strong>
                                            <div>-S</div>
                                            <div>-L</div>
                                            <div>-XL</div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" style="font-size: 18px; padding: 10px 20px;" onclick="redirectToForm()">
                                        Pesan
                                    </button>
                                    
                                    <script>
                                        function redirectToForm() {
                                            window.location.href = "{{ route('form') }}";
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Cumi</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{  asset('img/portfolio/gambarcumi.jpeg') }}" alt="..." />
                                    
                                    <ul class="list-inline" style="font-size: 20px;">
                                        <li>
                                            <strong>Jenis:</strong>
                                            <div>-Cumi Telur</div>
                                            <div>-Sotong</div>
                                        </li>
                                        <li>
                                            <strong>Size:</strong>
                                            <div>-S</div>
                                            <div>-L</div>
                                            <div>-XL</div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" style="font-size: 18px; padding: 10px 20px;" onclick="redirectToForm()">
                                        Pesan
                                    </button>
                                    
                                    <script>
                                        function redirectToForm() {
                                            window.location.href = "{{ route('form') }}";
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Ikan Bandeng</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/portfolio/ikanbandeng2.webp') }}" alt="..." />
                                    <ul class="list-inline" style="font-size: 20px;">
                                        </li>
                                        <li>
                                            <strong>Size:</strong>
                                            <div>-S</div>
                                            <div>-L</div>
                                            <div>-XL</div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" style="font-size: 18px; padding: 10px 20px;" onclick="redirectToForm()">
                                        Pesan
                                    </button>
                                    
                                    <script>
                                        function redirectToForm() {
                                            window.location.href = "{{ route('form') }}";
                                        }
                                    </script>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Ikan Gurame</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/portfolio/ikangurame.webp') }}" alt="..." />
                                    <ul class="list-inline" style="font-size: 20px;">
                                        <li>
                                            <strong>Size:</strong>
                                            <div>-S</div>
                                            <div>-L</div>
                                            <div>-XL</div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" style="font-size: 18px; padding: 10px 20px;" onclick="redirectToForm()">
                                        Pesan
                                    </button>
                                    
                                    <script>
                                        function redirectToForm() {
                                            window.location.href = "{{ route('form') }}";
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Ikan Mujaer</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/portfolio/ikanmujaer.jpeg') }}" alt="..." />
                                    <ul class="list-inline" style="font-size: 20px;">
                                        <li>
                                            <strong>Size:</strong>
                                            <div>-S</div>
                                            <div>-L</div>
                                            <div>-XL</div>
                                        </li>
                                    </ul>
                                    
                                    <button type="button" class="btn btn-primary" style="font-size: 18px; padding: 10px 20px;" onclick="redirectToForm()">
                                        Pesan
                                    </button>
                                    
                                    <script>
                                        function redirectToForm() {
                                            window.location.href = "{{ route('form') }}";
                                        }
                                    </script>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection