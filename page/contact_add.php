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
                <b class="mt-1">Add New Contact</b>
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
                                                    <input type="text" class="form-control" id="nameContractor" placeholder="ex. Pt Woo Contractor">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Contractor Type <span class="text-warning">*</span></label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="Contractor">
                                                            <label class="form-check-label" for="inlineRadio1">Contractor</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="Industri">
                                                            <label class="form-check-label" for="inlineRadio2">Industri</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio3" value="Owner">
                                                            <label class="form-check-label" for="inlineRadio3">Owner</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio4" value="Retail">
                                                            <label class="form-check-label" for="inlineRadio4">Retail</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio5" value="Suplier">
                                                            <label class="form-check-label" for="inlineRadio5">Suplier</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="">Contact group </label>
                                                    <select class="form-control" id="contactGroup">
                                                        <option selected>--Select Group--</option>
                                                        <option value="Contractor">Contractor</option>
                                                        <option value="Industri">Industri</option>
                                                        <option value="Retail">Retail</option>
                                                        <option value="Owner">Owner</option>
                                                        <option value="Supplier">Supplier</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Email Shop</label>
                                                    <input type="text" class="form-control" id="email" placeholder="ex johndue@gmail.com">
                                                </div>

                                                <div class="form-group ">
                                                    <label for="">Phone</label>
                                                    <input type="tel" class="form-control" id="phone" placeholder="ex 07353416">
                                                </div>
                                                <div class="form-group ">
                                                    <label for="">Fax</label>
                                                    <input type="tel" class="form-control" id="fax" placeholder="ex 07353416">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Status Prospect <span class="text-warning">*</span></label>
                                                    <select class="form-control" id="statusProspect">
                                                        <option selected>--Active--</option>
                                                        <option value="new">New</option>
                                                        <option value="aktif">Aktif</option>
                                                        <option value="pasif">Pasif</option>
                                                        <option value="leads">Leads</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Other info</label>
                                                    <textarea class="form-control" placeholder="-" name="" id="otherInfo" rows="3"></textarea>
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
                                                    <label for="">Sales <span class="text-warning">*</span></label>
                                                    <select class="form-control" id="sales_id">s
                                                    </select>
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
                                                    <label for="province">Province <span class="text-warning">*</span></label>
                                                    <select class="form-control" id="province">
                                                        <option selected>-- Select Province --</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="city">City <span class="text-warning">*</span></label>
                                                    <select class="form-control" id="city">
                                                        <option selected>-- Select City --</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="district">District</label>
                                                    <select class="form-control" id="district">
                                                        <option selected>-- Select District --</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kelurahan">Kelurahan</label>
                                                    <select class="form-control" id="kelurahan">
                                                        <option selected>-- Select Kelurahan --</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="postalCode">Postal Code <span class="text-warning">*</span></label>
                                                    <input type="text" class="form-control" id="postalCode" placeholder="ex 621893">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <textarea class="form-control" placeholder="Input address" name="address" id="address" rows="3"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 my-3">
                                    <div class="text-right">
                                        <button id="save" type="submit" class="btn text-white px-4 bg-or">
                                            Save
                                        </button>
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
                                        <button id="saveLegal" type="submit" class="btn text-white px-4 bg-or">
                                            Save
                                        </button>
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
        axios.get(baseUrl + 'provinsi')
            .then(function(response) {
                $.each(response.data, function(key, value) {
                    $('#province').append($('<option>').text(value.provinsi).attr('value', value.id));
                });
            })
            .catch(function(error) {
                console.error('Error fetching province data:', error);
            });

        axios.get(baseUrl + 'sales', {
                headers: {
                    'Authorization': `Bearer ${token}`
                },
            })
            .then(function(response) {
                $.each(response.data, function(key, value) {
                    $('#sales_id').append($('<option>').text(value.sales_name).attr('value', value.id));
                });
            })
            .catch(function(error) {
                console.error('Error fetching province data:', error);
            });


        $('#province').on('change', function() {
            var provinceId = $(this).val();
            $('#city').empty().trigger('change');
            $('#district').empty().trigger('change');
            $('#kelurahan').empty().trigger('change');

            if (provinceId) {
                axios.get(baseUrl + 'kabkot', {
                        params: {
                            provinsi_id: provinceId
                        }
                    })
                    .then(function(response) {
                        $.each(response.data, function(key, value) {
                            $('#city').append($('<option>').text(value.kabupaten_kota).attr('value', value.id));
                        });
                    })
                    .catch(function(error) {
                        console.error('Error fetching city data:', error);
                    });
            }
        });

        // Handle city selection change
        $('#city').on('change', function() {
            var cityId = $(this).val();
            $('#district').empty().trigger('change');
            $('#kelurahan').empty().trigger('change');

            if (cityId) {
                axios.get(baseUrl + 'kecamatan', {
                        params: {
                            kabkot_id: cityId
                        }
                    })
                    .then(function(response) {
                        $.each(response.data, function(key, value) {
                            $('#district').append($('<option>').text(value.kecamatan).attr('value', value.id));
                        });
                    })
                    .catch(function(error) {
                        console.error('Error fetching district data:', error);
                    });
            }
        });

        // Handle district selection change
        $('#district').on('change', function() {
            var districtId = $(this).val();
            $('#kelurahan').empty().trigger('change'); // Clear kelurahan dropdown

            if (districtId) {
                axios.get(baseUrl + 'kelurahan', {
                        params: {
                            kecamatan_id: districtId
                        }
                    })
                    .then(function(response) {
                        $.each(response.data, function(key, value) {
                            $('#kelurahan').append($('<option>').text(value.kelurahan).attr('value', value.id));
                        });
                    })
                    .catch(function(error) {
                        console.error('Error fetching kelurahan data:', error);
                    });
            }
        });



        $('#save').click(function(e) {
            e.preventDefault();

            var nameContractor = $('#nameContractor').val();
            var contractorType = $('input[name="type"]:checked').val();
            var contactGroup = $('#contactGroup').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var fax = $('#fax').val();
            var statusProspect = $('#statusProspect').val();
            var otherInfo = $('#otherInfo').val();
            var province = $('#province').val();
            var city = $('#city').val();
            var district = $('#district').val();
            var kelurahan = $('#kelurahan').val();
            var postalCode = $('#postalCode').val();
            var address = $('#address').val();

            var data = {
                company_name: nameContractor,
                customer_type: contractorType,
                contact_group: contactGroup,
                email: email,
                phone: phone,
                fax: fax,
                status_prospect: statusProspect,
                other_info: otherInfo,
                province: province,
                city: city,
                kecamatan: district,
                kelurahan: kelurahan,
                postal_code: postalCode,
                address: address
            };
            console.log(data)
            const token = localStorage.getItem('token');
            axios.post(baseUrl + 'contacts', data, {
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                })
                .then(function(response) {
                    console.log('sukses');
                    console.log(response.data);
                    window.location.href = 'contact.php';
                })
                .catch(function(error) {
                    console.error(error);
                    alert('Failed to create contact. Please check the data.');
                });
        });
    });
</script>

<?php
include('../layout/footer.php');
?>