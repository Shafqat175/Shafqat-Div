

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shafqat Ullah | Creative Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0f172a] text-white font-sans">

    <!-- Navbar -->
    <nav class="p-6 flex justify-between items-center max-w-7xl mx-auto">
        <h1 class="text-2xl font-bold tracking-tighter italic text-gold-500">Shafqat<span class="text-yellow-500">.Dev</span></h1>
        <div class="space-x-6 text-gray-400">
            <a href="#projects" class="hover:text-white">Projects</a>
            <a href="#shairi" class="hover:text-white">Aesthetic</a>
            <a href="#contact" class="hover:text-white">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="py-20 text-center max-w-4xl mx-auto">
        <h2 class="text-5xl md:text-7xl font-extrabold mb-6">Designing bold ideas.<br>Building real products.</h2>
        <p class="text-gray-400 text-lg mb-8">I craft modern web experiences with a focus on performance, clean UX, and elegant details. Explore my selected projects and a curated Urdu shairi section.</p>
        <div class="flex justify-center gap-4">
            <a href="#projects" class="bg-yellow-500 text-black px-8 py-3 rounded-full font-bold">View Projects</a>
            <a href="#contact" class="border border-gray-600 px-8 py-3 rounded-full font-bold">Contact Me</a>
        </div>
    </header>

    <!-- Stats -->
    <div class="flex justify-center gap-12 py-10 border-y border-gray-800">
        <div class="text-center"><p class="text-3xl font-bold">{{ $projectsCount }}</p><p class="text-gray-500">Projects</p></div>
        <div class="text-center"><p class="text-3xl font-bold">{{ $poetryCount }}</p><p class="text-gray-500">Shairi</p></div>
    </div>

    <!-- Projects Section -->
    <section id="projects" class="py-20 max-w-7xl mx-auto px-6">
        <h3 class="text-3xl font-bold mb-10 text-yellow-500">Selected Projects</h3>
        <div class="grid md:grid-cols-3 gap-8">
            @forelse($projects as $project)
                <div class="bg-gray-900 p-6 rounded-2xl border border-gray-800 hover:border-yellow-500 transition">
                    <h4 class="text-xl font-bold mb-2">{{ $project->title }}</h4>
                    <p class="text-gray-400 text-sm">{{ $project->description }}</p>
                </div>
            @empty
                <p class="text-gray-500 italic">No projects yet. Add some from Admin Panel.</p>
            @endforelse
        </div>
    </section>

    <!-- Shairi Section -->
    <section id="shairi" class="py-20 bg-black/30">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-10 italic">Urdu Shairi & Aesthetics</h3>
            <div class="grid md:grid-cols-2 gap-6">
                @forelse($shairi as $post)
                    <div class="p-8 bg-[#1e293b] rounded-xl shadow-2xl border-l-4 border-yellow-500">
                        <p class="text-2xl font-serif leading-relaxed text-right rtl">{{ $post->content }}</p>
                        <p class="text-sm text-gray-500 mt-4 text-left">— {{ $post->poet ?? 'Unknown' }}</p>
                    </div>
                @empty
                    <p class="text-gray-500">No shairi yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 max-w-xl mx-auto px-6">
        <h3 class="text-3xl font-bold mb-6 text-center">Get In Touch</h3>
        <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="name" placeholder="Name" class="w-full p-4 bg-gray-900 border border-gray-800 rounded-lg">
            <input type="email" name="email" placeholder="Email" class="w-full p-4 bg-gray-900 border border-gray-800 rounded-lg">
            <textarea name="message" placeholder="Message" class="w-full p-4 bg-gray-900 border border-gray-800 rounded-lg h-32"></textarea>
            <button class="w-full bg-yellow-500 text-black font-bold py-4 rounded-lg">Send Message</button>
        </form>
    </section>

    <footer class="py-10 text-center text-gray-600 border-t border-gray-800">
        <p>© 2026 Shafqat Ullah • Crafted with Laravel & Tailwind.</p>
    </footer>

</body>
</html>