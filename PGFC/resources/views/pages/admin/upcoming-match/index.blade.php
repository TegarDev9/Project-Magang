@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">PGFC</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pertandingan Selanjutnya</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Pertandingan Selanjutnya </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Konten --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <h4 class="header-title">Buttons example</h4>
                                <p class="text-muted mb-0">
                                    The Buttons extension for DataTables provides a common set of options, API
                                    methods and styling to display buttons on a page
                                    that will interact with a DataTable. The core library provides the based
                                    framework upon which plug-ins can built.
                                </p>
                            </div>
                            <!-- end card header--> --}}

                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <a href="{{ route('upcoming-match.create') }}" class="btn btn-primary" style="margin-bottom: 10px;">
                                        <i class="ri-add-circle-line text-ligth"> Tambah Data </i>
                                    </a>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Home</th>
                                            <th>Away</th>
                                            <th>Match Date Time</th>
                                            <th>vanue</th>
                                            <th>Logo Home</th>
                                            <th>Logo Away</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SMA NU 1 GRESIK</td>
                                            <td>SMK YASMU MANYAR</td>
                                            <td>Rabu, 23 Agustus 2023 19:00 WIB</td>
                                            <td>Stadion Gelora Joko Samudro</td>
                                            <td>
                                                <img src="{{ url('frontend/images/upcoming/LogoSekolah/SMA NU 1 GRESIK.jpg') }}" alt="" width="100px">
                                            </td>
                                            <td>
                                                <img src="{{ url('frontend/images/upcoming/LogoSekolah/SMK YASMU MANYAR.png') }}" alt="" width="100px">
                                            </td>
                                            <td>hbksbcsckbkbvdvkd</td>
                                            <td>
                                                <a href="" class="btn btn-warning">
                                                    <i class="ri-pencil-line text-light"></i>
                                                </a>
                                                <a href="" class="btn btn-danger">
                                                    <i class="ri-delete-bin-line text-light"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->
                {{-- End Konten --}}
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    @endsection
