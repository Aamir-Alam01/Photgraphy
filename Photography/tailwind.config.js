/** @type {import('tailwindcss').Config} */
module.exports = {
  
important: true,
// Active dark mode on class basis
darkMode: "class",
i18n: {
  locales: ["en-US"],
  defaultLocale: "en-US",
},
  content: ["*.html"],
  // These options are passed through directly to PurgeCSS

theme: {
  extend: {
    backgroundImage: {
      'wall-pattern': "url('assets/images/wall.jpg')",
    },
    boxShadow: {
      '3xl': '0 35px 60px -15px rgba(255, 255, 255, 0.3)',
    },
    backgroundImage: (theme) => ({
      check: "url('/icons/check.svg')",
      landscape: "url('/images/landscape/2.jpg')",
    }),
  },
},
variants: {
  extend: {
    backgroundColor: ["checked"],
    borderColor: ["checked"],
    inset: ["checked"],
    zIndex: ["hover", "active"],
  },
},
plugins: [],
future: {
  purgeLayersByDefault: true,
},
};





