<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="odometer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;700;900&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/binjay" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.0/web3.min.js" integrity="sha512-C63V0mFzwl8KV2fRz0QJNKX0d9877urOLSUq5WUq8nUOhDl69hKdGr9mAvl57k47GNjqEMAtiufsvDnk7xs8+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<body>

    <header>
        <h1><a href="./index.html">CryptoRazers.</a></h1>
        <nav>
            <ul>
                <li><a href="User/logout.php">Logout</a></li>
                <li><a href="donation.php">Your Profile</a></li>
            </ul>
        </nav>
    </header>

    <script>
        const {
            createConnection
        } = require('mysql');
        
        const connection = createConnection({
            host : 'localhost',
            user : 'root',
            password : '',
            database : 'crypto_razer',
        });
        
        connection.query('select * from donor', (err, result, fields) =>{
            if(err){
                return console.log(err);
            }
            return console.log(result);
        });

    </script>


    <section>
        <div class="right" id="right">
            <div class="card">
                <table>
                    <tr>
                        <td>Trinity Pvt. Ltd.</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td href="#">Donterm.</td>
                        <td>8
                            <td>
                    </tr>
                    <tr>
                        <td href="#">Cospray Pvt.</td>
                        <td>1
                            <td>
                    </tr>
                    <tr>
                        <td href="#">Gosling Marketing</td>
                        <td>7
                            <td>
                    </tr>
                    <tr>
                        <td href="#">Nuine Co.</td>
                        <td>4
                            <td>
                    </tr>
                    <tr>
                        <td href="#"></td>
                        <td>
                            <td>
                    </tr>
                    <tr>
                        <td href="#"></td>
                        <td>
                            <td>
                    </tr>
                    <tr>
                        <td href="#"></td>
                        <td>
                            <td>
                    </tr>
                    <tr>
                        <td href="#"></td>
                        <td>
                            <td>
                    </tr>
                    <tr>
                        <td href="#"></td>
                        <td>
                            <td>
                    </tr>
                    <tr>
                        <td href="#"></td>
                        <td>
                            <td>
                    </tr>
                    <tr>
                        <td href="#"></td>
                        <td>
                            <td>
                    </tr>
                    <tr>
                        <td href="#"></td>
                        <td>
                            <td>
                    </tr>
                </table>

            </div>
            <div class="frame">

            </div>
        </div>
        <div class="left" id="left">
            <h1 class="textbkg">Community</h1>
            <h1>Over&nbsp;&nbsp;<b class="count">0</b>
                <BR>We Have Raised!
                <BR><i>Be Part of a Community.</i></h1>
            <div class="cta" id="cta">
                <a href="#">DONATE NOW</a>
            </div>
        </div>
    </section>

    <?php
    $localhost="127.0.0.1";
    $user="root";
    $pass="";
    $database="crypto_razer";
    $con=mysqli_connect($localhost,$user,$pass,$database);
    if(!$con)
    {
        die("Connection Failed :".mysqli_connect_error());
    }

    $show_orgs = "select * from organization ";
    $result = mysqli_query($con,$show_orgs);
    
    ?>

    <section class="scnd" id="scnd">
        
    <?php while($row = mysqli_fetch_array($result))
        {
        echo "<div class='card text-left'>
            <div class='frame'>
            </div>
            <img class='card-img-top' src='holder.js/100px180/' alt=''>
            <div class='card-body'>
                <h4 class='card-title'>$row[0]</h4>
                <p class='card-text'>Need an Amount: <b>$row[2] ETH</b></p>
                <p class='card-text' id='raised'>We raised: <b>$row[3] ETH</b></p>
            </div>
            <a href='organzation.php?p=$row[7]'>DONATE</a>
        </div>";
        }
            ?>
    </section>

    <section class="contact" id="contact">
        <h1>Contact</h1>
        <h1 class="textbkg">CONTACT</h1>
        <div class="shape">

        </div>

        <form>
            <input type="text" id="userName" name="userName" placeholder="Username">
            <input type="email" id="email" name="email" placeholder="Email address" required>
            <input type="text" id="textarea" name="message" placeholder="Type Message..." required>
            <input type="submit" name="submit" value="Send">
        </form>
        <h3>Need a Donation?&nbsp;<a href="mailto:xyz123@gmail.com">truesaversdonations@gmail.com</a></h3>
    </section>


    <script src="odometer.js"></script>
    <script>
        const subsOdometer = document.querySelector(".count");

        const odometer = new Odometer({
            el: subsOdometer,
        });

        odometer.update(14674);
    </script>
    <script>
        $("#cta").click(function() {
            $('html, body').animate({
                scrollTop: $("#scnd").offset().top
            }, 1000);
        });
    </script>
</body>

</html>