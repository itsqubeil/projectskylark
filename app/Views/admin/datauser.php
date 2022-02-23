<?php $this->extend('/templates/index'); ?>
<?php $this->section("page-content"); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar User</h1>

</div>
<!-- /.container-fluid -->

<!-- Custom fonts for this template -->
<link href="templet/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="templet/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Action</th>
                            </tr>
                        </thead>

<tbody>
    <? php $i=1;?>
    <? foreach($users as $user):?>
        <tr>
            <td><?=$i++;?></td>
            <td><?=$user->id;?></td>
            <td><?=$user->email;?></td>
            <td><?=$user->username;?></td>
            <td>
                <a href="/admin/<?$user->id;?>" class="btn btn-info"> Detail</a>
            </td>
            <?php endforeach;?>
        </tr>
</tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="templet/vendor/jquery/jquery.min.js"></script>
    <script src="templet/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="templet/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/vendor/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="templet/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="templet/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/vendor/demo/datatables-demo.js"></script>

</body>

</html>
<?php $this->endSection(); ?>