<?php
$phpReleaseDate = new DateTime("1995-06-08");
# DateTime() give the current date back!

$phpAge = $phpReleaseDate->diff(new DateTime());
?>

<!doctype html>
<html lang="en">
<?php require 'includes/head.php'; ?>

<body>
    <?php require 'includes/menu.php'; ?>
    <div class="container">
        <h1>Learning PHP</h1>
        <p>Welcome to the <strong>Learning PHP</strong> home page!</p>
        <p>Select a link above to start learning. about a language with <?= $phpAge->y ?> years of heritage!</p>
    </div>

</body>

</html>