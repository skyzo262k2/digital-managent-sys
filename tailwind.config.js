/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#ff8000",
                secondary: "#f1f0f2", // replace this with your actual secondary color
            },
        },
    },
    plugins: [],
};
