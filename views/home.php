<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nominee Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title text-center">Customer Saving Account</h3>
            </div>
            <div class="card-body">
                <p class="text-success text-center">Nominee Information</p>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                        <tr>
                            <th class="wd-25p border-bottom-0">Name of Nominee</th>
                            <th class="wd-15p border-bottom-0">Relation with Nominee</th>
                            <th class="wd-15p border-bottom-0">Nominee NID/Birth Certificate</th>
                            <th class="wd-15p border-bottom-0">Nominee's Mobile Number</th>
                            <th>
                                <div class="action_container">
                                    <button class="btn btn-success" onclick="create_tr('table_body')">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody id="table_body">
                        <tr>
                            <td>
                                <input type="text" class="form-control" placeholder="Nominee Name">
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Relation with Nominee">
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Nominee NID/Birth Certificate">
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Nominee's Mobile Number">
                            </td>
                            <td>
                                <div class="action_container">
                                    <button class="btn btn-danger" onclick="remove_tr(this)">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->


<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/assets/nominee.js"></script>
</body>
</html>
