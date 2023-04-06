/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js}"],
    theme: {
        extend: {
            flexBasis: {
                "1/10": "10%",
                "2/10": "20%",
                "3/10": "30%",
                "4/10": "40%",
                "5/10": "50%",
                "6/10": "60%",
                "7/10": "70%",
                "8/10": "80%",
                "9/10": "90%",
                "10/10": "100%",
            },
            height: {
                "1/7": "14.2857142%",
                "2/7": "28.5714285%",
                "3/7": "42.8571428%",
                "4/7": "57.1428571%",
                "5/7": "71.4285714%",
                "6/7": "85.7142857%",
            },
            keyframes: {
                primary: {
                    "0%": { bottom: 0 },
                    "100%": { bottom: 100 },
                },
            },
            animation: {
                naikturun: "primary 3s linear infinite",
            },
            keyframes: {
                wiggle: {
                    "0%, 100%": { transform: "rotate(-3deg)" },
                    "50%": { transform: "rotate(3deg)" },
                },
                naik: {
                    "0%": { transform: "translateY(0)" },
                    "100%": { transform: "translateY(-100%)" },
                },
                naik2: {
                    "0%": { transform: "translateY(100%)" },
                    "100%": { transform: "translateY(0)" },
                },
                naikterus: {
                    "0%": { top: "0" },
                    "100%": { top: "-100%" },
                },
                naikterus2: {
                    "0%": { top: "100%" },
                    "100%": { top: "0" },
                },
            },
            animation: {
                wiggle: "wiggle 1s ease-in-out infinite",
                naik: "naik 20s linear infinite",
                naik2: "naik2 20s linear infinite",
                naiklambat: "naik 30s linear infinite",
                naiklambat2: "naik2 30s linear infinite",
                naiklambatbanget: "naik 45s linear infinite",
                naiklambatbanget2: "naik2 45s linear infinite",
                naikterus: "naikterus 10s linear infinite",
                naikterus2: "naikterus2 10s linear infinite",
            },
        },
    },
    plugins: [],
};
