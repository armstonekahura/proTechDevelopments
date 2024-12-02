<?php include 'partials/header.php'; ?>
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
  <h2 class="text-3xl font-bold text-center mb-4">About Us</h2>
  <p class="text-lg text-gray-700 text-center mb-8">
    This page provides information about our project and team.
  </p>

  <!-- Team Section -->
  <section class="mb-12">
    <h3 class="text-2xl font-bold text-center mb-6">Our Team</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <!-- Team Member 1 -->
      <div class="border rounded-lg p-4 hover:shadow-lg hover:bg-gray-100 transition">
        <img src="/proTechDevelopments/public/images/member1.png" alt="John Doe" class="w-full h-48 object-contain rounded-lg mb-4">
        <h4 class="text-xl font-semibold text-center">John Doe</h4>
        <p class="text-sm text-gray-600 text-center">Project Manager</p>
      </div>
      <!-- Team Member 2 -->
      <div class="border rounded-lg p-4 hover:shadow-lg hover:bg-gray-100 transition">
        <img src="/proTechDevelopments/public/images/member2.png" alt="Jane Smith" class="w-full h-48 object-contain rounded-lg mb-4">
        <h4 class="text-xl font-semibold text-center">Jane Smith</h4>
        <p class="text-sm text-gray-600 text-center">Lead Developer</p>
      </div>
      <!-- Team Member 3 -->
      <div class="border rounded-lg p-4 hover:shadow-lg hover:bg-gray-100 transition">
        <img src="/public/images/member3.jpg" alt="Alice Johnson" class="w-full h-48 object-cover rounded-lg mb-4">
        <h4 class="text-xl font-semibold text-center">Alice Johnson</h4>
        <p class="text-sm text-gray-600 text-center">UI/UX Designer</p>
      </div>
    </div>

    <!-- Second Row of Team Members -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6 mt-6">
      <!-- Team Member 4 -->
      <div class="border rounded-lg p-4 hover:shadow-lg hover:bg-gray-100 transition">
        <img src="/proTechDevelopments/public/images/member2.png" alt="Michael Brown" class="w-full h-48 object-cover rounded-lg mb-4">
        <h4 class="text-xl font-semibold text-center">Michael Brown</h4>
        <p class="text-sm text-gray-600 text-center">Backend Developer</p>
      </div>
      <!-- Team Member 5 -->
      <div class="border rounded-lg p-4 hover:shadow-lg hover:bg-gray-100 transition">
        <img src="/public/images/member5.jpg" alt="Sarah Wilson" class="w-full h-48 object-cover rounded-lg mb-4">
        <h4 class="text-xl font-semibold text-center">Sarah Wilson</h4>
        <p class="text-sm text-gray-600 text-center">Marketing Specialist</p>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section>
    <h3 class="text-2xl font-bold text-center mb-6">Testimonials</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <!-- Testimonial 1 -->
      <div class="text-center">
        <img src="/public/images/testimonial1.jpg" alt="Client 1" class="w-24 h-24 object-cover rounded-full border-4 border-gray-300 mx-auto mb-4">
        <p class="text-sm text-gray-600 italic">"This team exceeded our expectations."</p>
        <h4 class="text-md font-medium">Michael Carter</h4>
      </div>
      <!-- Testimonial 2 -->
      <div class="text-center">
        <img src="/public/images/testimonial2.jpg" alt="Client 2" class="w-24 h-24 object-cover rounded-full border-4 border-gray-300 mx-auto mb-4">
        <p class="text-sm text-gray-600 italic">"Amazing service and great support."</p>
        <h4 class="text-md font-medium">Emily Davis</h4>
      </div>
      <!-- Testimonial 3 -->
      <div class="text-center">
        <img src="/public/images/testimonial3.jpg" alt="Client 3" class="w-24 h-24 object-cover rounded-full border-4 border-gray-300 mx-auto mb-4">
        <p class="text-sm text-gray-600 italic">"Highly recommend this team."</p>
        <h4 class="text-md font-medium">Daniel Lee</h4>
      </div>
    </div>
  </section>
</main>
<?php include 'partials/footer.php'; ?>
