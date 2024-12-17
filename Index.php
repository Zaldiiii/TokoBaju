<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Baju</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Poppins, sans-serif;
            line-height: 1.6;
            background: url('RPL.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        header {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        header nav ul {
            list-style: none;
            display: flex;
            gap: 1rem;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .banner {
            text-align: center;
            padding: 5rem 1rem;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .banner h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .banner p {
            font-size: 1.5rem;
            color: #ddd;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            padding: 2rem;
            max-width: 1200px;
            margin: auto;
        }

        .product {
            background: #fff;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .product img {
            width: 100%;
            border-radius: 8px;
        }

        .product h3 {
            margin: 1rem 0 0.5rem;
        }

        .product p {
            font-size: 1.1rem;
            color: #0078d7;
            margin-bottom: 1rem;
        }

        .product button {
            background: #0078d7;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
        }

        .product button:hover {
            background: #005bb5;
        }

        .h1 font {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 500;
            font-stretch: 100%;
            unicode-range: U+1F00-1FFF;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Toko Baju</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="loginregister.php">Login/Register</a></li> <!-- Link ke login_register -->
                </ul>
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
                rel="style.css">
            </ul>
        </nav>
    </header>
    <main>
        <div class="banner">
            <h1>Welcome to Toko Baju</h1>
            <p>Toko Baju adalah destinasi fashion Anda untuk gaya modern dan klasik.</p>
                <p>Kami menyediakan pakaian berkualitas tinggi untuk semua kebutuhan Anda.</p>
        </div>
        <section class="products">
            <div class="product">
                <img src="celana.jpg" alt="Product 1">
                <h3>Celana Panjang</h3>
                <button>Pilih</button>
            </div>
            <div class="product">
                <img src="kaos polos.jpg" alt="Product 2">
                <h3>Kaos Polos</h3>
                <button>Pilih</button>
            </div>
            <div class="product">
                <img src="kemeja1.jpg" alt="Product 3">
                <h3>Kemeja Pria</h3>
                <button>Pilih</button>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Toko Baju | Kelompok VSCode</p>
    </footer>
</body>
</html>