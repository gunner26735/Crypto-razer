<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/donation.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;700;900&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/binjay" rel="stylesheet">
</head>

<body>

    <header>
        <h1><a href="./afterindex.php">cryptorazer.</a></h1>
        <nav>
            <ul>
                <li><a href="../User/index.html">Logout</a></li>
                <li><a href="#" onclick="Checkout()">Your Profile</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="card" id="card">
            <div class="card1">
                <div class="shape">

                </div>
                <table>
                    <tr>
                        <td>Welcome <?php echo($_SESSION['uname']); ?></td>
                    </tr>
                    <tr>
                        <td href="#">Your Donations</td>
                        <td>0.00
                            <td>
                    </tr>
                    <tr>
                        <td href="#">Your Organization</td>
                        <td>N/A
                            <td>
                    </tr>
                </table>
                <div class="cta">
                    <a href="./index.html">Return</a>
                </div>
            </div>
        </div>
    </section>


    <script src="" async defer></script>
</body>

</html>