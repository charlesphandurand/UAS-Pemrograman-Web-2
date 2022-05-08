@extends('layouts.main')

@section('konten')
    <div id="content">
        <div class="container">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    <div class="row">
                        <div class="col-sm-4">
                            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                                <i class="bi bi-layout-text-sidebar-reverse"></i></button>
                        </div>
                        <div class="col-sm-8">
                            <h3>About</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h2>Kelompok</h2>
                    <ul>
                        <li>Charles Phandurand (2010817110006)</li>
                        <li>Maulana (2010817310008)</li>
                    </ul>

                    <h2>Ringkasan</h2>
                    <p>Secara garis besar web ini dibangun untuk memenuhi Ulangan Akhir Semester Pemrograman Web II dengan tema "Sistem Informasi Games".
                        Web ini terkoneksi dengan database MySQL, didesain menggunakan Bootstrap, desain tabel menggunakan DataTables, dan
                        MVC menggunakan framework Laravel.
                    </p>

                    <h2>Pengujian</h2>
                    <ol type="1">
                        <li>Lakukan import database games</li>
                        <li>Register & Login</li>
                        <li>Enjoy!</li>
                    </ol>

                    <h3>Terima Kasih</h3>
                    <p>Dosen Pengampu: Ir. Muhammad Alkaff, S.Kom., M.Kom</p>

                </div>

            </div>
        </div>
    </div>
    </div>
    {{-- akhir table --}}
    </div>
    </div>
@endsection
