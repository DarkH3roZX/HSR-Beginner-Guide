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

        .content p {
            color: #6699cc;
        }

        .limited-char-history img {
            width: 1500px;
            height: auto;
        }

        .dps-crown-owners table {
            color: #6699cc;
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
        <div class="currentView">
            <a href="{{ route('meta-past') }}">Meta History</a>
        </div>
        <span>|</span>
        <a href="{{ route('meta-current') }}">Current Meta</a>
        <span>|</span>
        <a href="{{ route('meta-future') }}">Upcoming Meta</a>
    </div>
    
    <!-- Content -->
    <div class="content">
        <div class="limited-char-history">
            <h1>Era of The Limited Characters</h1>
            <p>This timeline shows in what version a certain limited 5 star character is in the high tier</p>
            <img src="Images/Limited Character Era Timeline.jpg">
        </div>

        <br><br><br><br>

        <div class="standard-char-history">
            <h1>Era of The Standard Characters</h1>
            <p>This timeline shows in what version a certain standard 5 star character is in the high tier</p>
            <img src="Images/Standard Character Era Timeline.jpg">
        </div>

        <br><br><br><br>

        <div class="dps-crown-owners">
            <h1>Best DPS Overtime</h1>
            <img src="Images/Best DPS Overtime.jpg">
            <table>
                <thead>
                    <tr>
                        <th>Num</th>
                        <th>Character</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Firefly</td>
                        <td>10 Phases</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jingliu</td>
                        <td>6 Phases</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Seele</td>
                        <td>6 Phases</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Acheron</td>
                        <td>4 Phases</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Dan Heng - Imbibitor Lunae</td>
                        <td>3 Phases</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Kafka & Black Swan [DoT]</td>
                        <td>1 Phase</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>