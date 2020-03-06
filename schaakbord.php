<!DOCTYPE html>
<head>
</head>
<style>
.white {
    background-color: #ffffff;
    width: 100px;
    height: 100px;
}

.black {
    background-color: #000000;
    width: 100px;
    height: 100px;
}

tr {
    border-style: solid;
}

</style>
<body>
<table>
<?php

for ($tr = 0; $tr <= 8; $tr++) {
    echo "<tr>";
    for ($td = 0; $td <= 8; $td++) {
        if ($td % 2 == 0 && $tr % 2 == 0 || $tr % 2 == 1  && $td % 2 == 1){
            echo "<td class='white'></td>";
        } 
        else {
            echo "<td class='black'></td>";
        }
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>