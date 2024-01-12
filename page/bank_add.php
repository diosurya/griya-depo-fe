<?php
include('../layout/header.php');
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="p-2">Contact</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="contact.php" class="">
                    <i class="fa fa-arrow-left bg-secondary p-2 rounded-circle" aria-hidden="true"></i>
                </a>
                <b class="mt-1">Add New Contact</b>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs" id="myTabs">
                        <li class="nav-item">
                            <a class="nav-link text-dark active" id="general-tab" data-toggle="tab" href="#general">
                                General
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active p-2" id="general">
                            <div class="row mt-3 px-4">
                                <div class="col-md-12">
                                    <div class="card mb-3 shadow">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h4 class="border-bottom border-warning pb-1">General</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form class="form-group">
                                                <div class="form-group">
                                                    <label for="bankName">Bank Name</label>
                                                    <input type="text" class="form-control" id="bankName" placeholder="Enter Bank Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="rekeningName">Rekening Name</label>
                                                    <input type="text" class="form-control" id="accountName" placeholder="Enter Rekening Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="rekeningNumber">Rekening Number</label>
                                                    <input type="text" class="form-control" id="accountNumber" placeholder="Enter Rekening Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="branchOffice">Branch Office</label>
                                                    <input type="text" class="form-control" id="branchOffice" placeholder="Enter Branch Office">
                                                </div>
                                                <div class="form-group">
                                                    <label for="bankStatus">Bank Status</label>
                                                    <select class="form-control" id="bankStatus">
                                                        <option value="Primary">Primary</option>
                                                        <option value="Secondary">Secondary</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-right">
                                        <button class="btn text-white px-4 bg-or" id="save">
                                            Save
                                        </button>
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
</section>

<script>
    $(document).ready(function() {
        // Form submission event
        $('#save').click(function(e) {
            e.preventDefault();

            const contactId = localStorage.getItem('contact_id');

            var bankName = $('#bankName').val();
            var accountName = $('#accountName').val();
            var accountNumber = $('#accountNumber').val();
            var branchOffice = $('#branchOffice').val();
            var bankStatus = $('#bankStatus').val();

            var bankData = {
                contact_id: contactId,
                bank_name: bankName,
                account_name: accountName,
                account_number: accountNumber,
                branch_office: branchOffice,
                status: bankStatus
            };
            console.log('data sebelum dikirim', bankData)
            axios.post(baseUrl + 'contact-banks', bankData, {
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                })
                .then(function(response) {
                    console.log('Bank data successfully created');
                    console.log(response.data);

                    window.location.href = 'contact_option.php?contact_id=' + contactId;
                })
                .catch(function(error) {
                    console.error('Failed to create bank data');
                    console.error(error);
                    alert('Failed to create bank data. Please check the data.');
                });
        });
    });
</script>

<?php
include('../layout/footer.php');
?>