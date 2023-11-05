module.exports = {
    mode: 'jit',
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: {
        content: [
            './*.php',
            './templates/**/*.php',
            './build/js/**/*.js',
            './blocks/**/*.php'
        ],
        options: {
            safelist: [],
            blocklist: [],
            keyframes: true,
            fontFace: true,
        },
    },
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '20px',
                sm: '20px',
                lg: '',
            },
        },
        fontFamily: {
            sans:['"Roboto"', 'sans-serif'],
            serif: ['Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
            mono: ['Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
        },
        extend: {
            colors: {
                link: {
                    DEFAULT: '#3182ce',
                    'hover': '#63b3ed',
                },
                'sage-green':'#8F9779',
                'warm-brown':'#8B4513',
                terracotta:'#E2725B',
                'dark-grey':'#303030',
                'light-white': '#F6F6F6',
                'light-taupe': '#C2B280',
                'neutral-grey':'#808080'
            },
            fontSize: {
                xxs: '0.675rem',
            },
            lineHeight: {
                tighter: '1.125',
            },
        }
    },
    variants: {
        textColor: ['responsive', 'hover', 'focus', 'visited'],
    },
    plugins: [
        ({addUtilities}) => {
            const utils = {
                '.translate-x-half': {
                    transform: 'translateX(50%)',
                },
            };
            addUtilities(utils, ['responsive'])
        }
    ]
};
