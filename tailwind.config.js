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
            'roboto-slab-bold': 'RobotoSlab Bold',
            'roboto-regular': 'Roboto Regular',
            'roboto-medium': 'Roboto Medium',
            'lobster-regular': 'Lobster Regular',
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
        backgroundPosition: {
            '20%': '20%',
        },
        extend: {
            spacing:{
                '4px': '4px',
                '10px': '10px',
                '13px': '13px',
                '14px': '14px',
                '15px': '15px',
                '20px': '20px',
                '25px': '25px',
                '30px': '30px',
                '34px': '34px',
                '40px': '40px',
                '45px': '45px',
                '47px': '47px',
                '50px': '50px',
                '60px': '60px',
                '66px': '66px',
                '78px': '78px',
                '88px': '88px',
                '104px': '104px',
                
            },
            margin:{
                '14px': '14px',
                '15px': '15px',
                '25px': '25px',
                '30px': '30px',
                '60px': '60px',
                '70px': '70px',
            },
            maxWidth: {
                '100px': '100px',
                '302px': '302px',
                '410px': '410px',
                '542px': '542px',
                '700px': '700px',
                '845px': '845px',
                '1270px': '1270px',
                '1570px': '1570px',
                '1500px': '1500px',
                '1864px': '1864px',
                '100%': '100%',
            },
            maxHeight: {
                '700px': '700px',
            },
            colors:{
                'light-brown': '#FFF9F5',
                'light-brown-gray': '#B4896C',
                'lbg-opac': '#F8EFE8',
                'light-black': '#252E2C',
                'navy-blue': '#47526C',
                'navy-blue-gray': '#6F7885',
                'brown-primary': '#773F38',
                'gray-navy': '#4E4E4E',
            },
            borderRadius:{
                '40px': '40px',
            },
            gap:{
                '14px':'14px',
                '18px':'18px',
                '30px':'30px'
            },
            width:{
                '20px': '20px',
            },
            height:{
                '40px': '40px',
                '50px': '50px',
                '105px': '105px',
                '263px': '263px',
                '300px': '300px',
                '440px': '440px',
                '530px': '530px',   
                '770px': '770px',
            },
            flexBasis: {
                '13px': '13px',
                '24px': '24px',
                '83.5%': '83.5%',
            }
        },
    },
    plugins: [
        tailpress.tailwind
    ]
};
