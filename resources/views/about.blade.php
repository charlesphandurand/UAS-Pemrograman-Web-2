@extends('layouts.home')
@section('konten')
    <div class="container" style="margin-top: 70px;">
        <div class="row text-center mb-3">
            <div class="col-sm-12">
                <h1>About</h1>
                <hr>
            </div>
        </div>

        <div class="row" style="text-align: justify">
            <h4>Kelompok</h4>
            <div class="col-md-3 mb-3 mx-auto d-block">
                <div class="containe">
                    <img src="{{ asset('charless.png') }}" alt="Charles Phandurand"
                        class="img-fluid rounded-circle z-depth-2">
                    <div class="overlay">
                        <div class="text">Charles Phandurand<br>(2010817110006)</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 mx-auto d-block">
                <div class="containe">
                    <img src="{{ asset('maulana.png') }}" alt="Maulana" class="img-fluid rounded-circle z-depth-2">
                    <div class="overlay">
                        <div class="text">Maulana<br>(2010817310008)</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: justify">
            <div class="col-md-12">
                <h4>Ringkasan</h4>
                <p>Secara garis besar web ini dibangun untuk memenuhi Ulangan Akhir Semester
                    Pemrograman Web II dengan tema "Sistem Informasi Games". Web ini terkoneksi dengan database MySQL,
                    didesain menggunakan Bootstrap, desain tabel menggunakan
                    DataTables, flash messages dengan Sweet Alert, kolom teks dengan Trix Editor, dan MVC menggunakan
                    framework Laravel.
                </p>

                <h4>Pengujian</h4>
                <ol type="1">
                    <li>Lakukan import database games</li>
                    <li>Register & Login</li>
                    <li>Enjoy!</li>
                </ol>

                <h4>Terima Kasih</h4>
                <p>Dosen Pengampu: Ir. Muhammad Alkaff, S.Kom., M.Kom</p>
            </div>
        </div>

    </div>
@endsection
