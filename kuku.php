<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kuku</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                for ($i = 1; $i < 10; $i++) { ?>
                <tr>
                    <td><?php echo $i ?></td> <!--〇〇の段の数字 -->
                
                    <?php for ($j = 1; $j < 10; $j++){ ?>
                        <?php $result = $i * $j ?>
                        <?php if ($result % 2 === 0) { ?>
                            <td style="background-color: green;">
                                <?php echo $result; ?> <!-- 〇〇の段の数字＊上の数字 -->
                            </td>
                        <?php } else { ?>
                            <td>
                                <?php echo $result; ?>
                            </td>
                        <?php } ?>

                    <?php } ?>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
