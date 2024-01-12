<?php
include('../layout/header.php');
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="p-3">Contact</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <img src="../img/vuesax-bold-user-add.svg" alt="" class="img-fluid ">
                                    </div>
                                    <div class="col-md-8">
                                        <h6>New</h6>
                                        <h3>40</h3>
                                        <p class="text-warning">off all contact list</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <img src="../img/vuesax-bold-user-tick.svg" alt="" class="img-fluid ">
                                    </div>
                                    <div class="col-md-8">
                                        <h6>Actice</h6>
                                        <h3>50</h3>
                                        <p class="text-success">off all contact list</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <img src="../img/vuesax-bold-user-remove.svg" alt="" class="img-fluid ">
                                    </div>
                                    <div class="col-md-8">
                                        <h6>Non Active</h6>
                                        <h3>10</h3>
                                        <p class="text-danger">off all contact list</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs" id="myTabs">
                        <li class="nav-item">
                            <a class="nav-link text-dark active" id="all-tab" data-toggle="tab" href="#all">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                All
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="contractor-tab" data-toggle="tab" href="#contractor">
                                <i class="fa fa-building" aria-hidden="true"></i>
                                Contractor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="industri-tab" data-toggle="tab" href="#industri">
                                <i class="fa fa-hospital" aria-hidden="true"></i>
                                Industri
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active p-2" id="all">
                            <H2>Data Contact</H2>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <a href="contact_add.php" class="btn act text-white">+ Add
                                        Contact</a>
                                    <button class="btn text-white px-4 " style="background: rgba(77, 174, 50, 1)">Import</button>
                                </div>
                            </div>
                            <div class="row">
                                <div style="width: 25%" class="px-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>
                                <div style="width: 15%" class="px-2">

                                </div>
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <select name="" class="form-control" id="">
                                            <option value="">-Select Status-</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <select name="" class="form-control" id="">
                                            <option value="">-Select Sales-</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="width: 30%" class="px-2">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                </div>
                            </div>
                            <div class="mx-2">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" id="contactTable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Join Since</th>
                                                    <!-- <th>Due Date</th> -->
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                    <th>Sales</th>
                                                    <th>#</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <!-- <tbody id="contactTableB">
                                            </tbody> -->
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contractor">
                            <h3>Content for Contractor</h3>
                            <p>This is the content of Tab 3.</p>
                        </div>
                        <div class="tab-pane fade" id="industri">
                            <h3>Content for Industri</h3>
                            <p>This is the content of Tab 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(function() {
        var dataTable = new DataTable('#contactTable', {
            processing: true,
            serverSide: true,
            ajax: {
                url: baseUrl + 'contactsdatatable',
                headers: {
                    'Authorization': `Bearer ${token}`
                },
                error: function(xhr, error, thrown) {
                    console.error('DataTables AJAX Error:', error);
                }
            },
            columns: [{
                    data: 'company_name',
                    name: 'name'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                // {
                //     data: 'dueDate',
                //     name: 'dueDate'
                // },
                {
                    data: 'customer_type',
                    name: 'type'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'sales_id',
                    name: 'sales'
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<a href="#" class="btn btn-primary btn-sm" onclick="optionContact(' + row.id + ')">Option</a>';
                    },
                    orderable: false
                }
            ]
        });
    });

    function optionContact(contactId) {
        if (typeof(Storage) !== "undefined") {
            localStorage.setItem('contact_id', contactId);
            window.location.href = 'contact_option.php';
        } else {
            alert('Sorry, your browser does not support localStorage.');
        }
    }
</script>
<?php
include('../layout/footer.php');
?>