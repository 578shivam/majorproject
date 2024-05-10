<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color:black;
        overflow: hidden auto;
    }

    .flex {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
    }

    .flex h1 {
        font-size: 2rem;
        color: rgb(241, 14, 14);
    }

    .list a {
        text-decoration: none;
        margin: 1.4rem;
        color: white;
        margin-right: 3rem;
    }

    .list a::before {
        content: "";
        width: 0px;
        height: 4px;
        background-color: red;
        position: absolute;
        top: 60px;
    }

    .list a:hover::before {
        width: 69px;
        transition: 0.4s;
    }

    .btn {
        width: 110px;
        height: 40px;
        border-radius: 20px;
        background-color: red;
        border: none;
        color: white;
    }

    .btn:hover {
        background-color: white;
        color: black;
        transition: 0.4s;
        cursor: pointer;
    }

    .main {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .flex-1{
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin-top: 40px;
    }
    .text h1{
        font-size: 5rem;
        color: red;
        font-weight: bolder;
    }
    .text p{
    width: 37rem;
    color: white;
    font-size: 2rem;
    margin: 32px 0px;
    }
    .imagebody img {
        width: 300px;
    }
    .btn-1 {
        width: 110px;
        height: 40px;
        border-radius: 20px;
        background-color: red;
        border: none;
        color: white;
    }

    .btn-1:hover {
        background-color: white;
        color: black;
        transition: 0.4s;
        cursor: pointer;
    }
    .textproram h1{
        text-align: center;
        margin-top: 15rem;
        color: white;
    }
    .textproram::after{
        content: "";
    width: 140px;
    height: 3px;
    background-color: red;
    position: absolute;
    left: 43rem;
    }
    .flex-2{
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin-top: 40px;
    }
    .dance img{
        width: 300px;
        filter: grayscale(1);
        box-shadow: 3px 3px 1px #ccc;

    }
    .dance img:hover{
        filter: grayscale(0);
        transition: 0.4s;
        transform: scale(1.1);
        cursor: pointer;
    }
    .dance h1{
        color: white;
        font-size: 2rem;
        position: relative;
        bottom: 55px;
        text-align: center;
    }
    
    .textbig{
        text-align: center;
        margin-top: 15rem;
        color: white;
    }
    .textbig::after{
    content: "";
    width: 140px;
    height: 3px;
    background-color: red;
    position: absolute;
    left: 43rem;
    top: 105rem;
    }
    .flex-3{
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin-top: 5rem;
    }
    .plan{
        width: 350px;
        height: 500px;
        background: rgb(17, 16, 16);
        padding: 20px;
        text-align: center;
        border-radius: 20px;
    }
    .plan i{
        color: white;
        font-size: 3rem;
        margin: 20px;
    }
    .plan h2{
        color: red;
        font-weight: bold;
    }
    .plan h1{
        font-size: 2rem;
        color: red;
    }
    .plan p{
        margin: 2.4rem;
        color: white;
    }
    .buy{
        width: 110px;
        height: 40px;
        border-radius: 20px;
        background-color: red;
        border: none;
        color: white;
    }

    .buy:hover {
        background-color: white;
        color: black;
        transition: 0.4s;
        cursor: pointer;
    }
    
    .blog{
        text-align: center;
        margin-top: 15rem;
        color: white;
    }
    .blog::after{
        content: "";
    width: 117px;
    height: 3px;
    background-color: red;
    position: absolute;
    left: 44rem;
    top: 158rem;
    }
    .row{
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
    .flex-4{
        height: 450px;
        width: 400px;
        text-align: center;
        background-color: white;
        margin-top: 5rem;
    }
    .flex-4 img{
      width: 400px;
    }
    .flex-4 h1{
        margin: 10px 0px;
    }
    .flex-4 p{
        padding: 20px;
        line-height: 20px;
    }
    .btb-2{
        width: 100px;
        background-color: red;
        height: 30px;
        color: white;
        margin-top: 20px;
        cursor: pointer;
        border: none;
    }
    .contacts h1{
        text-align: center;
        color: white;
        margin-top: 10rem;
    }
    .flex-5{
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        margin-top: 10rem;
    }
    .flex-5 h1{
        color: red;
        font-size: 4rem;
        font-weight: bold;
    }
    .like img{
        width: 400px;
    }
    .connect{
    text-align: center;
    padding: 19px 112px;
}
.connect .data{
    border: 2px solid red;
    width: 400px;
    height: 240px;
    padding: 12px;
    margin-left: 32%;
    margin-top: 22px;

}
.data input{
    width: 300px;
    height: 38px;
    padding: 11px;
    font-size: 20px;
   margin-top: 22px;
   border: none;
   outline: none;
   border-radius: 2px;
}
.data button{
    width: 320px;
    height: 45px;
    border: none;
    background-color: red;
    color: white;
    font-size: 25px;
    border-radius: 2px;
    margin-top: 22px;
    cursor: pointer;
    margin-top: 5rem;
}
.data button:hover{
    border: 2px solid white;
    background-color: transparent;
    transition: 0.4s;
   
}
.height_vh{
    background-color: rgb(50, 48, 48);
    color: white;
    height: 30vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.contemt i{
    margin: 1.4rem;
    font-size: 2rem;
    cursor: pointer;
    transition: 0.4s;
    animation: zoom1 4s;
}
@keyframes zoom1{
    from{
        transform: scale(0);
        opacity: 0;
    }
    to{
        transform: scale(1.1);
        opacity: 1;
    }
}
.contemt i:hover:nth-child(1){
    color:#1877F2;
}
.contemt i:hover:nth-child(2){
    color:#1DA1F2;
}
.contemt i:hover:nth-child(3){
    color:#FF0000;
}
.contemt i:hover:nth-child(4){
    color: #ee2a7b;
}

</style>

<body>
    <nav>
        <div class="flex">
            <h1>GYM  <span style="color: white;">  LOGO</span></h1>
            <div class="list">
                <a href="#" id="homes" onclick="homes()">Home</a>
                <a href="#" id="pros" onclick="pro()">Program</a>
                <a href="#" id="plans" onclick="plans()">Paln</a>
                <a href="#" id="blogs" onclick="blogs()">blog</a>
                <button class="btn">Join</button>
            </div>
        </div>
    </nav>
    <header>
        <div class="flex-1">
            <div class="text" data-aos="fade-right">
            <h1>Commit To be fit</h1>
            <p>The modern concept of the gym, where gymnasiums served as centers for
                physical education and training.
            </p>
            <button class="btn-1">Join Now</button>
            </div>
            <div class="imagebody">
                <img src="header.png" alt="" data-aos="fade-left">
            </div>
        </div>
    </header>
    <section>
        <div class="textproram">
            <h1>Our Program</h1>
        </div>
        <div class="flex-2">
        <div class="dance">
            <img src="dance.jpeg" alt="Yogo">
            <h1>Yogo</h1>
        </div>
        <div class="dance">
            <img src="traing.jpg" alt="gym">
            <h1>gym training</h1>
        </div>
        <div class="dance">
            <img src="heavy-1.jpg" alt="Hearvy">
            <h1>heavy weight </h1>
        </div>
        </div>
    </section>
    <section>
        <h1 class="textbig">Our plan</h1>
     <div class="flex-3" data-aos="zoom-out">
        <div class="plan">
            <i class="fa-solid fa-dumbbell"></i>
            <h2>Baic Package</h2>
            <h1>30 Day in $10</h1>
            <p>No Personal</p>
            <p>valid for 30 days</p>
            <p>full day valid</p>
            <p> no join exerices</p>
           <a href="scan.php"><button class="buy">buy</button></a>
        </div>
        <div class="plan">
            <i class="fa-solid fa-dumbbell"></i>
            <h2>Baic Package</h2>
            <h1>60 Day in $50</h1>
            <p>No Personal</p>
            <p>valid for 30 days</p>
            <p>full day valid</p>
            <p> no join exerices</p>
            <a href="scan.php"><button class="buy">buy</button></a>
        </div>
        <div class="plan">
            <i class="fa-solid fa-dumbbell"></i>
            <h2>Baic Package</h2>
            <h1>2 year in $1100</h1>
            <p>No Personal</p>
            <p>valid for 30 days</p>
            <p>full day valid</p>
            <p> full day join exerices</p>
            <a href="scan.php"><button class="buy">buy</button></a>
        </div>
     </div>
    </section>
    <section>
        <h1 class="blog">blog</h1>
        <div class="row">
        <div class="flex-4">
            <img src="abs.jpg" alt="">
            <h1>How to Make Abs ?</h1>
            <p>"For a complete abs workout, try plank, Russian twists, leg raises, crunches, cable crunches, and hanging leg raises at the gym."<br>
        <button class="btb-2" onclick="abs()">watch</button>
            </p>
        </div>
        <div class="flex-4">
            <img src="strong1.jpg" alt="">
            <h1>How to Make strong muscles?</h1>
            <p>"Build strong muscles with gym workouts focusing on abs, arms, legs, chest, back, and shoulders...back muscles body"
                <br>
        <button class="btb-2" onclick="strong()">watch</button>
            </p>
        </div>
        <div class="flex-4">
            <img src="boxing.jpg" alt="">
            <h1>How to Make strength boxing?</h1>
            <p>"Enhance strength and endurance through boxing workouts, focusing on punches, footwork, agility, and core stability."
                <br>
        <button class="btb-2" onclick="boxing()">watch</button>
            </p>
        </div>
        </div>
    </section>
    <article data-aos="fade-right">
        <div class="flex-5">
            <h1>Let GO...<br>
                <span style="color: white;">
            Start your journey now</span></h1>
        <div class="like">
            <img src="like.png" alt="like">
        </div>
        </div>
        <div class="contacts">
            <h1> Contact Us</h1>
         </div>
         <div class="connect" data-aos="zoom-in">
            <div class="data">
                    <a href="login.php"><button type="submit">Login</button></a>
                </form>
            </div>
        </div>
    </div>
    </article>
    <footer>
        <div class="height_vh">
            <div class="contemt">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-instagram" onclick="instagram()"></i>
        <p>&copy; 2024 My Website. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script>
        function submit(){
            alert("succesfully!!");
        };
        function program(){
    document.getElementById("pros").classList.add("active");
    document.getElementById("homes").classList.remove("active");
    document.getElementById("plans").classList.remove("active");
    document.getElementById("blogs").classList.remove("active");
}

function homes(){
    document.getElementById("homes").classList.add("active");
    document.getElementById("pros").classList.remove("active");
    document.getElementById("plans").classList.remove("active");
    document.getElementById("blogs").classList.remove("active");
}

        function abs(){
        let url="https://youtu.be/MyA_uF64cWg?si=U1vQ79IRT3xy81O2";
        window.open(url);
        };
         function strong(){
        let url="https://youtu.be/1y2pbhUCy28?si=nn1QJNQXwq6tcawc";
        window.open(url);
        };
         function boxing(){
        let url="https://youtu.be/DviZkUHitHs?si=r1mJdLF4ngMAVeeL";
        window.open(url);
        };
        function instagram(){
            let url="https://www.instagram.com/blacksgym_saket/?hl=en";
            window.open(url);
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

</body>

</html>