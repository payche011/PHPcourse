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
        <li><a href="<?php echo $navigation[0]['link']; ?>"><?php echo $navigation[0]['label']; ?></a></li>
        <li><a href="<?php echo $navigation[1]['link']; ?>"><?php echo $navigation[1]['label']; ?></a></li>
        <li><a href="<?php echo $navigation[2]['link']; ?>"><?php echo $navigation[2]['label']; ?></a></li>
    </ul>
</nav>

<footer>
    <p>Copyright &copy; mojsajt <?php echo $current_year; ?></p>
</footer>

</body>
</html>
