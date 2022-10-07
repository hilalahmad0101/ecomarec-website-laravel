/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './resources/**/*.blade.php', './node_modules/tw-elements/dist/js/**/*.js',
  ],
    theme: {
      clipPath: {
        customeploy: "polygon(0 0, 100% 0, 100% 100%, 50% 85%, 0 100%)",
      },
      colors: {
          blue:{
            900:"black"
          }
      },
      container: {
        maxWidth: {
          lg: "1024px",
        },
      },
  
      extend: {
        screens: {
          "2xl": "1636px",
          "1xl": "1440px",
          "1lg": "1280px",
          "1sm": "540px",
          "xs": "440px",
        },
        inset: {
          '3.5': '2px',
          '10.5': '0px',
        },
        spacing: {
          btn:"0px"
         },
        height: {
          "vh":"40vh",
          "vh2":"25vh",
          "vh3":"30vh",
          "vh4":"60vh"
         },
         zIndex: {
          '60': '60',
        },
        width: {
          1280:"1280px",
          4.5: "200px",
          4.6: "150px",
          1220: "790px",
          550: "550px",
          450: "300px",
          120: "120px",
          340: "300px",
          250: "150px",
          540: "600px",
          50: "50px",
          90: "90px",
          300: "250px",
          330: "270px",
          70: "60%",
          460: "490px",
        },
        maxWidth: {
          790: "790px",
          10: "60px",
        },
        backgroundSize: {
          50: "50px",
        },
        backgroundImage: {
          "hero-pattern": "url('./public/images/menu-img3.jpg')",
          "footer-texture": "url('/img/footer-texture.png')",
        },
        inset: {
          50: "50%",
        },
        translate: {
          60: "20%",
        },
        maxHeight: {
          101: "900px",
        },
        fontSize: {
          xxs: "8px",
          xsm: "10px",
          llg: "17px",
        },
        padding: {
          105: "70px",
          106: "70px",
        },
        backgroundImage: theme => ({
          'hero-pattern': "url('./public/images/banner7.jpg')",
          
         }),
        colors: {
          custome: {
            100: "#F2F2F2",
            200: " rgba(0, 0, 0, 0 , 0.2)",
  
          },
          
          customeorangeText:{
            500:"#ff6801",
  
          },
          customeorange:{
              500:"#ff6801",
              600:"#FF731D"
          },
          btncolor:{
              100:"#F0B146",
              
          },
          textColor:{
            100:"#ffa500",
            200:"#d48c0b"
  
          },
          zIndex: {
            '100': 60,
          },
          backgroundImage: {
            "pic-gradient": " linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.3))",
          },
        },
      },
    },
  plugins: [
    require("flowbite/plugin"),
    require("@tailwindcss/aspect-ratio"),
    require("tailwind-clip-path"),
    require('tailwind-scrollbar'),
    require("tw-elements/dist/plugin"),
  ],
}
