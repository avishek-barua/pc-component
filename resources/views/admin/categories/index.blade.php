<!doctype html>
<html lang="en" class="color-sidebar sidebarcolor3 color-header headercolor5">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend') }}/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('backend') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('backend') }}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('backend') }}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/app.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/header-colors.css" />

    <!-- Sweet Alert library -->
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/sweet-alert/sweetalert.css') }}">

    <!-- datatable css start-->
    <link href="{{ asset('/backend/assets/datatables/css/dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/backend/assets/datatables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- datatable css end-->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        var CSRF_TOKEN = "{{ csrf_token() }}";
    </script>


    <title>Synadmin – Bootstrap5 Admin Template</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('backend') }}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Synadmin</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ url('admin/dashboard') }}" class="">
                        <div class="parent-icon"><i class='bx bx-home'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/categories') }}" class="">
                        <div class="parent-icon"><i class='bx bx-home'></i>
                        </div>
                        <div class="menu-title">Categories</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/products') }}" class="">
                        <div class="parent-icon"><i class='bx bx-home'></i>
                        </div>
                        <div class="menu-title">Products</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div style="margin-left: auto" class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('backend') }}/assets/images/avatars/avatar-2.png" class="user-img"
                                alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Pauline Seitz</p>
                                <p class="designattion mb-0">Web Designer</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('admin/logout') }}"><i
                                        class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6><i class="lni lni-briefcase" aria-hidden="true"></i> &nbsp; All Categories
                                    <span style="float: right;">
                                        <button class="btn btn-primary btn-sm" id="create"><i
                                                class="fadeIn animated bx bx-plus"></i>
                                            Add
                                        </button>
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="manage_all"
                                        class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category</th>
                                                <th>Action </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->

                <!--========================  Modal  section =================-->
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content col-md-8">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="modal_data"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('backend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/index5.js"></script>
    <!--app JS-->
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>


    <!--start datatable-->
    <script src="{{ asset('/backend/assets/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/datatables/js/jszip.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/datatables/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/backend/assets/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/datatables/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/datatables/js/dataTables.select.min.js') }}"></script>
    <!--end datatable-->




    <script>
        $(function() {
            //alert("alert");
            table = $('#manage_all').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/admin/allCategories',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ],
                "columnDefs": [{
                        "className": "text-center",
                        "targets": "_all"
                    },
                    {
                        orderable: false,
                        targets: [1, 2]
                    }
                ],
                "autoWidth": false,
            });
            $('.dataTables_filter input[type="search"]').attr('placeholder', 'Type here to search...').css({
                'width': '220px',
                'height': '30px'
            });


        });

        $('#create').on('click', function(e) {
            e.preventDefault();
            $("#modal_data").empty();
            $('.modal-title').text('Add New'); // Set Title to Bootstrap modal title

            $.ajax({
                type: 'GET',
                url: 'createCategory',
                success: function(data) {
                    $("#modal_data").html(data.html);
                    $('#myModal').modal('show'); // show bootstrap modal
                },
                error: function(result) {
                    $("#modal_data").html("Sorry Cannot Load Data");
                }
            });
        });

        $("#manage_all").on("click", ".edit", function() {
            var id = $(this).attr('id');
            $("#modal_data").empty();
            $('.modal-title').text('Edit data');

            $.ajax({
                url: '/admin/editCategory/' + id,
                type: 'get',
                success: function(data) {
                    $("#modal_data").html(data.html);
                    $('#myModal').modal('show'); // show bootstrap modal
                },
                error: function(result) {
                    $("#modal_data").html("Sorry Cannot Load Data");
                }
            });
        });
    </script>
</body>

</html>
