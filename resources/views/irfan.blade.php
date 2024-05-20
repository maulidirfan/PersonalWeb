
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <style>
        /* Global Styles */
        body {
            background-color: #1a1a1a;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #fff; 
        }

        
        nav {
            background-color: #333;
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }

        nav h1 {
            margin: 0;
            font-size: 5rem;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1.2rem; 
        }

        
        section {
            padding: 40px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        
        .image-container {
            display: flex;
            justify-content: space-around;
            margin: 40px auto;
        }

        .image-container img {
            width: 35%;
            height: auto;
            border-radius: 10px; 
        }

        /* Grid Styles */
        .grid {
            display: grid;
            gap: 50px;
        }

        .grid-item  {
            padding: 50px;
            text-align: center;
            border: 10px solid #ff4d4d; 
            color: #fff;
            border-radius: 10px; 
        }

        .grid-item:nth-child(odd) {
            justify-self: start;
        }

        .grid-item:nth-child(even) {
            justify-self: end;
        }

    
        .about {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 60px;
        }

        .about img {
            width: 40%;
            border-radius: 10px;
        }

        .about-info {
            color: grey;
        }

        
        footer {
            background-color: #ff4d4d; 
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
        }

        footer a {
            color: #fff;
            margin: 0 10px;
            font-size: 1.5rem;
            text-decoration: none; 
        }

        footer a:hover {
            color: #ccc;
        }

        
        footer img {
            width: 40px;
            margin: 10px;
            border-radius: 50%; 
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav>
        <h1>Portfolio<span class="text-red"></span></h1>
        <div>
            <a href="#home">Home</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
        </div>
    </nav>

    <!-- Main Section -->
    <section class="container" id="portfolio">
        <!-- Introduction -->
        <div class="text-center">
            <div class="mx-auto max-w-xl">
                <h1 class="text-white text-4xl mb-4">*====== HELL0 ======*</h1>
                <h1 class="text-white text-4xl mb-4">Nama Saya Irfan Maulid</h1>
                <h1 class="text-white text-4xl mb-4">Saya Mahasiswa Politeknik Harapan Bersama Tegal</h1>
                <h1 class="text-white text-4xl mb-4">Mahasiswa Semester 4</h1>
                <h1 class="text-white text-4xl mb-4">Jurusan D3</h1>
                <h1 class="text-white text-4xl mb-4">Computer Engineering</h1>
                <a href="#" class="text-black text-2xl bg-red inline-block px-4 py-2 mt-4">Contact Me</a>
            </div>
        </div>

        <!-- Image -->
        <div class="image-container">
            <img src="https://i.ibb.co/ftsgQLw/placeholder.jpg" alt="">
        </div>
    </section>

    <!-- Recent Projects -->
    <section class="container" id="home">
        <h1 class="text-red mt-9 text-center text-5xl">Recent Project</h1>
        <div class="image-container mt-14">
            <img src="https://i.ibb.co/2smyLG4/Whats-App-Image-2024-04-02-at-12-51-55-e99a1c9c.jpg" alt="">
            <img src="https://i.ibb.co/wWPMQSv/Whats-App-Image-2024-04-02-at-13-06-41-59dd23ea.jpg" alt="">
        </div>
    </section>

    <!-- Services -->
    <section class="container" id="services">
        <h1 class="text-red mt-9 text-center text-5xl">Service</h1>
        <div class="grid grid-cols-3 mt-20">
            <div class="grid-item 1">
                <img src="https://i.ibb.co/4RYQK56/world-wide-web-1-1.png" alt="">
                <h1 class="text-red">Web</h1>
                <p class="mt-4">Menyediakan solusi pengembangan web yang berkualitas dengan teknologi terkini.</p>
            </div>
            <div class="grid-item 2">
                <img src="https://i.ibb.co/qBLqynR/web-design-1.png" alt="">
                <h1 class="text-red">Graphic Design</h1>
                <p class="mt-4">Memberikan desain grafis yang kreatif dan estetis untuk memenuhi kebutuhan bisnis Anda.</p>
            </div>
            <div class="grid-item 3">
                <img src="https://i.ibb.co/BfnKTwW/ux-design-1.png" alt="">
                <h1 class="text-red">UI/UX</h1>
                <p class="mt-4">Menghadirkan pengalaman pengguna yang menarik dan intuitif melalui desain UI/UX yang terbaik.</p>
            </div>
        </div>
    </section>                               
    <!-- About Me -->
    <section class="container" id="about">
        <h1 class="text-red mt-9 text-center text-5xl">About Me</h1>
        <div class="about mt-60">
            <img src="https://i.ibb.co/pjtTxf4/Whats-App-Image-2024-04-02-at-12-49-45-606bc197.jpg" alt="">
            <div class="about-info">
            <div class="text-center">
            <div class="mx-auto max-w-xl">
    <div style="text-align: center;">
        <h1 class="text-white text-4xl mb-4">Didorong oleh gairah</h1>
        <h1 class="text-white text-4xl mb-4">dipandu oleh tujuan</h1>
        <h1 class="text-white text-4xl mb-4">dan diberi dorongan oleh kegigihan</h1>
        <h1 class="text-white text-4xl mb-4">dalam mengejar</h1>
        <h1 class="text-white text-4xl mb-4">keunggulan</h1>
        <h1 class="text-white text-4xl mb-4">TERIMAKASIH</h1>
        <a href="#" class="text-black text-2xl bg-red inline-block px-4 py-2 mt-4">Contact Me</a>
    </div>
</div>

        </div>
        <div style="text-align: center;">
                <div class="bg-white h-10 rounded-sm mt-36"></div>
                <h1 class="text-white mt-9">+62 87888750231</h1>
                <h1 class="text-white">IRFAN_MAULID</h1>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <section class="container"/></section>
            <div class="text-center">
                <h1 class="text-white">Contact Me</h1>
                <div>
                    <a href="#"><img src="img/whatsapp.png" alt="WhatsApp Icon"></a>
                    <a href="#"><img src="img/facebook.png" alt="Facebook Icon"></a>
                    <a href="#"><img src="img/map.png" alt="Map Icon"></a>
                    <a href="#"><img src="img/instagram.png" alt="Instagram Icon"></a>
                </div>
            </div>
        </section>
    </footer>

</body>
</html>
                        