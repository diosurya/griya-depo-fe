<?php
include('../layout/header.php');
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="p-3">Contact</h4>
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
        <div class="row mt-3">
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
                        <div class="tab-pane fade show active p-3" id="all">
                            <h4>Data Contact</h4>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <a href="contact_add.php" class="btn btn-md act text-white">+ Add
                                        Contact</a>
                                    <button class="btn btn-md text-white px-4 " style="background: rgba(77, 174, 50, 1)">Import</button>
                                </div>
                            </div>
                            <div class="row">
                                <div style="width: 25%" class="px-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="searchInput">
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
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Join Since</th>
                                                    <th>Due Date</th>
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                    <th>Sales</th>
                                                    <th>#</th>
                                                </tr>
                                            </thead>
                                            <tbody id="contactTableBody">
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-between">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                            <nav aria-label="...">
                                                <ul class="pagination" id="paginationContainer">

                                                </ul>
                                            </nav>
                                        </div>
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
    var query = $('#searchInput').val();
    var tableBody = $('#contactTableBody');
    var debounceTimeout;

    document.addEventListener('DOMContentLoaded', function() {
        $('#searchInput').on('keyup', function() {
            clearTimeout(debounceTimeout);
            debounceTimeout = setTimeout(function() {
                query = $('#searchInput').val();
                page = 1;
                fetchContactData();
            }, 500);
        });

        showLoading();
        fetchContactData();
    });

    function showLoading() {
        tableBody.append('<tr id="loadingRow">' +
            '<td colspan="8" class="text-center">' +
            '<div class="spinner-border text-primary" role="status">' +
            '<span class="sr-only">Loading...</span>' +
            ' </div>' +
            '</td>' +
            '</tr>');
    }

    function hideLoading() {
        $('#loadingRow').remove();
    }

    function showNoData() {
        tableBody.append('<tr id="noDataRow"><td colspan="8" class="text-center">No Data</td></tr>');
    }

    function fetchContactData() {
        tableBody.empty();
        showLoading();

        axios.get(baseUrl + 'contacts', {
                headers: {
                    'Authorization': `Bearer ${token}`
                },
                params: {
                    page: page,
                    pageSize: pageSize,
                    query: query
                }
            })
            .then(function(response) {
                hideLoading();
                if (response.data.data.length > 0) {
                    response.data.data.forEach(function(contact) {
                        var createdAt = formatDate(contact.created_at);
                        var row = '<tr>' +
                            '<td><a href="javascript::void(0)" onclick="detailContact(' + contact.id + ')">' + contact.company_name + '</a></td>' +
                            '<td>' + contact.address + '</td>' +
                            '<td>' + formatDate(contact.created_at) + '</td>' +
                            '<td>' + contact.dueDate + '</td>' +
                            '<td>' + contact.customer_type + '</td>' +
                            '<td><span class="px-2 bg-success rounded">' + contact.status_prospect + '</span></td>' +
                            '<td><span class="px-2 bg-secondary rounded">' + contact.sales + '</span></td>' +
                            '<td>' +
                            '<a href="javascript::void(0)" class="btn btn-primary btn-sm mr-2" onclick="optionContact(' + contact.id + ')">Option</a>' +
                            '<a href="javascript::void(0)" class="btn btn-success btn-sm" onclick="optionContact(' + contact.id + ')">Approve</a>' +
                            '</td>' +
                            '</tr>';

                        tableBody.append(row);
                    });

                    renderPagination(response.data);
                } else {
                    showNoData();
                }
            })
            .catch(function(error) {
                console.error('Error fetching contact data:', error);
                hideLoading();
                showNoData();
            });
    }

    function renderPagination(data) {
        var paginationContainer = $('#paginationContainer');
        paginationContainer.empty();

        var totalPages = data.last_page;

        if (totalPages > 1) {
            var currentPage = data.current_page;

            // Tambahkan tombol "Previous"
            if (currentPage > 1) {
                paginationContainer.append('<li class="page-item"><a class="page-link" href="#" onclick="changePage(' + (currentPage - 1) + ')">Previous</a></li>');
            } else {
                paginationContainer.append('<li class="page-item disabled"><span class="page-link">Previous</span></li>');
            }

            // Tambahkan tombol untuk setiap halaman
            for (var i = 1; i <= totalPages; i++) {
                if (i === currentPage) {
                    paginationContainer.append('<li class="page-item active"><span class="page-link">' + i + '<span class="sr-only">(current)</span></span></li>');
                } else {
                    paginationContainer.append('<li class="page-item"><a class="page-link" href="#" onclick="changePage(' + i + ')">' + i + '</a></li>');
                }
            }

            // Tambahkan tombol "Next"
            if (currentPage < totalPages) {
                paginationContainer.append('<li class="page-item"><a class="page-link" href="#" onclick="changePage(' + (currentPage + 1) + ')">Next</a></li>');
            } else {
                paginationContainer.append('<li class="page-item disabled"><span class="page-link">Next</span></li>');
            }
        }
    }

    function changePage(newPage) {
        page = newPage;
        showLoading();
        fetchContactData();
    }

    function optionContact(contactId) {
        if (typeof(Storage) !== "undefined") {
            localStorage.setItem('contact_id', contactId);
            window.location.href = 'contact_option.php';
        } else {
            alert('Sorry, your browser does not support localStorage.');
        }
    }

    function detailContact(contactId) {
        if (typeof(Storage) !== "undefined") {
            localStorage.setItem('contact_id', contactId);
            window.location.href = 'contact_detail.php';
        } else {
            alert('Sorry, your browser does not support localStorage.');
        }
    }
</script>
<?php
include('../layout/footer.php');
?>