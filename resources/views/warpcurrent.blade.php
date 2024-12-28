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

        .content img {
            width: 120px;
            height: auto;
        }

        .description {
            padding-left: 30px;
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
        <div class="currentView">
            <a href="{{ route('warp-current') }}">Current Banner</a>
        </div>
        <span>|</span>
        <a href="{{ route('warp-tips') }}">Gacha Tips</a>
    </div>

    <div class="content">
        <h1>Phase 1</h1>
        <table>
            <tbody>
                <tr>
                    <td>
                        <img src="Images/Sunday.png">
                    </td>
                    <td>
                        <div class="description">
                            <h3>Sunday</h3>
                            <p>
                                A character players should be consider pulling to prepare for future summon meta.<br>
                                Rating: 10/10
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="Images/Jing Yuan.png">
                    </td>
                    <td>
                        <div class="description">
                            <h3>Jing Yuan (Rerun)</h3>
                            <p>
                                1.0 DPS is not worth it to pull for!<br>
                                Rating: 0/10
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <br><br><br><br>
            
        <h1>Phase 2</h1>
        <table>
            <tbody>
                <tr>
                    <td>
                        <img src="Images/Fugue.png">
                    </td>
                    <td>
                        <div class="description">
                            <h3>Fugue</h3>
                            <p>
                                A character that will replace Harmony Trailblazer in the future.<br>
                                Rating: 10/10
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="Images/Firefly.png">
                    </td>
                    <td>
                        <div class="description">
                            <h3>Firefly (Rerun)</h3>
                            <p>
                                Current best DPS which is worth it to pull for newbies and those who aim for eidolons.<br>
                                Rating: 8/10
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>