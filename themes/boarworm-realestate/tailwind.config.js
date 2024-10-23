module.exports = {
    mode: 'jit',
    content: [
        "./layouts/**/*.{htm,js}",
        "./pages/**/*.{htm,js}",
        "./partials/**/*.{htm,js}",
        "./content/**/*.htm",
    ],
    theme: {
        fontFamily: {
            'sans': ['Poppins', 'Helvetica', 'Arial', 'sans-serif']
        },
        container: {
            center: true,
            padding: {
                DEFAULT: "0.5rem",
                sm: "1.5rem",
                lg: "3rem",
            }
        },
        extend: {
            colors: {
                'default': {
                    lightest: '#F5F5F5',
                    lighter: '#E0E0E0',
                    light: '#C6C6C6',
                    DEFAULT: '#ACACAC',
                    dark: '#8E8E8E',
                    darker: '#5F5F5F',
                    darkest: '#1A1A1A'
                },
                'primary': {
                    'lightest': '#fff9e6',
                    'lighter': '#ffe0b3',
                    'light': '#ffd280',
                    'DEFAULT': '#ffc04d',
                    'dark': '#b37400',
                    'darker': '#804d00',
                    'darkest': '#4d2e00'
                },
                'secondary': {
                    lightest: '#E6F2FF',
                    lighter: '#B3D1FF',
                    light: '#4C78C9',
                    DEFAULT: '#004395',
                    dark: '#003164',
                    darker: '#001A40',
                    darkest: '#000D1A'
                },


            },
            transitionDuration: {
                DEFAULT: '500ms',
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        'max-width': 'initial',
                        a: {
                            color: theme('colors.primary.DEFAULT'),
                            'text-decoration': 'none',
                            '&:hover': {
                                'text-decoration': 'underline',
                            },
                        },
                        p: {
                            color: theme('colors.gray.600'),
                            fontWeight: 300
                        },
                        h1: {color: theme('colors.primary-text'), 'font-weight': 400},
                        h2: {color: theme('colors.primary-text'), 'font-weight': 400},
                        h3: {color: theme('colors.primary-text'), 'font-weight': 400},
                        h4: {color: theme('colors.primary-text'), 'font-weight': 400},
                        h5: {color: theme('colors.primary-text'), 'font-weight': 400},
                        h6: {color: theme('colors.primary-text'), 'font-weight': 400},
                        '.fr-fic': {
                            width: 'auto',
                            margin: '0 auto',
                            display: 'block'
                        },
                        '.fr-fil': {
                            float: 'left',
                            margin: '8px 15px 15px 0 !important',
                            display: 'inline-block',
                        },
                        '.fr-fir': {
                            float: 'right',
                            margin: '8px 0 15px 15px !important',
                            display: 'inline-block'
                        }
                    }
                }
            }),
        },
    },
    plugins: [
        require('@tailwindcss/typography')
    ],
}
