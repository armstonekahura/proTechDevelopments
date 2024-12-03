<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proTechDevelopments</title>
    <link rel="stylesheet" href="/proTechDevelopments/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gradient-to-r from-green-400 to-blue-500 text-color-text-light tracking-wider">
    <header>
        <nav class="container flex justify-between items-center">
            <div class="py-5 text-color-text-mary font-bold text-3xl">
                <a href="?page=home">
                    <span class="text-color-text-green">pro</span>Tech
                    <span class="text-cyan-200">Developments</span>
                </a>
            </div>
            <div>
                <ul class="hidden lg:flex items-center space-x-6">
                    <li><a href="/proTechDevelopments/src/views/home.view.php" class="hover:text-color-text-mary hover:underline ease-in duration-200">Home</a></li>
                    <li><a href="?page=services" class="hover:text-color-text-mary hover:underline ease-in duration-200">OurServices</a></li>
                    <li><a href="?page=about" class="hover:text-color-text-mary hover:underline ease-in duration-200">AboutUs</a></li>
                    <li><a href="?page=contact" class="hover:text-color-text-mary hover:underline ease-in duration-200">ContactUs</a></li>
                </ul>
            </div>

            <!-- Mobile Screen-->
             <div id="hamburger" class="lg:hidden cursor-pointer z-50">
                <i class="fa-solid fa-bars"></i>
             </div>

             <div id="menu" class="hidden bg-color-background h-[100vh] absolute inset-0">
                <ul class="h-full grid place-items-center py-20">
                    <li><a id="hLink" href="#home" class="hover:text-color-text-mary hover:border hover:border-s-color-text-mary ease-in duration-200">Home</a></li>
                    <li><a id="hLink" href="#portfolio" class="hover:text-color-text-mary hover:underline ease-in duration-200">Portfolio</a></li>
                    <li><a id="hLink" href="#blog" class="hover:text-color-text-mary hover:underline ease-in duration-200">Blog</a></li>
                    <li><a id="hLink" href="#aboutMe" class="hover:text-color-text-mary hover:underline ease-in duration-200">AboutMe</a></li>
                    <li><a id="hLink" href="#contactMe" class="hover:text-color-text-mary hover:underline ease-in duration-200">ContactMe</a></li>
                </ul>
             </div>
        </nav>
    </header>
    

    <main class="h-96">
        <div class="container mx-auto py-10 h-96 text-center">
            <h1 class="text-4xl font-bold mb-4">Thank You!</h1>
            <p class="text-lg">Your application has been submitted successfully. We will contact you shortly.</p>
            <a href="?page=home" class="mt-5 inline-block bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition">
                Back to Home
            </a>
        </div>
    </main>

<!-- <?php include 'partials/footer.php'; ?> -->
