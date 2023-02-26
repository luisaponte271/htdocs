<html>

<?php
	include_once "includes/head.php";
	include_once "includes/header.php";
	include_once "includes/navi.php";
    include_once "includes/class.wallet.php";
	admin::CheckRank(6);
?>
<aside class="right-side">
    <section class="content">
        <div class="row"> 
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Create a News Wallet<br>
                            <form name="mygallery" action="" method="POST"> 
                        </header>
                        <div class="panel-body">
                        <?php Wallet::WalletNews(); ?>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Adress Billetera</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo $_SESSION['codigo']; ?>" name="codigo" class="form-control">
                                </div>
                            </div><br><br>
                            <script src="http://localhost/adminpan/js/ckeditor/ckeditor.js"></script>
                            <br><br>
                            <button style="width: 130px;
							float: right;
							margin-right: 14px;" name="postnews" type="submit" class="btn btn-success">Save Wallet</button>
                        </div>
                    </section>
                </div>
                </form>

                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">
                            All Existing Billeteras<br>
                            <div class="panel-body">
                            <?php Wallet::DeleteWallet(); ?>
                                <table class="table table-striped table-bordered table-condensed">

                                    <tbody>
                                        <?php
                                            $row = Wallet::getAll();
                                            $num = count($row); ?>
                                        <?php if($num > 0) { ?>
                                        <?php for($i=0;$i<count($row);$i++){ ?>
                                        <tr>
                                            <td><?php echo $row[$i]['id']; ?></td>
                                            <td><?php echo $row[$i]['codigo']; ?></td>
                                            <td><?php echo $row[$i]['date_hour_wallet']; ?></td>
                                            <td>
                                                 <a href="http://localhost/adminpan/wallethtml/edit/<?php echo $row[$i]['id']; ?>"><i
                                                            style="padding-top: 5px; color:green;"
                                                            class="fa fa-edit"></i></a> 
                                            </td>
                                            <td><a href="http://localhost/adminpan/wallethtml/delete/<?php echo $row[$i]['id']; ?>"><i
                                                        style="padding-top: 4px; color:red;"
                                                        class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </header>
                    </section>
                </div>
             
        </div>
        <?php
			include_once "includes/footer.php";
			include_once "includes/script.php";
		?>