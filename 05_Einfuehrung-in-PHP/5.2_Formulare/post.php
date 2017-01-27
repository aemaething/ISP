<?php

$activeNav = "post";

require_once "include/functions.php";
require_once "include/header.php";
require_once "include/navigation.php";

?>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <?php if (array_key_exists("data", $_POST)): ?>

                <?php endif; ?>
                <form method="POST" action="post.php">
                    <?php require_once "include/form-elements.php"; ?>
                </form>
            </div>
            <div class="col">
                <?php require_once "include/comments.php"; ?>
            </div>
        </div>

        <?php if (array_key_exists("data", $_POST)): ?>
            <div class="row top-buffer">
                <div class="col-8">
                    <div class="alert alert-success" role="alert">
                        <strong>POST -Submit ausgeführt!</strong> Es wurden Daten übertragen. &#9786;
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h5>Ihre Daten</h5>
                </div>
            </div>
            <div>
                <div class="col-8">
                    <dl class="row">
                        <?php foreach ($_POST["data"] as $name => $value): ?>
                            <dt class="col-sm-3"><?= $name; ?></dt>
                            <dd class="col-md-9"><?= htmlentities($value); ?></dd>
                        <?php endforeach; ?>
                    </dl>

                </div>
            </div>
        <?php endif; ?>
    </div>

<?php require_once "include/footer.php"; ?>