<?php 
    include 'database.php';
?>
<?php 
    $qu = "SELECT * FROM shouts";
    $shouts = mysqli_query($conn, $qu);
    print_r($shouts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>SHOUIT! Shoutbox</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>SHOUIT! Shoutbox</h1>
        </header>
        <div id="shouts">
            <ul>
            <?php while ($row = mysqli_fetch_assoc($shouts)) :?>
                <li class="shout">
                    <span><?php echo $row['time'] ?></span> - 
                    <strong><?php echo $row['user'] ?></strong>: 
                    <?php echo $row['message'] ?> 
                </li>
            <?php endwhile ?>
            </ul>
        </div>
        <div id="input">
            <form action="process.php" method="post">
                <input type="text" name="user" placeholder="Enter Your Name">
                <input type="text" name="msg" placeholder="Enter Your Message">
            </form>
            <input class="shout-btn" type="submit" name="submit" value="Shout it Out !">
        </div>
    </div>
</body>
</html>