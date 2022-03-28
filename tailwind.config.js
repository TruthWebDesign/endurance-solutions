const _ = require("lodash");
const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    content: [
        './*/*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            center: true,
            screens: {
              'sm': '1790px'
            },
            padding: {
              DEFAULT: '15px'
            }
        },
        fontSize: {
            'tn': ['14px', '24px'],
            'sm': ['16px', '26px'],
            'rg': ['18px', '28px'],
            'md': ['20px', '30px'],
            'lg': ['24px', '34px'],
            'xl': ['30px', '40px'],
            'xls': ['36px', '46px'],
            '1xl': ['40px', '50px'],
            '2xl': ['48px', '58px'],
            '2/2xl': ['64px', '54px'],
            '3xl': ['80px', '96px']
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme))
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xslg': '1200px',
            'xlg': '1440px',
            '2xlg': '1540px',
            '16inch': '1536px',
            'xl': tailpress.theme('settings.layout.wideSize', theme)
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
