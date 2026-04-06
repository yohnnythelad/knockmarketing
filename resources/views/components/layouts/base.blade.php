<!DOCTYPE html>

<html class="dark" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Knockmarketing | Creative Kineticists</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary": "#b9c7e0",
                        "surface-container-high": "#2a2a2a",
                        "on-surface": "#e5e2e1",
                        "outline-variant": "#434656",
                        "tertiary-container": "#bf3003",
                        "on-secondary-fixed-variant": "#3a485b",
                        "inverse-primary": "#004ced",
                        "secondary-container": "#3c4a5e",
                        "on-primary": "#002682",
                        "primary-container": "#0052ff",
                        "on-surface-variant": "#c3c5d9",
                        "on-tertiary-container": "#ffddd5",
                        "on-background": "#e5e2e1",
                        "on-secondary-container": "#abb9d1",
                        "secondary-fixed-dim": "#b9c7e0",
                        "surface-dim": "#131313",
                        "on-tertiary": "#611300",
                        "primary": "#b7c4ff",
                        "on-error-container": "#ffdad6",
                        "surface-bright": "#3a3939",
                        "outline": "#8d90a2",
                        "inverse-surface": "#e5e2e1",
                        "surface-variant": "#353534",
                        "surface-tint": "#b7c4ff",
                        "tertiary": "#ffb4a1",
                        "tertiary-fixed-dim": "#ffb4a1",
                        "surface": "#131313",
                        "inverse-on-surface": "#313030",
                        "primary-fixed": "#dde1ff",
                        "surface-container-lowest": "#0e0e0e",
                        "background": "#131313",
                        "surface-container": "#201f1f",
                        "error-container": "#93000a",
                        "on-tertiary-fixed-variant": "#891e00",
                        "on-secondary": "#233144",
                        "on-primary-container": "#dfe3ff",
                        "on-tertiary-fixed": "#3c0800",
                        "on-primary-fixed-variant": "#0038b6",
                        "surface-container-low": "#1c1b1b",
                        "secondary-fixed": "#d5e3fc",
                        "on-secondary-fixed": "#0e1c2e",
                        "on-primary-fixed": "#001452",
                        "primary-fixed-dim": "#b7c4ff",
                        "on-error": "#690005",
                        "surface-container-highest": "#353534",
                        "error": "#ffb4ab",
                        "tertiary-fixed": "#ffdbd2"
                    },
                    fontFamily: {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-surface text-on-surface font-body selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopNavBar -->
    <nav
        class="fixed top-0 w-full z-50 bg-surface/40 backdrop-blur-xl dark:bg-neutral-950/40 shadow-[0_20px_50px_rgba(0,82,255,0.04)]">
        <div class="flex justify-between items-center px-8 py-4 max-w-7xl mx-auto">
            <a class="text-2xl font-bold tracking-tighter text-on-surface dark:text-neutral-100 font-headline"
                href="#">
                Knockmarketing
            </a>
            <div class="hidden md:flex items-center space-x-10">
                <a class="text-blue-600 dark:text-blue-400 font-bold border-b-2 border-blue-600 font-label"
                    href="#">Home</a>
                <a class="text-on-surface-variant dark:text-neutral-400 font-medium hover:text-blue-500 transition-colors duration-300 font-label"
                    href="#">Proyectos</a>
                <a class="text-on-surface-variant dark:text-neutral-400 font-medium hover:text-blue-500 transition-colors duration-300 font-label"
                    href="#">Servicios</a>
                <a class="text-on-surface-variant dark:text-neutral-400 font-medium hover:text-blue-500 transition-colors duration-300 font-label"
                    href="#">Contacto</a>
            </div>
            <button
                class="bg-primary-container text-on-primary-container px-6 py-2.5 rounded-lg font-bold text-sm hover:bg-on-primary-fixed-variant transition-all active:scale-95 duration-200 ease-in-out">
                Trabajemos Juntos
            </button>
        </div>
    </nav>

    {{ $slot }}
    <!-- Footer -->
    <footer class="bg-neutral-950 dark:bg-black w-full rounded-t-none">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 px-8 py-16 max-w-7xl mx-auto">
            <div class="col-span-1 md:col-span-1">
                <a class="text-xl font-bold tracking-tighter text-white font-headline" href="#">Knockmarketing</a>
                <p class="mt-6 text-neutral-500 text-sm leading-relaxed max-w-xs font-body">
                    Transformando visiones en realidades digitales cinéticas desde hace más de una década. Creative
                    Kineticists.
                </p>
            </div>
            <div class="flex flex-col gap-4">
                <h6 class="text-white font-headline font-bold uppercase tracking-widest text-xs">Menú</h6>
                <a class="text-neutral-500 hover:text-blue-400 transition-all text-sm font-label"
                    href="#">Home</a>
                <a class="text-neutral-500 hover:text-blue-400 transition-all text-sm font-label"
                    href="#">Proyectos</a>
                <a class="text-neutral-500 hover:text-blue-400 transition-all text-sm font-label"
                    href="#">Servicios</a>
                <a class="text-neutral-500 hover:text-blue-400 transition-all text-sm font-label"
                    href="#">Contacto</a>
            </div>
            <div class="flex flex-col gap-4">
                <h6 class="text-white font-headline font-bold uppercase tracking-widest text-xs">Social</h6>
                <a class="text-neutral-500 hover:text-blue-400 transition-all text-sm font-label"
                    href="#">Instagram</a>
                <a class="text-neutral-500 hover:text-blue-400 transition-all text-sm font-label"
                    href="#">LinkedIn</a>
                <a class="text-neutral-500 hover:text-blue-400 transition-all text-sm font-label"
                    href="#">Behance</a>
                <a class="text-neutral-500 hover:text-blue-400 transition-all text-sm font-label" href="#">Twitter
                    (X)</a>
            </div>
            <div class="flex flex-col gap-4">
                <h6 class="text-white font-headline font-bold uppercase tracking-widest text-xs">Legal</h6>
                <a class="text-neutral-500 hover:text-blue-400 transition-all text-sm font-label" href="#">Privacy
                    Policy</a>
                <a class="text-neutral-500 hover:text-blue-400 transition-all text-sm font-label" href="#">Terms
                    of Service</a>
                <a class="text-neutral-500 hover:text-blue-400 transition-all text-sm font-label"
                    href="#">Cookies</a>
            </div>
        </div>
        <div
            class="max-w-7xl mx-auto px-8 py-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-neutral-500 text-sm font-label opacity-80">© 2024 Knockmarketing. Creative Kineticists.</p>
            <div class="flex items-center gap-4 text-neutral-500 text-xs">
                <span>MADRID</span>
                <span class="w-1 h-1 rounded-full bg-neutral-800"></span>
                <span>MEXICO CITY</span>
                <span class="w-1 h-1 rounded-full bg-neutral-800"></span>
                <span>GLOBAL</span>
            </div>
        </div>
    </footer>
</body>

</html>

