@extends('layouts.user')

@section('content')


<header class="masthead" style="background-image: url('{{ asset('img/images/seafood.jpg') }}');">
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
                        <img class="img-fluid" src="{{ asset('img/images/portfolio/udang2.jpg ')}}"alt="..." />
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
                        <img class="img-fluid" src="{{ asset('img/images/portfolio/ikankakap2.webp')}}"alt="..." />
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
                        <img class="img-fluid" src="{{ asset('img/images/portfolio/gambarcumi.jpeg')}}" alt="..." />
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
                        <img class="img-fluid" src="{{ asset('img/images/portfolio/ikanbandeng2.webp')}}" alt="..." />
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
                        <img class="img-fluid" src="{{ asset('img/images/portfolio/ikangurame.webp')}}" alt="..." />
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
                        <img class="img-fluid" src="{{ asset('img/images/portfolio/ikanmujaer.jpeg')}}" alt="..." />
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
    </div>

    <div class="row" style="display: flex; flex-wrap: wrap">
        <div class="map-container" style="flex: 1; margin-right: 20px; margin-left: 60px; max-width: 50%; height: 360px; margin-top: 30px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7600685223583!2d108.24885197364154!3d-6.42486516282778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ec9364a0eb68b%3A0x37447fc068f8206d!2sUD%20Berkah%20Slamet%20Mandiri%20Lelea!5e0!3m2!1sid!2sid!4v1703933159204!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="width: 100%; height: 100%; border: 0;"></iframe>
        </div>
        <div class="form-container" style="flex: 1; max-width: 50%; margin-right: 50px; margin-top: 30px">
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="form-group">
                    <!-- Nama -->
                    <input class="form-control" id="nama" type="text" placeholder="Masukan nama *" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="nama:required">A nama is required.</div>
                </div>
                <div class="form-group">
                    <!-- Nomer telp -->
                    <input class="form-control" id="telp" type="tel" placeholder="Masukan Nomor telp *" data-sb-validations="required,tel" />
                    <div class="invalid-feedback" data-sb-feedback="telp:required">A phone number is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="telp:tel">Invalid phone number.</div>
                </div>
                <div class="form-group">
                    <!-- Jenis Dan Produk-->
                    <input class="form-control" id="jenis_produk" type="text" placeholder="Masukan jenis produk dan size *" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="jenis_produk:required">Jenis produk and size are required.</div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="pesan" placeholder="Masukan pesan *" data-sb-validations="required"></textarea>
                    <div class="invalid-feedback" data-sb-feedback="pesan:required">A message is required.</div>
                </div>
                <!-- Add submit button or other form elements as needed -->
            </form>
        </div>
    </div>
</section>

<footer style="background-color: #ff8a00; text-align: center; padding: 20px;">
    <div style="display: flex; align-items: center; justify-content: center;">
        <p style="color: white; margin: 0 10px;">Follow Us:</p>
        <a href="https://wa.me/6281292485052" style="color: white; text-decoration: none; margin: 5px;">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.facebook.com/supplierikansegarindramayu?mibextid=YimQGvt8cm5a3TS7" target="_blank" style="color: white; text-decoration: none; margin: 5px;">
            <i class="fab fa-facebook-square"></i>
        </a>
        <a href="https://www.tiktok.com/@supplierikanindramayu?_t=8icD8MxkxTF&_r=1" target="_blank" style="color: white; text-decoration: none; margin: 5px;">
            <i class="fab fa-tiktok"></i>
        </a>
    </div>
</footer>

        
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/images/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Udang</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/images/portfolio/udang2.jpg') }}" alt="..." />
                                    
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
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/images/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Ikan Kakap</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/images/portfolio/ikankakap2.webp') }}" alt="..." />
                                    
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
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/images/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Cumi</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{  asset('img/images/portfolio/gambarcumi.jpeg') }}" alt="..." />
                                    
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
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/images/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Ikan Bandeng</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/images/portfolio/ikanbandeng2.webp') }}" alt="..." />
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
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/images/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Ikan Gurame</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/images/portfolio/ikangurame.webp') }}" alt="..." />
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
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/images/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detail Produk-->
                                    <h2 class="text-uppercase">Ikan Mujaer</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/images/portfolio/ikanmujaer.jpeg') }}" alt="..." />
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