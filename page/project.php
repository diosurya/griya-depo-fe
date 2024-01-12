<?php
include('../layout/header.php');
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="p-3">Project</h4>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h4>Data Project</h4>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn border border-dark">
                                <i class="fa fa-filter" aria-hidden="true"></i> Filter
                            </button>
                            <a href="project_add.php" type="button" class="btn text-white bg-or border border-dark">
                                + Add New Project
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div style="width: 25%" class="px-2">
                                <div class="form-group">
                                    <input type="text" placeholder="Search" class="form-control" id="searchInput">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Company Name</th>
                                        <th>Project Value</th>
                                        <th>Project Type</th>
                                        <th>Progress Project</th>
                                        <th>Work Status</th>
                                        <th>Sales</th>
                                    </tr>
                                </thead>
                                <tbody id="projectTableBody">
                                    <!-- <tr>
                                        <td><a href="project_detail.php">Project WBL</a></td>
                                        <td><a href="">PT Merdeka Selalu</a></td>
                                        <td>Rp. 900.000.000</td>
                                        <td>Gedung</td>
                                        <td>Penggalian</td>
                                        <td>Civil</td>
                                        <td>Ida</td>
                                    </tr> -->
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
        </div>
    </div>
</section>

<script>
    var query = $('#searchInput').val();
    var tableBody = $('#projectTableBody');
    var debounceTimeout;

    document.addEventListener('DOMContentLoaded', function() {
        $('#searchInput').on('keyup', function() {
            clearTimeout(debounceTimeout);
            debounceTimeout = setTimeout(function() {
                query = $('#searchInput').val();
                page = 1;
                fetchData();
            }, 500);
        });

        showLoading();
        fetchData();
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

    function fetchData() {
        tableBody.empty();
        showLoading();

        axios.get(baseUrl + 'project', {
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
                    response.data.data.forEach(function(project) {
                        var createdAt = formatDate(project.created_at);
                        var row = '<tr>' +
                            '<td><a href="javascript::void(0)" onclick="detailProject(' + project.id + ')">' + project.name + '</a></td>' +
                            '<td><a href="javascript::void(0)" onclick="detailContact(' + project.contact_id + ')">' + project.contact_id + '/a></td>' +
                            '<td>' + project.project_value + '</td>' +
                            '<td>' + project.project_type_id + '</td>' +
                            '<td>' + project.project_stages + '</td>' +
                            '<td>' + project.work_status + '</td>' +
                            '<td>' + project.sales_id + '</td>' +
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
        fetchData();
    }
</script>



<?php
include('../layout/footer.php');
?>