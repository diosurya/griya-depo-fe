<?php
include('../layout/header.php');
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="p-3">Project | Add project</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="project.php" class="">
                    <i class="fa fa-arrow-left bg-secondary p-2 rounded-circle" aria-hidden="true"></i>
                </a><b>Add New Project</b>
                <br>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="border-bottom border-warning pb-1">General</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-group">
                            <div class="form-group">
                                <label for="companyName">Company Name <span class="text-warning">*</span></label>
                                <select class="form-control" id="contactId">
                                    <option selected>--Select Company Name--</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectName">Project/Retail/Warehouse Name <span class="text-warning">*</span></label>
                                <input type="text" class="form-control" id="projectName" placeholder="ex Rumah Susun">
                            </div>
                            <div class="form-group ">
                                <label for="projectType">Project Type <span class="text-warning">*</span></label>
                                <select class="form-control" id="projectType">
                                    <option selected>--Select Project Type--</option>
                                    <option value="project">Project</option>
                                    <option value="retail">Retail</option>
                                    <option value="warehouse">Warehouse</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="phoneNumber">No Telp</label>
                                <input type="text" class="form-control" id="phoneNumber" placeholder="No Telp">
                            </div>

                            <div class="form-group ">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="projectSize">Project Size <span class="text-warning">*</span></label>
                                <select class="form-control" id="projectSize">
                                    <option selected>--Select Project Size--</option>
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="workStatus">Work Status</label>
                                <select class="form-control" id="workStatus">
                                    <option value="all" selected>All</option>
                                    <option value="Civil">Civil</option>
                                    <option value="Architectural">Architectural</option>
                                    <option value="MEP">MEP</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectStages">Project Stages</label>
                                <input type="text" class="form-control" id="projectStages" placeholder="ex Penggalian">
                            </div>
                            <div class="form-group ">
                                <label for="projectValue">Project Value</label>
                                <input type="number" class="form-control" id="projectValue" placeholder="ex Rp 50.000.000">
                            </div>
                            <div class="form-group">
                                <label for="statusProject">Status Project</label>
                                <select class="form-control" id="statusProject">
                                    <option selected>--Select Status--</option>
                                    <option value="ongoing">Ongoing</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="border-bottom border-warning pb-1">Address</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-group">
                            <div class="form-group ">
                                <label for="province">Province <span class="text-warning">*</span></label>
                                <select class="form-control" id="province">
                                    <option selected>-- Select Province --</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="city">City <span class="text-warning">*</span></label>
                                <select class="form-control" id="city">
                                    <option selected>-- Select City --</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="kecamatan">Kecamatan</label>
                                <select class="form-control" id="kecamatan">
                                    <option selected>-- Select Kecamatan --</option>
                                </select>
                            </div>
                            <div class="form-group ">
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
                                <textarea class="form-control" placeholder="ex Nginden V no 9 Surabaya" name="address" id="address" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="border-bottom border-warning pb-1">Sales</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-group">
                            <div class="form-group ">
                                <label for="">Sales <span class="text-warning">*</span></label>
                                <select class="form-control" id="sales_id">
                                    <option selected>-- Select name --</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="border-bottom border-warning pb-1">PIC</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-group">
                            <div class="form-group ">
                                <label for="name">Name <span class="text-warning">*</span></label>
                                <input type="text" class="form-control" id="name" placeholder="ex Bagas">
                            </div>
                            <div class="form-group ">
                                <label for="potition">Potition </label>
                                <input type="text" class="form-control" id="potition" placeholder="ex Kontraktor">
                            </div>
                            <div class="form-group ">
                                <label for="contactPhone">Contact Phone </label>
                                <input type="text" class="form-control" id="contactPhone" placeholder="ex 0863373535433">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="border-bottom border-warning pb-1">Project Time</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="start">Project Start</label>
                                    <input type="date" class="form-control" id="start" placeholder="-- Select Date --">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="finish">Project Finish</label>
                                    <input type="date" class="form-control" id="finish" placeholder="-- Select Date --">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="time">Project Time</label>
                                    <input type="time" class="form-control" id="time" placeholder="-- Select Date --">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="end">End</label>
                                    <input type="time" class="form-control" id="end" placeholder="-- Select Date --">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="border-bottom border-warning pb-1">Vehicle & File</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-group">
                            <div class="form-group">
                                <label for="itemData">Upload Item Data</label>
                                <input type="file" class="form-control" id="itemData">
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo Project</label>
                                <input type="file" class="form-control" id="photo">
                            </div>
                            <div class="form-row mt-1">
                                <h5><b>Delivery Vahicles Can Enter the Project</b></h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input class="" type="radio" id="motor" name="vehicle" value="motor">
                                            </td>
                                            <td>
                                                <label class="" for="motor">Motor</label>
                                            </td>
                                            <td>
                                                <label class="" for="motor">: 0.4x0.4x0.5 meter, sampai 20 kg (express delivery on small goods)</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="" type="radio" id="sedan" name="vehicle" value="sedan">
                                            </td>
                                            <td>
                                                <label class="" for="sedan">Sedan</label>
                                            </td>
                                            <td>
                                                <label class="" for="sedan">: 1.5 * 0.8 * 0.8 meter, up to 100 kg (ideal for small to medium item size and fragile goods)</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="" type="radio" id="mobil" name="vehicle" value="mobil">
                                            </td>
                                            <td>
                                                <label class="" for="mobil">Mobil</label>
                                            </td>
                                            <td>
                                                <label class="" for="mobil">: 1.7 * 1 * 0.8 meter, up to 350 kg (ideal for small to medium item size and fragile goods)</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="" type="radio" id="van" name="vehicle" value="van">
                                            </td>
                                            <td>
                                                <label class="" for="van">Van</label>
                                            </td>
                                            <td>
                                                <label class="" for="van">: 2.1x1.5x1.2 meter, up to 600 kg (ideal for bulk-items delivery and furniture)</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="" type="radio" id="pickup" name="vehicle" value="pickup">
                                            </td>
                                            <td>
                                                <label class="" for="pickup">Pickup</label>
                                            </td>
                                            <td>
                                                <label class="" for="pickup">: 2x1.6x1.2 meter, up to 800 kg (ideal for medium quantity items)</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="" type="radio" id="engkel" name="vehicle" value="engkel">
                                            </td>
                                            <td>
                                                <label class="" for="engkel">Engkel</label>
                                            </td>
                                            <td>
                                                <label class="" for="engkel">: up to 4,000 kg (ideal for bulk-item delivery)</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="" type="radio" id="colt" name="vehicle" value="colt">
                                            </td>
                                            <td>
                                                <label class="" for="colt">Colt</label>
                                            </td>
                                            <td>
                                                <label class="" for="colt">: up to 8,000 kg (ideal for bulk-item delivery)</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="" type="radio" id="tronton" name="vehicle" value="tronton">
                                            </td>
                                            <td>
                                                <label class="" for="tronton">Tronton</label>
                                            </td>
                                            <td>
                                                <label class="" for="tronton">: up to 10,000 kg (ideal for bulk-item delivery)</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="border-bottom border-warning pb-1">Note</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-group">
                            <div class="form-group">
                                <label for="note">Note</label>
                                <textarea class="form-control" placeholder="Note" name="address" id="address" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="text-right">
                    <a href="project.php" class="btn border border-warning">
                        Cancel
                    </a>
                    <a href="project.php" class="btn text-white bg-or">
                        Save
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
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
    });
</script>


<?php
include('../layout/footer.php');
?>