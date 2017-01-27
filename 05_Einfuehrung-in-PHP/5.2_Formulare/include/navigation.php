<?php

//defaulting $activeNav
$activeNav = $activeNav ?? "home";
?>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse mb-4">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">ISP</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo isActiveNavigation($activeNav, "home", "list"); ?>">
                <a class="nav-link" href="/">Home<?php echo isActiveNavigation($activeNav, "home", "screenreader");
                ?></a>
            </li>
            <li class="nav-item <?php echo isActiveNavigation($activeNav, "get", "list"); ?>">
                <a class="nav-link" href="get.php">GET<?php echo isActiveNavigation($activeNav, "get", "screenreader");
                ?></a>
            </li>
            <li class="nav-item <?php echo isActiveNavigation($activeNav, "post", "list"); ?>">
                <a class="nav-link" href="post.php">POST<?php echo isActiveNavigation($activeNav, "post", "screenreader");
                ?></a>
            </li>
        </ul>
    </div>
</nav>