<!doctype html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/menu.php' ?>

    <div class="container">
        <h1>PHP Summary</h1>
        <?php
        printf('You are running PHP Version %s', phpversion());
        echo "<h4>Loaded Extensions</h4>";
        $ext = get_loaded_extensions();
        var_dump($ext);

        echo '<h4>Server Environment</h4>';
        var_dump($_SERVER);

        # the following keys contains informations about the client making the request
        # against the server
        # REMOTE_ADDR, HTTP_REFERER, HTTP_USER_AGENT
        echo "<h4>Client's Request</h4>";
        $clientRequest = [
            'ip' => $_SERVER['REMOTE_ADDR'],
            'ref' => $_SERVER['HTTP_REFERER'],
            'ag' => $_SERVER['HTTP_USER_AGENT'],
            'ts' => date("Y-m-d h:i:s", time()),
        ];
        var_dump($clientRequest);

        echo '<h4>Global Variables and Values</h4>';
        var_dump($GLOBALS);
        echo $_SERVER['SCRIPT_FILENAME'];
        ?>



    </div>
    <?php include 'includes/footer.php' ?>
</body>

</html>