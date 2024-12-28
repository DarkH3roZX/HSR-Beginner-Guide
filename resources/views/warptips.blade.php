<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warp</title>

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
        }

        h1 {
            font-family: 'Orbitron', Arial, sans-serif;
            color: #6699cc;
        }

        h2 {
            color: gray;
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

        .section {
            background-color: #1b2b38;
            padding-left: 10px;
        }

        .content {
            padding: 2em;
            color: white;
            background-color: black;
        }

        .content p {
            font-size: 22px;
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

    <!-- Navigation Links -->
    <div class="nav-links">
        <a href="{{ route('warp-history') }}">Banner History</a>
        <span>|</span>
        <a href="{{ route('warp-current') }}">Current Banner</a>
        <span>|</span>
        <div class="currentView">
            <a href="{{ route('warp-tips') }}">Gacha Tips</a>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <h1 style="font-size: 70px; color: white">Pulling Tips</h1>

        <div class="section">
            <h1>1. Know Your Playstyle</h1>
            <p>
                Infact, this is the most important factor to decide what characters to pull. Every player has their own preferences on what<br>
                characters they want to pull for. Some people maybe pull for the character because of the design, or maybe because it's meta,<br>
                or maybe the animation. Technically, this is the only factor that decides your character pulling decision.<br>
                <br>
                "Btw this will be the only point that is not based on the meta."<br>
            </p>
        </div>

        <div class="section">
            <h1>2. Know What Characters You Have</h1>
            <p>
                Questions you should ask yourself when pulling is:<br>
                - What do I need?<br>
                - What am I lacking right now?<br>
                - What characters I already have?<br>
                By asking and answering that question, you can realize the flaws of your account (for example not enough damage, always die in<br>
                endgame contents, etc). Those questions will help you on what characters that you need to pull. Keep in mind that every role in<br>
                this game (DPS, Support, Sustain) are all useful. So, never underestimate any of those.
            </p>
        </div>

        <div class="section">
            <h1>3. Make a Plan</h1>
            <p>
                Before deciding to pull, it is very advisable to check what character will came out in the future and check whether you will have<br>
                enough stellar jades or no. The website creator once made this mistake while playing Genshin Impact. He just pull on every banner<br>
                that was available without doing a research first. Consequently, his Genshin account is a mess because he can't make a proper team<br>
                from the characters that he have.
            </p>
        </div>

        <div class="section">
            <h1>4. Don't save your jade for too long</h1>
            <p>
                First and foremost, this tip is not applicable for player whose account is not currently struggling!<br>
                One main focus that beginner should do is to collect limited 5* characters to make more team variations and beat endgame contents.<br>
                Saving for a certain character can actually be a double-edged sword. At one point, the player will miss several good characters and<br>
                can potentially ruin their account. At the other point, it is good to give higher chance of getting the good characters along with<br>
                their light cone. In conclusion, players should make a plan when they want to pull for a certain character and cautions about the.<br>
                current meta and the future meta.
            </p>
        </div>

        <div class="section">
            <h1>5. The importance of long term investments</h1>
            <p>
                Some characters may not be in the top tier when first released. But, understanding the kit allows the player to realize that the<br>
                character is very potential in the future. Let's take Topaz and Numby for example. When she first released, there was no character<br>
                that suits her FuA playstyle and that can do frequent Follow up Attacks. But as time goes on,FuA characters such asDr Ratio, Robin,<br>
                and Feixiao came out, making Topaz who was once in the mid tier become one of the best sub DPS.<br>
                <br>
                The other example will be Sunday. When he first came out, Jing Yuan is the only pure DPS who have summon. But, it is impossible<br>
                for Hoyoverse to make Sunday only to buff Jing Yuan. Sunday is definitely prepared for the future remembrance path meta.
            </p>
        </div>

        <div class="section">
            <h1>6. Express Supply Pass</h1>
            <p>
                Express Supply Pass is the most worth it in-game item to buy which costs only for $5. Whoever buys it gets 300 Oneiric Shard and<br>
                will get 90 Stellar Jades every day for 30 days. Keep in mind that this in-game item is VERY-VERY ADDICTING! There's a very high<br>
                chance for players being tempted to buy it again after the 30 days is expired. Therefore, (sorry to say) it is advisable for players<br>
                to check their real life financial condition before buying this item.
            </p>
        </div>

        <br><br><br><br>

        <div class="waifu-meta">
            <h1 style="font-size: 70px; color: white">Debate: Waifu Vs Meta</h1>

            <h2>Introduction</h2>
            <p>
                This is the neverending debate topic on this game. Meta players are those who pull for a certain character because of it's good<br>
                performance. Waifu players are usually casual players who pulls for a certain character that they like probably because of the<br>
                design (cool, pretty, etc) or their animation.<br>
            </p>

            <br>

            <h2>Meta</h2>
            <p>
                It is undeniable that meta players will beat every game contents easily and will get more stellar jades. Some players found it<br>
                fun to make their team strong and trying to do 0 cycle in Memory of Chaos, 80.000 points on Pure Fiction, and high score on<br>
                Apocalyptic Shadow. On the other hand, meta evolves very fast in these game. As a result, player will need lots of stellar<br>
                jades to keep up with the meta and possibly being a "meta slave".
            </p>

            <br>

            <h2>Waifu</h2>
            <p>
                Other than competitive players, there are lots of players who plays this game casually and their main goal is just to have some<br>
                fun. Most players should agree that playing with their waifu makes the game more enjoyable. Interestingly, the hyped waifuable<br>
                characters in this game are usually also a meta. Making the hyped character overpowered is a very common developer's strategy to<br>
                encourage every players to pull for it, gaining the developer lots of money. On the other hand, when players are too focused on<br>
                aiming for their waifu, they will miss several characters that can be good in the future and worst case scenario, struggle on<br>
                endgame contents.
            </p>

            <br>

            <h2>Which One is Better?</h2>
            <p>
                Both playstyles are not wrong and it is based on personal preference. We can't force someone to have the same playstyle. Both<br>
                playstyles are all legal and will never result in a ban. Therefore, we should respect each player regardless of their playstyle<br>
                preferences. Mocking other players because of their preferences is a toxic behaviour in the game community can can cause people<br>
                to hate you for that.
            </p>

            <br>

            <h2 style="color: greenyellow">Remember that games are built for entertainment purposes and no people will try to get themselves frustrated from the game!</h2>
        </div>
    </div>
</body>
</html>