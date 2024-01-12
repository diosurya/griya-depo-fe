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
                <a href="contact.php" class="">
                    <i class="fa fa-arrow-left bg-secondary p-2 rounded-circle" aria-hidden="true"></i>
                </a>
                <b class="mt-1">Back</b>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="continer-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs" id="myTabs">
                        <li class="nav-item">
                            <a class="nav-link text-dark active" id="bank-tab" data-toggle="tab" href="#bank">
                                Bank
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="user_management-tab" data-toggle="tab" href="#user_management">
                                User Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="address-tab" data-toggle="tab" href="#address">
                                Address
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">
                                Paylater
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active p-2" id="bank">
                            <h4 class="mx-2">Bank</h4>
                            <div class="row mx-1 mb-2">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>
                                <div class="col-md-8 text-right">
                                    <a href="bank_add.php" class="btn bg-or text-white">+ Add
                                        Bank</a>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="table-responsive">
                                    <table id="" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Bank Name</th>
                                                <th>Rekening Name</th>
                                                <th>Rekening Number</th>
                                                <th>Branch Office</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="bankTableBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="user_management">
                            <div class="row mx-1 mb-2 mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>
                                <div class="col-md-8 text-right">
                                    <a href="contact_add.php" class="btn border border-warning">List Potition role</a>
                                    <a href="contact_add.php" class="btn bg-or text-white">+ Add
                                        User</a>
                                </div>
                            </div>
                            <div class="row mx-2 my-2">
                                <div class="table-responsive">
                                    <table id="" class="table table-bordered table-hover dttb-v3">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Telpon</th>
                                                <th>Potition</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="">Bayu priana</a></td>
                                                <td>Bayu@gmail.com</td>
                                                <td>084624344392</td>
                                                <td>Owner</td>
                                                <td><span class="px-2 bg-success text-primary mx-1 rounded">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="">Maftuh</a></td>
                                                <td>mfth@gmail.com</td>
                                                <td>084624344392</td>
                                                <td>Arsitek</td>
                                                <td><span class="px-2 bg-success text-primary mx-1 rounded">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="">Mawar</a></td>
                                                <td>mawar@gmail.com</td>
                                                <td>084624344392</td>
                                                <td>Acounting</td>
                                                <td><span class="px-2 bg-danger text-primary mx-1 rounded">Non Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="">Joko</a></td>
                                                <td>joko@gmail.com</td>
                                                <td>084624344392</td>
                                                <td>Acounting</td>
                                                <td><span class="px-2 bg-danger text-primary mx-1 rounded">Non Active</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address">
                            <div class="row mx-1 mb-2 mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>
                                <div class="col-md-8 text-right">
                                    <a href="contact_add.php" class="btn bg-or text-white">+ Add
                                        Address</a>
                                </div>
                            </div>
                            <div class="row mx-2 my-2">
                                <div class="table-responsive">
                                    <table id="" class="table table-bordered table-hover dttb-v3">
                                        <thead>
                                            <tr>
                                                <th>Place Name</th>
                                                <th>City</th>
                                                <th>Address</th>
                                                <th>PIC</th>
                                                <th>note</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="">kantor utama</a></td>
                                                <td>Surabaya</td>
                                                <td>Ngiden V no 9, Surabaya</td>
                                                <td>Bagus</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td><a href="">kantor Semolowaru</a></td>
                                                <td>Surabaya</td>
                                                <td>RT 03 RW 7, Semolowaru</td>
                                                <td>Rian</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td><a href="">kantor Rungkut</a></td>
                                                <td>Surabaya</td>
                                                <td>Jl Madya Rungkut no 5 Surabaya</td>
                                                <td>Fuddin</td>
                                                <td>-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const contactId = localStorage.getItem('contact_id');

        axios.get(baseUrl + `getbank/${contactId}`, {
                headers: {
                    'Authorization': `Bearer ${token}`
                },
            })
            .then(function(response) {
                // Handle the response data and update the table
                const banks = response.data;
                const tableBody = document.getElementById('bankTableBody');

                if (banks.length > 0) {
                    // Clear previous data
                    tableBody.innerHTML = '';

                    // Append new data to the table
                    banks.forEach(function(bank) {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${bank.bank_name}</td>
                            <td>${bank.account_name}</td>
                            <td>${bank.account_number}</td>
                            <td>${bank.branch_office}</td>
                            <td>${bank.status}</td>
                        `;
                        tableBody.appendChild(row);
                    });
                } else {
                    // Display a message when there is no data
                    tableBody.innerHTML = '<tr><td colspan="5" class="text-center">No Data</td></tr>';
                }
            })
            .catch(function(error) {
                // Handle errors
                console.error('Error fetching data:', error);
            });
    });
</script>

<?php
include('../layout/footer.php');
?>