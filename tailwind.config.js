/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            primaryColor: "#F3F3F3",
            textPrimaryColor: "#646464",
            customSuccess: "#7AE69A",
        },
        borderRadius: {
            customAuthMd: "49px",
            customAuthLg: "52px",
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: ["light"],
    },
};
