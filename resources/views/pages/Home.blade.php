@extends('layouts.layout')

@section('content')
    <header>
        <div class="overlay"></div>
        <div class="container mt-3 position-relative">
            <div class="row">
                <div class="col-12">
                    <h1>Paket Internet Fiber Ultra Cepat dan Unlimited di Kota Medan</h1>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center gap-4 mt-4">
                    <a href="https://wa.me/6285372707853?text=Halo%20Sion,%20Saya%20mau%20daftar%20MyRepublic" target="_blank" rel="noopener noreferrer" role="button" class="btn btn-outline-light fw-semibold">Daftar Sekarang</a>
                    <a href="#paket" role="button" class="btn btn-warning text-light fw-semibold">Selengkapnya</a>
                </div>
            </div>
        </div>
    </header>
    <section>
        <img src="/assets/images/award.png" class="d-md-none w-100" title="Penghargaan yang MyRepublic dapatkan" alt="Penghargaan yang MyRepublic dapatkan">
        <div class="container d-none d-md-block mt-3">
            <img src="/assets/images/award-lg.png" class="w-100 rounded-3" title="Penghargaan yang MyRepublic dapatkan" alt="Penghargaan yang MyRepublic dapatkan">
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center section-heading">
                    <h2>Mengapa Pilih <br> MyRepublic?</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 reason-list">
                    <div class="reason-item rounded-4 py-3 px-2 odd">
                        <div class="reason-item_image">
                            <img src="/assets/images/game.png" class="w-100" alt="Streaming Dan Gaming Dengan Kecepatan Tinggi" title="Streaming Dan Gaming Dengan Kecepatan Tinggi">
                        </div>
                        <div class="">
                            <div class="reason-item_title text-center text-md-start mt-2">
                                <h3>Streaming Dan Gaming Dengan Kecepatan Tinggi</h3>
                            </div>
                            <div class="reason-item_subtitle text-center text-md-start mt-2">
                                <p>Internet Ultra Cepat Download Streaming Gaming. Temukan berbagai paket internet super cepat dengan harga super terjangkau.</p>
                            </div>
                        </div>
                    </div>
                    <div class="reason-item rounded-4 py-3 px-2 even">
                        <div class="reason-item_image">
                            <img src="/assets/images/cepat.png" class="w-100" alt="Lebih Cepat, Lebih Terjangkau" title="Lebih Cepat, Lebih Terjangkau">
                        </div>
                        <div class="">
                            <div class="reason-item_title text-center text-md-end mt-2">
                                <h3>Lebih Cepat, Lebih Terjangkau</h3>
                            </div>
                            <div class="reason-item_subtitle text-center text-md-end mt-2">
                                <p>MyRepublic menawarkan berbagai paket super cepat dengan harga super terjangkau. Bayar lebih murah untuk kualitas dan kecepatan lebih baik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="reason-item rounded-4 py-3 px-2 odd">
                        <div class="reason-item_image">
                            <img src="/assets/images/tv.png" class="w-100" alt="TV Pilihan Untuk Seluruh Keluarga" title="TV Pilihan Untuk Seluruh Keluarga">
                        </div>
                        <div class="">
                            <div class="reason-item_title text-center text-md-start mt-2">
                                <h3>TV Pilihan Untuk Seluruh Keluarga</h3>
                            </div>
                            <div class="reason-item_subtitle text-center text-md-start mt-2">
                                <p>Mulai dari saluran TV lokal, channel premium seperti Nickelodeon, MTV, Galaxy Premium, dan lainnya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="reason-item rounded-4 py-3 px-2 even">
                        <div class="reason-item_image">
                            <img src="/assets/images/dibangun.png" class="w-100" alt="Dibangun Oleh Gamers untuk Gamers" title="Dibangun Oleh Gamers untuk Gamers">
                        </div>
                        <div class="">
                            <div class="reason-item_title text-center text-md-end mt-2">
                                <h3>Dibangun Oleh Gamers untuk Gamers</h3>
                            </div>
                            <div class="reason-item_subtitle text-center text-md-end mt-2">
                                <p>Custom routing ke server game kelas dunia menjadikan koneksi MyRepublic rendah latensi. Tidak ada lagi lag yang bisa menghalangi kamu untuk menang!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 paket" id="paket">
        <div id="exTab1" class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3>Pilih Paket Internet yang<br>sesuai dengan kebutuhan kamu</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 d-flex align-items-center justify-content-center gap-3 tab-wrapper" id="nav-tab" role="tablist">
                    <button class="btn btn-lg btn-outline-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Internet</button>
                    <button class="btn btn-lg btn-outline-dark " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Internet + TV</button>
                </div>
            </div>
			<div class="row tab-content mt-5" id="nav-tabContent">
			    <div class="col-12 tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="paket-list">
                        <div class="paket-item d-flex align-items-center flex-column justify-content-start odd p-2 py-3 rounded-5">
                            <div class="paket-item_image d-flex align-items-center justify-content-center">
                                <img src="/assets/images/30.png" alt="" loading="lazy">
                            </div>
                            <div class="paket-item_detail text-center mt-4">
                                <h4>Value</h4>
                                <hr>
                                <p class="fw-bold text-dark">Kuota Tanpa Batas</p>
                                <p>Max 5 - 7 perangkat</p>
                                <hr>
                                <h5>Rp. 309 RIBU <span>/ BULAN</span></h5>
                                <span>*HARGA BELUM TERMASUK PPN 11%</span>
                                <br>
                                <span>*UNTUK KECEPATAN MAKSIMAL GUNAKAN KABEL LAN</span>
                            </div>
                            <div class="mt-2">
                                <a href="https://wa.me/6285372707853?text=Halo%20Sion,%20Saya%20mau%20daftar%20paket%20value%20MyRepublic" target="_blank" rel="noopener noreferrer" class="btn text-light custom-button">
                                    Pilih Paket
                                </a>
                            </div>
                        </div>
                        <div class="paket-item d-flex align-items-center flex-column justify-content-start even p-2 py-3 rounded-5">
                            <div class="paket-item_image d-flex align-items-center justify-content-center">
                                <img src="/assets/images/50.png" alt="" loading="lazy">
                            </div>
                            <div class="paket-item_detail text-center mt-4">
                                <h4>Fast</h4>
                                <hr>
                                <p class="fw-bold text-dark">Kuota Tanpa Batas</p>
                                <p>Max. 8 - 12 perangkat</p>
                                <hr>
                                <h5>Rp. 409 RIBU <span>/ BULAN</span></h5>
                                <span>*HARGA BELUM TERMASUK PPN 11%</span>
                                <br>
                                <span>*UNTUK KECEPATAN MAKSIMAL GUNAKAN KABEL LAN</span>
                            </div>
                            <div class="mt-2">
                                <a href="https://wa.me/6285372707853?text=Halo%20Sion,%20Saya%20mau%20daftar%20paket%20fast%20MyRepublic" target="_blank" rel="noopener noreferrer" class="btn text-light custom-button">
                                    Pilih Paket
                                </a>
                            </div>
                        </div>
                        <div class="paket-item d-flex align-items-center flex-column justify-content-start odd p-2 py-3 rounded-5">
                            <div class="paket-item_image d-flex align-items-center justify-content-center">
                                <img src="/assets/images/100.png" alt="" loading="lazy">
                            </div>
                            <div class="paket-item_detail text-center mt-4">
                                <span class="badge router text-light p-2 mb-2">TERMASUK ROUTER PRO</span>
                                <h4>Nova</h4>
                                <hr>
                                <p class="fw-bold text-dark">Kuota Tanpa Batas</p>
                                <p>Max. 16 - 20 perangkat</p>
                                <hr>
                                <h5>Rp. 639 RIBU <span>/ BULAN</span></h5>
                                <span>*HARGA BELUM TERMASUK PPN 11%</span>
                                <br>
                                <span>*UNTUK KECEPATAN MAKSIMAL GUNAKAN KABEL LAN</span>
                            </div>
                            <div class="mt-2">
                                <a href="https://wa.me/6285372707853?text=Halo%20Sion,%20Saya%20mau%20daftar%20paket%20nova%20MyRepublic" target="_blank" rel="noopener noreferrer" class="btn text-light custom-button">
                                    Pilih Paket
                                </a>
                            </div>
                        </div>
                        <div class="paket-item d-flex align-items-center flex-column justify-content-start even p-2 py-3 rounded-5">
                            <div class="paket-item_image d-flex align-items-center justify-content-center">
                                <img src="/assets/images/250.png" alt="" loading="lazy">
                            </div>
                            <div class="paket-item_detail text-center mt-4">
                                <span class="badge router text-light p-2 mb-2">TERMASUK ROUTER PRO</span>
                                <h4>My Gamer</h4>
                                <hr>
                                <p class="fw-bold text-dark">Kuota Tanpa Batas</p>
                                <p>Max. 16 - 20 perangkat /<br>pengguna internet dengan<br>aktivitas berat (game online &<br>download game)</p>
                                <hr>
                                <h5>Rp. 749 RIBU <span>/ BULAN</span></h5>
                                <span>*HARGA BELUM TERMASUK PPN 11%</span>
                                <br>
                                <span>*UNTUK KECEPATAN MAKSIMAL GUNAKAN KABEL LAN</span>
                            </div>
                            <div class="mt-2">
                                <a href="https://wa.me/6285372707853?text=Halo%20Sion,%20Saya%20mau%20daftar%20paket%20my%20gamer%20MyRepublic" target="_blank" rel="noopener noreferrer" class="btn text-light custom-button">
                                    Pilih Paket
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="paket-list">
                        <div class="paket-item d-flex align-items-center flex-column justify-content-start odd p-2 py-3 rounded-5">
                            <div class="paket-item_image d-flex align-items-center justify-content-center">
                                <img src="/assets/images/30.png" alt="" loading="lazy">
                            </div>
                            <div class="paket-item_detail text-center mt-4">
                                <h4>Value</h4>
                                <h4>COMBO TV 74 CH.</h4>
                                <img src="/assets/images/vidio.png" alt="vidio platinum">
                                <hr>
                                <p class="fw-bold text-dark">Kuota Tanpa Batas</p>
                                <p>Cocok untuk penggunaan 5 hingga 7<br>perangkat sekaligus</p>
                                <hr>
                                <h5>Rp. 389 RIBU <span>/ BULAN</span></h5>
                                <span>*HARGA BELUM TERMASUK PPN 11%</span>
                                <br>
                                <span>*UNTUK KECEPATAN MAKSIMAL GUNAKAN KABEL LAN</span>
                            </div>
                            <div class="mt-2">
                                <a href="https://wa.me/6285372707853?text=Halo%20Sion,%20Saya%20mau%20daftar%20paket%20internet%20dan%20tv%20value%20MyRepublic" target="_blank" rel="noopener noreferrer" class="btn text-light custom-button">
                                    Pilih Paket
                                </a>
                            </div>
                        </div>
                        <div class="paket-item d-flex align-items-center flex-column justify-content-start even p-2 py-3 rounded-5">
                            <div class="paket-item_image d-flex align-items-center justify-content-center">
                                <img src="/assets/images/50.png" alt="" loading="lazy">
                            </div>
                            <div class="paket-item_detail text-center mt-4">
                                <h4>Fast</h4>
                                <h4>COMBO TV 77 CH.</h4>
                                <img src="/assets/images/vidio.png" alt="vidio platinum">
                                <hr>
                                <p class="fw-bold text-dark">Kuota Tanpa Batas</p>
                                <p>Cocok untuk penggunaan 8 hingga 12<br>perangkat sekaligus</p>
                                <hr>
                                <h5>Rp. 509 RIBU <span>/ BULAN</span></h5>
                                <span>*HARGA BELUM TERMASUK PPN 11%</span>
                                <br>
                                <span>*UNTUK KECEPATAN MAKSIMAL GUNAKAN KABEL LAN</span>
                            </div>
                            <div class="mt-2">
                                <a href="https://wa.me/6285372707853?text=Halo%20Sion,%20Saya%20mau%20daftar%20paket%20internet%20dan%20tv%20fast%20MyRepublic" target="_blank" rel="noopener noreferrer" class="btn text-light custom-button">
                                    Pilih Paket
                                </a>
                            </div>
                        </div>
                        <div class="paket-item d-flex align-items-center flex-column justify-content-start odd p-2 py-3 rounded-5">
                            <div class="paket-item_image d-flex align-items-center justify-content-center">
                                <img src="/assets/images/100.png" alt="" loading="lazy">
                            </div>
                            <div class="paket-item_detail text-center mt-4">
                                <span class="badge router text-light p-2 mb-2">FREE EKSLUSIF ROUTER</span>
                                <h4>Nova</h4>
                                <h4>COMBO TV 77 CH.</h4>
                                <img src="/assets/images/vidio.png" alt="vidio platinum">
                                <hr>
                                <p class="fw-bold text-dark">Kuota Tanpa Batas</p>
                                <p>Cocok untuk penggunaan 16 hingga 20 perangkat sekaligus</p>
                                <hr>
                                <h5>Rp. 739 RIBU <span>/ BULAN</span></h5>
                                <span>*HARGA BELUM TERMASUK PPN 11%</span>
                                <br>
                                <span>*UNTUK KECEPATAN MAKSIMAL GUNAKAN KABEL LAN</span>
                            </div>
                            <div class="mt-2">
                                <a href="https://wa.me/6285372707853?text=Halo%20Sion,%20Saya%20mau%20daftar%20paket%20internet%20dan%20tv%20nova%20MyRepublic" target="_blank" rel="noopener noreferrer" class="btn text-light custom-button">
                                    Pilih Paket
                                </a>
                            </div>
                        </div>
                        <div class="paket-item d-flex align-items-center flex-column justify-content-start even p-2 py-3 rounded-5">
                            <div class="paket-item_image d-flex align-items-center justify-content-center">
                                <img src="/assets/images/250.png" alt="" loading="lazy">
                            </div>
                            <div class="paket-item_detail text-center mt-4">
                                <span class="badge router text-light p-2 mb-2">FREE EKSLUSIF ROUTER</span>
                                <h4>My Gamer</h4>
                                <h4>COMBO TV 77 CH.</h4>
                                <img src="/assets/images/vidio.png" alt="vidio platinum">
                                <hr>
                                <p class="fw-bold text-dark">Kuota Tanpa Batas</p>
                                <p>Cocok untuk penggunaan 16 hingga 20 perangkat sekaligus / pengguna<br>internet dengan aktivitas berat (game<br>online & download game)</p>
                                <hr>
                                <h5>Rp. 829 RIBU <span>/ BULAN</span></h5>
                                <span>*HARGA BELUM TERMASUK PPN 11%</span>
                                <br>
                                <span>*UNTUK KECEPATAN MAKSIMAL GUNAKAN KABEL LAN</span>
                            </div>
                            <div class="mt-2">
                                <a href="https://wa.me/6285372707853?text=Halo%20Sion,%20Saya%20mau%20daftar%20paket%20internet%20dan%20tv%20my%20gamer%20MyRepublic" target="_blank" rel="noopener noreferrer" class="btn text-light custom-button">
                                    Pilih Paket
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </section>
    <section class="mt-5 contact py-5">
        <div class="overlay"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 flex-column flex-md-row text-center d-flex align-items-center justify-content-center gap-5">
                    <h6 class="m-0 text-light">Hubungi Kami Untuk Detail Paket</h6>
                    <a href="https://wa.me/6285372707853?text=Halo%20Sion,%20Saya%20mau%20daftar%20MyRepublic" target="_blank" rel="noopener noreferrer" class="btn btn-warning fw-semibold">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection