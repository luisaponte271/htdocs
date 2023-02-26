<?php
	include_once "includes/head.php";
	include_once "includes/header.php";
	include_once "includes/navi.php";
	include_once "includes/class.wallet.php";
	admin::CheckRank(8);
?>
<script src="<?= $config['hotelUrl'];?>/adminpan/js/ckeditor/ckeditor.js"></script>
<aside class="right-side">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit News Wallet
                        <form name="mygallery" action="" method="POST">
                    </header>
                    <div class="panel-body">
                        <?php Wallet::EditWallet("id"); 
							Wallet::UpdateWallet();?>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Wallet ID</label>
                            <div class="col-sm-10">
                                <?php echo Wallet::EditWallet("id"); ?>
                                <input type="hidden" name="id" value="<?php echo Wallet::EditWallet("id"); ?>">
                            </div>
                        </div><br><br>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Adress</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?php echo Wallet::EditWallet("codigo"); ?>" name="codigo"
                                    class="form-control">
                            </div>
                        </div>
                        <br><br>
                        <button style="    margin-top: 10px;width: 140px;float: right;margin-right: 14px;" name="update"
                            type="submit" class="btn btn-success">Save Wallet</button>
                    </div>
                </section>
            </div>
            </form>
        </div>
        <?php
			include_once "includes/footer.php";
			include_once "includes/script.php";	
		?>
        <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        </script>