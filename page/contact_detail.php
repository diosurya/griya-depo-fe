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
                                    <div class="col-md-12">
                                        <h4><span class="badge badge-warning">Open Receivebles (2)</span></h4>
                                        <h3 class="text-bold">Rp 10.000.000</h3>
                                        <p class="text-bold">Total Pending SO: 12 (Rp. 21.000.000)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><span class="badge badge-danger">Overdue (2)</span></h4>
                                        <h1 class="text-bold">Rp 10.000.000</h1>
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
        <div class="row">
            <div class="col-md-12 my-3">
                <a href="contact.php" class="">
                    <i class="fa fa-arrow-left bg-secondary p-2 rounded-circle" aria-hidden="true"></i>
                </a>
                <b class="mt-1">Back</b>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs" id="myTabs">
                        <li class="nav-item">
                            <a class="nav-link text-dark active" id="general-tab" data-toggle="tab" href="#general">
                                General
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="legal-tab" data-toggle="tab" href="#legal">
                                Legal
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link text-dark" id="bank-tab" data-toggle="tab" href="#bank">
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
                        </li>  -->
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active p-2" id="general">
                            <div class="row mt-3 px-4">
                                <div class="col-md-6">
                                    <div class="card mb-3 shadow">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h4 class="border-bottom border-warning pb-1">General</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form class="form-group">
                                                <div class="form-group">
                                                    <label for="nameContractor">Name Contractor</label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="nameContractor" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Contractor Type </label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="typeContractor" value="">
                                                </div>
                                                <div class="form-group ">
                                                    <label for="">Contact group </label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="contactGroup" value="">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Email Shop</label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="email" value="">
                                                </div>

                                                <div class="form-group ">
                                                    <label for="">Phone</label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="phone" value="">
                                                </div>
                                                <div class="form-group ">
                                                    <label for="">Fax</label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="fax" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Status Prospect </label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="statusProspect" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Other info</label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="otherInfo" value="">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 shadow">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h4 class="border-bottom border-warning pb-1">Sales</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form class="form-group">
                                                <div class="form-group ">
                                                    <label for="">Sales </label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="sales" value="">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card mb-3 shadow">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h4 class="border-bottom border-warning pb-1">Address</h4>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <form class="form-group">
                                                <div class="form-group">
                                                    <label for="province">Province </label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="province" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="city">City </label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="city" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="district">District</label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="district" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kelurahan">Kelurahan</label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="kelurahan" value="">
                                                </div>

                                                <div class="form-group">
                                                    <label for="postalCode">Postal Code </label>
                                                    <input type="text" readonly class="form-control form-control-transparent" id="postalCode" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <textarea readonly class="form-control form-control-transparent" placeholder="Input address" name="address" id="address" rows="3"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 my-3">
                                    <div class="text-right">
                                        <a href="contact_edit.php" type="submit" class="btn text-white px-4 bg-or">
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="legal">
                            <div class="row my-3 px-4">
                                <div class="col-md-12">
                                    <div class="card mb-3 shadow">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h4 class="border-bottom border-warning pb-1">Legal</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Ktp Direktur</label>
                                                            <input type="file" class="form-control" id="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Number NPWP</label>
                                                            <input type="text" class="form-control" id="" placeholder="Sudharta Iswandi">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">File Akta</label>
                                                            <input type="file" class="form-control" id="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">File Izin Usaha</label>
                                                            <input type="file" class="form-control" id="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">File NPWP</label>
                                                            <input type="file" class="form-control" id="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">File Siup</label>
                                                            <input type="file" class="form-control" id="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">File SK Kemenkumham</label>
                                                            <input type="file" class="form-control" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 my-3">
                                    <div class="text-right">
                                        <a href="contact_edit.php" type="submit" class="btn text-white px-4 bg-or">
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </div>
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
    $(document).ready(function() {
        const contactId = localStorage.getItem('contact_id');
        fetchContactDetails(contactId);

        function fetchContactDetails(contactId) {
            const token = localStorage.getItem('token');
            axios.get(`${baseUrl}contacts/${contactId}`, {
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                })
                .then(function(response) {
                    const contact = response.data;

                    $('#nameContractor').val(contact.company_name);
                    $('#typeContractor').val(contact.customer_type);
                    $('#contactGroup').val(contact.contact_group);
                    $('#email').val(contact.email);
                    $('#phone').val(contact.phone);
                    $('#fax').val(contact.fax);
                    $('#statusProspect').val(contact.status_prospect);
                    $('#otherInfo').val(contact.other_info);
                    $('#postalCode').val(contact.postal_code);
                    $('#address').val(contact.address);


                    axios.get(`${baseUrl}provinsi/${contact.province}`)
                        .then(function(res) {
                            $('#province').val(res.data.provinsi);
                        })

                    axios.get(`${baseUrl}kabkot/${contact.city}`)
                        .then(function(res) {
                            $('#city').val(res.data.kabupaten_kota);
                        })

                    axios.get(`${baseUrl}kecamatan/${contact.kecamatan}`)
                        .then(function(res) {
                            $('#district').val(res.data.kecamatan);
                        })

                    axios.get(`${baseUrl}kelurahan/${contact.kelurahan}`)
                        .then(function(res) {
                            $('#kelurahan').val(res.data.kelurahan);
                        })
                })
                .catch(function(error) {
                    console.error('Failed to fetch contact details:', error);
                    alert('Failed to fetch contact details. Please try again.');
                });
        }
    });
</script>

<?php
include('../layout/footer.php');
?>