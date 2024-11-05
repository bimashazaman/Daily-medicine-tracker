<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicine Management App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-100">

    <!-- Header -->
    <header class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-400">Medicine Manager</h1>
            <nav class="space-x-6">
                <a href="#features" class="hover:text-blue-400">Features</a>
                <a href="#testimonials" class="hover:text-blue-400">Testimonials</a>
                <a href="#contact" class="hover:text-blue-400">Contact</a>
            </nav>
            <a href="{{ route('login') }}"
                class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Login</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gray-900 text-gray-100">
        <div class="max-w-7xl mx-auto px-4 py-20 text-center">
            <h2 class="text-4xl font-bold mb-4 text-blue-400">Manage Your Medicine Seamlessly</h2>
            <p class="text-lg mb-8 text-gray-300">Track, schedule, and stay on top of your medications with ease.
                Designed for simplicity and reliability.</p>
            <a href="{{ route('register') }}"
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-8 rounded-md shadow-md">
                Get Started for Free
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-800 text-gray-100">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold text-blue-400 mb-10">Features</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-900 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <h4 class="text-xl font-semibold text-blue-400 mb-2">Track Your Medications</h4>
                    <p class="text-gray-300">Effortlessly record all medications, including dosage, frequency, and
                        dates.</p>
                </div>
                <div class="bg-gray-900 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <h4 class="text-xl font-semibold text-blue-400 mb-2">Receive Reminders</h4>
                    <p class="text-gray-300">Set reminders to stay consistent with your health regimen.</p>
                </div>
                <div class="bg-gray-900 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <h4 class="text-xl font-semibold text-blue-400 mb-2">Accessible Anywhere</h4>
                    <p class="text-gray-300">Access your medication list on any device, anytime, anywhere.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-gray-900 text-gray-100">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold text-blue-400 mb-10">What Our Users Say</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <p class="text-gray-300 mb-4">"This app makes it so easy to manage my medications and keep track of
                        doses. Highly recommended!"</p>
                    <p class="font-semibold text-blue-400">- Jane Doe</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <p class="text-gray-300 mb-4">"The reminders are a lifesaver! No more missed doses, and it's so
                        user-friendly."</p>
                    <p class="font-semibold text-blue-400">- John Smith</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <p class="text-gray-300 mb-4">"Absolutely love it! Simple, reliable, and very well-designed."</p>
                    <p class="font-semibold text-blue-400">- Sarah Lee</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-blue-500 text-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-4">Start Managing Your Health Today</h3>
            <p class="text-lg mb-8">Sign up for free and take control of your medications.</p>
            <a href="{{ route('register') }}"
                class="bg-gray-900 hover:bg-gray-800 text-white font-semibold py-3 px-8 rounded-md shadow-md">
                Join Now
            </a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer id="contact" class="bg-gray-800 text-gray-400 py-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="mb-4">&copy; 2024 Medicine Manager. All rights reserved.</p>
            <p>For support, contact us at <a href="mailto:support@medicinemanager.com"
                    class="text-blue-400 hover:underline">support@medicinemanager.com</a></p>
            <div class="mt-6">
                <a href="#" class="text-gray-400 hover:text-gray-200 mx-2">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-gray-200 mx-2">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>

</html>
