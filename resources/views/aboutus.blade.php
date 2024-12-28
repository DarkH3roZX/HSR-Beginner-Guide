<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    
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
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        .container h1 {
            font-size: 5rem;
            color: #87CEEB; /* light blue heading color */
            margin-top: 100px;
            margin-bottom: 100px;
            align-items: center;
            text-align: center;
        }

        .container img {
            padding-left: 40px;
            width: 300px;
            height: auto;
        }

        .container p {
            color: white;
            font-size: 28px;
            padding-left: 100px;
        }

        .sdg img {
            padding-left: 40px;
            width: 200px;
            height: auto;
        }

        .sdg p {
            color: white;
            font-size: 28px;
            padding-left: 100px;
            text-align: left;
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

    <!-- Content -->
    <div class="container">
        <h1>About Us</h1>
        
        <table>
            <tbody>
                <tr>
                    <td>
                        <img src="Images/Pom Pom.png">
                    </td>
                    <td>
                        <p>
                            DarkHeroZX is an experienced Honkai: Star Rail player. Along with Xtecy, noobsleague, and whitewater, they<br>
                            decided to make a website that guides beginners on how to play the game, what mistakes to avoid, and most<br>
                            importantly how to behave in the game community and train them to think critically.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <h1 style="margin-top: 200px">
            SDG
        </h1>

        <div class="sdg">
            <table>
                <tr>
                    <td>
                        <img src="Images/SDG 5.jpg">
                    </td>
                    <td>
                        <p>
                            This website and the actual game states that both male and female are equal. They both deserve to be<br>
                            in the overpowered character spot. So, males are not superior in this game.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="Images/SDG 12.jpg">
                    </td>
                    <td>
                        <p>
                            This website tells how to spend money wisely on this game and encourages player to realize their<br>
                            financial condition.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="Images/SDG 16.jpg">
                    </td>
                    <td>
                        <p>
                            This website encourages the game community to respect each player regardless of their playstyle.
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>