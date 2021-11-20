<?php 
require_once ("calender.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
</head>
<body>
    <h1><?php echo $current_year_month; ?></h1>

    <table>
            
        <tr>
            <td>日</td>
            <td>月</td>
            <td>火</td>
            <td>水</td>
            <td>木</td>
            <td>金</td>
            <td>土</td>
        </tr>
        <tr>
            <?php foreach ($days as $day) {?>
                
                <td><?php echo $day->format('d'); ?></td>

                <?php if($day->format('w') == 6) { ?>
                    </tr>
                    <tr>
                <?php } ?>
                
            <?php } ?>
        </tr>
    </table>
</body>
</html>
