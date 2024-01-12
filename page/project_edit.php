<?php
include('../layout/header.php');
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="p-2">Project | Edit project</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="project.php" class="">
                    <i class="fa fa-arrow-left bg-secondary p-2 rounded-circle" aria-hidden="true"></i>

                </a><b>Edit Project</b>
                <br>
                Mark* is Required <br>
                Postel code is required to find a local supplier
            </div>
        </div>
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
                                <input type="text" class="form-control" id="companyName" value="CV Woo Constructor" placeholder="CV Woo Constructor">
                            </div>
                            <div class="form-group">
                                <label for="projectName">Project/Retail/Warehouse Name <span class="text-warning">*</span></label>
                                <input type="text" class="form-control" id="projectName" placeholder="RUmah">
                            </div>
                            <div class="form-group ">
                                <label for="projectType">Project Type <span class="text-warning">*</span></label>
                                <select class="form-control" id="projectType">
                                    <option selected>Rumah</option>
                                    <option value="project">Project</option>
                                    <option value="retail">Retail</option>
                                    <option value="warehouse">Warehouse</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="phoneNumber">No Telp</label>
                                <input type="text" class="form-control" id="phoneNumber" value="0873653421353" placeholder="No">
                            </div>

                            <div class="form-group ">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" value="ptbrt@gmail.com" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="projectSize">Project Size <span class="text-warning">*</span></label>
                                <select class="form-control" id="projectSize">
                                    <option>--Select Project Size--</option>
                                    <option selected value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="workStatus">Work Status</label>
                                <select class="form-control" id="workStatus">
                                    <option selected>Architecture</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectStages">Project Stages</label>
                                <input type="text" class="form-control" id="projectStages" value="penggalian" placeholder="ex Penggalian">
                            </div>
                            <div class="form-group ">
                                <label for="projectValue">Project Value</label>
                                <input type="number" class="form-control" id="projectValue" value="300000000" placeholder="ex Rp 50.000.000">
                            </div>
                            <div class="form-group">
                                <label for="statusProject">Status Project</label>
                                <select class="form-control" id="statusProject">
                                    <option selected>In Progress</option>
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
                                    <option selected>Jawa Timur</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="city">City <span class="text-warning">*</span></label>
                                <select class="form-control" id="city">
                                    <option selected>Surabaya</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="kecamatan">Kecamatan</label>
                                <select class="form-control" id="kecamatan">
                                    <option selected>Sukolilo</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="kelurahan">Kelurahan</label>
                                <select class="form-control" id="kelurahan">
                                    <option selected>Semolowaru</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="postalCode">Postal Code <span class="text-warning">*</span></label>
                                <input type="text" class="form-control" value="62194" id="postalCode" placeholder="ex 621893">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" placeholder="ex Nginden V no 9 Surabaya" name="address" id="address" rows="3">Nginden V no 9</textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
                                <input type="text" class="form-control" id="name" value="Henda" placeholder="ex Bagas">
                            </div>
                            <div class="form-group ">
                                <label for="potition">Potition </label>
                                <input type="text" class="form-control" id="potition" value="Kontraktor" placeholder="ex Kontraktor">
                            </div>
                            <div class="form-group ">
                                <label for="contactPhone">Contact Phone </label>
                                <input type="text" class="form-control" id="contactPhone" value="08973434735" placeholder="ex 0863373535433">
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
                                    <input type="date" class="form-control" id="start" value="2022-03-21" placeholder="-- Select Date --">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="finish">Project Finish</label>
                                    <input type="date" class="form-control" id="finish" value="2022-03-21" placeholder="-- Select Date --">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="time">Project Time</label>
                                    <input type="time" class="form-control" id="time" value="12:00" placeholder="-- Select Date --">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="end">End</label>
                                    <input type="time" class="form-control" id="end" value="17:00" placeholder="-- Select Date --">
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
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="itemData">
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-info" type="button">View FIle</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photo">Photo Project</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="photo">
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-info" type="button">View File</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row mt-1">
                                <h5><b>Delivery Vahicles Can Enter the Project</b></h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input checked class="" type="radio" id="motor" name="vehicle" value="motor">
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
                                <textarea class="form-control" placeholder="Note" name="address" id="address" rows="3">-</textarea>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="text-right">
                    <a href="project_edit.php" class="btn border border-warning">
                        Edit
                    </a>
                    <a href="project.php" class="btn text-white bg-or">
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="content">
</section>
<?php
include('../layout/footer.php');
?>