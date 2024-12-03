<?php include '../src/views/partials/header.php'; ?>
<main class="flex items-center justify-center min-h-screen p-6 pt-0">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0 gap-6">
        
        <!-- Left Side: Who We Are -->
        <div class="w-full md:w-1/2 text-center md:text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to <span class="text-cyan-800">pro</span><span>Tech</span><span class="text-green-800">Developments</span></h1>
            <p class="text-lg text-gray-700">
                We are a team of professionals dedicated to providing innovative solutions in CCTV installation, web development, and mobile app development. Our goal is to meet your needs with high-quality, custom-built services that exceed expectations.
            </p>
        </div>
        
        <!-- Right Side: Sequential Dynamic Images -->
        <div class="w-full md:w-1/2 relative h-96 overflow-hidden">
            <!-- Image 1 -->
            <div id="image-1" class="absolute w-full h-full transition-all duration-500">
                <img src="/proTechDevelopments/public/images/cctv-installation.jpg" 
                     alt="CCTV Installation" 
                     class="w-full h-full object-cover rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent p-4 rounded-lg flex items-end">
                    <h2 class="text-white text-2xl font-semibold">CCTV Installation</h2>
                </div>
            </div>

            <!-- Image 2 -->
            <div id="image-2" class="absolute w-full h-full opacity-0 transition-all duration-500">
                <img src="/proTechDevelopments/public/images/web.png" 
                     alt="Web Development" 
                     class="w-full h-full object-cover rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent p-4 rounded-lg flex items-end">
                    <h2 class="text-white text-2xl font-semibold">Web Development</h2>
                </div>
            </div>

            <!-- Image 3 -->
            <div id="image-3" class="absolute w-full h-full opacity-0 transition-all duration-500">
                <img src="/proTechDevelopments/public/images/mobile.jpeg" 
                     alt="Mobile App Development" 
                     class="w-full h-full object-cover rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent p-4 rounded-lg flex items-end">
                    <h2 class="text-white text-2xl font-semibold">Mobile App Development</h2>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
// Data for dynamic updates
const dynamicData = [
    {
        title: 'CCTV Installation',
        description: 'We offer top-notch CCTV installation services to ensure your security and peace of mind.',
        image: "/proTechDevelopments/public/images/cctv-installation.jpg"
    },
    // {
    //     title: 'Web Development',
    //     description: 'Build modern and responsive websites tailored to meet your business needs.',
    //     image: '/proTechDevelopments/public/images/web.png'
    // },
    // {
    //     title: 'Mobile App Development',
    //     description: 'Create engaging and functional mobile apps for iOS and Android platforms.',
    //     image: '/proTechDevelopments/public/images/mobile.jpeg'
    // }
];

let currentIndex = 0;

// Function to update content dynamically
function updateContent() {
    const images = document.querySelectorAll('.absolute');
    
    // Hide all images
    images.forEach((image) => {
        image.classList.add('opacity-0');
    });

    // Wait for the fade-out transition to finish (500ms)
    setTimeout(() => {
        // Show the next image and slide it in
        const currentImage = images[currentIndex];
        currentImage.classList.remove('opacity-0');

        // Move to the next index
        currentIndex = (currentIndex + 1) % dynamicData.length; // Loop back to the first item
    }, 500);
}

// Rotate content every 3 seconds
// setInterval(updateContent, 3000);
</script>

<?php include '../src/views/partials/footer.php'; ?>
