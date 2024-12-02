<?php include '../src/views/partials/header.php'; ?>
<main class="flex items-center justify-center min-h-screen p-6">
    <!-- Fullscreen Container -->
    <div class="relative w-3/4 h-3/4 flex items-center justify-center">
        <!-- Dynamic Image -->
        <div class="relative w-full h-full">
            <img id="dynamic-image" 
                 src="/proTechDevelopments/public/images/image1.png" 
                 alt="Dynamic Image" 
                 class="absolute inset-0 object-cover w-full h-full rounded-lg">
        </div>

        <!-- Dynamic Text Overlay -->
        <div class="absolute bottom-0 w-full text-center bg-gradient-to-t from-black via-transparent to-transparent p-4 rounded-b-lg">
            <h1 id="dynamic-title" class="text-4xl font-bold text-white mb-2">
                Welcome to Our Website
            </h1>
            <p id="dynamic-description" class="text-lg text-gray-200">
                Discover the best solutions for your needs. Our team is dedicated to providing quality services and ensuring customer satisfaction.
            </p>
        </div>
    </div>
</main>
<?php include '../src/views/partials/footer.php'; ?>

<script>
// Data for dynamic updates
const dynamicData = [
    {
        title: 'CCTV Installation',
        description: 'We offer top-notch CCTV installation services to ensure your security and peace of mind.',
        image: "/proTechDevelopments/public/images/cctv-installation.jpg"  // Corrected image path
    },
    {
        title: 'Web Development',
        description: 'Build modern and responsive websites tailored to meet your business needs.',
        image: '/images/web-development.png'  // Corrected image path
    },
    {
        title: 'Mobile App Development',
        description: 'Create engaging and functional mobile apps for iOS and Android platforms.',
        image: '/images/mobile-app-development.png'  // Corrected image path
    }
];

let currentIndex = 0;

// Function to update content dynamically
function updateContent() {
    const imageElement = document.getElementById('dynamic-image');
    const titleElement = document.getElementById('dynamic-title');
    const descriptionElement = document.getElementById('dynamic-description');

    // Update the image, title, and description
    const currentData = dynamicData[currentIndex];
    imageElement.src = currentData.image;
    titleElement.textContent = currentData.title;
    descriptionElement.textContent = currentData.description;

    // Move to the next index
    currentIndex = (currentIndex + 1) % dynamicData.length; // Loop back to the first item
}

// Rotate content every 3 seconds
setInterval(updateContent, 3000);
</script>
