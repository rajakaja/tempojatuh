        <div id="page-wrapper">
            <?php
                if (!$p) {
                    include 'dashboard.php';
                } else {
                    include("$p.php");
                }
            ?>
            