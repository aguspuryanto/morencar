<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

    <!-- Form Pemesanan -->
    <section id="form-pemesanan" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Form Pemesanan</h2>
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="tanggal-mulai" class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggal-mulai" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal-selesai" class="form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tanggal-selesai" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tipe-mobil" class="form-label">Tipe Mobil</label>
                    <select class="form-select" id="tipe-mobil" required>
                        <option value="">Pilih Tipe Mobil</option>
                        <option value="sedan">Sedan</option>
                        <option value="suv">SUV</option>
                        <option value="minibus">Minibus</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="lokasi-penjemputan" class="form-label">Lokasi Penjemputan</label>
                    <input type="text" class="form-control" id="lokasi-penjemputan" placeholder="Masukkan lokasi" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Fitur Section -->
    <section id="fitur" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Fitur Kami</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Fitur 1">
                        <div class="card-body">
                            <h5 class="card-title">Berbagai Pilihan Mobil</h5>
                            <p class="card-text">Temukan berbagai jenis mobil sesuai kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Fitur 2">
                        <div class="card-body">
                            <h5 class="card-title">Pemesanan Mudah</h5>
                            <p class="card-text">Proses pemesanan yang cepat dan efisien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Fitur 3">
                        <div class="card-body">
                            <h5 class="card-title">Harga Transparan</h5>
                            <p class="card-text">Dapatkan harga terbaik tanpa biaya tersembunyi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Hubungi Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Alamat</h5>
                    <p>Jl. Contoh Alamat, Jakarta, Indonesia</p>
                </div>
                <div class="col-md-6">
                    <h5>Email</h5>
                    <p>rentalmobil@example.com</p>
                </div>
            </div>
        </div>
    </section>

<?php $this->endSection(); ?>