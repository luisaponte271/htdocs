<html>
 
<?php
	include_once "includes/head.php";
	include_once "includes/header.php";
	include_once "includes/navi.php";
    include_once "includes/class.apuesta.php";
	admin::CheckRank(5);
?>
<aside class="right-side">
    <section class="content">
        <div class="row">
            <?php
				if (User::userData('rank') > '5')
				{
				?>
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Apuesta
                    </header>
                    <div class="panel-body">
                        <form action="apuestadd" method="post" name="form1" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>team</label>
                                <input type="text" class="form-control" name="team">
                            </div>
                            <div>
                                <label class="form-label">team imagen</label>
                                <input class="form-control" type="file" name="teamimgblob" multiple />
                            </div> 
                            <div class="form-group">
                                <label for="datetime-local">date start</label>
                                <input id="datetime-local" class="form-control" name="date_start" type="datetime-local" />
                            </div>
                            <div class="form-group">
                                <label for="datetime-local">date end</label>
                                <input id="datetime-local" class="form-control" name="date_end" type="datetime-local" />
                            </div>
                            <div class="form-group">
                                <label>profit</label>
                                <input type="text" class="form-control" name="profit" maxlength="3">
                            </div>

                            <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </section>
            </div>

            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        All Existing Billeteras<br>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-condensed">
                                <style type="text/css">
                                th,
                                td { 
                                    width: 100px;
                                    word-wrap: break-word;
                                }
                                </style>
                                <tbody>
                                    <?php
                                            $row = ApuestaAdmin::getAll();
                                            $num = count($row); ?>
                                    <?php if($num > 0) { ?>
                                    <?php for($i=0;$i<count($row);$i++){ ?>
                                    <tr>
                                        <td><?php echo $row[$i]['id']; ?></td>
                                        <td><?php echo $row[$i]['codigo']; ?></td>
                                        <td><?php echo $row[$i]['title']; ?></td>
                                        <td><?php echo $row[$i]['team']; ?></td>
                                        <td><?php  $img = base64_encode($row[$i]['teamimgblob']);    echo '<img style="max-width: 30% !important;" src="data:image/jpeg;base64,'.$img.'" alt="..."/>' ?>
                                        </td> 
                                        </td>
                                        <td><?php echo $row[$i]['profit']; ?></td>
                                        <td><?php echo $row[$i]['date_hour_start']; ?></td>
                                        <td><?php echo $row[$i]['date_hour_end']; ?></td>
                                        <td>
                                            <a
                                                href="http://localhost/adminpan/apuestaddhtml/edit/<?php echo $row[$i]['id']; ?>"><i
                                                    style="padding-top: 5px; color:green;" class="fa fa-edit"></i></a>
                                        </td>
                                        <td><a
                                                href="http://localhost/adminpan/apuestaddhtml/delete/<?php echo $row[$i]['id']; ?>"><i
                                                    style="padding-top: 4px; color:red;" class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </header>
                </section>
            </div>
            <?php
				}
			?>
        </div>
        <?php
			include_once "includes/footer.php";
			include_once "includes/script.php";
		?>