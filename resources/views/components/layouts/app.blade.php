<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0f8875">
    <title>{{ isset($title) ? $title.' · Roamly' : 'Roamly' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        (() => {
            const preference = localStorage.getItem('roamly-theme');
            const dark = preference === 'dark' || (!preference && matchMedia('(prefers-color-scheme: dark)').matches);
            document.documentElement.classList.toggle('dark', dark);
        })();
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body x-data="{ mobileOpen: false, theme: document.documentElement.classList.contains('dark') }"
      @keydown.escape.window="mobileOpen = false"
      class="min-h-screen overflow-x-hidden">
    <header class="fixed inset-x-0 top-0 z-50 px-3 pt-3 sm:px-6 sm:pt-5">
        <nav class="glass mx-auto flex h-16 max-w-7xl items-center justify-between rounded-2xl px-4 sm:px-6" aria-label="Primary navigation">
            <a href="{{ route('home') }}" wire:navigate class="group flex items-center gap-2.5" aria-label="Roamly home">
                <span class="grid size-9 place-items-center rounded-xl bg-lagoon-600 text-white shadow-glow transition group-hover:rotate-6">
                    <i data-lucide="navigation" class="size-5"></i>
                </span>
                <span class="text-lg font-extrabold tracking-tight">roamly<span class="text-lagoon-500">.</span></span>
            </a>

            <div class="hidden items-center gap-1 lg:flex">
                <a class="nav-link" href="#discover">Discover</a>
                <a class="nav-link" href="#stays">Stays</a>
                <a class="nav-link" href="#experiences">Experiences</a>
                <a class="nav-link" href="#journal">Travel journal</a>
            </div>

            <div class="flex items-center gap-2">
                <button class="icon-button" type="button"
                        @click="theme = !theme; document.documentElement.classList.toggle('dark', theme); localStorage.setItem('roamly-theme', theme ? 'dark' : 'light')"
                        :aria-label="theme ? 'Switch to light mode' : 'Switch to dark mode'">
                    <i x-show="!theme" data-lucide="moon" class="size-[18px]"></i>
                    <i x-show="theme" x-cloak data-lucide="sun" class="size-[18px]"></i>
                </button>
                <a href="#" class="hidden rounded-full bg-ink px-5 py-2.5 text-sm font-bold text-white transition hover:-translate-y-0.5 hover:bg-lagoon-700 dark:bg-white dark:text-ink sm:block">Sign in</a>
                <button class="icon-button lg:hidden" type="button" @click="mobileOpen = !mobileOpen" :aria-expanded="mobileOpen" aria-controls="mobile-menu" aria-label="Toggle menu">
                    <i x-show="!mobileOpen" data-lucide="menu" class="size-5"></i>
                    <i x-show="mobileOpen" x-cloak data-lucide="x" class="size-5"></i>
                </button>
            </div>
        </nav>

        <div id="mobile-menu" x-show="mobileOpen" x-cloak
             x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-3"
             @click.outside="mobileOpen = false"
             class="glass mx-auto mt-2 max-w-7xl rounded-2xl p-3 lg:hidden">
            <div class="grid gap-1">
                <a class="nav-link" href="#discover" @click="mobileOpen = false">Discover</a>
                <a class="nav-link" href="#stays" @click="mobileOpen = false">Stays</a>
                <a class="nav-link" href="#experiences" @click="mobileOpen = false">Experiences</a>
                <a class="nav-link" href="#journal" @click="mobileOpen = false">Travel journal</a>
                <a class="mt-2 rounded-xl bg-ink px-4 py-3 text-center text-sm font-bold text-white dark:bg-white dark:text-ink sm:hidden" href="#">Sign in</a>
            </div>
        </div>
    </header>

    <main>{{ $slot }}</main>

    <div x-data="{ show: false, message: '', type: 'success', timer: null }"
         @toast.window="message = $event.detail.message; type = $event.detail.type; show = true; clearTimeout(timer); timer = setTimeout(() => show = false, 3200)"
         x-show="show" x-cloak
         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-5 scale-95" x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 translate-y-3"
         class="fixed bottom-5 left-1/2 z-[70] flex -translate-x-1/2 items-center gap-3 rounded-2xl border border-white/20 bg-ink px-5 py-4 text-sm font-semibold text-white shadow-2xl dark:bg-white dark:text-ink">
        <span class="grid size-7 place-items-center rounded-full bg-lagoon-500 text-white"><i data-lucide="heart" class="size-4"></i></span>
        <span x-text="message"></span>
    </div>

    <footer class="border-t border-stone-200/80 px-5 py-8 dark:border-white/10">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-3 text-sm text-stone-500 sm:flex-row">
            <p>© {{ date('Y') }} Roamly. Go where you feel alive.</p>
            <div class="flex gap-5"><a class="hover:text-lagoon-600" href="#">Privacy</a><a class="hover:text-lagoon-600" href="#">Terms</a></div>
        </div>
    </footer>
    @livewireScripts
</body>
</html>
