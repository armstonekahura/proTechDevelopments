<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Services</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="/proTechDevelopments/public/css/style.css">
</head>
<body class="bg-gradient-to-r from-green-400 to-blue-500 text-gray-800">


<?php
$service = $_GET['service'] ?? 'unknown'; // Capture the service from the query string
?>

<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold text-center mb-10">Apply for <?php echo ucfirst(str_replace('_', ' ', $service)); ?></h1>
    <form action="/proTechDevelopments/src/controllers/process_application.php" method="POST" class="max-w-xl mx-auto">
        <input type="hidden" name="service" value="<?php echo htmlspecialchars($service); ?>">

        <div class="mb-4">
            <label for="name" class="block text-lg font-medium">Your Name</label>
            <input type="text" id="name" name="name" class="w-full border px-4 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-lg font-medium">Your Email</label>
            <input type="email" id="email" name="email" class="w-full border px-4 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="details" class="block text-lg font-medium">Additional Details</label>
            <textarea id="details" name="details" rows="4" class="w-full border px-4 py-2 rounded"></textarea>
        </div>

        <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition">
            Submit Application
        </button>
    </form>
</div>
