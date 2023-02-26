<!--
Developed by
 _   _   _   _   _____   _____  __    __  _   __   _  
| | | | | | | | /  ___| /  _  \ \ \  / / | | |  \ | |
| |_| | | | | | | |     | | | |  \ \/ /  | | |   \| |
|  _  | | | | | | |  _  | | | |   \  /   | | | |\   |
| | | | | |_| | | |_| | | |_| |   / /    | | | | \  |
|_| |_| \_____/ \_____/ \_____/  /_/     |_| |_|  \_|

-----------------------------------------------------
      EDITADO Y LANZADO CON <3 by SrThrone
          www.youtube.com/SrThroneIT
-----------------------------------------------------
-->
<!DOCTYPE html>
<html lang="es" dir="es">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $.ajaxSetup({
        cache: true
    });
    setInterval(function() {
        $('#onlinecount').load('/onlinecount');
    }, 1500);
    $("#onlinecount").click(function() {
        $('#onlinecount').load('/onlinecount');
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(e) {
    $.ajaxSetup({
        cache: true
    });
    setInterval(function() {
        $('#roomcount').load('/roomcount');
    }, 5500);
    $("#roomcount").click(function() {
        $('#roomcount').load('/roomcount');
    });
});
</script>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/style-bundle.css"> -->
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/plugin-bundle.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/withdraw.css">

    <title><?= $config['hotelName'] ?>: <?= User::userData('username') ?></title>
</head>
<?php 
  include_once 'includes/alerts.php';
?>

<body>
    <div id="container">
        <div class="wrapper">

            <?php 
        include_once 'includes/header.php';
      ?>


            <div class="content">
                <div class="wrapper" style="overflow: auto;">
                    <div class="hotel">
                        <span class="icon"></span>
                        </button>
                    </div>


                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-fluissd">
                                    <link rel="stylesheet"
                                        href="https://cdn.jsdelivr.net/gh/monzanifabio/cryptofont/cryptofont.css">
                                    <br>
                                    <h1>Dashboard</h1>

                                    <div class="row gsy-5 g-xl-12">
                                        <div class="mb-xl-12">
                                            <div class="card h-md-100">
                                                <div class="card-body d-flex flex-column flex-center">
                                                    <h1>Announcements</h1>
                                                    <div class="mb-2 mt-2">
                                                        <div class="col-lg-12 alert alert-success" role="alert">
                                                            <strong>Event! </strong> $50 cashback instantly for every TH
                                                            you buy $250 or more! Take advantage of the opportunity now.
                                                        </div>
                                                        <div class="col-lg-12 alert alert-success" role="alert">
                                                            <strong>Event! </strong> $25 cashback instantly for every TH
                                                            you buy $100-$249! Take advantage of the opportunity now.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row gsy-5 g-xl-12">
                                        <div class="mb-xl-12">
                                            <div class="card h-md-100">
                                                <div class="card-body d-flex flex-column flex-center">
                                                    <div class="mb-2">
                                                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                                                            <span class="fw-bolder special-font">$<span
                                                                    id="currentCoinBalance">0.725760000</span></span>
                                                        </h1>
                                                    </div>
                                                    <div
                                                        class="row col-lg-12 col-md-12 justify-content-center text-center mt-2">
                                                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">

                                                            <div
                                                                class="card card-dashed flex-center min-w-175px my-3 p-6">
                                                                <h4
                                                                    style="font-size:17px;color:black;margin-top: 10px;">
                                                                    <span id="btcCurrent">0.0000296</span> <br>BTC
                                                                </h4>
                                                                <i class="cf cf-btc"
                                                                    style="font-size: 100px;margin-top: -75px;color: #ffe4c40a;margin-bottom: -15px;"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                                                            <div
                                                                class="card card-dashed flex-center min-w-175px my-3 p-6">
                                                                <h4
                                                                    style="font-size:17px;color:black;margin-top: 10px;">
                                                                    <span id="trxCurrent">10.242</span> <br>TRX
                                                                </h4>
                                                                <i class="cf cf-trx"
                                                                    style="font-size: 100px;margin-top: -75px;color: #ffe4c40a;margin-bottom: -15px;"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">

                                                            <div
                                                                class="card card-dashed flex-center min-w-175px my-3 p-6">
                                                                <h4
                                                                    style="font-size:17px;color:black;margin-top: 10px;">
                                                                    <span id="bnbCurrent">0.0023143</span> <br>BNB
                                                                </h4>
                                                                <i class="cf cf-bnb"
                                                                    style="font-size: 100px;margin-top: -75px;color: #ffe4c40a;margin-bottom: -15px;"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center mb-1 mt-5">
                                                        <a class="btn btn-sm btn-primary me-2"
                                                            data-bs-target="#kt_modal_bidding" data-bs-toggle="modal"
                                                            onclick="reInvestCalculator()">Reinvest</a>
                                                        <a class="btn btn-sm btn-warning text-black"
                                                            href="buyHash.php">Buy TH/s</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row g-5 g-xl-10 mt-5">

                                        <div class="col-xl-3 mb-xl-10" style="margin-bottom: 1.5rem !important;">
                                            <div class="card mb-5 mb-xl-8" style="height: 400px !important;">
                                                <div class="card-body p-0">
                                                    <div class="px-9 pt-7 card-rounded w-100"
                                                        style="height:180px !important;">
                                                        <div class="d-flex flex-stack">
                                                            <h3 class="m-0 text-white fw-bold fs-3">My Statistics</h3>
                                                        </div>
                                                    </div>
                                                    <div class="bg-body shadow-sm card-rounded mx-9 mb-9 py-9 position-relative z-index-1"
                                                        style="margin-top: -150px;padding-right: 0.75rem !important; padding-left: 0.75rem !important;">
                                                        <div class="d-flex align-items-center mb-6">
                                                            <div class="symbol symbol-45px w-40px me-5">
                                                                <span class="symbol-label bg-lighten">
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <i class="fas fa-microchip"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                                <div class="mb-1 pe-3 flex-grow-1">
                                                                    <span class="fs-5 text-gray-800 fw-bold"
                                                                        style="color:black !important;">Current
                                                                        TH/s</span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fw-bold fs-5 text-gray-800 pe-1">0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-6">
                                                            <div class="symbol symbol-45px w-40px me-5">
                                                                <span class="symbol-label bg-lighten">
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <i class="fas fa-coins"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                                <div class="mb-1 pe-3 flex-grow-1">
                                                                    <span class="fs-5 text-gray-800 fw-bold"
                                                                        style="color:black !important;">Daily
                                                                        Profit</span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$0
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-6">
                                                            <div class="symbol symbol-45px w-40px me-5">
                                                                <span class="symbol-label bg-lighten">
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <i class="fas fa-gift"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                                <div class="mb-1 pe-3 flex-grow-1">
                                                                    <span class="fs-5 text-gray-800 fw-bold"
                                                                        style="color:black !important;">Gift
                                                                        Counter</span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fw-bold fs-5 text-gray-800 pe-1">0/50
                                                                    </div>
                                                                </div>

                                                                <div class="text-gray-400 fw-semibold fs-7">When you
                                                                    complete it, you earn a gift hash.</div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-45px w-40px me-5">
                                                                <span class="symbol-label bg-lighten">
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <i class="fas fa-user-plus"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                                <div class="mb-1 pe-3 flex-grow-1">
                                                                    <span class="fs-5 text-gray-800 fw-bold"
                                                                        style="color:black !important;">References</span>
                                                                    <div class="text-gray-400 fw-semibold fs-7"></div>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fw-bold fs-5 text-gray-800 pe-1">0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 mb-xl-10" style="margin-bottom: 1.5rem !important;">
                                            <div class="card mb-5 mb-xl-8" style="height: 400px !important;">
                                                <div class="card-body p-0">
                                                    <div class="px-9 pt-7 card-rounded w-100 "
                                                        style="height:180px !important;">
                                                        <div class="d-flex flex-stack">
                                                            <h3 class="m-0 text-white fw-bold fs-3">System Statistics
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="bg-body shadow-sm card-rounded mx-9 mb-9 py-9 position-relative z-index-1"
                                                        style="margin-top: -150px;padding-right: 0.75rem !important; padding-left: 0.75rem !important;">
                                                        <div class="d-flex align-items-center mb-6">
                                                            <div class="symbol symbol-45px w-40px me-5">
                                                                <span class="symbol-label bg-lighten">
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <i class="fas fa-university"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                                <div class="mb-1 pe-3 flex-grow-1">
                                                                    <span class="fs-5 text-gray-800 fw-bold"
                                                                        style="color:black !important;">Total
                                                                        Deposit</span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$840201
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-6">
                                                            <div class="symbol symbol-45px w-40px me-5">
                                                                <span class="symbol-label bg-lighten">
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <i class="fas fa-wallet"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                                <div class="mb-1 pe-3 flex-grow-1">
                                                                    <span class="fs-5 text-gray-800 fw-bold"
                                                                        style="color:black !important;">Total
                                                                        Withdraw</span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$149748
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-6">
                                                            <div class="symbol symbol-45px w-40px me-5">
                                                                <span class="symbol-label bg-lighten">
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <i class="fas fa-user-friends"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                                <div class="mb-1 pe-3 flex-grow-1">
                                                                    <span class="fs-5 text-gray-800 fw-bold"
                                                                        style="color:black !important;">Total
                                                                        Users</span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fw-bold fs-5 text-gray-800 pe-1">351189
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-45px w-40px me-5">
                                                                <span class="symbol-label bg-lighten">
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <i class="fas fa-calendar"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                                <div class="mb-1 pe-3 flex-grow-1">
                                                                    <span class="fs-5 text-gray-800 fw-bold"
                                                                        style="color:black !important;">Active
                                                                        Days</span>
                                                                    <div class="text-gray-400 fw-semibold fs-7"></div>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fw-bold fs-5 text-gray-800 pe-1">64
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-6">
                                            <div class="card pt-2 mb-6">
                                                <div class="card-header border-0">
                                                    <div class="card-title">
                                                        <h2>Last Transactions</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="tab-content">
                                                        <div class="py-0 tab-pane fade show active">
                                                            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                <div class="table-responsive" style="margin-top: -15px">
                                                                    <table
                                                                        class="table align-middle table-row-dashed fs-6 fw-bold gy-5 dataTable no-footer">
                                                                        <thead
                                                                            class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                                            <tr class="text-start text-muted gs-0">
                                                                                <th class="min-w-100px sorting">Username
                                                                                </th>
                                                                                <th class="min-w-100px sorting">Amount
                                                                                </th>
                                                                                <th class="min-w-100px sorting">Status
                                                                                </th>
                                                                                <th class="min-w-100px sorting">Url</th>
                                                                                <th class="min-w-125px sorting">Date
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="fs-6 fw-semibold text-gray-600">
                                                                            <tr class="odd">
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="text-gray-600 text-hover-primary">tidus*****</span>
                                                                                </td>
                                                                                <td class="text-danger sorting_1">
                                                                                    $35.35 </td>
                                                                                <td>Withdraw</td>
                                                                                <td>
                                                                                    <a style="color:black !important;"
                                                                                        target="_blank"
                                                                                        href="https://tronscan.org/#/transaction/19a22a9fd3ba38a0b32f66eadb9ec5c1d29be1f48b3419b559d32685877348e2">
                                                                                        <i class="fa-solid fa-link"
                                                                                            style="color:black !important;"></i>
                                                                                        Check
                                                                                    </a>
                                                                                </td>
                                                                                <td>2023-02-20 01:32</td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="text-gray-600 text-hover-primary">Am***</span>
                                                                                </td>
                                                                                <td class="text-success sorting_1">
                                                                                    $1 </td>
                                                                                <td>Deposit</td>
                                                                                <td>
                                                                                    <a style="color:black !important;"
                                                                                        target="_blank"
                                                                                        href="https://tronscan.org/#/transaction/8c7d374c4e860382709d2b09e35fd4b1240d60ce6e5c80959b5ca898ca836a71">
                                                                                        <i class="fa-solid fa-link"
                                                                                            style="color:black !important;"></i>
                                                                                        Check
                                                                                    </a>
                                                                                </td>
                                                                                <td>2023-02-20 01:20</td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="text-gray-600 text-hover-primary">andyb*****</span>
                                                                                </td>
                                                                                <td class="text-danger sorting_1">
                                                                                    $7.09 </td>
                                                                                <td>Withdraw</td>
                                                                                <td>
                                                                                    <a style="color:black !important;"
                                                                                        target="_blank"
                                                                                        href="https://tronscan.org/#/transaction/8a0da7a01da5eeeb1cf15ee80b6829df200647a48d907f85b6aa7420bd6330f4">
                                                                                        <i class="fa-solid fa-link"
                                                                                            style="color:black !important;"></i>
                                                                                        Check
                                                                                    </a>
                                                                                </td>
                                                                                <td>2023-02-20 01:23</td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="text-gray-600 text-hover-primary">Nama****</span>
                                                                                </td>
                                                                                <td class="text-success sorting_1">
                                                                                    $1.06 </td>
                                                                                <td>Deposit</td>
                                                                                <td>
                                                                                    <a style="color:black !important;"
                                                                                        target="_blank"
                                                                                        href="https://tronscan.org/#/transaction/274c415ee966c4b77dd7b0343369f88f5a00fe6e2a1dd601b1a5d9c565d027cc">
                                                                                        <i class="fa-solid fa-link"
                                                                                            style="color:black !important;"></i>
                                                                                        Check
                                                                                    </a>
                                                                                </td>
                                                                                <td>2023-02-20 01:05</td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="text-gray-600 text-hover-primary">kukoyida********</span>
                                                                                </td>
                                                                                <td class="text-danger sorting_1">
                                                                                    $19.79 </td>
                                                                                <td>Withdraw</td>
                                                                                <td>
                                                                                    <a style="color:black !important;"
                                                                                        target="_blank"
                                                                                        href="https://tronscan.org/#/transaction/cddb7b823a9842dce054d33c9855951f78e6ca32ab34db487b21bb0f8f140991">
                                                                                        <i class="fa-solid fa-link"
                                                                                            style="color:black !important;"></i>
                                                                                        Check
                                                                                    </a>
                                                                                </td>
                                                                                <td>2023-02-20 01:14</td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="text-gray-600 text-hover-primary">mergen*******</span>
                                                                                </td>
                                                                                <td class="text-success sorting_1">
                                                                                    $58.64 </td>
                                                                                <td>Deposit</td>
                                                                                <td>
                                                                                    <a style="color:black !important;"
                                                                                        target="_blank"
                                                                                        href="https://tronscan.org/#/transaction/4be5dff7823ac7274c99ba299a3682c3e38bfe08d3f823529189e376d9c9a600">
                                                                                        <i class="fa-solid fa-link"
                                                                                            style="color:black !important;"></i>
                                                                                        Check
                                                                                    </a>
                                                                                </td>
                                                                                <td>2023-02-20 01:06</td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="text-gray-600 text-hover-primary">afshin******</span>
                                                                                </td>
                                                                                <td class="text-danger sorting_1">
                                                                                    $9.42 </td>
                                                                                <td>Withdraw</td>
                                                                                <td>
                                                                                    <a style="color:black !important;"
                                                                                        target="_blank"
                                                                                        href="https://tronscan.org/#/transaction/e4207b70e46d3f5db7feee15fac96ef33fd1ac9d5c3f917df74772f526741735">
                                                                                        <i class="fa-solid fa-link"
                                                                                            style="color:black !important;"></i>
                                                                                        Check
                                                                                    </a>
                                                                                </td>
                                                                                <td>2023-02-20 01:05</td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="text-gray-600 text-hover-primary">kariukip********</span>
                                                                                </td>
                                                                                <td class="text-danger sorting_1">
                                                                                    $46.29 </td>
                                                                                <td>Withdraw</td>
                                                                                <td>
                                                                                    <a style="color:black !important;"
                                                                                        target="_blank"
                                                                                        href="https://tronscan.org/#/transaction/d7cf0d83f1095a65fadf7dfa92cf05429401fae34df5b7f74f6575841c5071d9">
                                                                                        <i class="fa-solid fa-link"
                                                                                            style="color:black !important;"></i>
                                                                                        Check
                                                                                    </a>
                                                                                </td>
                                                                                <td>2023-02-20 00:59</td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="text-gray-600 text-hover-primary">tonoug*******</span>
                                                                                </td>
                                                                                <td class="text-danger sorting_1">
                                                                                    $5.01 </td>
                                                                                <td>Withdraw</td>
                                                                                <td>
                                                                                    <a style="color:black !important;"
                                                                                        target="_blank"
                                                                                        href="https://tronscan.org/#/transaction/0fcb9f9fe0479f0c3361c755a45d586e849621fb30240415cece8e8cc6946e5a">
                                                                                        <i class="fa-solid fa-link"
                                                                                            style="color:black !important;"></i>
                                                                                        Check
                                                                                    </a>
                                                                                </td>
                                                                                <td>2023-02-20 00:58</td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td data-order="Invalid date">
                                                                                    <span
                                                                                        class="text-gray-600 text-hover-primary">kohein25*********</span>
                                                                                </td>
                                                                                <td class="text-danger sorting_1">
                                                                                    $7.71 </td>
                                                                                <td>Withdraw</td>
                                                                                <td>
                                                                                    <a style="color:black !important;"
                                                                                        target="_blank"
                                                                                        href="https://tronscan.org/#/transaction/990c5d51685efaebe32c3fa508549c6cbb15e499d3dfd1bc490081b135816b70">
                                                                                        <i class="fa-solid fa-link"
                                                                                            style="color:black !important;"></i>
                                                                                        Check
                                                                                    </a>
                                                                                </td>
                                                                                <td>2023-02-20 00:57</td>
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

                                    <div class="modal fade" id="kt_modal_bidding" tabindex="-1" style="display: none;"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-900px">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2>Make Reinvest</h2>
                                                    <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                        data-bs-dismiss="modal">
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                                    fill="currentColor"></rect>
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)"
                                                                    fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="modal-body py-lg-10 px-lg-10">
                                                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                                                        id="kt_modal_create_app_stepper" data-kt-stepper="true">
                                                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                                                            <form
                                                                class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                                                novalidate="novalidate" id="kt_modal_create_app_form">
                                                                <div class="current" data-kt-stepper-element="content">
                                                                    <div class="w-100">
                                                                        <span
                                                                            style="color: black;font-size: 15px !important;"><span
                                                                                class="text-danger">*</span>Reinvest
                                                                            allows you to buy Hash again with your
                                                                            current balance.</span><br>
                                                                        <span
                                                                            style="color: black;font-size: 15px !important;"><span
                                                                                class="text-danger">*</span><strong
                                                                                class="text-warning">25% extra
                                                                                bonus</strong> is added to Hashes you
                                                                            buy with Reinvest.</span><br>
                                                                        <span
                                                                            style="color: black;font-size: 15px !important;"><span
                                                                                class="text-danger">*</span>The Hash you
                                                                            buy with Reinvest is valid for <strong
                                                                                class="text-warning">30
                                                                                days</strong>.</span>
                                                                        <div class="col-lg-12 alert alert-danger mt-2"
                                                                            role="alert" id="buyHashAlertDanger"
                                                                            style="display:none;"></div>

                                                                        <div class="row g-4">
                                                                            <div class="col-md-12">
                                                                                <div id="cReInvest"></div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div id="ri"></div>
                                                                                <div
                                                                                    class="btn-box justify-content-center">
                                                                                    <button type="button"
                                                                                        class="def-btn"
                                                                                        onclick="reInvest()">Reinvest</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <script type="text/javascript">
                                    function upCount() {
                                        var currentCoinBalance = $("#currentCoinBalance").text();
                                        var secondlyEarn = parseFloat(currentCoinBalance) + parseFloat(0);
                                        $("#currentCoinBalance").text(parseFloat(secondlyEarn).toFixed(9));

                                        var btcCurrent = $("#btcCurrent").text();
                                        var btcUp = parseFloat(currentCoinBalance) / parseFloat(24534.9);
                                        $("#btcCurrent").text(parseFloat(btcUp).toFixed(7));

                                        var trxCurrent = $("#trxCurrent").text();
                                        var trxUp = parseFloat(currentCoinBalance) / parseFloat(0.07086);
                                        $("#trxCurrent").text(parseFloat(trxUp).toFixed(3));

                                        var bnbCurrent = $("#bnbCurrent").text();
                                        var bnbUp = parseFloat(currentCoinBalance) / parseFloat(313.6);
                                        $("#bnbCurrent").text(parseFloat(bnbUp).toFixed(7));
                                    }
                                    setInterval(upCount, 1000);
                                    </script>
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>

                    <?php
              include_once 'includes/footer.php';
             ?>

                </div>
            </div>

        </div>
    </div>
</body>

</html>