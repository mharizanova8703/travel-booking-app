import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                ink: '#17201d',
                sand: '#f6f3ed',
                lagoon: {
                    50: '#effcf9',
                    100: '#d7f7f0',
                    400: '#39c6ad',
                    500: '#19a88f',
                    600: '#0f8875',
                    700: '#0f6d60',
                    900: '#124b43',
                },
            },
            boxShadow: {
                soft: '0 18px 60px -18px rgba(23, 32, 29, 0.16)',
                glow: '0 14px 44px -12px rgba(25, 168, 143, 0.55)',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px) rotate(-2deg)' },
                    '50%': { transform: 'translateY(-12px) rotate(1deg)' },
                },
                'fade-up': {
                    '0%': { opacity: '0', transform: 'translateY(18px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
            },
            animation: {
                float: 'float 6s ease-in-out infinite',
                'fade-up': 'fade-up .7s ease-out both',
            },
        },
    },
    plugins: [],
};
