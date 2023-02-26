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
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/account.css">
    <title><?= $config['hotelName'] ?>: <?= User::userData('username') ?></title>
</head>
<?php 
  include_once 'classes/class.userbrain.php'; 
  include_once 'includes/alerts.php';
?>

<body>
    <div id="container">
        <div class="wrapper">

            <?php include_once 'includes/header.php'; ?>

            <div class="content">
                <div class="wrapper" style="overflow: auto;">
                    <section>
                        <div class="container">
                            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                                <div class="d-flex flex-column flex-column-fluid">
                                    <div id="kt_app_content" class="app-content flex-column-fluid">
                                        <div id="kt_app_content_container" class="app-container container-fluissd"><br>
                                            <h1 class="text-black">Account</h1>
                                            <div class="card mb-5 mb-xl-10 mt-5">

                                                <div class="card-header cursor-pointer">
                                                    <div class="card-title m-0">
                                                        <h3 class="fw-bold m-0">Account Details</h3>
                                                    </div>
                                                </div>
                                                <?php
                                                    $id_user = $_SESSION['id'];
                                                    $row = UserBrain::getWhere($id_user);
                                                    $num = count($row);  ?>
                                                <div class="card-body p-9">
                                                    <div class="row mb-7">
                                                        <label class="col-lg-4 fw-semibold text-muted">Username</label>
                                                        <div class="col-lg-8">
                                                            <span
                                                                class="fw-bold fs-6 text-gray-800"><?php echo $row[0]['username']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-7">
                                                        <label class="col-lg-4 fw-semibold text-muted">Email</label>
                                                        <div class="col-lg-8">
                                                            <span
                                                                class="fw-bold fs-6 text-gray-800"><?php echo $row[0]['mail']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-7">
                                                        <label class="col-lg-4 fw-semibold text-muted">Register
                                                            IP</label>
                                                        <div class="col-lg-8">
                                                            <span
                                                                class="fw-bold fs-6 text-gray-800"><?php echo $row[0]['ip_register']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-7">
                                                        <label class="col-lg-4 fw-semibold text-muted">Login IP</label>
                                                        <div class="col-lg-8">
                                                            <span
                                                                class="fw-bold fs-6 text-gray-800"><?php echo $row[0]['ip_register']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-7">
                                                        <label class="col-lg-4 fw-semibold text-muted">Register
                                                            Time</label>
                                                        <div class="col-lg-8">
                                                            <span class="fw-bold fs-6 text-gray-800">
                                                                <?php 
                                                            $time = $row[0]['account_created']; 
                                                            $fecha = new DateTime();
                                                            $fecha->setTimestamp($time);
                                                            echo $fecha->format('Y-m-d H:i:s') . "\n"; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-7"> 
                                                        <label class="col-lg-4 fw-semibold text-muted">Billetera</label>
                                                        <div class="col-lg-7"> 
                                                                <input id="billetera" class="ant-input ant-input-sm read fw-bold fs-6 text-gray-800" type="text" value=<?php echo $row[0]['motto']; ?> readonly> 
                                                        </div> 
                                                        <div class="col-lg-1"> 
                                                        <button id="saveBilletera" onclick=saveBilletera();  class="btn btn-default btn-sm btn-success control-button" style="display: none;"><span>Save</span></button>
                                                        <button id="editBilletera" onclick=editarBilletera(); class="btn btn-default btn-sm btn-danger control-button" style="display: block; text-transform: none;"><span>Edit</span></button>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card mb-5 mb-xl-10 mt-5">
                                                <div class="card-header border-0 cursor-pointer" role="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                                                    aria-controls="kt_account_profile_details">
                                                    <div class="card-title m-0">
                                                        <h3 class="fw-bold m-0">Change Password</h3>
                                                    </div>
                                                </div>
                                                <div id="kt_account_settings_profile_details" class="collapse show"
                                                    data-select2-id="select2-data-kt_account_settings_profile_details">

                                                    <div class="card-body border-top p-9">
                                                        <div class="row mb-6">

                                                            <div class="row mb-6">
                                                                <label
                                                                    class="col-lg-4 col-form-label required fw-semibold fs-6">Your
                                                                    Old Password</label>
                                                                <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                                                    <input type="password" id="oldPassword"
                                                                        name="oldPassword"
                                                                        class="form-control form-control-lg form-control-solid"
                                                                        placeholder="Old Password">
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-6">
                                                                <label
                                                                    class="col-lg-4 col-form-label required fw-semibold fs-6">Your
                                                                    New Password</label>
                                                                <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                                                    <input type="password" id="newPassword"
                                                                        name="newPassword"
                                                                        class="form-control form-control-lg form-control-solid"
                                                                        placeholder="New Password">
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-6">
                                                                <label
                                                                    class="col-lg-4 col-form-label required fw-semibold fs-6">Your
                                                                    New Password</label>
                                                                <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                                                    <input type="password" id="newPassword2"
                                                                        name="newPassword2"
                                                                        class="form-control form-control-lg form-control-solid"
                                                                        placeholder="New Password">
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="changePasswordResult" class="text-center"></div>
                                                        </div>
                                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                            <button type="submit" class="btn btn-primary"
                                                                onclick="changePassword()">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-5 mb-xl-10 mt-5">
                                                <div class="card-header border-0 cursor-pointer" role="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                                                    aria-controls="kt_account_profile_details">
                                                    <div class="card-title m-0">
                                                        <h3 class="fw-bold m-0">Change PIN</h3>
                                                    </div>
                                                </div>
                                                <div id="kt_account_settings_profile_details" class="collapse show"
                                                    data-select2-id="select2-data-kt_account_settings_profile_details">

                                                    <div class="card-body border-top p-9">
                                                        <div class="row mb-6">
                                                            <div class="row mb-6">
                                                                <label
                                                                    class="col-lg-4 col-form-label required fw-semibold fs-6">Your
                                                                    Old Key</label>
                                                                <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                                                    <input type="password" id="oldPin"
                                                                        onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                                                        name="oldPin"
                                                                        class="form-control form-control-lg form-control-solid"
                                                                        placeholder="Old PIN" maxlength="4">
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-6">
                                                                <label
                                                                    class="col-lg-4 col-form-label required fw-semibold fs-6">Your
                                                                    New Key</label>
                                                                <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                                                    <input type="password" id="newPin"
                                                                        onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                                                        name="newPin"
                                                                        class="form-control form-control-lg form-control-solid"
                                                                        placeholder="New PIN" maxlength="4">
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-6">
                                                                <label
                                                                    class="col-lg-4 col-form-label required fw-semibold fs-6">Your
                                                                    New Key</label>
                                                                <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                                                    <input type="password" id="newPin2"
                                                                        onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                                                        name="newPin2"
                                                                        class="form-control form-control-lg form-control-solid"
                                                                        placeholder="New PIN" maxlength="4">
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="changePasswordResult" class="text-center"></div>
                                                        </div>
                                                        <div class="card-footer d-flex  py-6 px-9">
                                                            <div class="container">
                                                                <div class="row justify-content-end">
                                                                    <div class="col-md-auto">
                                                                        <button type="submit" class="btn btn-primary"
                                                                            onclick="changePin()">Save Changes
                                                                            PIN</button>
                                                                    </div>
                                                                    <div class="col-md-auto">
                                                                        <button type="submit" class="btn btn-primary"
                                                                            onclick="cancel()">Cancel</button>
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

<script src="templates/brain/js/account.js"></script>