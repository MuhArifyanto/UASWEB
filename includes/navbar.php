<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Navbar</title>
    <style>
        /* Reset margin and padding */
        body,
        ul,
        li,
        a {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }

        /* Styling Navbar */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(45deg, #0066ff, #00ccff);
            /* Gradien modern */
            padding: 10px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
        }

        .navbar-menu {
            display: flex;
            gap: 20px;
        }

        .navbar-menu a {
            font-size: 1rem;
            font-weight: 500;
            color: #f8f9fa;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar-menu a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffd700;
            /* Warna kuning keemasan */
        }

        .navbar-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .navbar-toggle span {
            width: 25px;
            height: 3px;
            background-color: #ffffff;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar-menu {
                display: none;
                flex-direction: column;
                width: 100%;
                background: linear-gradient(45deg, #0066ff, #00ccff);
                position: absolute;
                top: 50px;
                left: 0;
                text-align: center;
            }

            .navbar-menu.active {
                display: flex;
            }

            .navbar-toggle {
                display: flex;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">Kuliner Nusantara</div>
        <div class="navbar-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="navbar-menu" id="navbarMenu">
            <a href="?page=home">Home</a>
            <a href="?page=makanan">Makanan</a>
            <a href="?page=minuman">Minuman</a>
            <a href="?page=about">About</a>
            <a href="?page=contact">Contact</a>
        </div>
    </nav>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('navbarMenu');
            menu.classList.toggle('active');
        }
    </script>
</body>

</html>