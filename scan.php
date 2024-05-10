<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    body{
        background-image: url(muscular-young-man-lifting-weights-black-background.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    h1{
        text-align: center;
        color: red;
        font-size: 3rem;
        font-weight: 900;
        font-family: Arial, Helvetica, sans-serif;
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .scan img{
        width: 400px;
    }
    .scan{
        text-align: center;
        font-size: 2rem;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: red;
    }
    .moneu img{
        width: 300px;

    }
    .locatio i{
        font-size: 3rem;
        color: white;
        text-align:center;
        display: block;
        cursor: pointer;
    }
    .locatio i:hover{
        transition: 0.4s;
        color: red;
    }
    .locatio p{
        font-size: 2rem;
        text-align: center;
        color: white;
    }
    .locatio p:hover{
        transition: 0.4s;
        color: red;
        cursor: pointer;
    }
    .scan i{
        font-size: 2rem;
        color: green;
    }
    .scan p{
        font-size: 2rem;
        color: red;
    }
    .scan span{
        font-size: 2rem;
        color: red;
    }
</style>
<body>
    <h1>Paytment</h1>
    <div class="container">
        <div class="scan">
            <img src="sanner.jpg" alt="scanner">
            <h3>shivam</h3>
            <i class="fa-brands fa-whatsapp"></i>
            <p>701170916</p>
            <span> whatsapp screenshot send </span>
            <div class="moneu">
                <img src="money.png" alt="">
            </div>
        </div>
    </div>
    <div class="locatio">
    <i class="fa-solid fa-location-dot" onclick="scan()"></i>
    <p onclick="scan()">Black’s gym, H252+V4W, Kanganheri Rd, Chhawla, Delhi, 110071</p>
    </div>
    <script>
         function scan(){
        let url="https://maps.app.goo.gl/PiQSpyKpL5FbbxqY9";
        window.open(url);
        };
    </script>
</body>
</html>