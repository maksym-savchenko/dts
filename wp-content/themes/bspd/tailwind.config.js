/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  future: {
    hoverOnlyWhenSupported: true,
  },
  theme: {
    extend: {
      backgroundImage: {
        'custom-gradient': 'linear-gradient(180deg, rgba(0, 0, 0, 0.62) 55.5%, rgba(0, 0, 0, 0) 100%)',
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        green: {
          '950': '#272f27',
        },
        emerald: {
          '950': '#131713',
        },
        yellow: {
          '550': '#ffee00',
        },
      },
      fontFamily: {
        sans: 'Montserrat, sans-serif',
      },
      content: {
        'arrowRight': 'url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTIiIGhlaWdodD0iOCIgdmlld0JveD0iMCAwIDUyIDgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik01MS40ODczIDQuMzUzNTVDNTEuNjgyNSA0LjE1ODI5IDUxLjY4MjUgMy44NDE3MSA1MS40ODczIDMuNjQ2NDVMNDguMzA1MyAwLjQ2NDQ2NkM0OC4xMSAwLjI2OTIwNCA0Ny43OTM1IDAuMjY5MjA0IDQ3LjU5ODIgMC40NjQ0NjZDNDcuNDAyOSAwLjY1OTcyOCA0Ny40MDI5IDAuOTc2MzExIDQ3LjU5ODIgMS4xNzE1N0w1MC40MjY2IDRMNDcuNTk4MiA2LjgyODQzQzQ3LjQwMjkgNy4wMjM2OSA0Ny40MDI5IDcuMzQwMjcgNDcuNTk4MiA3LjUzNTUzQzQ3Ljc5MzUgNy43MzA4IDQ4LjExIDcuNzMwOCA0OC4zMDUzIDcuNTM1NTNMNTEuNDg3MyA0LjM1MzU1Wk0wLjk1MTUzOCA0LjVINTEuMTMzN1YzLjVIMC45NTE1MzhWNC41WiIgZmlsbD0iI0Y3NkZGMSIvPgo8L3N2Zz4K")',
      },
      screens: {
        'xsm': '540px',
        'xlg': '1110px',
      },
      fontSize: {
        'responsiveMenuItem': 'clamp(30px, 9vw, 120px)',
        '12': '12px',
        '14': '14px',
        '18': '18px',
        '19': '19px',
        '20': '20px',
        '21': '21px',
        '22': '22px',
        '24': '24px',
        '26': '26px',
        '28': '28px',
        '34': '34px',
        '30': '30px',
        '36': '36px',
        '40': '40px',
        '48': '48px',
        '49': '49px',
        '54': '54px',
        '55': '55px',
        '60': '60px',
        '66': '66px',
        '120': '120px',
      },
      borderRadius: {
        none: '0',
        '1': '1px',
        '2': '2px',
        '3': '3px',
        '4': '4px',
        '5': '5px',
        '6': '6px',
        '8': '8px',
        '10': '10px',
        '12': '12px',
        '14': '14px',
        '15': '15px',
        '16': '16px',
        '18': '18px',
        '20': '20px',
        '22': '22px',
        '24': '24px',
        '28': '28px',
        '32': '32px',
        '36': '36px',
        '40': '40px',
        '50': '50px',
        '60': '60px',
        '76': '76px',
        '88': '88px',
        '100': '100px',
        full: '9999px',
      },
      spacing: {
        'auto': 'auto',
        'px': '1px',
        '0': '0',
        '1': '1px',
        '2': '2px',
        '3': '3px',
        '4': '4px',
        '5': '5px',
        '6': '6px',
        '7': '7px',
        '8': '8px',
        '9': '9px',
        '10': '10px',
        '11': '11px',
        '12': '12px',
        '13': '13px',
        '14': '14px',
        '15': '15px',
        '16': '16px',
        '17': '17px',
        '18': '18px',
        '19': '19px',
        '20': '20px',
        '21': '21px',
        '22': '22px',
        '23': '23px',
        '24': '24px',
        '25': '25px',
        '26': '26px',
        '27': '27px',
        '28': '28px',
        '29': '29px',
        '30': '30px',
        '31': '31px',
        '32': '32px',
        '33': '33px',
        '34': '34px',
        '35': '35px',
        '36': '36px',
        '37': '37px',
        '38': '38px',
        '39': '39px',
        '40': '40px',
        '41': '41px',
        '42': '42px',
        '43': '43px',
        '44': '44px',
        '45': '45px',
        '46': '46px',
        '47': '47px',
        '48': '48px',
        '49': '49px',
        '50': '50px',
        '51': '51px',
        '52': '52px',
        '53': '53px',
        '54': '54px',
        '55': '55px',
        '56': '56px',
        '57': '57px',
        '58': '58px',
        '59': '59px',
        '60': '60px',
        '61': '61px',
        '62': '62px',
        '63': '63px',
        '64': '64px',
        '65': '65px',
        '66': '66px',
        '67': '67px',
        '68': '68px',
        '69': '69px',
        '70': '70px',
        '71': '71px',
        '72': '72px',
        '73': '73px',
        '74': '74px',
        '75': '75px',
        '76': '76px',
        '77': '77px',
        '78': '78px',
        '79': '79px',
        '80': '80px',
        '81': '81px',
        '82': '82px',
        '83': '83px',
        '84': '84px',
        '85': '85px',
        '86': '86px',
        '87': '87px',
        '88': '88px',
        '89': '89px',
        '90': '90px',
        '91': '91px',
        '92': '92px',
        '93': '93px',
        '94': '94px',
        '95': '95px',
        '96': '96px',
        '97': '97px',
        '98': '98px',
        '99': '99px',
        '100': '100px',
      },
      aspectRatio: {
        '577/515': '577 / 515',
      },
    },
    container: {
      center: true,
      screens: {
        DEFAULT: '1300px',
      },
      padding: {
        DEFAULT: '20px',
        sm: '10px',
      },
    },
  },
  plugins: [],
};

export default config;