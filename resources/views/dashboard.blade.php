@extends('admin_dashboard_includes.app')
@section('content')

{{-- <div class="col-sm-12  d-flex justify-content-between">
    <div id="scroll-vertical_filter" class="dataTables_filter">
        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                aria-controls="scroll-vertical"></label>
    </div>
    <div class="mt-2 p-2">
        <button id="addRow" class="btn btn-sm btn-primary">Add New Category</button>

    </div>
</div>
</div>
<h1>rasel</h1> --}}

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Alternative Pagination</h5>
            </div>
            <div class="card-body">
                <table id="alternative-pagination"
                    class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SR No.</th>
                            <th>Currency</th>
                            <th>Price</th>
                            <th>Pairs</th>
                            <th>24 High</th>
                            <th>24 Low</th>
                            <th>Market Volume</th>
                            <th>Volume %</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/btc.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Bitcoin (BTC)</a>
                                </div>
                            </td>
                            <td>$47,071.60</td>
                            <td>BTC/USD</td>
                            <td>$28,722.76</td>
                            <td>$68,789.63</td>
                            <td>$888,411,910</td>
                            <td>
                                <h6 class="text-success fs-13 mb-0"><i
                                        class="mdi mdi-trending-up align-middle me-1"></i>1.50%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/eth.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Ethereum (ETH)</a>
                                </div>
                            </td>
                            <td>$3,813.14</td>
                            <td>ETH/USDT</td>
                            <td>$4,036.24</td>
                            <td>$3,588.14</td>
                            <td>$314,520,675</td>
                            <td>
                                <h6 class="text-danger fs-13 mb-0"><i
                                        class="mdi mdi-trending-down align-middle me-1"></i>0.42%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/ltc.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Litecoin (LTC)</a>
                                </div>
                            </td>
                            <td>$149.65</td>
                            <td>LTC/USDT</td>
                            <td>$412.96</td>
                            <td>$104.33</td>
                            <td>$314,520,675</td>
                            <td>
                                <h6 class="text-success fs-13 mb-0"><i
                                        class="mdi mdi-trending-up align-middle me-1"></i>0.89%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/xmr.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Monero (XMR)</a>
                                </div>
                            </td>
                            <td>$17,491.16</td>
                            <td>XRM/USDT</td>
                            <td>$31,578.35</td>
                            <td>$8691.75</td>
                            <td>$9,847,327</td>
                            <td>
                                <h6 class="text-success fs-13 mb-0"><i
                                        class="mdi mdi-trending-up align-middle me-1"></i>1.92%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/ant.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Aragon (ANT)</a>
                                </div>
                            </td>
                            <td>$172.93</td>
                            <td>SOL/USD</td>
                            <td>$178.37</td>
                            <td>$172.3</td>
                            <td>$40,559,274</td>
                            <td>
                                <h6 class="text-danger fs-13 mb-0"><i
                                        class="mdi mdi-trending-down align-middle me-1"></i>2.87%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/sol.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Solana (SOL)</a>
                                </div>
                            </td>
                            <td>$17,491.16</td>
                            <td>XRM/USDT</td>
                            <td>$31,578.35</td>
                            <td>$8691.75</td>
                            <td>$9,847,327</td>
                            <td>
                                <h6 class="text-success fs-13 mb-0"><i
                                        class="mdi mdi-trending-up align-middle me-1"></i>1.92%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>07</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/fil.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Filecoin (FIL)</a>
                                </div>
                            </td>
                            <td>$13.31</td>
                            <td>ANT/USD</td>
                            <td>$13.85</td>
                            <td>$12.53</td>
                            <td>$156,209,195.18</td>
                            <td>
                                <h6 class="text-success fs-13 mb-0"><i
                                        class="mdi mdi-trending-up align-middle me-1"></i>3.96%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>08</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/fil.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Filecoin (FIL)</a>
                                </div>
                            </td>
                            <td>$35.21</td>
                            <td>FIL/USD</td>
                            <td>$36.41</td>
                            <td>$35.03</td>
                            <td>$374,618,945.51</td>
                            <td>
                                <h6 class="text-danger fs-13 mb-0"><i
                                        class="mdi mdi-trending-down align-middle me-1"></i>0.84%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>09</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/aave.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Aave (AAVE)</a>
                                </div>
                            </td>
                            <td>$275.47</td>
                            <td>AAVE/USDT</td>
                            <td>$277.11</td>
                            <td>$255.01</td>
                            <td>$156,209,195.18</td>
                            <td>
                                <h6 class="text-success fs-13 mb-0"><i
                                        class="mdi mdi-trending-up align-middle me-1"></i>8.20%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/ada.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Cardano (ADA)</a>
                                </div>
                            </td>
                            <td>$1.35</td>
                            <td>ADA/USD</td>
                            <td>$1.39</td>
                            <td>$1.32</td>
                            <td>$880,387,980.14</td>
                            <td>
                                <h6 class="text-danger fs-13 mb-0"><i
                                        class="mdi mdi-trending-down align-middle me-1"></i>0.42%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/fil.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Filecoin (FIL)</a>
                                </div>
                            </td>
                            <td>$35.21</td>
                            <td>FIL/USD</td>
                            <td>$36.41</td>
                            <td>$35.03</td>
                            <td>$374,618,945.51</td>
                            <td>
                                <h6 class="text-danger fs-13 mb-0"><i
                                        class="mdi mdi-trending-down align-middle me-1"></i>0.84%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/aave.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Aave (AAVE)</a>
                                </div>
                            </td>
                            <td>$275.47</td>
                            <td>AAVE/USDT</td>
                            <td>$277.11</td>
                            <td>$255.01</td>
                            <td>$156,209,195.18</td>
                            <td>
                                <h6 class="text-success fs-13 mb-0"><i
                                        class="mdi mdi-trending-up align-middle me-1"></i>8.20%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="assets/images/svg/crypto-icons/ada.svg" alt="" class="avatar-xxs me-2">
                                    <a href="javascript:void(0);" class="currency_name">Cardano (ADA)</a>
                                </div>
                            </td>
                            <td>$1.35</td>
                            <td>ADA/USD</td>
                            <td>$1.39</td>
                            <td>$1.32</td>
                            <td>$880,387,980.14</td>
                            <td>
                                <h6 class="text-danger fs-13 mb-0"><i
                                        class="mdi mdi-trending-down align-middle me-1"></i>0.42%</h6>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection