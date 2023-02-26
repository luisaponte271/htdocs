<?php
	include_once "includes/head.php";
	include_once "includes/header.php";
	include_once "includes/navi.php"; 
    include_once "includes/class.apuesta.php";
	admin::CheckRank(8);
?>

<aside class="right-side">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit News Apuesta
                        <form name="mygallery" action="" method="POST" enctype="multipart/form-data">
                    </header>
                    <div class="panel-body">
                        <?php ApuestaAdmin::EditApuesta("id"); 
							ApuestaAdmin::UpdateApuesta();?>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Apuesta ID</label>
                            <div class="col-sm-10">
                                <?php echo ApuestaAdmin::EditApuesta("id"); ?>
                                <input type="hidden" name="id" value="<?php echo ApuestaAdmin::EditApuesta("id"); ?>">
                            </div>
                        </div><br><br>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">title</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?php echo ApuestaAdmin::EditApuesta("title"); ?>"
                                    class="form-control" name="title">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">profit</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?php echo ApuestaAdmin::EditApuesta("profit"); ?>"
                                    class="form-control" name="profit">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="datetime-local" class="col-sm-2 col-sm-2 control-label">date</label>
                            <div class="col-sm-10">
                                <input id="datetime-local" type="datetime-local" class="form-control"
                                    name="date_hour_confrontation"
                                    value="<?php echo ApuestaAdmin::EditApuesta("date_hour_confrontation"); ?>">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">team1</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="team1"
                                    value="<?php echo ApuestaAdmin::EditApuesta("team1"); ?>">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">team2</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="team2"
                                    value="<?php echo ApuestaAdmin::EditApuesta("team2"); ?>">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">team1 imagen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="team1imagen" name="team1imagen"
                                    accept="image/png, .jpeg, .jpg, image/gif"
                                    value=<?php echo ApuestaAdmin::EditApuesta("team1nombre"); ?> disabled>
                                <br>
                                <div class="imagebox">
                                    <?php $img1 = base64_encode( ApuestaAdmin::EditApuesta("team1imagen"));  
                                    echo '<img id="img1" style="border-radius: 6px; width:759px; height:300px;" src="data:image/jpeg;base64,'.$img1.'" name="img1"
                                    border="0"/>';?>
                                </div><br>
                            </div>
                            <div class="col-sm-1">
                                <?php   $img1 = base64_encode( ApuestaAdmin::EditApuesta("team1imagen"));  
                                 echo '<input id="inputfile1" class="form-control"  style="width:125px;float:right;" type="file"
                                    src="data:image/jpeg;base64,'.$img1.'" name="inputfile1"  multiple />';?>
                            </div> <br><br>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">team2 imagen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="team2imagen" name="team2imagen"
                                    accept="image/png, .jpeg, .jpg, image/gif"
                                    value=<?php echo ApuestaAdmin::EditApuesta("team2nombre"); ?> disabled>
                                <br>
                                <div class="imagebox">
                                    <?php $img2 = base64_encode( ApuestaAdmin::EditApuesta("team2imagen"));  
                                    echo '<img id="img2" style="border-radius: 6px; width:759px; height:300px;" src="data:image/jpeg;base64,'.$img2.'" name="topstory"
                                    border="0"/>';?>
                                </div><br>
                            </div>
                            <div class="col-sm-1">
                            <?php   $img2 = base64_encode( ApuestaAdmin::EditApuesta("team2imagen"));  
                                 echo '<input id="inputfile2" class="form-control"  style="width:125px;float:right;" type="file"
                                    src="data:image/jpeg;base64,'.$img2.'" name="inputfile2"  multiple />';?> 
                            </div> <br> <br>
                        </div>
                        <button style="margin-top: 10px;width: 140px;float: right;margin-right: 14px;" name="update"
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
        // CKEDITOR.replace('editor1');
        </script>
        <script src="../../js/apuesta.js"></script>