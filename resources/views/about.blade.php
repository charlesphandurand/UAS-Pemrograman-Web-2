@extends('layouts.home')
@section('konten')
    <div class="container" style="margin-top: 70px;">
        <div class="row text-center mb-3">
            <div class="col-sm-12">
                <h1>About</h1>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4>Kelompok</h4>
                <ul>
                    <li>Charles Phandurand (2010817110006)</li>
                    <li>Maulana (2010817310008)</li>
                </ul>

                <h4>Ringkasan</h4>
                <p>Secara garis besar web ini dibangun untuk memenuhi Ulangan Akhir Semester Pemrograman Web II dengan
                    tema "Sistem Informasi Games".
                    Web ini terkoneksi dengan database MySQL, didesain menggunakan Bootstrap, desain tabel menggunakan
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
