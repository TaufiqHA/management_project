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
            primaryColor: "#E4E4E4",
            textPrimaryColor: "#646464",
            customSuccess: "#7AE69A",
            customWhite: "#FFFFFF",
        },
        borderRadius: {
            customAuthMd: "49px",
            customAuthLg: "52px",
            customAuthSm: "30px",
        },
        fontSize: {
            lg: "2.188rem",
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: ["light"],
    },
};
