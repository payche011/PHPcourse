<?php


$site_title = 'Postani programer';
$navigation = [
    ['label' => 'Glavna', 'link' => 'home.php'],
    ['label' => 'O nama', 'link' => 'onama.php'],
    ['label' => 'Kontakt', 'link' => 'kontakt.php'],
];

$current_year = date('Y');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $site_title; ?></title>
</head>
<body>

<h1><?php echo $site_title; ?></h1>
<nav>
    <ul>
        <?php foreach($navigation as $item) : ?>
            <li>
                <a href="<?php echo $item['link']; ?>"><?php echo $item['label']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>

<footer>
    <p>Copyright &copy; mojsajt <?php echo $current_year; ?></p>
</footer>

</body>
</html>
