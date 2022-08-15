@extends('super.layouts.app')
@section('title','Super Admin - Lomba')
@section('content')
<div id="wrapper">

        <!-- Sidebar -->
        @include('super.layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    @include('layouts.topnav')

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Lomba</h1>
                    <a href="{{route('lomba.create')}}" class="btn btn-primary mb-4">Tambah</a>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Biaya</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <!--{{$no = 1}}-->
                        @forelse ($lombas as $lomba)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $lomba->name }}</td>
                                <td>{{ $lomba->description }}</td>
                                <td>{{ $lomba->price }}</td>
                                <td>
                                    <a href="{{route('lomba.show', $lomba->id)}}" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        @empty
                            <tr>                                                
                                <td colspan="7" class="text-center">
                                    Empty Data 
                                </td>
                            </tr> 
                        @endforelse
                        </tbody>
                      </table>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Agridation 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
<div>
@stop