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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/reference.css">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/plugin-bundle.css">
    <title><?= $config['hotelName'] ?>: <?= User::userData('username') ?></title>
</head>
<?php 
  include_once 'includes/alerts.php';   
?>

<body>
    <div id="container">
        <div class="wrapper">

            <?php include_once 'includes/header.php'; 
                      include_once 'classes/class.reference.php';  
                      $estadistica = ReferenceBrain::get(); 
                      $total = ReferenceBrain::getTotal();
            ?>

            <div class="content">
                <div class="wrapper" style="overflow: auto;">
                    <section>
                        <div class="container">
                            <div class="row mbr-justify-content-center">
                                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                                    <div class="d-flex flex-column flex-column-fluid">
                                        <div id="kt_app_content" class="app-content flex-column-fluid">
                                            <div id="kt_app_content_container" class="app-container container-fluissd">
                                                <br>
                                                <h1 class="text-black">Reference Panel</h1>

                                                <div class="row g-5 g-xl-12 mb-5 mb-xl-12">

                                                    <div class="col-xxl-12">

                                                        <div class="card card-flush h-md-100">

                                                            <div class="card-body d-flex flex-column justify-content-center mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
                                                                style="background-position: 100% 50%;">

                                                                <div class="mb-10">
                                                                    <div
                                                                        class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                                                        <span class="me-2">
                                                                            <br>
                                                                            <span
                                                                                class="position-relative d-inline-block text-white">
                                                                                <label
                                                                                    class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                                    <span
                                                                                        style="font-size: 20px;background: linear-gradient(135deg, #CB26B6, #F8B127);-webkit-background-clip: text;background-clip: text;color:transparent;margin-left: 0px !important; margin-bottom: 5px !important;font-weight: bold !important;">Your
                                                                                        Reference Link</span>

                                                                                </label>

                                                                                <input type="text"
                                                                                    class="form-control form-control-solid"
                                                                                    id="referenceLink"
                                                                                    value="http://localhost/register?userref=<?php  echo ReferenceBrain::getCode() ?>"
                                                                                    readonly="">
                                                                                <button
                                                                                    class="btn btn-sm btn-warning text-black fw-bold btn-sm mt-2 btn-clipboard" id="copy"
                                                                                    onclick="copyLink()">Copy</button>
                                                                            </span>
                                                                        </span>
                                                                    </div>

                                                                    <h3 style="color:black;"><i
                                                                            class="bi bi-info-circle"
                                                                            style="font-size: 18px;color:bisque;"></i>
                                                                        Reference Info</h3>
                                                                    <p>By clicking on your referral link, you earn
                                                                        <strong class="text-warning">10%
                                                                            commission</strong> from each of our members
                                                                        who become a member and buy hash. You can
                                                                        withdraw this earnings instantly.
                                                                    </p>
                                                                    <br>
                                                                    <h3 class="mt-2" style="color:black;"><i
                                                                            class="bi bi-info-circle"
                                                                            style="font-size: 18px;color:black;"></i>
                                                                        Gift Info</h3>
                                                                    <p>If you invite <strong
                                                                            class="text-warning">50</strong> people
                                                                        using your referral link, you are entitled to
                                                                        the Gift section. This can accumulate
                                                                        indefinitely. Every <strong
                                                                            class="text-warning">50</strong> people give
                                                                        you <strong class="text-warning">1</strong>
                                                                        right. <br><br>
                                                                        For example, if you invite 150 people, you will
                                                                        be eligible for a total of 3 times. <br><br>
                                                                        <a href="gift.php" class="text-success"><i
                                                                                class="fa fa-external-link text-success"></i>
                                                                            Gift Page</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row gy-5 g-xl-10">
                                                    <div class="col-sm-6 col-xl-3 mb-xl-10">
                                                        <div   style="background-color: #453d3d;" class="card h-lg-100">
                                                            <div
                                                                class="card-body d-flex justify-content-between align-items-start flex-column">
                                                                <div class="m-0">
                                                                    <span
                                                                        class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                                                        <i class="fas fa-gift"
                                                                            style="font-size: 50px;"></i>
                                                                    </span>

                                                                </div>
                                                                <div class="d-flex flex-column my-7">
                                                                    <span
                                                                        class="fw-semibold fs-2x text-white lh-1 ls-n2 line-through">0/50</span>
                                                                    <div class="m-0">
                                                                        <span
                                                                            class="fw-semibold fs-4 text-white line-through">Gift
                                                                            Counter</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-3 mb-xl-10">
                                                        <div style="background-color: #453d3d;" class="card h-lg-100">
                                                            <div
                                                                class="card-body d-flex justify-content-between align-items-start flex-column">
                                                                <div class="m-0">

                                                                    <span
                                                                        class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                                                        <i class="fas fa-asterisk"
                                                                            style="font-size: 50px;"></i>
                                                                    </span>

                                                                </div>
                                                                <div class="d-flex flex-column my-7">
                                                                    <span
                                                                        class="fw-semibold fs-2x text-white lh-1 ls-n2 line-through">0
                                                                        TH/s</span>
                                                                    <div class="m-0">
                                                                        <span
                                                                            class="fw-semibold fs-4 text-white line-through">Hash
                                                                            Earned From Gift</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-3 mb-xl-10">
                                                        <div class="card h-lg-100">
                                                            <div
                                                                class="card-body d-flex justify-content-between align-items-start flex-column">
                                                                <div class="m-0">

                                                                    <span
                                                                        class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                                                        <i class="fas fa-bullhorn"
                                                                            style="font-size: 50px;"></i>
                                                                    </span>

                                                                </div>
                                                                <div class="d-flex flex-column my-7">
                                                                    <span
                                                                        class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2"><?php  echo $total[0]['references'] ?></span>
                                                                    <div class="m-0">
                                                                        <span
                                                                            class="fw-semibold fs-4 text-gray-400">References</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-3 mb-xl-10">
                                                        <div class="card h-lg-100">
                                                            <div
                                                                class="card-body d-flex justify-content-between align-items-start flex-column">
                                                                <div class="m-0">
                                                                    <span
                                                                        class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                                                        <i class="fas fa-dollar-sign"
                                                                            style="font-size: 50px;"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex flex-column my-7">
                                                                    <span
                                                                        class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">$ <?php  echo $total[0]['earnings'] ?></span>
                                                                    <div class="m-0">
                                                                        <span
                                                                            class="fw-semibold fs-4 text-gray-400">Reference
                                                                            Earnings</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row gy-5 g-xl-10">
                                                    <div class="col-xl-12 mb-5 mb-xl-10">
                                                        <div class="card card-flush h-xl-100">
                                                            <div class="card-header pt-7">
                                                                <h3 class="card-title align-items-start flex-column">
                                                                    <span
                                                                        class="card-label fw-bold text-gray-800">Active
                                                                        References</span>
                                                                </h3>
                                                            </div>
                                                            <div class="card-body pt-2">
                                                                <div id="kt_table_widget_4_table_wrapper"
                                                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <?php  if(count($estadistica) > 0) { ?>
                                                                    <br>
                                                                    <div class="table-responsive"> 
                                                                        <table
                                                                            class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer"
                                                                            id="kt_table_widget_4_table">
                                                                            <thead>
                                                                                <tr
                                                                                    class="text-start text-black fw-bold fs-7 text-uppercase gs-0">
                                                                                    <th class="min-w-100px sorting_disabled"
                                                                                        rowspan="1" colspan="1">#</th>
                                                                                    <th class="text-center min-w-100px sorting_disabled"
                                                                                        rowspan="1" colspan="1">Username
                                                                                    </th>
                                                                                    <th class="text-center min-w-125px sorting_disabled"
                                                                                        rowspan="1" colspan="1">Total
                                                                                        Deposit</th>
                                                                                    <th class="text-center min-w-100px sorting_disabled"
                                                                                        rowspan="1" colspan="1">Earnings
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="fw-bold text-gray-600">
                                                                                <?php 
                                                                              for($i=0;$i<count($estadistica);$i++){ ?>
                                                                                <tr>
                                                                                    <td><?php echo $i+1 ?>
                                                                                    <td><?php echo $estadistica[$i]['username']; ?>
                                                                                    <td><?php echo $estadistica[$i]['total']; ?>
                                                                                    <td><?php echo $estadistica[$i]['ganancia']; ?>

                                                                                </tr>
                                                                                <?php  } ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <?php } else { ?>
                                                                    <span class="text-warning mt-2">No tienes ninguno
                                                                        petición de retiro.</span>
                                                                    <?php } ?>
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
                        </div>
                </div>
                </section>
            </div>
        </div>
    </div>
    </div>
</body>
<script>
 var btn= document.getElementById('copy');
 var tooltip = new bootstrap.Tooltip(btn, {title: 'copied'});

  function copyLink() {  
	let referrer = document.getElementById('referenceLink').value;  
    tooltip.show();
    navigator.clipboard.writeText(referrer); 
    setTimeout(hideTooltip, 2000);
  }
 
  function hideTooltip() {
    tooltip.hide();
  }
</script>