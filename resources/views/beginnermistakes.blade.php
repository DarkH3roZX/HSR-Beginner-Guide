<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mistakes</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #4c5483;
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

        .content-title {
            background-image: url('Images/Hsr Background 2.jpg'); /* Adjust the path as necessary */
            height: 100vh; /* Full height */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; /* Resize the background image to cover the entire container */
            display: flex;
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
        }

        .title-and-subtitle {
            text-align: center; /* Center text horizontally */
            color: white; /* Text color */
        }

        .title-and-subtitle h1 {
            font-size: 90px;
        }

        .title-and-subtitle h2 {
            color: red;
        }

        .point1 {
            background-color: #1b2b38;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .point1 h1 {
            color: #6699cc
        }

        .point2 {
            background-color: #0A1D37;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .point2 h1 {
            color: #6699cc
        }

        p {
            color: white;
            margin-left: 30px;
            font-size: 28px;
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

    <div class="content-title">
        <div class="title-and-subtitle">
            <h1>Top 10 Mistakes</h1>
            <h2>Please note that this tips are based on meta</h2>
        </div>
    </div>

    <div class="point1">
        <h1>1. Spend Stellar Jades on Standard Banner to Reach 300 Pulls</h1>
        <p>
            This is a very FATAL MISTAKE! Making this mistake can RUIN your account!<br>
        </p>
        <p>
            This feature was introduced first in this game. The game before (Genshin Impact) doesn't have this feature.<br>
            Basically, this feature allows every player to choose a free 5 star character after they reached 300 pulls<br>
            on the standard banner.<br>
            <br>
            It's actually tempting to try reach 300 pulls but it is actually a very-very bad decision. Limited characters<br>
            are more worth it to get and offers a lot more value. Moreover, standard characters beside Himeko and Bronya<br>
            are no longer viable for the current meta. Even both Himeko and Bronya are way less powerful than limited<br>
            characters that are released nowadays.<br>
            <br>
            By the way, you will reach 300 pulls after around 9 months of playing in the worse case scenario.
        </p>
    </div>

    <div class="point2">
        <h1>2. Buying a Star Rail Pass From Herta's Store</h1>
        <p>
            This is a very FATAL MISTAKE! Making this mistake can RUIN your account!<br>
        </p>
        <p>
            Herta Bond is an easy item to get for early game players but very hard for endgame players. Every endgame<br>
            players got 1 Herta Bond every week for completing Simulated/Divergent universe. Each light cone requires<br>
            8 HB to purchase and another 8 HB for it's superimposition. Therefore, each light cone will require<br>
            16 weeks or 4 months to max and purchasing a Star Rail Pass costs you 2 weeks of grinding.<br>
            <br>
            It is still not recommended to purchase Star Rail Pass after you have got all the lightcones with max level<br>
            superimposition, because there will be possibly new light cone in the future. Light cones from simulated<br>
            universe can be good at some cases. Infact, it can be an alternate choice for those who don't have signature<br>
            light cone for a certain character.
        </p>
    </div>

    <div class="point1">
        <h1>3. Didn't Make a Long Term Plan</h1>
        <p>
            The meta in this game evloves very fast and some meta only lasts for around 2 patches. Each meta is unique and<br>
            have several characters that specializes in a certain archetype. Fortunately, Hoyoverse usually gave us a spoiler<br>
            on what characters will be released in the future plus the kit. Therefore, players have to regularly check the<br>
            Drip Marketing (a spoiler of what characters will come in the future) regularly.<br>
            <br>
            Please note that some characters (such as Sunday) are built for the meta in the future. So, always keep an eye<br>
            on what to pull and how do you want to play in the future. Oftenly, players who didn't make a long term plan will<br>
            cause their account to be biased where 1 team is very-very good and the rest of the teams are weak. Additionally, players<br>
            will also struggle for the future meta.<br>
            <br>
            Example case where players have no long term plan:<br>
            - Hard time when playing Break teams without Ruan Mei.<br>
            - Hard time when playing FuA teams without Robin.<br>
            - Hard time playing Acheron without Jiaoqiu.<br>
            - Hard time playing Dan Heng IL / Qingque without Sparkle.<br>
            - Will have a hard time playing Remembrance characters without Sunday.<br>
            <br>
            For the conclusion, support characters are long lasting and they are THE GOAT!
        </p>
    </div>

    <div class="point2">
        <h1>4. Overbuild 4* Characters</h1>
        <p>
            Besides Tingyun, Gallagher, and Pela, all 4* characters in this game have been heavily outclassed easily by<br>
            5* characters. For example: Asta < Robin, Hanya < Sparkle, Sampo < Black Swan, All DPS, and All<br>
            sustains beside Gallagher. This indicates that everyone should think very carefully before building 4*<br>
            characters, because it can easily eat your level up resources and make it hard for your account.<br>
            <br>
            Exceptions: <br>
            - Tingyun: A great support capable of energy regeneration and attack buff. One of the best support for Yunli<br>
            and Clara.<br>
            - Gallagher: More SP-Positive option than Lingsha and still a very great healer for players who don't have<br>
            Lingsha for break teams.<br>
            - Pela: Got outclassed by Jiaoqiu but still an excellent alternative for those who don't have Jiaoqiu.<br>
            - Moze & March 7th Hunt: An excellent alternate of Topaz for Feixiao teams.
        </p>
    </div>

    <div class="point1">
        <h1>5. Didn't Evaluate The Account Condition</h1>
        <p>
            This is technically a fatal mistake.<br>
            <br>
            In this game, there are no accounts that are perfect. There are always flaws in every account. It is important<br>
            to evaluate on what things that are already good enough and what things that needs to be improved. Here are several<br>
            common problems that might occur in an account without evaluation / planning along with the signs:<br>
            <br>
            - Too much DPS: Too much team variation but the quality for each teams are bad.<br>
            - Lacks Sustain: Died a lot when doing endgame contents, especially MoC and AS.<br>
            - Lacks Damage: It might be caused by builds that are not good enough, lacks support characters, or both.<br>
            - Messy Team Comp: A problem when a player don't have a sufficient suitable character for certain DPS.<br>
        </p>
    </div>

    <div class="point2">
        <h1>6. Didn't do a research on builds</h1>
        <p>
            I think this is pretty straightforward and as you progress, you will know what happens when you built your characters<br>
            wrong.
        </p>
    </div>

    <div class="point1">
        <h1>7. Underestimate Details</h1>
        <p>
            In this game, there are lots of important details. <br>
            <br>
            a. Relic substats<br>
            Although it doesn't look much, but substats can give very significant changes for characters.<br>
            <br>
            b. Support and sustain characters<br>
            Some of players might think "support is just a servant, they don't do much" but they are absolutely WRONG. infact,<br>
            support characters are the reason DPS characters are in the top tier. Honestly, the writer did the mistake when<br>
            playing genshin impact by building support characters lazily and it turns out that the laziness makes him struggle<br>
            on Spiral Abyss.<br>
            <br>
            c. Shops<br>
            When player pulls, they got warp result items and they can buy more items with that from the shop. This is some<br>
            detail that can help players to pull again especially when they almost reached pity.
        </p>
    </div>

    <div class="point2">
        <h1>8. Keeping The Trailblaze Power Unused For Long Time</h1>
        <p>
            Trailblaze Power is a resource that will be fully charged in 24 hours. When it's not used, it will start<br>
            generating Reserved Traiblaze Powers. Each player gets 1 Traiblaze Power every 6 minutes and Reserved<br>
            Trailblaze Powers are regenerated every 18 minutes instead. Up to a maximum of 2400 Reserved Trailblaze<br>
            power can be obtained.<br>
            <br>
            So, players are advised to spend all their Trailblaze Powers daily and it is also recommended that players<br>
            save their fuel until they reached a certain world level to get more resources from farming.
        </p>
    </div>

    <div class="point1">
        <h1>9. Quitting</h1>
        <p>
            As mentioned before, meta in this game evolves so fast making old no longer viable. Quitting this game means<br>
            it will be hard for players to adapt with the new version, because they will miss OP characters that are released.<br>
            when they quit. Furthermore, it will make the game not fun because those who quits will have a very small amount<br>
            of characters.<br>
            <br>
            Disclaimer: Short-term quits will not bring significant change to your account.
        </p>
    </div>

    <div class="point2">
        <h1>10. Waifu/Husbando "Slave"</h1>
        <p>
            Note:<br>
            - This is actually not wrong considering each players have their own unique playstyle.<br>
            - Because majority of the players are male, this website will use "waifu" as a term.
        </p>
        <p>
            Too much focusing on waifu can cause lot of problems in your account. To be honest, some casual players won't even<br>
            care about the meta. But, it's undeniable that players who cares about meta will have easier time on this game.<br>
            <br>
            Here are some argument for those waifu "slaves":<br>
            - Playing your waifu will be NOT FUN if you kept dying or have no damage.<br>
            - When you don't neglect meta and can beat every endgame content easily, you will have more pulls for your waifu.<br>
            - Pulling for long term investment characters that are not you waifu allows you to play your future waifu without looking<br>
            at your waifu struggling.<br>
            <br>
            For meta "slaves": Each person has their own playstyle, so respect each of them and don't mock them for struggling.<br> 
            For waifu "slaves": Don't say harsh words like g*y to those who cares more about meta.
        </p>
    </div>
</body>
</html>