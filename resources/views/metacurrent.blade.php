<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta</title>

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
        }

        h1 {
            color: #6699cc;
            font-size: 50px;
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

        .best-teams table {
            color: #6699cc;
            font-size: 64px;
        }

        .best-teams img {
            width: 500px;
            height: auto;
        }

        .current-trend p {
            font-size: 28px;
        }

        .powercreep p {
            font-size: 28px;
        }

        .long-term-investment p {
            font-size: 28px;
        }

        .long-term-investment img {
            width: 120px;
            height: auto;
            padding-right: 20px;
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
        <a href="{{ route('meta-past') }}">Meta History</a>
        <span>|</span>
        <div class="currentView">
            <a href="{{ route('meta-current') }}">Current Meta</a>
        </div>
        <span>|</span>
        <a href="{{ route('meta-future') }}">Upcoming Meta</a>
    </div>

    <div class="content">
        <div class="current-trend">
            <h1>Current Trend</h1>
            <p>
                Currently, Break and Follow up Attack teams are among the most powerful archetypes. Since the release of Boothill<br>
                and Harmony Traiblazer, the new break archetype came out to the game. The Follow up Attack meta begins to rise since<br>
                the release of a harmony character specialized in FuA, Robin. Since then, FuA began to rise making Dr. Ratio's team<br>
                one of the strongest teams and began to rise in trend even more when Feixiao releases.<br>
            </p>
        </div>

        <br><br><br>
        
        <div class="best-teams">
            <h1>Top 10 Best Teams</h1>

            <table>
                <tbody>
                    <tr>
                        <td>1  </td>
                        <td><img src="Images/1st Best Team.png"></td>
                    </tr>
                    <tr>
                        <td>2  </td>
                        <td><img src="Images/2nd Best Team.png"></td>
                    </tr>
                    <tr>
                        <td>3  </td>
                        <td><img src="Images/3rd Best Team.png"></td>
                    </tr>
                    <tr>
                        <td>4  </td>
                        <td><img src="Images/4th Best Team.png"></td>
                    </tr>
                    <tr>
                        <td>5  </td>
                        <td><img src="Images/5th Best Team.png"></td>
                    </tr>
                    <tr>
                        <td>6  </td>
                        <td><img src="Images/6th Best Team.png"></td>
                    </tr>
                    <tr>
                        <td>7  </td>
                        <td><img src="Images/7th Best Team.png"></td>
                    </tr>
                    <tr>
                        <td>8  </td>
                        <td><img src="Images/8th Best Team.png"></td>
                    </tr>
                    <tr>
                        <td>9  </td>
                        <td><img src="Images/9th Best Team.png"></td>
                    </tr>
                    <tr>
                        <td>10 </td>
                        <td><img src="Images/10th Best Team.png"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br><br><br>

        <div class="tier-list">
            <h1>Tier List</h1>
            <img src="Images/Tier List.png">
        </div>

        <br><br><br>

        <div class="powercreep">
            <h1>Powercreep</h1>

            <p>
                Powercreep is one of the famous terms in Honkai: Star Rail. It is to describe a character that was OP in the<br>
                past but got replaced by the newly released characters. In this game, powercreep happens pretty fast. Therefore,<br>
                every new players should pay attention on this thing seriously. You don't believe it? Old characters such as<br>
                Seele who was the best DPS when the game released is now one of the worst limited 5* characters in the game. <br>
            </p>

            <p>
                More Examples: <br>
                - Bailu who used to be the best healer got powercrept by Luocha. Then, Luocha got powercrept by Huohuo, an abundance<br>
                  character capable of doing more than just healing<br>
                - Dan Heng IL who powercreeps Seele is now replaced by lots of newly released DPS like as Acheron, Firefly, and Feixiao.<br>
            </p>

            <h4 style="font-size: 22px">
                Based on the data, keep in note that DPS is the most vulnureable role to get powercrepted!
            </h4>
        </div>

        <br><br><br>

        <div class="long-term-investment">
            <h1>Long Term Investment</h1>

            <p>
                Despite Powercreep happens, there are still a few characters that are good for long term investments. Long term investment<br>
                character means that the character is expected to stay in the top tier for a long time. Usually, this happens to characters<br>
                that have a unique kit or a character that logically haven't reached the full potential.
            </p>

            <h2>Some Characters That Are Good For Long Term Investment</h2>

            <table>
                <thead>

                </thead>
                <tbody>
                    <tr>
                        <td><img src="Images/Ruan Mei.png"></td>
                        <td>
                            <p>
                                This character can make the player break enemy weakness 50% faster, delay enemy's action by breaking the enemy again after<br> 
                                it tries to recover from break, and increase damage to all teammates. She is a flexible support that can pretty much be put<br>
                                in all teams with break being the best one.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/Robin.png"></td>
                        <td>
                            <p>
                                Robin is the best support for FuA team comps and will potentially be an excellent support for summon characters. She<br>
                                can advance forward all allies 100%, give huge attack buff, and while in concerto state, she can give additional damage<br>
                                to an enemy when the enemy is attacked.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/Sparkle.png"></td>
                        <td>
                            <p>
                                The most SP-positive character ever released in Honkai: Star Rail. Her damage buff and advance forward is not as high<br>
                                as Bronya and Sunday. But, her damage buff is high enough and allowing teammates to use more SP indiretly buffs team<br>
                                damage by allowing more SP usage.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/Sunday.png"></td>
                        <td>
                            <p>
                                Sunday is prepared for upcoming meta in 3.0 which is the summon meta. He is capable of advancing ally's action by 100%<br>
                                along with the summon. Moreover, his ultimate that allows energy recharge making him a better alternative of Tingyun.<br>
                                Last but not least, his 20% CRIT Rate buff allows the player to focus more on CRIT DMG on the build.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/Jade.png"></td>
                        <td>
                            <p>
                                Jade is considered an excellent Erudition sub DPS and Pure Fiction specialist. Anyone who have her is expected to beat<br>
                                every Pure Fiction stages easily. Furthermore, future characters that can stack Jade's FuA faster will make her even<br>
                                more powerful in Pure Fiction.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/Aventurine.png"></td>
                        <td>
                            <p>
                                Currently the best shielder and the only sustain that can deal damage at all scenario. He has a very good sustainability<br>
                                for AoE enemies, because AoE enemies can make him launch FuA more often that can generate more shield. Moreover, his<br>
                                debuff ability that makes enemy take more CRIT DMG can be useful in some scenario.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/Huohuo.png"></td>
                        <td>
                            <p>
                                Huohuo is the good combination of Abundance and Harmony. She gives lots of healing and dispel, making her a very suitable<br>
                                sustain to beat enemies with crazy CC. Additionally, she also gives huge attack buff and capable of regenerating ally<br>
                                character's energy.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/Lingsha.png"></td>
                        <td>
                            <p>
                                The sustain with the highest damage but only if the enemy is weakness broken. Her high damage makes her perform very<br>
                                well in every endgame contents as a sustain for break teams. Other than that, she can also be placed in other teams<br>
                                like FuA and more.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>