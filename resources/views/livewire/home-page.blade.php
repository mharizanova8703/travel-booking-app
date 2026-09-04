<div>
    <section class="relative isolate min-h-[760px] overflow-hidden bg-[#123d36] px-5 pb-24 pt-32 text-white sm:px-8 sm:pt-40 lg:min-h-[820px]">
        <div class="hero-grid absolute inset-0 opacity-30"></div>
        <div class="absolute -left-28 top-32 size-80 rounded-full bg-lagoon-400/20 blur-3xl"></div>
        <div class="absolute -right-20 bottom-10 size-96 rounded-full bg-amber-300/15 blur-3xl"></div>

        <div class="relative mx-auto grid max-w-7xl items-center gap-14 lg:grid-cols-[1.05fr_.95fr]">
            <div class="animate-fade-up">
                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3 py-2 text-xs font-bold uppercase tracking-[.18em] backdrop-blur">
                    <span class="size-2 animate-pulse rounded-full bg-amber-300"></span> Your world, beautifully curated
                </div>
                <h1 class="max-w-3xl text-5xl font-extrabold leading-[1.05] tracking-[-.045em] sm:text-6xl lg:text-7xl">Find the places<br><span class="text-[#99eadb]">you'll never forget.</span></h1>
                <p class="mt-6 max-w-xl text-base leading-7 text-white/70 sm:text-lg">Handpicked stays, extraordinary escapes, and local stories—thoughtfully gathered for your next chapter.</p>

                <div x-data="{ focused: false }" class="mt-9 max-w-3xl rounded-[1.6rem] bg-white p-2 text-ink shadow-2xl transition duration-300 dark:bg-[#101b18] dark:text-white" :class="focused && 'ring-4 ring-lagoon-300/25 scale-[1.01]'">
                    <form class="grid gap-1 sm:grid-cols-[1.4fr_1fr_1fr_auto]" @focusin="focused = true" @focusout="focused = false">
                        <label class="flex items-center gap-3 rounded-2xl px-4 py-3 transition hover:bg-stone-100 dark:hover:bg-white/5">
                            <i data-lucide="map-pin" class="size-5 text-lagoon-600"></i>
                            <span class="min-w-0"><span class="block text-[10px] font-bold uppercase tracking-widest text-stone-400">Where</span><input class="w-full border-0 bg-transparent p-0 text-sm font-semibold placeholder:text-stone-500 focus:ring-0" placeholder="Search destinations"></span>
                        </label>
                        <label class="flex items-center gap-3 rounded-2xl px-4 py-3 transition hover:bg-stone-100 dark:hover:bg-white/5">
                            <i data-lucide="calendar-days" class="size-5 text-lagoon-600"></i><span><span class="block text-[10px] font-bold uppercase tracking-widest text-stone-400">Dates</span><input type="text" class="w-full border-0 bg-transparent p-0 text-sm font-semibold placeholder:text-stone-500 focus:ring-0" placeholder="Add dates"></span>
                        </label>
                        <label class="flex items-center gap-3 rounded-2xl px-4 py-3 transition hover:bg-stone-100 dark:hover:bg-white/5">
                            <i data-lucide="users" class="size-5 text-lagoon-600"></i><span><span class="block text-[10px] font-bold uppercase tracking-widest text-stone-400">Guests</span><input type="text" class="w-full border-0 bg-transparent p-0 text-sm font-semibold placeholder:text-stone-500 focus:ring-0" placeholder="2 travelers"></span>
                        </label>
                        <button type="button" class="grid min-h-14 place-items-center rounded-2xl bg-lagoon-600 px-6 font-bold text-white shadow-glow transition hover:scale-[1.03] hover:bg-lagoon-700" aria-label="Search"><i data-lucide="search" class="size-5"></i><span class="sm:hidden">Search</span></button>
                    </form>
                </div>

                <div class="mt-7 flex flex-wrap items-center gap-x-6 gap-y-3 text-sm text-white/65">
                    <span class="flex items-center gap-2"><i data-lucide="shield-check" class="size-4 text-[#99eadb]"></i> Verified stays</span>
                    <span class="flex items-center gap-2"><i data-lucide="headphones" class="size-4 text-[#99eadb]"></i> 24/7 support</span>
                    <span class="flex items-center gap-2"><i data-lucide="badge-check" class="size-4 text-[#99eadb]"></i> Best price promise</span>
                </div>
            </div>

            <div class="relative hidden min-h-[510px] lg:block" aria-hidden="true">
                <div class="absolute right-5 top-3 h-[460px] w-[360px] animate-float overflow-hidden rounded-[2.4rem] border border-white/15 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=900&q=85" alt="" class="h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent"></div>
                    <div class="absolute bottom-7 left-7"><p class="text-xs font-bold uppercase tracking-[.2em] text-white/70">Hidden gem</p><p class="mt-1 text-2xl font-extrabold">Nusa Penida</p><p class="text-sm text-white/70">Bali, Indonesia</p></div>
                </div>
                <div class="glass absolute bottom-4 left-2 flex items-center gap-3 rounded-2xl p-3 text-ink shadow-2xl dark:text-white">
                    <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=160&q=80" class="size-14 rounded-xl object-cover" alt="">
                    <div class="pr-3"><p class="text-xs text-stone-500">Travelers love it</p><p class="font-extrabold">4.9 <span class="text-amber-400">★</span></p></div>
                </div>
            </div>
        </div>
    </section>

    <section id="discover" class="px-5 py-20 sm:px-8 lg:py-28">
        <div class="mx-auto max-w-7xl">
            <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                <div><p class="text-xs font-extrabold uppercase tracking-[.22em] text-lagoon-600">Trending now</p><h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">Places worth the journey.</h2></div>
                <a href="#" class="group flex items-center gap-2 text-sm font-bold text-lagoon-700 dark:text-lagoon-400">Explore all destinations <i data-lucide="arrow-right" class="size-4 transition group-hover:translate-x-1"></i></a>
            </div>

            <div x-data="{ category: 'All' }" class="mt-8">
                <div class="flex gap-2 overflow-x-auto pb-4 [scrollbar-width:none]">
                    @foreach ([['All','sparkles'],['Coastal','waves'],['Nature','mountain'],['Culture','building-2'],['Tropical','sun']] as [$category, $icon])
                        <button @click="category = '{{ $category }}'" :class="category === '{{ $category }}' ? 'bg-ink text-white dark:bg-white dark:text-ink' : 'bg-white text-stone-600 dark:bg-white/5 dark:text-stone-300'" class="flex shrink-0 items-center gap-2 rounded-full border border-stone-200/70 px-4 py-2.5 text-sm font-bold transition hover:-translate-y-0.5 dark:border-white/10"><i data-lucide="{{ $icon }}" class="size-4"></i>{{ $category }}</button>
                    @endforeach
                </div>

                <div class="-mx-5 mt-4 flex snap-x snap-mandatory gap-5 overflow-x-auto px-5 pb-8 [scrollbar-width:none] sm:-mx-8 sm:px-8 lg:mx-0 lg:grid lg:grid-cols-3 lg:overflow-visible lg:px-0">
                    @foreach ($destinations as [$name, $country, $category, $price, $rating, $image, $tagline])
                        <article x-show="category === 'All' || category === '{{ $category }}'" x-transition class="group min-w-[82vw] snap-center sm:min-w-[390px] lg:min-w-0">
                            <div class="relative h-[390px] overflow-hidden rounded-[2rem] bg-stone-200">
                                <img src="{{ $image }}" alt="{{ $name }}, {{ $country }}" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/5 to-black/10"></div>
                                <span class="absolute left-4 top-4 rounded-full bg-white/90 px-3 py-1.5 text-xs font-extrabold text-ink backdrop-blur">{{ $category }}</span>
                                <button wire:click="toggleWishlist('{{ $name }}')" wire:loading.attr="disabled" class="absolute right-4 top-4 grid size-11 place-items-center rounded-full bg-white/90 text-ink backdrop-blur transition hover:scale-110" aria-label="Save {{ $name }}">
                                    <i data-lucide="heart" class="size-5 transition {{ in_array($name, $wishlist, true) ? 'fill-rose-500 text-rose-500' : '' }}"></i>
                                </button>
                                <div class="absolute inset-x-0 bottom-0 p-6 text-white">
                                    <div class="flex items-end justify-between gap-4"><div><p class="text-sm text-white/70">{{ $country }}</p><h3 class="mt-1 text-2xl font-extrabold">{{ $name }}</h3><p class="mt-1 text-xs text-white/70">{{ $tagline }}</p></div><div class="rounded-xl bg-white/15 px-3 py-2 text-right backdrop-blur"><p class="text-xs text-white/70">from</p><p class="font-extrabold">${{ $price }}<span class="text-xs font-normal">/night</span></p></div></div>
                                    <div class="mt-4 flex items-center justify-between border-t border-white/20 pt-4 text-xs"><span class="flex items-center gap-1"><i data-lucide="star" class="size-3.5 fill-amber-300 text-amber-300"></i> {{ $rating }} guest rating</span><span class="font-bold transition group-hover:translate-x-1">View escape →</span></div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <p class="text-center text-xs text-stone-400 lg:hidden">Swipe to explore <span class="ml-1">→</span></p>
            </div>
        </div>
    </section>

    <section id="stays" class="bg-white/60 px-5 py-20 dark:bg-white/[.025] sm:px-8 lg:py-28">
        <div class="mx-auto max-w-7xl">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div class="relative min-h-[520px]">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1100&q=85" alt="A private villa overlooking the ocean" loading="lazy" class="absolute inset-y-0 left-0 h-[470px] w-[88%] rounded-[2.3rem] object-cover shadow-soft">
                    <div class="glass absolute bottom-0 right-0 max-w-[260px] rounded-3xl p-5">
                        <div class="flex -space-x-2">
                            @foreach ([64,65,66,68] as $face)<img src="https://i.pravatar.cc/80?img={{ $face }}" alt="" class="size-9 rounded-full border-2 border-white object-cover dark:border-ink">@endforeach
                        </div>
                        <p class="mt-3 text-sm font-extrabold">Loved by 38k+ travelers</p><p class="mt-1 text-xs leading-5 text-stone-500">Real places. Honest reviews. Exceptional memories.</p>
                    </div>
                    <button class="absolute left-6 top-6 grid size-14 place-items-center rounded-full bg-white text-ink shadow-xl transition hover:scale-110" aria-label="Play the Roamly story"><i data-lucide="play" class="ml-0.5 size-5 fill-current"></i></button>
                </div>
                <div>
                    <p class="text-xs font-extrabold uppercase tracking-[.22em] text-lagoon-600">The Roamly difference</p>
                    <h2 class="mt-4 text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl">Not just somewhere to stay. <span class="text-lagoon-600">Somewhere to feel.</span></h2>
                    <p class="mt-6 max-w-xl leading-7 text-stone-500 dark:text-stone-400">We visit, verify, and handpick every escape. From a cliffside casa to a cabin beneath the northern lights, each place has a story worth stepping into.</p>
                    <div class="mt-8 grid grid-cols-3 gap-4 border-y border-stone-200 py-7 dark:border-white/10">
                        @foreach ([['12k+','Curated stays'],['120','Countries'],['4.9/5','Guest love']] as [$number,$label])<div><p class="text-2xl font-extrabold text-lagoon-600 sm:text-3xl">{{ $number }}</p><p class="mt-1 text-xs text-stone-500">{{ $label }}</p></div>@endforeach
                    </div>
                    <a href="#" class="mt-8 inline-flex items-center gap-2 rounded-full bg-ink px-6 py-3.5 text-sm font-bold text-white transition hover:-translate-y-1 hover:shadow-xl dark:bg-white dark:text-ink">How we choose stays <i data-lucide="arrow-right" class="size-4"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="experiences" class="px-5 py-20 sm:px-8 lg:py-28">
        <div class="mx-auto max-w-7xl overflow-hidden rounded-[2.5rem] bg-[#17201d] text-white">
            <div class="grid lg:grid-cols-[.9fr_1.1fr]">
                <div class="flex flex-col justify-center p-8 sm:p-12 lg:p-16">
                    <i data-lucide="quote" class="size-10 text-lagoon-400"></i>
                    <blockquote class="mt-7 text-2xl font-semibold leading-relaxed sm:text-3xl">“Roamly found us the kind of place we would never have discovered ourselves—a tiny home above the clouds.”</blockquote>
                    <div class="mt-8 flex items-center gap-4"><img src="https://i.pravatar.cc/100?img=47" alt="Maya Chen" class="size-12 rounded-full object-cover"><div><p class="font-bold">Maya Chen</p><p class="text-sm text-white/50">Lisbon → Madeira</p></div></div>
                </div>
                <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=85" alt="Traveler overlooking a mountain landscape" loading="lazy" class="h-full min-h-[420px] w-full object-cover">
            </div>
        </div>
    </section>

    <section id="journal" class="px-5 pb-20 sm:px-8 lg:pb-28">
        <div class="relative mx-auto max-w-7xl overflow-hidden rounded-[2.5rem] bg-gradient-to-br from-lagoon-600 to-[#0e5c51] px-7 py-14 text-center text-white sm:px-14 sm:py-20">
            <div class="hero-grid absolute inset-0 opacity-20"></div><div class="absolute -left-20 -top-20 size-64 rounded-full bg-white/10 blur-2xl"></div>
            <div class="relative mx-auto max-w-2xl"><p class="text-xs font-bold uppercase tracking-[.25em] text-lagoon-100">Your next chapter</p><h2 class="mt-4 text-4xl font-extrabold tracking-tight sm:text-5xl">The world is waiting.<br>Where will you go?</h2><p class="mx-auto mt-5 max-w-lg text-sm leading-6 text-white/70">Tell us what moves you, and we’ll turn it into a journey that feels unmistakably yours.</p><button class="mt-8 rounded-full bg-white px-7 py-4 text-sm font-extrabold text-lagoon-700 shadow-xl transition hover:-translate-y-1 hover:scale-105">Start planning your escape</button></div>
        </div>
    </section>
</div>
