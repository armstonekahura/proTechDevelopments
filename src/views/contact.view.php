<?php include 'partials/header.php'; ?>
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 pt-0">
 
  <section class="flex items-center justify-center min-h-screen p-6 pt-0">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Left Side: Social Media Icons -->

        <div class="text-start p-14 px-0">
            <h2 class="text-2xl font-bold mb-4">Follow Us On:</h2>
            <div class="flex flex-col space-y-3 items-start">
                <i class="fa-brands fa-github cursor-pointer hover:text-color-text-mary"> | <a class="font-mono hover:border hover:border-color-text-mary hover:rounded-md duration-200" href="https://github.com/armstonekahura/proTechDevelopments">Github</a></i>
                <i class="fa-brands fa-facebook-f cursor-pointer hover:text-color-text-mary"> | <a class="font-mono hover:border hover:border-color-text-mary hover:rounded-md duration-200" href="www.facebook.com">Facebook</a></i>
                <i class="fa-brands fa-twitter cursor-pointer hover:text-color-text-mary"> | <a class="font-mono hover:border hover:border-color-text-mary hover:rounded-md duration-200" href="www.twitter.com">Twitter</a></i>
                <i class="fa-brands fa-instagram cursor-pointer hover:text-color-text-mary"> | <a class="font-mono hover:border hover:border-color-text-mary hover:rounded-md duration-200" href="www.instagram.com">Instagram</a></i>
                <i class="fa-brands fa-youtube cursor-pointer hover:text-color-text-mary"> | <a class="font-mono hover:border hover:border-color-text-mary hover:rounded-md duration-200" href="www.youtube.com">Youtube</a></i>
                <i class="fa-brands fa-whatsapp cursor-pointer hover:text-color-text-mary"> | <a class="font-mono hover:border hover:border-color-text-mary hover:rounded-md duration-200" href="#">+2547 42 000 008</a></i>
            </div>
        </div>

        <!-- Right Side: Contact Form -->
        <div class="w-full border border-cyan-800 rounded-md m-auto p-6">
            
            <form action="/proTechDevelopments/src/controllers/submit_form.php" method="POST" class="space-y-4">
                <h2 class="text-3xl font-bold text-center mb-4">Contact Us</h2>
                <p class="text-lg text-gray-700 text-center">
                    Reach out to us via the form below!
                </p>
                
                <div>
                    <label for="name" class="block text-sm font-medium">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border rounded" placeholder="Enter Your Name" required />
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border rounded" placeholder="Enter Your Email (example@gmail.com)" required />
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium">Message</label>
                    <textarea id="message" name="message" class="w-full p-2 border rounded text-slate-950" rows="4" required></textarea>
                </div>
                <button type="submit" class="bg-color-text-mary text-color-text-light px-12 py-1 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">Send Message</button>
            </form>
        </div>
    </div>
  </section>
</main>
<?php include 'partials/footer.php'; ?>
