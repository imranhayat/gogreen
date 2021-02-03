<?php
include('admin/include/config.php');
include('class/PlantedTrees.php');
$PTrees = new PlantedTrees();
$message =  $PTrees->addrecord();
include('include/header.php');
?>
    <title>Go Green System</title>
<?php include('include/container.php');?>
    <div class="container contact">
        <h2>Go Green System</h2>
        <div id="signupbox" class="col-md-7">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Add New Project Record</div>
                </div>
                <div class="panel-body" >
                    <form id="addtreeform" class="form-horizontal" role="form" method="POST" action="">
                        <?php if ($message != '') { ?>
                            <div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $message; ?></div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="projname" class="col-md-3 control-label">Project Name *</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="projectname" placeholder="Project Name" value="<?php if(!empty($_POST["projname"])) { echo $_POST["projname"]; } ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province" class="col-md-3 control-label">Province *</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="province" placeholder="Province" value="<?php if(!empty($_POST["province"])) { echo $_POST["province"]; } ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="district" class="col-md-3 control-label">District *</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="district" placeholder="District" value="<?php if(!empty($_POST["district"])) { echo $_POST["district"]; } ?>" required>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="city" class="col-md-3 control-label">City *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="city" placeholder="City" value="<?php if(!empty($_POST["city"])) { echo $_POST["city"]; } ?>" required>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="city" class="col-md-3 control-label">Purchased Trees *</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="purchasedtrees" placeholder="PurchasedTrees" value="<?php if(!empty($_POST["purchasetrees"])) { echo $_POST["purchasetrees"]; } ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="city" class="col-md-3 control-label">Planted Trees *</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="plantedtrees" placeholder="plantedTrees" value="<?php if(!empty($_POST["plantedtrees"])) { echo $_POST["plantedtrees"]; } ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="col-md-3 control-label">Area Covered *</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="areacovered" placeholder="areacovered" value="<?php if(!empty($_POST["areacovered"])) { echo $_POST["areacovered"]; } ?>" required>
                                    </div>
                                </div>



                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-signup" type="submit" name="addrecord" value="register" class="btn btn-info"><i class="icon-hand-right"></i>  Add Record</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">

                            </div>
                        </div>
                    </form>

            </div>

    </div>
<?php include('include/footer.php');?>