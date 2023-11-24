<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="result.php" method="GET">
    <input type="number" name="price" placeholder="cena proizvoda">
    <select name="option">
        <option value="hrana">Hrana</option>
        <option value="oprema">Oprema za racunare</option>
    </select>
    <input type="checkbox" name="vat" value="yes">
    <button type="submit">Izracunaj cenu</button>
</form>

</body>
</html>