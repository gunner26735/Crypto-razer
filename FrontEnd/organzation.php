<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./organization.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;700;900&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/binjay" rel="stylesheet">
</head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.0/web3.min.js" integrity="sha512-C63V0mFzwl8KV2fRz0QJNKX0d9877urOLSUq5WUq8nUOhDl69hKdGr9mAvl57k47GNjqEMAtiufsvDnk7xs8+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<body>

    <?php
    $w_id = $_REQUEST["p"]; 
    echo($w_id);
    $localhost="127.0.0.1";
    $user="root";
    $pass="";
    $database="crypto_razer";
    $con=mysqli_connect($localhost,$user,$pass,$database);
    if(!$con)
    {
        die("Connection Failed :".mysqli_connect_error());
    }

    $show_orgs = "select * from organization where id = $w_id";
    $result = mysqli_query($con,$show_orgs);
    $row = mysqli_fetch_array($result)
    ?>


    <div class="card">
        <a href="../afterindex.html">CryptoRaisers.</a>
        <div class="shape">

        </div>
        <h1><?php echo($row[0]); ?></h1>
        <p><?php echo($row[1]); ?></p>
        <form method="GET">
            <input type="text " id="walletAddress" name="organization" value=<?php echo($row[5]); ?> readonly>
            <input type="number" id="amount1" name="amount" placeholder="Enter Ethereum">    
            <input type="submit" onclick="send()" id="deposit" name="submit " value="Donate" />
        </form>
    </div>

    <?php  
     //   $amt = $_GET['amount'];
      //  $update_fund = "update organization set fund_raised = fund_raised + $amt where id = $w_id";
      //  $result = mysqli_query($con,$update_fund);
    ?>

    <script>
        var contract;
        $(document).ready(function()
        {
            web3 = new Web3(web3.currentProvider);

            var address = "0xa89dd8A01D09565623AF716D074069cF68F1E9a1";
            var abi = [
            {
                "inputs": [
                    {
                        "internalType": "address payable",
                        "name": "_to",
                        "type": "address"
                    },
                    {
                        "internalType": "uint256",
                        "name": "_value",
                        "type": "uint256"
                    }
                ],
                "name": "sendViaSend",
                "outputs": [],
                "stateMutability": "payable",
                "type": "function"
            },
            {
                "stateMutability": "payable",
                "type": "receive"
            }
        ];

            contract = new web3.eth.Contract(abi,address);
            console.log("Fine");

            if(window.ethereum){
                web3 = new Web3(window.ethereum);
                ethereum.enable();
            }else if(window.web3){
                web3 = new Web3(web3.currentProvider);
            }
        })

        function send()
        {
            console.log('INSIDE');
            var amt = 0;
            amt = $('#amount1').val();

            amt = amt * 1000000000000000000;


            var receiver_add = $('#walletAddress').val();
            //sender = "0xc91a35AF656EA0329aEbB38fc618c4177b96142c";
            console.log(amt);
            console.log(receiver_add);


            web3.eth.getAccounts().then(function(accounts)
            {
                var acc = accounts[0];
                console.log(accounts[0]);
                //return contract.methods.sendViaSend(receiver_add,amt).send({from:acc});
                
                return web3.eth.sendTransaction({ from: acc, to: receiver_add, value: amt });
            }).then(function(tx){
                console.log(tx);
            }).catch(function(tx){
                console.log(tx);
            })
            web3.eth.getBalance("0xc91a35AF656EA0329aEbB38fc618c4177b96142c").then(console.log);
        }

        

    </script>


</body>

</html>