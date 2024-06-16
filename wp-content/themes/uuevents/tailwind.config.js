/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  safelist: [
    'col-span-1',
    'col-span-9',
    'col-span-2',
    'col-span-7',
    'col-span-8',
    'gap-12',
    'w-[2px]',
    'bg-pale-blue',
    'bg-marketing-product',
    'bg-marketing-feature',
    'bg-marketing-user',
    'bg-marketing-product/10',
    'bg-marketing-feature/10',
    'bg-marketing-user/10',
    'text-marketing-product',
    'text-marketing-feature',
    'text-marketing-user',
    'text-action-lighter-blue',
    'w-10',
    'h-10',
    'x-2/4',
    '-ml-5',
    'xl:-ml-4',
    'xl:pl-4',
    'group-hover:text-action',
    'inline-flex'
  ],
  theme: {
    fontFamily: {
      'sans': ['Proxima Nova', 'ui-sans-serif', 'system-ui'],
      'display': ['Proxima Nova'],
      'body': ['Proxima Nova'],
    },
    extend: {
      borderRadius: {
        'lg' : '10px',
      },
      colors: {
        primary: 'orange',
        secondary: '#216CFF',
        brand: '#2c405a',
        action: '#216CFF',
        'dark-blue' : '#182a44',
        'action-dark': '#105890',
        'action-light-blue': '#52b4ff',
        'action-lighter-blue' : '#3B8BCA',
        'pale-blue': '#E3EBF3',
        dark: '#182a44',
        light: '#eef5fc',
        'light-gradient': '#eef5fc',
        purple: '#825EB8',
        'electric-purple': '#9643FF',
        morado: '#712F79',
        verde: '#117E15',
        'rojo' : '#CF2A2A',
        orange : '#DA6625',
        'blue': {
          100: '#eef5fc', // pale blue
          200: '#e3ebf3', // medium pale blue
          300: '#c7d8e8', // dark pale blue
          400: '#52b4ff', // action light blue
          600: '#2c405a',
          900: '#182a44', // dark blue
        },
        'gray': {
          200: '#E5E7EB',
          300: '#D1D5DB',
          400: '#828282',
          500: '#9ca3af',
        }
      },
    },
  },
  plugins: [],
};
export default config;
