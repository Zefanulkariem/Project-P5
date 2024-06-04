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
                        <h1 class="h3 mb-0 text-gray-800">Data Tabel Kategori</h1>
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>

                    {{-- baris konten --}}
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                @if(session('success'))
                                    <div class="alert alert-success fade show" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="card shadow-sm">
                                    <div class="card-header">Data kategori</div>
                
                                    <div class="card-body">
                                        <div>
                                            <a href="{{route('kategori.create')}}" class="btn btn-primary">Tambahkan Data</a>
                                        </div> <br>
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ( $kategori as $data ) {{--look at this--}}
                                                    <tr>
                                                    <th scope="row">{{$no++}}</th>
                                                    <td>{{ $data->nama_kategori}}</td>
                                                    
                                                    <form action="{{route('kategori.destroy', $data->id)}}" method="POST"> {{--postnya badag! & perhatikan $brand id--}}
                                                        @csrf
                                                        @method('DELETE')
                                                        <td>
                                                            <a href="{{route('kategori.edit', $data->id)}}" class="btn btn-warning">Edit</a> 
                                                            <a href="{{route('kategori.show', $data->id)}}" class="btn btn-success">Show</a>
                                                            <button type="submit" class="btn btn-outline-danger"
                                                                onclick="return confirm('Apakah yakin ingin menghapus data ini?')">
                                                            Delete</button>
                                                        </td>
                                                    </form>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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