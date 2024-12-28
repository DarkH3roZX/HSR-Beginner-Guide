<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters</title>

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
        }

        h1 {
            font-family: 'Orbitron', Arial, sans-serif;
        }

        /* Menu Bar*/
        .menu {
            display: none;
            flex-direction: column;
            background-color: #301e67;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            z-index: 1000;
            padding-top: 8px; /* Adjust to leave space for the toggle button */
        }

        .menu a {
            text-decoration: none;
            color: white;
            padding: 15px;
            border-bottom: 1px solid #444;
        }

        .menu a:hover {
            background-color: #444;
        }

        .menu .menu-icon {
            padding-left: 15px;
            padding-bottom: 60px;
        }

        /* Navigation Bar Container */
        .navbar {
            background-color: #2f1a7a; /* Dark purple */
            padding: 0.5em 1em;
        }

        /* Navigation Links Container */
        .nav-links {
            display: flex;
            justify-content: center;
            background-color: #4c4b88; /* Medium purple */
            padding: 0.5em 0;
        }

        /* Individual Navigation Links */
        .nav-links a {
            color: white;
            text-decoration: none;
            margin: 0 1.5em;
            font-size: 1.2em;
            font-weight: 500;
            padding: 0 11em;
            text-align: center;
        }

        .nav-links a:hover {
            color: gray;
        }

        .currentView a {
            color: gray;
        }

        /* Hamburger Menu Icon */
        .menu-icon {
            display: inline-block;
            cursor: pointer;
        }

        .menu-icon div {
            width: 25px;
            height: 4px;
            background-color: black;
            margin: 4px 0;
        }

        .content {
            padding: 2em;
            color: white;
            background-color: black; /* Light gray background */
        }

        .bg {
            width: 1250px;
            height: 4000px;
            background: rgba(0,0,0,1);
            opacity: 1;
            position: absolute;
            top: 0px;
            left: 0px;
            overflow: hidden;

        }
        
        .content {
            position: absolute;
            font-size: 30px;
            color : white;
            z-index: 2;  /* Set a higher layer, so it is on top of .background */
        }

        .charlist {
            padding-top: 50px;
        }

        .name{
            position: absolute;
            font-size: 15px;
            color : white;
            z-index: 2;
            text-align: center;
        }

        .transparant{
            width: 250px;
            height: 325px;
            background: rgba(27,43,56,1);
            opacity: 0.6;
            position: absolute;
            overflow: hidden;
        }


        /*rarity*/
        .star5{
            width: 65px;
            height: 40px;
            background: url("../img/5Star.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .star4{
            width: 65px;
            height: 40px;
            background: url("../img/4Star.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }


        /*path*/

        .destruction{
            width: 40px;
            height: 40px;
            background: url("../img/destruction.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .preservation{
            width: 40px;
            height: 40px;
            background: url("../img/preservation.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .erudition{
            width: 40px;
            height: 40px;
            background: url("../img/erudition.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .nihility{
            width: 40px;
            height: 40px;
            background: url("../img/nihility.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .hunt{
            width: 40px;
            height: 40px;
            background: url("../img/hunt.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .harmony{
            width: 40px;
            height: 40px;
            background: url("../img/harmony.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .abundance{
            width: 40px;
            height: 40px;
            background: url("../img/abundance.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }


        /*element*/

        .physical{
            width: 40px;
            height: 40px;
            background: url("../img/physical.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .fire{
            width: 40px;
            height: 40px;
            background: url("../img/fire.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .ice{
            width: 40px;
            height: 40px;
            background: url("../img/ice.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .lightning{
            width: 60px;
            height: 60px;
            background: url("../img/lightning.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .imaginary{
            width: 40px;
            height: 40px;
            background: url("../img/imaginary.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .quantum{
            width: 40px;
            height: 40px;
            background: url("../img/quantum.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .wind{
            width: 40px;
            height: 40px;
            background: url("../img/wind.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        /*chars*/

        .fugue{
            width: 200px;
            height: 200px;
            background: url("../img/FUGUE.JPG");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .sunday{
            width: 200px;
            height: 200px;
            background: url("../img/SUNDAY.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .rappa{
            width: 200px;
            height: 200px;
            background: url("../img/RAPPA.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .feixiao{
            width: 200px;
            height: 200px;
            background: url("../img/FEIXIAO.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .lingsha{
            width: 200px;
            height: 200px;
            background: url("../img/LINGSHA.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .moze{
            width: 200px;
            height: 200px;
            background: url("../img/MOZE.jpeg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .yunli{
            width: 200px;
            height: 200px;
            background: url("../img/YUNLI.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .jiaoqiu{
            width: 200px;
            height: 200px;
            background: url("../img/JIAOQIU.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .march{
            width: 200px;
            height: 200px;
            background: url("../img/MARCH.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .firefly{
            width: 200px;
            height: 200px;
            background: url("../img/FIREFLY.jpeg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .jade{
            width: 200px;
            height: 200px;
            background: url("../img/JADE.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .robin{
            width: 200px;
            height: 200px;
            background: url("../img/ROBIN.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .hmc{
            width: 200px;
            height: 200px;
            background: url("../img/HARMONY_MC.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .boothill{
            width: 200px;
            height: 200px;
            background: url("../img/BOOTHIL.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .acheron{
            width: 200px;
            height: 200px;
            background: url("../img/ACHERON.jpeg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }


        .adventurine{
            width: 200px;
            height: 200px;
            background: url("../img/ADVENTURINE.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .gallagher{
            width: 200px;
            height: 200px;
            background: url("../img/GALLAGER.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .blackswan{
            width: 200px;
            height: 200px;
            background: url("../img/BLACK_SWAN.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .sparkle{
            width: 200px;
            height: 200px;
            background: url("../img/SPARKLE.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }

        .misha{
            width: 200px;
            height: 200px;
            background: url("../img/MISHA.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <!-- Hamburger Menu Icon -->
        <div class="menu-icon" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    
    <!-- Sidebar Menu-->
    <div class="menu" id="menu">
        <div class="menu-icon" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('characters') }}">Characters</a>
        <a href="{{ route('meta-current') }}">Meta</a>
        <a href="{{ route('warp-current') }}">Warp</a>
        <a href="{{ route('mistakes') }}">Beginner Mistakes</a>
        <a href="{{ route('about-us') }}">About Us</a>
    </div>

    <script>
        // JavaScript for toggling the menu
        function toggleMenu() {
            const menu = document.getElementById('menu');
            menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
        }
    </script>

    <div class="content" style="margin-top: 10px; padding-bottom: 10px; left: 25px;">
        <h1>CHARACTERS</h1>
    </div>

    <div class="charlist">
        <!--FIRST ROW-->
        <div class="transparant" style="top: 300px; left: 50px;"></div>
        <div class="fugue" style="top: 325px; left: 75px;"></div>
        <div class="name" style="top: 510px; left: 130px;">
            <h1>Fugue</h1>
        </div>
        <div class="fire" style="top: 575px; left: 95px;"></div>
        <div class="nihility" style="top: 575px; left: 150px;"></div>
        <div class="star5" style="top: 575px; left: 200px;"></div>


        <div class="transparant" style="top: 300px; left: 350px;"></div>
        <div class="sunday" style="top: 325px; left: 375px;"></div>
        <div class="name" style="top: 510px; left: 430px;">
            <h1>Sunday</h1>
        </div>
        <div class="imaginary" style="top: 575px; left: 395px;"></div>
        <div class="harmony" style="top: 575px; left: 450px;"></div>
        <div class="star5" style="top: 575px; left: 500px;"></div>


        <div class="transparant" style="top: 300px; left: 650px;"></div>
        <div class="rappa" style="top: 325px; left: 675px;"></div>
        <div class="name" style="top: 510px; left: 730px;">
            <h1>Rappa</h1>
        </div>
        <div class="imaginary" style="top: 575px; left: 695px;"></div>
        <div class="erudition" style="top: 575px; left: 750px;"></div>
        <div class="star5" style="top: 575px; left: 800px;"></div>

        
        <div class="transparant" style="top: 300px; left: 950px;"></div>
        <div class="feixiao" style="top: 325px; left: 975px;"></div>
        <div class="name" style="top: 510px; left: 1030px;">
            <h1>Feixiao</h1>
        </div>
        <div class="wind" style="top: 575px; left: 995px;"></div>
        <div class="hunt" style="top: 575px; left: 1050px;"></div>
        <div class="star5" style="top: 575px; left: 1100px;"></div>


        <!--SECOND ROW-->
        <div class="transparant" style="top: 700px; left: 50px;"></div>
        <div class="lingsha" style="top: 725px; left: 75px;"></div>
        <div class="name" style="top: 910px; left: 128px;">
            <h1>Lingsha</h1>
        </div>
        <div class="fire" style="top: 975px; left: 95px;"></div>
        <div class="abundance" style="top: 975px; left: 150px;"></div>
        <div class="star5" style="top: 975px; left: 200px;"></div>


        <div class="transparant" style="top: 700px; left: 350px;"></div>
        <div class="moze" style="top: 725px; left: 375px;"></div>
        <div class="name" style="top: 910px; left: 440px;">
            <h1>Moze</h1>
        </div>
        <div class="lightning" style="top: 965px; left: 395px;"></div>
        <div class="hunt" style="top: 975px; left: 450px;"></div>
        <div class="star4" style="top: 975px; left: 500px;"></div>


        <div class="transparant" style="top: 700px; left: 650px;"></div>
        <div class="yunli" style="top: 725px; left: 675px;"></div>
        <div class="name" style="top: 910px; left: 740px;">
            <h1>Yunli</h1>
        </div>
        <div class="physical" style="top: 975px; left: 695px;"></div>
        <div class="destruction" style="top: 975px; left: 750px;"></div>
        <div class="star5" style="top: 975px; left: 800px;"></div>


        <div class="transparant" style="top: 700px; left: 950px;"></div>
        <div class="jiaoqiu" style="top: 725px; left: 975px;"></div>
        <div class="name" style="top: 910px; left: 1030px;">
            <h1>Jiaoqiu</h1>
        </div>
        <div class="fire" style="top: 975px; left: 995px;"></div>
        <div class="nihility" style="top: 975px; left: 1050px;"></div>
        <div class="star5" style="top: 975px; left: 1100px;"></div>


        <!--THIRD ROW-->
        <div class="transparant" style="top: 1100px; left: 50px;"></div>
        <div class="march" style="top: 1125px; left: 75px;"></div>
        <div class="name" style="top: 1310px; left: 115px;">
            <h1>March 7th</h1>
        </div>
        <div class="imaginary" style="top: 1375px; left: 95px;"></div>
        <div class="hunt" style="top: 1375px; left: 150px;"></div>
        <div class="star5" style="top: 1375px; left: 200px;"></div>


        <div class="transparant" style="top: 1100px; left: 350px;"></div>
        <div class="firefly" style="top: 1125px; left: 375px;"></div>
        <div class="name" style="top: 1310px; left: 430px;">
            <h1>Firefly</h1>
        </div>
        <div class="fire" style="top: 1375px; left: 395px;"></div>
        <div class="destruction" style="top: 1375px; left: 450px;"></div>
        <div class="star5" style="top: 1375px; left: 500px;"></div>


        <div class="transparant" style="top: 1100px; left: 650px;"></div>
        <div class="jade" style="top: 1125px; left: 675px;"></div>
        <div class="name" style="top: 1310px; left: 740px;">
            <h1>Jade</h1>
        </div>
        <div class="quantum" style="top: 1375px; left: 695px;"></div>
        <div class="erudition" style="top: 1375px; left: 750px;"></div>
        <div class="star5" style="top: 1375px; left: 800px;"></div>


        <div class="transparant" style="top: 1100px; left: 950px;"></div>
        <div class="robin" style="top: 1125px; left: 975px;"></div>
        <div class="name" style="top: 1310px; left: 1040px;">
            <h1>Robin</h1>
        </div>
        <div class="physical" style="top: 1375px; left: 995px;"></div>
        <div class="harmony" style="top: 1375px; left: 1050px;"></div>
        <div class="star5" style="top: 1375px; left: 1100px;"></div>


        <!--FOURTH ROW AAAAHHHH-->
        <div class="transparant" style="top: 1500px; left: 50px;"></div>
        <div class="hmc" style="top: 1525px; left: 75px;"></div>
        <div class="name" style="top: 1710px; left: 100px;">
            <h1>Trailblazer</h1>
        </div>
        <div class="imaginary" style="top: 1775px; left: 95px;"></div>
        <div class="harmony" style="top: 1775px; left: 150px;"></div>
        <div class="star5" style="top: 1775px; left: 200px;"></div>


        <div class="transparant" style="top: 1500px; left: 350px;"></div>
        <div class="boothill" style="top: 1525px; left: 375px;"></div>
        <div class="name" style="top: 1710px; left: 430px;">
            <h1>Boothill</h1>
        </div>
        <div class="physical" style="top: 1775px; left: 395px;"></div>
        <div class="hunt" style="top: 1775px; left: 450px;"></div>
        <div class="star5" style="top: 1775px; left: 500px;"></div>


        <div class="transparant" style="top: 1500px; left: 640px;"></div>
        <div class="acheron" style="top: 1525px; left: 675px;"></div>
        <div class="name" style="top: 1710px; left: 720px;">
            <h1>Acheron</h1>
        </div>
        <div class="lightning" style="top: 1765px; left: 695px;"></div>
        <div class="nihility" style="top: 1775px; left: 750px;"></div>
        <div class="star5" style="top: 1775px; left: 800px;"></div>


        <div class="transparant" style="top: 1500px; left: 950px;"></div>
        <div class="adventurine" style="top: 1525px; left: 975px;"></div>
        <div class="name" style="top: 1710px; left: 1005px;">
            <h1>Adventurine</h1>
        </div>
        <div class="imaginary" style="top: 1775px; left: 995px;"></div>
        <div class="preservation" style="top: 1775px; left: 1050px;"></div>
        <div class="star5" style="top: 1775px; left: 1100px;"></div>

        <!--FIFTH ROW finally-->
        <div class="transparant" style="top: 1900px; left: 50px;"></div>
        <div class="gallagher" style="top: 1925px; left: 75px;"></div>
        <div class="name" style="top: 2110px; left: 110px;">
            <h1>Gallagher</h1>
        </div>
        <div class="fire" style="top: 2175px; left: 95px;"></div>
        <div class="abundance" style="top: 2175px; left: 150px;"></div>
        <div class="star4" style="top: 2175px; left: 200px;"></div>


        <div class="transparant" style="top: 1900px; left: 350px;"></div>
        <div class="blackswan" style="top: 1925px; left: 375px;"></div>
        <div class="name" style="top: 2110px; left: 400px;">
            <h1>Black Swan</h1>
        </div>
        <div class="lightning" style="top: 2165px; left: 395px;"></div>
        <div class="nihility" style="top: 2175px; left: 450px;"></div>
        <div class="star5" style="top: 2175px; left: 500px;"></div>


        <div class="transparant" style="top: 1900px; left: 640px;"></div>
        <div class="sparkle" style="top: 1925px; left: 675px;"></div>
        <div class="name" style="top: 2110px; left: 720px;">
            <h1>Sparkle</h1>
        </div>
        <div class="quantum" style="top: 2175px; left: 695px;"></div>
        <div class="harmony" style="top: 2175px; left: 750px;"></div>
        <div class="star5" style="top: 2175px; left: 800px;"></div>


        <div class="transparant" style="top: 1900px; left: 950px;"></div>
        <div class="misha" style="top: 1925px; left: 975px;"></div>
        <div class="name" style="top: 2110px; left: 1035px;">
            <h1>Mihsa</h1>
        </div>
        <div class="ice" style="top: 2175px; left: 995px;"></div>
        <div class="destruction" style="top: 2175px; left: 1050px;"></div>
        <div class="star4" style="top: 2175px; left: 1100px;"></div>
    </div>
</body>
</html>