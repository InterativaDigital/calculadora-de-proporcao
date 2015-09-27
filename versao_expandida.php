<?php
$a = $b = $c = $d = null;
$p = $_POST;

if (!empty($p) && count(array_filter($p['v'])) > 2)
{
    $pv = $p['v'];
    $a = $pv[0];
    $b = $pv[1];
    $c = $pv[2];
    $d = $pv[3];

    if (!$d)
    {
        $d = ($b * $c) / $a;
    }
    elseif (!$a)
    {
        $a = ($b * $c) / $d;
    }
    elseif (!$b)
    {
        $b = ($a * $d) / $c;
    }
    elseif (!$c)
    {
        $c = ($a * $d) / $b;
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        *
        {
            text-align: center;
            color: #BCB5A1;
            font-variant: small-caps;
            margin: auto
        }

        body, input
        {
            background-color: #1A1617
        }

        input
        {
            border: 1px dotted #BCB5A1;
            padding: 5px
        }

        input[type=submit]
        {
            cursor: pointer;
            border-style: solid
        }

        h1, p, table
        {
            margin-bottom: 15px
        }
    </style>
</head>
<body>
<form method="post">
    <h1>Calculadora de Proporção</h1>
    <p>Preencha três dos campos abaixo com números</p>
    <table>
        <tr>
            <td><input type="text" name="v[]" value="<?php echo $a ?>"></td>
            <td rowspan="2">=</td>
            <td><input type="text" name="v[]" value="<?php echo $b ?>"></td>
        </tr>
        <tr>
            <td><input type="text" name="v[]" value="<?php echo $c ?>"></td>
            <td><input type="text" name="v[]" value="<?php echo $d ?>"></td>
        </tr>
    </table>
    <input type="submit" value="Calcular"></form>
</body>
</html>
