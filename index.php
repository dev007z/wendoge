<!DOCTYPE html>
<html>
<?php
$name = '$wendoge';
?>

<head>
    <meta charset="utf-8">
    <title><?php echo $name ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/app.css"> -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/images/logo.png">
</head>

<body>
    <header class="text-center">
        <div class="header-body text-center">
            <div class="top">
                <h1 class="logo-text "><?php echo $name ?></h1>
                <p class="text-uppercase framer-text fs-3">Powered by Base</p>
            </div>
            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-5" style="padding-bottom: -70px;">
                    <img src="./assets/images/logo.png" alt="logo" height="519" width="519" class="img-fluid">
                </div>
                <div class="col-xl-5 framer-text1 pt-3" style="align-self: center;">
                    <p class="text-white fs-5"><?php echo $name ?> is <span>the bridge</span></p>
                    <p class="text-white fs-3">between the canine and feline world</p>
                    <p class="text-white fs-5">on the <span>Base network</span></p>
                    <div class="row pt-3">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div class="button-shake text-center fs-5 px-4">
                                Buy <?php echo $name ?>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="row socials">
                                <div class="col ">
                                    <a href="#" class="p-2 social social-1">
                                        <img src="./assets/images/twitter.png" alt="Twitter" height="30px">
                                    </a>
                                </div>
                                <div class="col ">
                                    <a href="#" class="p-2 social social-2">
                                        <img src="./assets/images/telegram.png" alt="Telegram" height="30px">
                                    </a>
                                </div>
                            </div>
                            <div class="row socials">

                                <div class="col ">
                                    <a href="#" class="p-2 social social-4">
                                        <img src="./assets/images/uniswap.png" alt="Uniswap" height="30px">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#" class="p-2 social social-3">
                                        <img src="./assets/images/dexscreener.png" alt="Dexscreener" height="35px">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
                <div class="col-xl-1"></div>
            </div>
        </div>
    </header>
    <section id="tokenomics">
        <div class="wrapper">
            <div class="marquee"><?php echo $name ?></div>
        </div>
        <div class="body text-center text-white" style="background-color: black;height: min-content;padding: 110px 0 90px;overflow: hidden;">
            <h1 class="display-2">tokenomics</h1>
            <p class="fs-4">
                Dr. Whiskers made <span>100,000,000 tokens</span>, <br>
                just enough to go round for everyone
            </p>
            <div>

            </div>
            <div class="p-10">
                <div class="row ">
                    <div class="col-lg-6">
                        <div style="height: fit-content; width: fit-content;border-color:#d97051!important;" class="border border-5 rounded-4 text-center">
                            <img src="./assets/images/image.jpg" class="img-fluid rounded-3" height="658px" width="658px">
                        </div>
                    </div>
                    <div class="container col-lg-6 align-middle py-5 gap-3" style="justify-self: center;display:grid;">
                        <div class="container-fluid rounded-4 bg-white text-black p-2" style="height: fit-content;">
                            <p class="fs-3">Total Supply</p>
                            <p class="fs-3">1,000,000 $wendoge</p>
                        </div>
                        <div class="container-fluid rounded-4 bg-white text-black p-2" style="height: fit-content;">
                            <p class="fs-3">Token Address</p>
                            <p class="fs-3">$wendoge</p>
                        </div>
                    </div>
                </div>
                <div class="d-grid kreep">
                    <button class="btn btn-lg rounded-4 mt-4 button-shaker" style="background-color: #d97051;">
                        <span class="text-black">Buy $wendoge here</span>
                    </button>
                </div>
            </div>

        </div>
    </section>


    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>