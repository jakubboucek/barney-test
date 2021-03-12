<?php

declare(strict_types=1);

?>
<!doctype html>

<html lang="cs">
<head>
    <meta charset="utf-8">
    <title>Stránka A</title>
</head>

<body>
<h1>Stránka A</h1>
<p>Uložení do DB</p>
<form>
    <table>
        <tr>
            <td>
                <label for="name">Jméno:</label>
            </td>
            <td>
                <input type="text" name="name" id="name">
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">E-mail:</label>
            </td>
            <td>
                <input type="text" name="email" id="email">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Odeslat">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
