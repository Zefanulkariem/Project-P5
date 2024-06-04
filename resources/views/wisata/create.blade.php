<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wisatain.com</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin-2.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('layouts.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Tabel wisata</h1>
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>

                    {{-- baris konten --}}
                    <div class="container">
                        <div class="card-header">Tambah Data wisata</div>
                        <div class="card-body">
                            <form action="{{route('wisata.store')}}" method="POST" enctype="multipart/form-data"> {{--//postnya badag!--}}
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label text-dark">Masukkan Nama Wisata</label>
                                    <input type="text" class="form-control" name="nama_wisata">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-dark">Masukkan Kategori</label>
                                    <select class="form-control" name="id_kategori">
                                        @foreach($kategori as $data)
                                        <option value="{{$data->id}}">{{$data->nama_kategori}}</option> {{--dropdown--}}
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-dark">Masukkan Lokasi</label>
                                    <select class="form-control" name="id_lokasi">
                                        @foreach($lokasi as $data)
                                        <option value="{{$data->id}}">{{$data->nama_lokasi}}</option> {{--dropdown--}}
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-dark">Masukkan Deskripsi</label><br>
                                    <textarea name="deskripsi" cols="117" rows="10"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-dark">Cover</label>
                                    <div>
                                        <input type="file" name="cover">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-dark">Masukkan Tema Event</label>
                                    <select class="form-control" name="id_event">
                                        @foreach($event as $data)
                                        <option value="{{$data->id}}">{{$data->tema_event}}</option> {{--dropdown--}}
                                        @endforeach
                                    </select>
                                </div>
                                <a href="{{url('wisata')}}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('admin/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>