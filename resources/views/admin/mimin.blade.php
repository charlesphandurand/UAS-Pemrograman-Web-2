<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favico.png') }}"/>
    {{-- awal source datables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    {{-- akhir datables --}}
    <style>
    </style>
    <title>Games - Admin Member</title>
</head>
<body style="background-color: rgba(0, 0, 0, 0.226);">
    
    <!-- awal sidebar  -->    
    <div class="wrapper">
        <nav id="sidebar" class="bg-dark text-light">
            <div class="d-flex flex-column flex-shrink-0 p-3">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="{{ asset('favico.png') }}" alt="icon" height="32px" width="32px">
                    <span class="fs-4 ps-1">Games</span>
                </a>
                <hr>

            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                  <a href="#" class="nav-link active" aria-current="page">
                    <i class="bi bi-house-door-fill pe-3" width="16" height="16"></i>Home
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <i class="bi bi-joystick pe-3" width="16" height="16"></i>Games
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <i class="bi bi-house-door-fill pe-3" width="16" height="16"></i>Home
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <i class="bi bi-house-door-fill pe-3" width="16" height="16"></i>Home
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <i class="bi bi-info-circle-fill pe-3" width="16" height="16"></i>About
                  </a>
                </li>
              </ul>

            <ul class="list-unstyled CTAs mt-2">
                <li>
                    <a class="btn btn-primary fs-9" href="{{ route('create-admin') }}">
                        <i class="bi bi-box-arrow-in-right" style="font-size: 15px"></i> Login</a>
                </li>
            </ul>
        </nav>

        <!-- awal konten -->
        <div id="content">
            {{-- awal table --}}
            <div class="container">

                <div class="card">
                    <div class="card-header bg-dark text-light">
                    <div class="row">
                        <div class="col-sm-4">
                        <button type="button" id="sidebarCollapse" class="btn btn-primary">
                            <i class="bi bi-layout-text-sidebar-reverse"></i></button>
                        </div>
                        <div class="col-sm-4"><h3>Data Admin</h3></div>
                        <div class="col-sm-4 d-flex flex-row-reverse bd-highlight">
                            {{-- <a class="btn btn-success" href="{{ route('create-admin') }}"> --}}
                            <a class="btn btn-success" href="#" data-toggle="modal" data-target="#ModalCreate">
                            <i class="bi bi-plus-circle-fill" style="font-size: 15px"></i>
                             Tambah</a>
                        </div>
                    </div>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th width="20%">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ( $daftar_admin as $admin )
                                <tr>
                                    <td scope="row">{{ $loop->index + 1 }}</td>
                                    <td>{{ $admin->id_admin }}</td>
                                    <td>{{ $admin->nama_admin }}</td>
                                    <td>{{ $admin->username_admin }}</td>
                                    <td>{{ $admin->password_admin }}</td>
                                    {{-- <a class="btn btn-warning edit" href="{{ route('edit-admin', $admin->id_admin) }}"><i class="bi bi-pencil-square"></i> Edit</a> --}}
                                    <td><a class="btn btn-warning edit" href="#" data-toggle="modal" data-target="#ModalEdit"><i class="bi bi-pencil-square"></i> Edit</a>
                                        <form action="{{ route('delete-admin', $admin->id_admin) }}" method="post" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus?')"><i class="bi bi-trash3-fill"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
            </div>
            </div>
            </div>
                {{-- akhir table --}}
        </div>
    </div>
    <!-- akhir konten -->

    @include('admin.modal.create')
    @include('admin.modal.edit')

    {{-- awal script datables --}}
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    {{-- akhir script datables --}}


    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    {{-- awal script untuk toggle button sidebar --}}
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
    {{-- akhir script untuk toggle button sidebar --}}

    {{-- awal script untuk mereset form create --}}
    <script>
        $('#ModalCreate').on('hidden.bs.modal', function (e) {
            $('#create').find("input[type=text], textarea, input[type=password]").val("");
        })
    </script>
    {{-- akhir script untuk mereset form create --}}
</body>
</html>