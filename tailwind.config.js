/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        colors:{
            greyTbliss : '#414141',
            blueTbliss : '#4A5CED',
            redTbliss  : '#FF5055',
            footer     : '#BF1E5F',
            tbliss     : '#102448',
            greyDetTbliss : '#6A6A6A'

        },
        extend: {
            fontFamily: {
                bely: ["BelyDisplayW00-Regular", "cursive"],
                interRegular : ["inter-Regular", "serif"]
                
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
