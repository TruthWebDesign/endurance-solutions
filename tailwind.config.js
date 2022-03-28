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
            'sm': ['16px', '21px'],
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
        fontFamily:{
            'roboto-slab-light': 'RobotoSlab Light',
            'roboto-slab-medium': 'RobotoSlab Medium',
            'roboto-slab-regular': 'RobotoSlab Regular',
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
        },
        extend: {
            spacing:{
                '10px': '10px',
                '14px': '14px',
                '15px': '15px',
                '20px': '20px',
                '25px': '25px',
                '30px': '30px',
                '40px': '40px',
                '45px': '45px',
                '47px': '47px',
                '60px': '60px',
                
            },
            margin:{
                '14px': '14px',
                '15px': '15px',
                '25px': '25px',
                '60px': '60px',
            },
            maxWidth: {
                '100px': '100px',
                '302px': '302px',
                '410px': '410px',
                '700px': '700px',
                '845px': '845px',
                '1270px': '1270px',
            },
            colors:{
                'light-brown': '#FFF9F5',
                'light-brown-gray': '#B4896C',
                'lbg-opac': '#F8EFE8',
                'light-black': '#252E2C',
                'navy-blue': '#47526C',
                'navy-blue-gray': '#6F7885',
                'brown-primary': '#773F38',
            },
            borderRadius:{
                '40px': '40px',
            },
            gap:{
                '30px':'30px'
            },
            height:{
                '263px': '263px',   
            }
        },
    },
    plugins: [
        tailpress.tailwind
    ]
};
