<?php include '../src/views/partials/header.php'; ?>
<main>
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold text-center mb-10">Our Services</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- CCTV Installations -->
        <div class="border p-6 rounded-lg hover:shadow-lg hover:scale-105 transition duration-300">
            <img src="/proTechDevelopments/public/images/cctv.png" alt="CCTV Installations" class="w-full h-48 object-cover mb-4 rounded">
            <h2 class="text-2xl font-semibold mb-2">CCTV Installations</h2>
            <p class="text-neutral-950 mb-4">
                We provide professional CCTV installation services to ensure your safety and peace of mind.
            </p>
            <a href="?page=apply&service=cctv" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition">
                Apply
            </a>
        </div>

        <!-- Web and System Development -->
        <div class="border p-6 rounded-lg hover:shadow-lg hover:scale-105 transition duration-300">
            <img src="/proTechDevelopments/public/images/web.png" alt="Web and System Development" class="w-full h-48 object-cover mb-4 rounded">
            <h2 class="text-2xl font-semibold mb-2">Web and System Development</h2>
            <p class="text-neutral-950 mb-4">
                We design and develop web applications and systems tailored to your needs.
            </p>
            <a href="?page=apply&service=web_app" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition">
                Apply
            </a>
        </div>

        <!-- Mobile App Development -->
        <div class="border p-6 rounded-lg hover:shadow-lg hover:scale-105 transition duration-300">
            <img src="/proTechDevelopments/public/images/mobile.png" alt="Mobile App Development" class="w-full h-48 object-cover mb-4 rounded">
            <h2 class="text-2xl font-semibold mb-2">Mobile App Development</h2>
            <p class="text-neutral-950 mb-4">
                Get custom mobile applications that provide exceptional user experiences.
            </p>
            <a href="?page=apply&service=mobile_app" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition">
                Apply
            </a>
        </div>
    </div>
</div>

    
</main>

<?php include 'partials/footer.php'; ?>