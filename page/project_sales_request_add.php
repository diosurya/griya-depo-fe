<?php
include('../layout/header.php');
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="p-2">Project | Add Sales Request</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="project.php" class="">
                    <i class="fa fa-arrow-left bg-secondary p-2 rounded-circle" aria-hidden="true"></i>
                </a><b>Add Sales Request</b>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="border-bottom border-warning pb-1">General</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <label for="projectType">
                                                    Contractor/Retail <span class="text-warning">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 text-right">

                                                <span class="bg-secondary px-2 py-1">Add New</span>
                                            </div>
                                        </div>
                                        <select class="form-control" id="projectType">
                                            <option selected>PT Woo Contractor</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="phoneNumber">Fitur pajak? <span class="text-warning">*</span></label>
                                        <div>
                                            <input type="radio" class="" name="pajak" value="yes"> Yes
                                            <input type="radio" class="" name="pajak" value="no"> No
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" id="date" value="2022-12-12" placeholder="Email">
                                    </div>
                                    <div class="form-group ">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" id="" cols="3">-</textarea>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <label for="projectType">
                                                    Project/Toko/Gudang <span class="text-warning">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 text-right">

                                                <span class="bg-secondary px-2 py-1">Add New</span>
                                            </div>
                                        </div>
                                        <select class="form-control" id="projectType">
                                            <option selected>Rumah Susun</option>
                                        </select>
                                    </div>
                                    <div class="form-group ">
                                        <label for="projectType">
                                            Sales <span class="text-warning">*</span>
                                        </label>
                                        <select class="form-control" id="projectType">
                                            <option selected>Wisnu</option>
                                        </select>
                                    </div>
                                    <div class="form-group ">
                                        <label for="upload">Upload file</label>
                                        <input type="file" class="form-control" id="upload">
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="border-bottom border-warning pb-1">Project Address</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="">Address</label>
                                        <input type="text" value="Nginden V No 99" class="form-control" id="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="">Disctrict</label>
                                        <input type="text" value="Sukodono" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="">City</label>
                                        <input type="text" value="Surabaya" class="form-control" id="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="">Post Code</label>
                                        <input type="number" value="62194" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="border-bottom border-warning pb-1">List Item</h4>

                        </div>
                        <div class="text-right">
                            <button class="btn btn-success">+ Add Item</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Qty</th>
                                    <th>Tax</th>
                                    <th>Estimasi Price</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="../img/logo-griya-depo-press1fix-32.png" width="80px" alt="">Best Hallow Galvanis</td>
                                    <td>10</td>
                                    <td>PPN</td>
                                    <td>Rp. 50.000</td>
                                    <td>Tebal =+ 2.6mm - Lebar : 1M (efektif 0.96 meter setelah overlap)</td>
                                    <td>
                                        <i class="fa fa-pen text-info" aria-hidden="true"></i> |
                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Delivery Date</th>
                                    <th>Delivery Order</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12/12/2022</td>
                                    <td>-</td>
                                    <td><span class="bg-warning rounded px-2 py-1">request</span></td>
                                    <td>
                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                        |
                                        <a data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>13/12/2022</td>
                                    <td>-</td>
                                    <td><span class="bg-warning rounded px-2 py-1">request</span></td>
                                    <td>
                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                        |
                                        <a data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>13/12/2022</td>
                                    <td>-</td>
                                    <td><span class="bg-warning rounded px-2 py-1">request</span></td>
                                    <td>
                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                        |
                                        <a data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="text-right">
                    <a href="project.php" class="btn border border-warning">
                        Cancel
                    </a>
                    <a href="project.php" class="btn text-white bg-or">
                        Create Sales Request
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Description</th>
                                <th>Qty Total</th>
                                <th>Qty Delivery</th>
                                <th>Vehicle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="../img/logo-griya-depo-press1fix-32.png" width="80px" alt="">Best Hallow Galvanis</td>
                                <td>Besi Hallow 30 x 40 mm Panjang 6M tebal 4M</td>
                                <td>3</td>
                                <td><input type="number" value="3" style="width: 50%;"></td>
                                <td>Tronton</td>

                            </tr>
                            <tr>
                                <td><img src="../img/logo-griya-depo-press1fix-32.png" width="80px" alt="">Cat Propan 40KG</td>
                                <td>Cat Propan warna putih 40KG tahan segala cuaca</td>
                                <td>3</td>
                                <td><input type="number" value="3"  style="width: 50%;"></td>
                                <td>Tronton</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<section class="content">
</section>
<?php
include('../layout/footer.php');
?>