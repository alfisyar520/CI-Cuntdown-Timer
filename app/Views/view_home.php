<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <link rel="stylesheet" href="<?=base_url('css/style.css')?>">
    <link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.min.css')?>">
    <script src="js/script.js" defer></script>
</head>
<body>

    <div class="container-center text-white">
        <h1>IDUL FITRI</h1>
        <div class="countdown-container text-white">

            <div class="countdown-el days-c">
                <p class="big-text" id="days">0</p>
                <span>days</span>
            </div>
            <div class="countdown-el hours-c">
                <p class="big-text" id="hours">0</p>
                <span>hours</span>
            </div>
            <div class="countdown-el mins-c">
                <p class="big-text" id="mins">0</p>
                <span>mins</span>
            </div>
            <div class="countdown-el seconds-c">
                <p class="big-text" id="seconds">0</p>
                <span>seconds</span>
            </div>
        </div>
    </div>
</body>
</html>
