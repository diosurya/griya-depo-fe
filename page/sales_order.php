<?php
include('../layout/header.php');
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="p-2">Sales Order</h1>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs" id="myTabs">
                        <li class="nav-item">
                            <a class="nav-link text-dark active" id="request-tab" data-toggle="tab" href="#request">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                Sales Request
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="bidding-tab" data-toggle="tab" href="#bidding">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                Bidding
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="quotation-tab" data-toggle="tab" href="#quotation">
                                <i class="fa fa-file" aria-hidden="true"></i>
                                Sales Quotation
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="order-tab" data-toggle="tab" href="#order">
                                <i class="fa fa-wallet" aria-hidden="true"></i>
                                Sales Order
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="delivery-tab" data-toggle="tab" href="#delivery">
                                <i class="fa fa-shipping-fast" aria-hidden="true"></i>
                                Sales Delivery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="invoice-tab" data-toggle="tab" href="#invoice">
                                <i class="fa fa-file-invoice" aria-hidden="true"></i>
                                Invoice
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="recieve_payment-tab" data-toggle="tab" href="#recieve_payment">
                                <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                                Recieve Payment
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active p-2" id="request">
                            <div class="row">
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="date">
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
                                <div style="width: 25%" class="px-2 text-right">
                                    <button class="btn px-4 btn-success">
                                        <i class="fa fa-file-pdf" aria-hidden="true"></i>
                                        Import
                                    </button>
                                    <a href="sales_order_add_sales_request.php" class="btn bg-or text-white">+ Add
                                        Add Sales Request</a>
                                </div>
                            </div>
                            <div class="mx-2">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover dttb-v3">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Sales Request</th>
                                                    <th>Customer</th>
                                                    <th>Project</th>
                                                    <th>Sales</th>
                                                    <th>Item</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>12/12/2022</td>
                                                    <td><a href="">SR/GDN/2022/XI/004</a></td>
                                                    <td>PT Coo Contractor</td>
                                                    <td>Rumah Susun A</td>
                                                    <td>Endik</td>
                                                    <td>Besi WF, Besi Beton</td>
                                                    <td><span class="px-2 s_info mx-1 py-1 rounded">Open</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-2" id="bidding">

                            <div class="row">
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                </div>
                                <div style="width: 20%" class="px-2">

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
                                <div style="width: 20%" class="px-2 text-right">
                                    <a href="sales_order_add_sales_request.php" class="btn bg-or text-white w-100">+ Add
                                        Add Sales Request</a>
                                </div>
                            </div>
                            <div class="mx-2">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover dttb-v3">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-check" aria-hidden="true"></i></th>
                                                    <th>Date</th>
                                                    <th>Code</th>
                                                    <th>Customer</th>
                                                    <th>Project</th>
                                                    <th>Status</th>
                                                    <th>Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                                    <td>14/03/2022</td>
                                                    <td><a href="">BD/GDN/2022/III/003</a></td>
                                                    <td><a href="">PT Coo Contractor</a></td>
                                                    <td><a href="">Rumah Susun </a></td>
                                                    <td>
                                                        <span class="s_success px-2 mx-1 rounded">Active</span>
                                                    </td>
                                                    <td>Andika</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-2" id="quotation">
                            <div class="row">
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>

                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                </div>
                                <div style="width: 20%" class="px-2">

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
                                <div style="width: 20%" class="px-2 text-right">
                                    <a href="contact_add.php" class="btn bg-or text-white w-100">+ Add
                                        Add Sales Request</a>
                                </div>
                            </div>
                            <div class="mx-2">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover dttb-v3">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-check" aria-hidden="true"></i></th>
                                                    <th>Created Date</th>
                                                    <th>Sales Quotation</th>
                                                    <th>Customer</th>
                                                    <th>Expired Date</th>
                                                    <th>Status</th>
                                                    <th>Total Bill</th>
                                                    <th>Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                                    <td>14/03/2022</td>
                                                    <td><a href="">SQGD/2022/III/003</a></td>
                                                    <td><a href="">PT Woo Contractor</a></td>
                                                    <td>17/03/2022</td>
                                                    <td>
                                                        <span class="s_success px-2 mx-1 rounded">Open</span>
                                                    </td>
                                                    <td>Rp. 5.000.000</td>
                                                    <td>Andika</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-2" id="order">
                            <div class="row">
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                </div>

                                <div style="width: 20%" class="px-2">

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
                                <div style="width: 20%" class="px-2 text-right">
                                    <a href="contact_add.php" class="btn bg-or text-white w-100">+ Add
                                        Add Sales Request</a>
                                </div>
                            </div>
                            <div class="mx-2">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover dttb-v3">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-check" aria-hidden="true"></i></th>
                                                    <th>Date</th>
                                                    <th>Sales Order</th>
                                                    <th>Customer</th>
                                                    <th>Project</th>
                                                    <th>Status</th>
                                                    <th>Total bill</th>
                                                    <th>Sales</th>
                                                    <th>PO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                                    <td>14/03/2022</td>
                                                    <td><a href="">SOGD/2022/III/003</a></td>
                                                    <td><a href="">PT Woo Contractor</a></td>
                                                    <td>Rumah Susun </td>
                                                    <td>
                                                        <span class="s_info px-2 mx-1 rounded">Aproval</span>
                                                    </td>
                                                    <td>Rp. 980.000</td>
                                                    <td>Wisnu</td>
                                                    <td><span class="rounded-circle px-1 bg-success"><i class="fa fa-check bg-success" aria-hidden="true"></i></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-2" id="delivery">
                            <div class="row">
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                </div>

                                <div style="width: 55%" class="px-2">

                                </div>
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <select name="" class="form-control" id="">
                                            <option value="">-Select Sales-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-2">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover dttb-v3">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-check" aria-hidden="true"></i></th>
                                                    <th>Created Date</th>
                                                    <th>Reference</th>
                                                    <th>Customer</th>
                                                    <th>Delivery Date</th>
                                                    <th>Shipping Address</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                                    <td>15/09/2022</td>
                                                    <td><a href="">DOGD/2022/III/003</a></td>
                                                    <td><a href="">PT Woo Contractor</a></td>
                                                    <td>18/09/2022</td>
                                                    <td>Jl Nginden V no 9</td>
                                                    <td><span class="text-success">All Sent</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-2" id="invoice">
                            <div class="row">
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                </div>

                                <div style="width: 20%" class="px-2">

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
                                <div style="width: 20%" class="px-2 text-right">
                                    <a href="contact_add.php" class="btn bg-or text-white w-100">+ Add
                                        Add Sales Request</a>
                                </div>
                            </div>
                            <div class="mx-2">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover dttb-v3">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-check" aria-hidden="true"></i></th>
                                                    <th>Biling Date</th>
                                                    <th>Sales Invoice</th>
                                                    <th>Customer</th>
                                                    <th>Due Date</th>
                                                    <th>Total Bill</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                                    <td>14/03/2022</td>
                                                    <td><a href="">INVGD/2022/III/003</a></td>
                                                    <td><a href="">PT Woo Contractor</a></td>
                                                    <td>15/03/2022</td>
                                                    <td>Rp 3.000.000</td>
                                                    <td><span class="text-danger">Over Due</span></td>
                                                    <td>
                                                        <button class="s_info" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="fa fa-receipt" aria-hidden="true"></i>
                                                        </button>
                                                        <i class="fa fa-share" aria-hidden="true"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-2" id="recieve_payment">
                            <div class="row">
                                <div style="width: 20%" class="px-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>
                                <div style="width: 40%" class="px-2">

                                </div>
                                <div style="width: 20%" class="px-2">
                                    <div class="form-group">
                                        <select name="" class="form-control" id="">
                                            <option value="">-Select Status-</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="width: 20%" class="px-2">
                                    <div class="form-group">
                                        <select name="" class="form-control" id="">
                                            <option value="">-Select Sales-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-2">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover dttb-v3">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-check" aria-hidden="true"></i></th>
                                                    <th>Pau Date</th>
                                                    <th>Sales Payment</th>
                                                    <th>Customer</th>
                                                    <th>Total Amount</th>
                                                    <th>Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                                    <td>14/03/2022</td>
                                                    <td><a href="">SPGD/2022/III/003</a></td>
                                                    <td><a href="">PT Woo Contractor</a></td>
                                                    <td>Rp 5.000.000</td>
                                                    <td>Wisnu</td>
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
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Billing Letter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 mx-auto" >
                        <h2>Rp. 10.000.000</h2>
                        <p>Since 10/03/2022</p>
                    </div>
                </div>
                <div class="row">
                    <h4>Customer : <span class="text-warning">PT Woo Contractor</span></h4>
                    <br>
                    <h4>Total Bill : Rp. 10.000.000</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Invoice</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Transaction No</th>
                                                <th>Project</th>
                                                <th>DUe Date</th>
                                                <th>Late</th>
                                                <th>Total</th>
                                                <th>Remaining</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>10/03/2022</td>
                                                <td><a href="">INVGD/2022/II/002</a></td>
                                                <td>-</td>
                                                <td>14/03/2022</td>
                                                <td>7 Days</td>
                                                <td>Rp. 10.000.000</td>
                                                <td>Rp. 10.000.000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                        <tbody>
                                            <tr>
                                                <td colspan="5" class="text-right">Grand Total</td>
                                                <td>Rp. 10.000.000</td>
                                                <td>Rp. 10.000.000</td>
                                            </tr>
                                        </tbody>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-warning">Print & preview</button>
                <button type="button" class="btn bg-or">Send Via Email</button>
            </div>
        </div>
    </div>
</div>

<section class="content">
</section>
<?php
include('../layout/footer.php');
?>