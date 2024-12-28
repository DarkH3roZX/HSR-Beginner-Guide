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
            font-size: 50px;
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

        .content input {
            font-size: 30px;
        }

        .content button {
            font-size: 30px;
            width: 120px;
            height: 40px;
        }

        .content img {
            width: 120px;
            height: auto;
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
            <a href="{{ route('warp-history') }}">Banner History</a>
        </div>
        <span>|</span>
        <a href="{{ route('warp-current') }}">Current Banner</a>
        <span>|</span>
        <a href="{{ route('warp-tips') }}">Gacha Tips</a>
    </div>

    <!-- Content -->
    <div class="content">
        <form action="/warp-history" method="POST">
            @csrf
            <input type="text" name="search-term" placeholder="Enter game version">
            <button type="submit">Search</button>
        </form>

        <br><br><br>

        @if(isset($data) && $data->isNotEmpty())
            @foreach($data as $item)
                <h1>{{ $item->version }}</h1> <!-- Replace column_name with your database field -->
                <h2>Phase 1</h2>
                <img src="{{ $item->phase1Slot1 }}">
                <img src="{{ $item->phase1Slot2 }}">
                <img src="{{ $item->phase1Slot3 }}">
                <img src="{{ $item->phase1Slot4 }}">

                <br><br><br>

                <h2>Phase 2</h2>
                <img src="{{ $item->phase2Slot1 }}">
                <img src="{{ $item->phase2Slot2 }}">
                <img src="{{ $item->phase2Slot3 }}">
                <img src="{{ $item->phase2Slot4 }}">
            @endforeach
        @elseif(isset($data))
            <p>No results found.</p>
        @endif
    </div>
</body>
</html>