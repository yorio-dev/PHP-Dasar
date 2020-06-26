<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna {
            background-color: black;
        }
    </style>
</head>
<body>
<table border = "1">
    <?php for ($i=1; $i <=10; $i++) { ?>
    <tr>
        <?php for ($j=1; $j <=10; $j++) { ?>
            <td <?php if ( $i % 2 == 1 xor $j % 2 == 0 ) { ?> class="warna"
            <?php } ?>>
                <?php echo "$i,$j " ?>
            </td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>

</body>
</html>







<!-- <?php

for ($i=1; $i <=10; $i++)
{
   for ($j=1; $j <=10; $j++)
   {
    echo "$i,$j ";
    
   } 
   echo "<br />";
   
}
?> -->