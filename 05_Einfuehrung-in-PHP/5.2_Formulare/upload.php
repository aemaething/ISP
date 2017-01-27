<?php

$activeNav = "upload";

require_once "include/functions.php";
require_once "include/header.php";
require_once "include/navigation.php";

?>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <form method="POST" action="upload.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">Dateiauswahl</label>
                        <input type="file" class="form-control-file" id="file" aria-describedby="fileHelp"
                               name="userFile">
                        <small id="fileHelp" class="form-text text-muted">Wählen Sie eine Datei zum Upload aus.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Absenden</button>
                </form>
            </div>
            <div class="col-4">
                <?php require_once "include/comments.php"; ?>
            </div>
        </div>

        <?php if (array_key_exists("userFile", $_FILES)): ?> <!-- submit detected? -->
            <div class="row top-buffer">
                <div class="col-8">
                    <div class="alert alert-success" role="alert">
                        <strong>Datei-Upload Submit ausgeführt!</strong> &#9786;
                    </div>
                </div>
            </div>

            <?php
                $targetPath = sprintf(
                    "%s/upload_%s.%s",
                    sys_get_temp_dir(),
                    date("Y-m-d_H-i-s"),
                    pathinfo($_FILES["userFile"]["name"], PATHINFO_EXTENSION)
                );

                if (move_uploaded_file($_FILES["userFile"]["tmp_name"], $targetPath)):
            ?>

                <div class="row">
                    <div class="col-12">
                        <h5>Ihr Upload</h5>
                    </div>
                </div>
                <div>
                    <div class="col-8">
                        <dl class="row">
                            <dt class="col-sm-4">Dateiname (Client)</dt>
                            <dd class="col-md-8 text-warning"><?= $_FILES["userFile"]["name"]; ?></dd>
                            <dt class="col-sm-4">Dateiname (tempfile)</dt>
                            <dd class="col-md-8 text-success"><?= $_FILES["userFile"]["tmp_name"]; ?></dd>
                            <dt class="col-sm-4">Mimetype (Client)</dt>
                            <dd class="col-md-8 text-warning"><?= $_FILES['userFile']['type']; ?></dd>
                            <dt class="col-sm-4">Dateiname (after move)</dt>
                            <dd class="col-md-8 text-success"><?= $targetPath; ?></dd>
                            <dt class="col-sm-4">Dateigröße</dt>
                            <dd class="col-md-8 text-success"><?= $_FILES['userFile']['size']; ?></dd>
                        </dl>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php require_once "include/footer.php"; ?>