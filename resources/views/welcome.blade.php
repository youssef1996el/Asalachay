{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
 --}}



 <!DOCTYPE html>
 <html lang="en" data-bs-theme="light">

<head>
 <!--required meta tags-->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN">


 <!--meta-->
 <meta name="robots" content="index, follow">
 <meta name="description" content="">
 <meta name="keywords" content="">

 <!--favicon icon-->
 <link rel="icon" href="https://grostore.themetags.com/public/uploads/media/yqqPV512Gk5DMpvCj2UllKrCl52bam3yD6QvfiPP.png" type="image/png" sizes="16x16">

 <!--title-->
 <title>
         Home : Grostore Online Store
 </title>


         <!-- Schema.org markup for Google+ -->
     <meta itemprop="name" content="" />
     <meta itemprop="description" content="" />
     <meta itemprop="image" content="https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png" />

     <!-- Twitter Card data -->
     <meta name="twitter:card" content="product" />
     <meta name="twitter:site" content="@publisher_handle" />
     <meta name="twitter:title" content="" />
     <meta name="twitter:description" content="" />
     <meta name="twitter:creator"
         content="@author_handle"/>
 <meta name="twitter:image" content="https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png"/>

 <!-- Open Graph data -->
 <meta property="og:title" content="" />
 <meta property="og:type" content="website" />
 <meta property="og:url" content="https://grostore.themetags.com" />
 <meta property="og:image" content="https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png" />
 <meta property="og:description" content="" />
 <meta property="og:site_name" content="Grostore Online Store" />
 <meta property="fb:app_id" content="">

 <!-- head-scripts -->
 <script>
 'use strict'

 var TT = TT || {};
 TT.localize = {
     buyNow: 'Buy Now',
     addToCart: 'Add to Cart',
     outOfStock: 'Out of Stock',
     addingToCart: 'Adding..',
     optionsAlert: 'Please choose all the available options',
     applyCoupon: 'Apply Coupon',
     pleaseWait: 'Please Wait',
 }

 TT.ProductSliders = () => {
     let quickViewProductSlider = new Swiper(".quickview-product-slider", {
         slidesPerView: 1,
         centeredSlides: true,
         speed: 700,
         loop: true,
         loopedSlides: 6,
     });
     let productThumbnailSlider = new Swiper(".product-thumbnail-slider", {
         slidesPerView: 4,
         speed: 700,
         loop: true,
         spaceBetween: 20,
         slideToClickedSlide: true,
         loopedSlides: 6,
         centeredSlides: true,
         breakpoints: {
             0: {
                 slidesPerView: 2,
             },
             380: {
                 slidesPerView: 3,
             },
             576: {
                 slidesPerView: 4,
             },
         },
     });
     if (quickViewProductSlider && quickViewProductSlider.length > 0) {
         quickViewProductSlider.forEach(function(item, index) {
             item.controller.control = productThumbnailSlider[index];
             productThumbnailSlider[index].controller.control = item;
         });
     } else {
         quickViewProductSlider.controller.control = productThumbnailSlider;
         productThumbnailSlider.controller.control = quickViewProductSlider;
     }
 }
</script>
 <!-- head-scripts -->

 <!--build:css-->
 <!-- 3rd party -->
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/toastr.css?v=v4.4.0">
<!-- 3rd party -->
 <link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/default/assets/css/main.css?v=v4.4.0">

<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/select2.css?v=v4.4.0">
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/custom.css?v=v4.4.0">
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/summernote-lite.min.css?v=v4.4.0">
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/summernote-custom.css?v=v4.4.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css">
<style>
 @media (min-width: 1200px) {
     .choose-us-section::after {
         background-image: url(https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png);
     }

     .on-sale-banner {
         background-image: url(https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png);
     }
    }
</style>
 <!-- endbuild -->
     <!-- PWA  -->
 <meta name="theme-color" content="#6eb356"/>
 <link rel="apple-touch-icon" href="https://grostore.themetags.com/public//pwa.png?v=v4.4.0"/>
 <link rel="manifest" href="https://grostore.themetags.com/public//manifest.json?v=v4.4.0"/>

 <!-- recaptcha -->
     <!-- recaptcha -->

</head>

<body>


 <!--preloader start-->
     {{-- <div id="preloader">
     <img src="https://grostore.themetags.com/public/uploads/media/ddyKe7WlmV3zgvnDrbwK4qMEUIQrosUkHS6V0wIi.gif" alt="preloader" class="img-fluid" max-width="180">
 </div> --}}
     <!--preloader end-->

 <!--main content wrapper start-->
     <div class="main-wrapper">
     <!--header section start-->
                 <header class="gheader position-relative z-2 header-sticky">
     <div class="ghead-topbar bg-primary d-none d-lg-block">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-xxl-4 col-xl-3">
                 <div class="topbar-info d-none d-xl-block">
                     <p class="text-white fs-sm fw-medium mb-0">Bienvenue dans notre magasin Bio</p>
                 </div>

             </div>
             <div class="col-xxl-8 col-xl-9">

                 <ul
                     class="d-flex align-items-center justify-content-center justify-content-xl-end topbar-info-right">
                     <li class="nav-item">
                                                         <a href="mailto:{{$Infos->email}}" class="text-light">
                                 <span class="me-1">
                                     <svg width="16" height="14" viewBox="0 0 20 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path
                                             d="M18.2422 0H1.75781C0.790547 0 0 0.783572 0 1.75V12.25C0 13.2168 0.791055 14 1.75781 14H18.2422C19.2095 14 20 13.2164 20 12.25V1.75C20 0.783339 19.2091 0 18.2422 0ZM17.9723 1.16667C17.4039 1.73433 10.7283 8.40194 10.4541 8.67588C10.225 8.90462 9.77512 8.90478 9.54594 8.67588L2.02773 1.16667H17.9723ZM1.17188 12.0355V1.96447L6.21348 7L1.17188 12.0355ZM2.02773 12.8333L7.04078 7.82631L8.71598 9.49951C9.40246 10.1852 10.5978 10.1849 11.2841 9.49951L12.9593 7.82635L17.9723 12.8333H2.02773ZM18.8281 12.0355L13.7865 7L18.8281 1.96447V12.0355Z"
                                             fill="white" />
                                     </svg>
                                 </span>
                                 {{$Infos->email}}
                             </a>
                                                 </li>









                     <li class="nav-item">
                         <a href="javascript:void(0)" class="btn btn-link p-0 tt-theme-toggle fw-normal text-light">
                             <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left"
                                 data-bs-title="Dark">Dark <i class="fas fa-moon fs-lg ms-1"></i>
                             </div>
                             <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left"
                                 data-bs-title="Light">Light <i class="fas fa-sun fs-lg ms-1"></i>
                             </div>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="gshop-navbar bg-white rounded ps-lg-5 position-relative">
         <div class="row align-items-center">
             <div class="col-xxl-2 col-xl-3 col-md-3 col-5">
                 <a href="{{url('/')}}" class="logo"><img
                         src="https://grostore.themetags.com/public/uploads/media/0vDgRJLm6biMs5zCaVAze5RFwEwcTF4kSuHsZ9OT.png" alt="logo" class="img-fluid"></a>
             </div>
             <div class="col-xxl-10 col-xl-9 col-md-9 col-7">
                 <div class="gshop-navbar-right d-flex align-items-center justify-content-end position-relative">

                                                 <div class="category-dropdown position-relative d-none d-md-inline-block">
                             <a href="javascript:void(0)"
                                 class="category-dropdown-btn fw-bold d-none d-sm-inline-block">Catégories<span
                                     class="ms-1"><i class="fa-solid fa-angle-down"></i></span></a>

                             <div class="category-dropdown-box scrollbar">
                                <ul class="category-dropdown-menu">
                                    @foreach ($categories as $item)
                                        <li>
                                            <a href="{{url("products/Category/".$item->id)}}"
                                                class="d-flex align-items-center">
                                                <div class="me-2 avatar-icon">
                                                    <img src="https://grostore.themetags.com/public/uploads/media/OfNXzapZlaGqPdd3IcLP4D4bp8BkwDEjlRGhGbfh.png" alt="" class="rounded-circle h-100 w-100">
                                                </div>
                                                <span>{{$item->category_name}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                             </div>
                         </div>


                     <nav class="gshop-navmenu ms-3 d-none d-xl-block">
                        <ul class="d-flex align-itmes-center justify-content-end">

                            <li><a href="{{url('/')}}">Accueil</a></li>
                            <li><a href="{{url('List/Products')}}">Produits</a></li>
                            <li><a href="{{url('About')}}">À propos de nous</a></li>
                            <li><a href="{{url('Contact')}}">Contactez-nous</a></li>
                        </ul>
                     </nav>
                     <div class="gshop-header-icons d-none d-md-inline-flex align-items-center justify-content-end ms-3">

                         <div class="gshop-header-user position-relative">
                             <button type="button" class="header-icon">
                                 <svg width="18" height="25" viewBox="0 0 22 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M11.092 11.9546C12.6656 11.9546 14.0281 11.3902 15.1416 10.2766C16.2547 9.16322 16.8193 7.80093 16.8193 6.2271C16.8193 4.65382 16.2549 3.29134 15.1414 2.1776C14.0279 1.0644 12.6654 0.5 11.092 0.5C9.51825 0.5 8.156 1.0644 7.04266 2.17778C5.92931 3.29116 5.36475 4.65363 5.36475 6.2271C5.36475 7.80093 5.92931 9.1634 7.04266 10.2768C8.15636 11.39 9.51879 11.9546 11.092 11.9546ZM8.0281 3.16308C8.88239 2.30877 9.88453 1.89349 11.092 1.89349C12.2993 1.89349 13.3017 2.30877 14.1561 3.16308C15.0104 4.01757 15.4259 5.01992 15.4259 6.2271C15.4259 7.43464 15.0104 8.43681 14.1561 9.2913C13.3017 10.1458 12.2993 10.5611 11.092 10.5611C9.88489 10.5611 8.88275 10.1456 8.0281 9.2913C7.17364 8.43699 6.7582 7.43464 6.7582 6.2271C6.7582 5.01992 7.17364 4.01757 8.0281 3.16308Z"
                                         fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
                                     <path
                                         d="M21.1339 18.893C21.1012 18.4201 21.0352 17.9043 20.9379 17.3596C20.8397 16.8108 20.7133 16.292 20.562 15.8178C20.4055 15.3277 20.1931 14.8438 19.9301 14.38C19.6575 13.8986 19.3371 13.4794 18.9776 13.1345C18.6016 12.7736 18.1414 12.4835 17.6091 12.2719C17.0787 12.0614 16.4909 11.9547 15.8621 11.9547C15.6152 11.9547 15.3763 12.0564 14.9151 12.3576C14.6313 12.5433 14.2993 12.7581 13.9287 12.9956C13.6118 13.1982 13.1825 13.3879 12.6523 13.5598C12.135 13.7277 11.6098 13.8129 11.0912 13.8129C10.5729 13.8129 10.0477 13.7277 9.53001 13.5598C9.00034 13.3881 8.57088 13.1984 8.25455 12.9958C7.88747 12.7605 7.55527 12.5457 7.26718 12.3574C6.80634 12.0562 6.56753 11.9545 6.32059 11.9545C5.69163 11.9545 5.10401 12.0614 4.57378 12.2721C4.04189 12.4833 3.58143 12.7734 3.20512 13.1347C2.84561 13.4798 2.52522 13.8988 2.25281 14.38C1.99019 14.8438 1.77758 15.3276 1.62108 15.818C1.46993 16.2922 1.34351 16.8108 1.24533 17.3596C1.14788 17.9035 1.082 18.4195 1.04933 18.8935C1.01722 19.3569 1.00098 19.8393 1.00098 20.3266C1.00098 21.5934 1.40238 22.6189 2.19394 23.3752C2.97572 24.1216 4.00996 24.5 5.26808 24.5H16.9157C18.1735 24.5 19.2077 24.1216 19.9897 23.3752C20.7814 22.6194 21.1828 21.5935 21.1828 20.3264C21.1826 19.8374 21.1662 19.3551 21.1339 18.893ZM19.0123 22.3449C18.4957 22.8381 17.8099 23.0779 16.9155 23.0779H5.26808C4.37354 23.0779 3.68773 22.8381 3.17135 22.3451C2.66474 21.8613 2.41854 21.2008 2.41854 20.3266C2.41854 19.8718 2.43349 19.4229 2.46339 18.9918C2.49255 18.569 2.55216 18.1044 2.64056 17.6108C2.72786 17.1233 2.83896 16.6658 2.9711 16.2516C3.09789 15.8545 3.27082 15.4612 3.48527 15.0824C3.68995 14.7214 3.92544 14.4116 4.18529 14.1621C4.42835 13.9286 4.73471 13.7375 5.0957 13.5942C5.42956 13.4616 5.80476 13.3891 6.21208 13.3781C6.26172 13.4046 6.35012 13.4552 6.49334 13.5488C6.78475 13.7394 7.12064 13.9567 7.49197 14.1946C7.91054 14.4624 8.44981 14.7042 9.09409 14.9128C9.75277 15.1265 10.4245 15.235 11.0913 15.235C11.7581 15.235 12.4301 15.1265 13.0884 14.913C13.7333 14.704 14.2723 14.4624 14.6915 14.1943C15.0715 13.9506 15.3979 13.7395 15.6894 13.5488C15.8326 13.4553 15.921 13.4046 15.9706 13.3781C16.3781 13.3891 16.7533 13.4616 17.0874 13.5942C17.4482 13.7375 17.7545 13.9288 17.9976 14.1621C18.2574 14.4114 18.4929 14.7212 18.6976 15.0826C18.9122 15.4612 19.0854 15.8547 19.212 16.2515C19.3443 16.6662 19.4556 17.1235 19.5427 17.6106C19.6309 18.1052 19.6907 18.5699 19.7199 18.992V18.9924C19.7499 19.4218 19.7651 19.8705 19.7653 20.3266C19.7651 21.201 19.5189 21.8613 19.0123 22.3449Z"
                                         fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
                                 </svg>
                             </button>
                             <div class="user-menu-wrapper">
                                 <ul class="user-menu">
                                    @guest
                                    <li>
                                        <a href="{{url('login')}}">
                                            <span class="me-2">
                                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                            </span>Se connecter
                                            </a>
                                    </li>
                                    @else
                                    <li>
                                        <a href="{{route('Dashboard')}}">
                                            <span class="me-2">
                                                <i class="fa-solid fa-bars"></i>
                                            </span>Tableau de bord
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span class="me-2">
                                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                            </span>{{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>


                                    @endguest

                                 </ul>
                             </div>
                         </div>
                         <div class="gshop-header-cart position-relative">


                             <button type="button" class="header-icon">
                                 <svg width="18" height="25" viewBox="0 0 22 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M21.1704 23.9559L19.6264 7.01422C19.5843 6.55156 19.1908 6.19718 18.7194 6.19718H15.5355V4.78227C15.5355 2.14533 13.3583 0 10.6823 0C8.00628 0 5.82937 2.14533 5.82937 4.78227V6.19718H2.6433C2.17192 6.19718 1.77839 6.55156 1.73625 7.01422L0.186259 24.0225C0.163431 24.2735 0.248671 24.5223 0.421216 24.7082C0.593761 24.8941 0.837705 25 1.0933 25H20.2695C20.2702 25 20.2712 25 20.2719 25C20.775 25 21.1826 24.5982 21.1826 24.1027C21.1825 24.0528 21.1784 24.0036 21.1704 23.9559ZM7.65075 4.78227C7.65075 3.1349 9.01071 1.79465 10.6824 1.79465C12.3542 1.79465 13.7142 3.1349 13.7142 4.78227V6.19718H7.65075V4.78227ZM2.08948 23.2055L3.47591 7.99183H5.82937V9.59649C5.82937 10.0921 6.237 10.4938 6.74006 10.4938C7.24313 10.4938 7.65075 10.0921 7.65075 9.59649V7.99183H13.7142V9.59649C13.7142 10.0921 14.1219 10.4938 14.6249 10.4938C15.128 10.4938 15.5356 10.0921 15.5356 9.59649V7.99183H17.8869L19.2733 23.2055H2.08948Z"
                                         fill="#5D6374" />
                                 </svg>
                                 <span
                                     class="cart-counter badge bg-primary rounded-circle p-0">0</span>
                             </button>
                             <div class="cart-box-wrapper">
                                 <div class="apt_cart_box theme-scrollbar">
                                    <ul class="at_scrollbar scrollbar cart-navbar-wrapper hasListCart" data-simplebar="init" style="display: none;">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                                <div class="simplebar-mask">
                                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                        <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;" _mstaria-label="356018">
                                                            <div class="simplebar-content ContentListCart" style="padding: 0px;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="simplebar-placeholder" style="width: auto; height: 166px;">
                                                </div>
                                            </div>
                                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                                <div class="simplebar-scrollbar simplebar-visible" style="width: 0px; display: none;"></div>
                                            </div>
                                            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                                <div class="simplebar-scrollbar simplebar-visible" style="height: 0px; display: none;"></div>
                                            </div>
                                        </ul>

                                     <ul class="at_scrollbar scrollbar cart-navbar-wrapper HasNotListCart" style="display: none;">
                                        <li class="ListImageNoListCart">
                                            <img src="https://grostore.themetags.com/public/frontend/default/assets/img/empty-cart.svg?v=v4.4.0" alt="" srcset=""
                                                class="img-fluid">
                                        </li>
                                    </ul>
                                     <div class="d-flex align-items-center justify-content-between mt-3">
                                         <h6 class="mb-0">Total:</h6>
                                         <span
                                             class="fw-semibold text-secondary sub-total-price"></span>
                                     </div>
                                     <div class="row align-items-center justify-content-between">
                                         <div class="col-6">
                                             <a href="{{url('Cart')}}"
                                                 class="btn btn-secondary btn-md mt-4 w-100"><span
                                                     class="me-2"><i
                                                         class="fa-solid fa-shopping-bag"></i></span>Voir le panier</a>
                                         </div>
                                         <div class="col-6">
                                             <a href="{{url('checkout')}}"
                                                 class="btn btn-primary btn-md mt-4 w-100"><span class="me-2"><i
                                                         class="fa-solid fa-credit-card"></i></span>Caisses</a>
                                         </div>


                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div
                         class="gshop-header-contact align-items-center ms-7 position-relative d-none d-lg-flex d-xl-none d-xxl-flex">
                         <a href="tel:+88225467820"
                             class="d-flex align-items-center">
                             <span
                                 class="icon d-inline-flex rounded-circle justify-content-center align-items-center bg-secondary-light">
                                 <svg width="20" height="24" viewBox="0 0 23 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M1.98193 3.44444C1.98193 2.09441 2.97352 1 4.19672 1H7.82812C8.30477 1 8.72795 1.33664 8.87867 1.83572L10.5373 7.3277C10.7116 7.90472 10.475 8.53538 9.98206 8.8074L7.48236 10.1868C8.70297 13.1748 10.884 15.5821 13.5913 16.9292L14.8411 14.1703C15.0876 13.6263 15.659 13.3651 16.1818 13.5575L21.1577 15.3881C21.61 15.5545 21.915 16.0215 21.915 16.5476V20.5556C21.915 21.9056 20.9234 23 19.7002 23H18.5928C9.41887 23 1.98193 14.7919 1.98193 4.66667V3.44444Z"
                                         stroke="#FF7C08" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" />
                                 </svg>
                             </span>
                             <div class="ms-3">
                                 <span class="text-muted fs-xs">Phone &amp; Telephone</span>
                                 <h6 class="mb-0 mt-1 fs-sm">+88225467820</h6>
                             </div>
                         </a>
                     </div>
                     <button class="gshop-offcanvas-btn offcanvas-toggle ms-3">
                         <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <path
                                 d="M3.5892 0C1.66061 0 0.0917969 1.56893 0.0917969 3.4974C0.0917969 5.42588 1.65997 6.9947 3.5892 6.9947C5.51844 6.9947 7.08661 5.42588 7.08661 3.4974C7.08661 1.56893 5.51768 0 3.5892 0Z"
                                 fill="white" />
                             <path
                                 d="M14.909 0C12.9805 0 11.4116 1.56893 11.4116 3.4974C11.4116 5.42588 12.9805 6.9947 14.909 6.9947C16.8376 6.9947 18.4068 5.42588 18.4068 3.4974C18.4068 1.56893 16.8383 0 14.909 0Z"
                                 fill="white" />
                             <path
                                 d="M26.411 6.99481C28.3391 6.99481 29.9084 5.42599 29.9084 3.49751C29.9084 1.56903 28.3404 0 26.411 0C24.4815 0 22.9136 1.56893 22.9136 3.4974C22.9136 5.42588 24.4827 6.99481 26.411 6.99481Z"
                                 fill="white" />
                             <path
                                 d="M3.49805 18.2016C5.42653 18.2016 6.99578 16.6331 6.99578 14.7043C6.99578 12.7754 5.42653 11.2066 3.49805 11.2066C1.56958 11.2066 0 12.7755 0 14.7043C0 16.6331 1.56958 18.2016 3.49805 18.2016Z"
                                 fill="white" />
                             <path
                                 d="M14.8172 18.2016C16.7454 18.2016 18.3146 16.6331 18.3146 14.7043C18.3146 12.7754 16.7467 11.2066 14.8172 11.2066C12.8881 11.2066 11.3198 12.7754 11.3198 14.7043C11.3198 16.6331 12.8888 18.2016 14.8172 18.2016Z"
                                 fill="white" />
                             <path
                                 d="M26.3205 18.2016C28.2494 18.2016 29.8179 16.6331 29.8179 14.7043C29.8179 12.7754 28.2494 11.2066 26.3205 11.2066C24.3916 11.2066 22.8218 12.7754 22.8218 14.7043C22.8218 16.6331 24.391 18.2016 26.3205 18.2016Z"
                                 fill="white" />
                             <path
                                 d="M3.57813 22.3786C1.64965 22.3786 0.0800781 23.9471 0.0800781 25.876C0.0800781 27.8041 1.64965 29.3733 3.57813 29.3733C5.50661 29.3733 7.07543 27.8049 7.07543 25.876C7.07543 23.9471 5.50661 22.3786 3.57813 22.3786Z"
                                 fill="white" />
                             <path
                                 d="M14.898 22.3786C12.9694 22.3786 11.3999 23.9471 11.3999 25.876C11.3999 27.8041 12.9688 29.3733 14.898 29.3733C16.8261 29.3733 18.3953 27.8049 18.3953 25.876C18.3953 23.9471 16.8261 22.3786 14.898 22.3786Z"
                                 fill="white" />
                             <path
                                 d="M26.4002 22.3786C24.4721 22.3786 22.9028 23.9471 22.9028 25.876C22.9028 27.8041 24.4721 29.3733 26.4002 29.3733C28.3291 29.3733 29.8976 27.8049 29.8976 25.876C29.8976 23.9471 28.3284 22.3786 26.4002 22.3786Z"
                                 fill="white" />
                         </svg>
                     </button>
                 </div>
             </div>
         </div>
     </div>
 </div>
</header>


     <div class="offcanvas_menu position-fixed">
 <div class="tt-short-info d-none d-md-none d-lg-none d-xl-block">
     <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
     <a href="{{url('/')}}" class="logo-wrapper d-inline-block mb-5"><img
             src="https://grostore.themetags.com/public/uploads/media/0vDgRJLm6biMs5zCaVAze5RFwEwcTF4kSuHsZ9OT.png" alt="logo"></a>
     <div class="offcanvas-content">
         <h4 class="mb-4">À propos de nous</h4>
         <p>Explain to you how all this mistaken denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actual teachings.

       Mistaken denouncing pleasure and praising pain was born and we will give you complete account of the system expound.</p>
         <a href="{{url('About')}}" class="btn btn-primary mt-4">À propos de nous</a>
     </div>
 </div>

 <div class="mobile-menu d-md-block d-lg-block d-xl-none mb-4">
     <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>

     <nav class="mobile-menu-wrapperoffcanvas-contact">
         <ul>

            <li>
                <a href="{{url('/')}}">Accueil</a>
            </li>
            <li>
                <a href="{{url('List/Products')}}">Produits</a>
            </li>
            <li><a href="{{url('About')}}">À propos de nous</a></li>

            <li><a  href="{{url('Contact')}}">Contactez-nous</a></li>

                <li>
                <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="me-2">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </span>{{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                </li>
                                         </ul>
     </nav>

 </div>

 <div class="offcanvas-contact mt-4">
     <h5 class="mb-4 mt-5">Informations de contact</h5>
     <address>
        {{$Infos->address}} <br>
         <a href="tel:{{$Infos->phone}}">{{$Infos->phone}}</a> <br>
         <a href="mailto:{{$Infos->email}}">{{$Infos->email}}</a>
     </address>
 </div>
 <div class="offcanvas-contact social-contact mt-4">
     <a href="https://www.facebook.com/" target="_blank" class="social-btn"><i
             class="fab fa-facebook-f"></i></a>
     <a href="https://twitter.com/" target="_blank" class="social-btn"><i
             class="fab fa-twitter"></i></a>
     <a href="https://www.linkedin.com/" target="_blank" class="social-btn"><i
             class="fab fa-linkedin"></i></a>
     <a href="https://www.youtube.com/" target="_blank" class="social-btn"><i
             class="fab fa-youtube"></i></a>
 </div>
</div>
     <!--offcanvas menu end-->

         <!--hero section start-->
 <section class="gshop-hero pt-120 bg-white position-relative z-1 overflow-hidden">
    {{-- <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/leaf-shadow.png?v=v4.4.0" alt="leaf"
        class="position-absolute leaf-shape z--1 rounded-circle d-none d-lg-inline"> --}}
    {{-- <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/mango.png?v=v4.4.0" alt="mango"
        class="position-absolute mango z--1" data-parallax='{"y": -120}'> --}}

    <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/hero-circle-sm.png?v=v4.4.0" alt="circle"
        class="position-absolute hero-circle circle-sm z--1 d-none d-md-inline">

 <div class="container">
     <div class="gshop-hero-slider swiper">
         <div class="swiper-wrapper">

                                 <div class="swiper-slide gshop-hero-single">
                     <div class="row align-items-center justify-content-between">
                         <div class="col-xl-5 col-lg-7">
                             <div class="hero-left-content">
                                 <span
                                     class="gshop-subtitle fs-5 text-secondary mb-2 d-block">Produits authentiques 100% biologiques</span>
                                 <h1 class="display-4 mb-3">Divers produits en ligne</h1>
                                 <p class="mb-5 fs-6"></p>

                                 <div class="hero-btns d-flex align-items-center gap-3 gap-sm-5 flex-wrap">

                                     <a href="{{url('About')}}"
                                         class="btn btn-primary">À propos de nous<span class="ms-2"><i
                                                 class="fa-solid fa-arrow-right"></i></span></a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-6 col-lg-5">
                             <div class="hero-right text-center position-relative z-1 mt-6 mt-xl-0">

                                 <img src="https://grostore.themetags.com/public/uploads/media/94xjsBdRXNRUzF1D7zC54waCUu6Di7mv9rVQ4bmq.png" alt=""
                                     class="img-fluid position-absolute end-0 top-50 hero-img">

                                 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/hero-circle-lg.png?v=v4.4.0"
                                     alt="circle shape" class="img-fluid hero-circle">
                             </div>
                         </div>
                     </div>
                 </div>
                                 <div class="swiper-slide gshop-hero-single">
                     <div class="row align-items-center justify-content-between">
                         <div class="col-xl-5 col-lg-7">
                             <div class="hero-left-content">
                                 <span
                                     class="gshop-subtitle fs-5 text-secondary mb-2 d-block">Produits authentiques 100% biologiques</span>
                                 <h1 class="display-4 mb-3">Divers produits en ligne</h1>
                                 <p class="mb-5 fs-6"></p>

                                 <div class="hero-btns d-flex align-items-center gap-3 gap-sm-5 flex-wrap">

                                     <a href="{{url('About')}}"
                                         class="btn btn-primary">À propos de nous<span class="ms-2"><i
                                                 class="fa-solid fa-arrow-right"></i></span></a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-6 col-lg-5">
                             <div class="hero-right text-center position-relative z-1 mt-6 mt-xl-0">

                                 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png" alt=""
                                     class="img-fluid position-absolute end-0 top-50 hero-img">

                                 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/hero-circle-lg.png?v=v4.4.0"
                                     alt="circle shape" class="img-fluid hero-circle">
                             </div>
                         </div>
                     </div>
                 </div>
                         </div>
     </div>
 </div>
         <div class="gs-hero-social">
         <ul class="list-unstyled">
                                 <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                                 <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                                 <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                                 <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>

         </ul>
         <span class="title fw-medium">Suivre sur</span>
     </div>

 <div class="gshop-hero-slider-pagination theme-slider-control position-absolute top-50 translate-middle-y z-5">
 </div>
</section>
 <!--hero section end-->

 <!--category section start-->
 <section class="gshop-category-section bg-white pt-120 position-relative z-1 overflow-hidden">
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/bg-shape.png?v=v4.4.0" alt="bg shape"
     class="position-absolute bottom-0 start-0 w-100 z--1">
 <div class="container">
     <div class="gshop-category-box border-secondary rounded-3 bg-white">
        <div class="text-center section-title">
            <h4 class="d-inline-block px-2 bg-white mb-4">Nos meilleures catégories</h4>
        </div>
        <div class="row justify-content-center g-4">
            @foreach ($categories as $item)
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden ">
                        <div class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                            <img src="https://grostore.themetags.com/public/uploads/media/5oephm2sfLrK3ISeqQThhR9rA5FKcCsDnRsOezBZ.png"
                            alt="" class="img-fluid">
                        </div>

                        <a href="{{url('products/Category/'.$item->id)}}"
                            class="text-dark fs-sm fw-bold d-block mt-3">{{$item->category_name}}</a>
                        <span  class="total-count position-relative ps-3 fs-sm fw-medium doted-primary">{{$item->product_count}}
                            Articles</span>

                        <a href="{{url('products/Category/'.$item->id)}}"  class="explore-btn position-absolute"><i class="fa-solid fa-arrow-up"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
     </div>
 </div>
</section>
 <!--category section end-->

 <!--featured products start-->
 <section class="featured-products pt-120 pb-200 bg-shade position-relative overflow-hidden z-1">
 {{-- <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/roll-1.png?v=v4.4.0" alt="roll"
     class="position-absolute roll-1 z--1" data-parallax='{"y": -120}'>
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/roll-2.png?v=v4.4.0" alt="roll"
     class="position-absolute roll-2 z--1" data-parallax='{"y": 120}'> --}}
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-xl-6">
             <div class="section-title text-center mb-4">
                 <h3 class="mb-2">Nos produits phares</h3>
                 <p class="mb-0">Meilleurs choix : découvrez nos Bes.</p>
             </div>
         </div>
     </div>
     <div class="row g-4 justify-content-center">
         <!-- left column -->

         <div class="col-xxl-4 col-lg-6">

            @foreach ($Featured_Products as $key => $value)
                @if ($key <= 3)

                    <div class="mb-3">
                        <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 border card-md gap-4">
                            <div class="thumbnail position-relative rounded-2">
                                <a href="javascript:void(0);">
                                    <img src="{{asset('storage/'.$value->image)}}" alt="product"
                                        class="img-fluid"></a>
                                <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-1 rounded-2">

                                    <a href="javascript:void(0);" class="rounded-btn fs-xs IconDisplayModelDetail"  value=" {{$value->id}}"
                                        ><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                            <div class="card-content mt-4 mt-sm-0 w-100">
                                <a
                                    href="#"
                                    class="fw-bold text-heading title fs-sm tt-line-clamp tt-clamp-1">
                                    {{$value->name}}
                                </a>
                                <div class="pricing mt-2">
                                    <span class="fw-bold h4 text-danger">{{$value->price}} DH</span>
                                </div>

                                <form action="" class="direct-add-to-cart-form">



                                    <div class="d-flex justify-content-between align-items-center mt-10">
                                        <span class="flex-grow-1">
                                            <a href="#"
                                                class="fs-xs fw-bold d-inline-block explore-btn direct-add-to-cart-btn BtnAddProductToCart" value="{{$value->id}}">
                                                <span class="add-to-cart-text">Acheter maintenant </span>
                                                <span class="ms-1">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </span>
                                        <span class="fs-xxs fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Reward Points">
                                            <i class="fas fa-medal"></i> {{$value->qte}}
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach



        </div>




         <!-- right column -->


         <div class="col-xxl-4 col-lg-6 order-2 order-xxl-3">
            @foreach ($Featured_Products as $key=>$value)
                @if ($key >= 4)

                <div class="mb-3">
                    <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 border card-md gap-4">
                        <div class="thumbnail position-relative rounded-2">
                            <a href="javascript:void(0);"><img src="{{asset('storage/'.$value->image)}}" alt="product"
                                    class="img-fluid"></a>
                            <div
                                class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-1 rounded-2">

                                <a href="#" class="rounded-btn fs-xs IconDisplayModelDetail"  value="{{$value->id}}"
                                    ><i class="fa-solid fa-eye"></i></a>

                            </div>
                        </div>
                        <div class="card-content mt-4 mt-sm-0 w-100">
                            <a
                                href="#"
                                class="fw-bold text-heading title fs-sm tt-line-clamp tt-clamp-1">
                                {{$value->name}}
                            </a>
                            <div class="pricing mt-2">
                                <span class="fw-bold h4 text-danger">{{$value->price}} DH</span>



                            </div>


                            <form action="" class="direct-add-to-cart-form">



                                <div class="d-flex justify-content-between align-items-center mt-10">
                                    <span class="flex-grow-1">
                                        <a href="#"
                                            class="fs-xs fw-bold d-inline-block explore-btn direct-add-to-cart-btn" value="{{$value->id}}">
                                            <span class="add-to-cart-text">Acheter maintenant</span>
                                            <span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span>
                                        </a>
                                    </span>

                                    <span class="fs-xxs fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Reward Points">
                                        <i class="fas fa-medal"></i> {{$value->qte}}
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach





         </div>
     </div>
 </div>
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/bg-shape-2.png?v=v4.4.0" alt="bg shape"
     class="position-absolute start-0 bottom-0 w-100 z--1">
</section>
 <!--featured products end-->

 <!--trending products start-->
 <section class="pt-8 pb-100 bg-white position-relative overflow-hidden z-1 trending-products-area">
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/garlic.png?v=v4.4.0" alt="garlic"
     class="position-absolute garlic z--1" data-parallax='{"y": 100}'>
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/carrot.png?v=v4.4.0" alt="carrot"
     class="position-absolute carrot z--1" data-parallax='{"y": -100}'>
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/mashrom.png?v=v4.4.0" alt="mashrom"
     class="position-absolute mashrom z--1" data-parallax='{"x": 100}'>
 <div class="container">
     <div class="row align-items-center">
         <div class="col-xl-5">
             <div class="section-title text-center text-xl-start">
                 <h3 class="mb-0">Produits les plus populaires</h3>
             </div>
         </div>
         <div class="col-xl-7">
            {{-- <div class="filter-btns gshop-filter-btn-group text-center text-xl-end mt-4 mt-xl-0">
                <button class="active" data-filter="*">All Products</button>
                <button data-filter=".7">Breakfast</button>
                <button data-filter=".13">Fresh Organic</button>
                <button data-filter=".16">Vegetables</button>
            </div> --}}
         </div>
     </div>
     <div class="row justify-content-center g-4 mt-5 filter_group">
        @foreach ($Trending_Products as $item)
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-10 filter_item 14 16 ">
                <div class="vertical-product-card rounded-2 position-relative ">
                    <span class="offer-badge text-white fw-bold fs-xxs bg-danger position-absolute start-0 top-0">-10%
                        <span class="text-uppercase">Off</span>
                    </span>

                    <div class="thumbnail position-relative text-center p-4">
                        <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->name}}"
                            class="img-fluid">
                        <div class="product-btns position-absolute d-flex gap-2 flex-column">


                            <a href="#" class="rounded-btn IconDisplayModelDetail"  value="{{$item->id}}">
                                <i class="fa-regular fa-eye"></i></a>
                        </div>
                    </div>

                    <div class="card-content">
                        <span class="fs-xxs fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Reward Points">
                                <i class="fas fa-medal"></i> {{$item->qte}}
                        </span>
                                <!--product category start-->
                        <div class="mb-2 tt-category tt-line-clamp tt-clamp-1">
                            <a href="{{url('products/Category/'.$item->id)}}" class="d-inline-block text-muted fs-xxs">{{$item->namecategory}}

                            </a>

                        </div>
                        <!--product category end-->

                        <a href="#"
                            class="card-title fw-bold mb-2 tt-line-clamp tt-clamp-1">{{$item->name}}
                        </a>

                        <h6 class="price">
                            <span class="fw-bold h4 text-danger">{{$item->price}} DH</span>
                        </h6>
                    </div>
                    <div class="card-btn bg-white">
                        <form action="" class="direct-add-to-cart-form">
                            <input type="hidden" name="_token" value="oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN">
                            <input type="hidden" name="product_variation_id" value="3">
                            <input type="hidden" value="1" name="quantity">

                            <a href="#"
                                class="btn btn-secondary d-block btn-md rounded-1 w-100 direct-add-to-cart-btn add-to-cart-text BtnAddProductToCart" value="{{$item->id}}">Ajouter au panier</a>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
 </div>
</section>
 <!--trending products end-->

 <!--banner section start-->
 <section class="banner-section position-relative z-1 overflow-hidden bg-white">
    <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/bg-shape-3.png?v=v4.4.0" alt="bg shape"
        class="position-absolute start-0 bottom-0 z--1 w-100">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-xl-4 col-md-6">
                <a href="#" class="d-block">
                    <img src="{{asset('storage/images/moringa.jpg')}}" class="img-fluid" alt="" srcset="">
                </a>
            </div>
            <div class="col-xl-4 col-md-6">
                 <a href="#" class="d-block">
                     <img src="{{asset('storage/images/amlou.png')}}" class="img-fluid" alt="" srcset="">
                 </a>
             </div>
                         <div class="col-xl-4 col-md-6">
                 <a href="#" class="d-block">
                     <img src="{{asset('storage/images/slider.jpg')}}" class="img-fluid" alt="" srcset="" style="height: 188px !important">
                 </a>
             </div>
                 </div>
 </div>
</section>
 <!--banner section end-->

 <!--banner section start-->
 <section class="pb-120 position-relative z-1 pt-120">
 <div class="container">
     <div class="row g-4 align-items-center justify-content-center">
         <div class="col-xxl-4 col-xl-5 order-2 order-xxl-1 d-none d-xl-block d-none-1399">
             <a href="#">
                 <img src="https://grostore.themetags.com/public/uploads/media/xANvWdU5lMHnp1MSSNTpnQMlqAUEMUcgl1Bu9IzB.png" alt="" class="img-fluid">
             </a>
         </div>
         <div class="col-xxl-8 order-1 order-xxl-2">
             <div
                 class="timing-box d-flex align-items-center justify-content-center justify-content-sm-between rounded-3 flex-wrap gap-3">
                 <h4 class="mb-0">Meilleures offres hebdomadaires</h4>

                 <ul class="timing-countdown countdown-timer d-flex align-items-center gap-2"
                     data-date="04/30/2025 00:00:00">
                     <li
                         class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                         <h5 class="mb-0 days">00</h5>
                         <span class="gshop-subtitle fs-xxs d-block">Jours</span>
                     </li>
                     <li
                         class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                         <h5 class="mb-0 hours">00</h5>
                         <span class="gshop-subtitle fs-xxs d-block">Heures</span>
                     </li>
                     <li
                         class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                         <h5 class="mb-0 minutes">00</h5>
                         <span class="gshop-subtitle fs-xxs d-block">Min</span>
                     </li>
                     <li
                         class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                         <h5 class="mb-0 seconds">00</h5>
                         <span class="gshop-subtitle fs-xxs d-block">Sec</span>
                     </li>
                 </ul>
             </div>
             <div class="mt-4">
                <div class="row g-4">
                    @foreach ($Best_Deals as $item)
                        <div class="col-lg-6">
                            <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 border card-md gap-4">
                                <div class="thumbnail position-relative rounded-2">
                                    <a href="javascript:void(0);">
                                        <img src="{{asset('storage/'.$item->image)}}" alt="product"
                                            class="img-fluid">
                                    </a>
                                    <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-1 rounded-2">
                                        <a href="#" class="rounded-btn fs-xs IconDisplayModelDetail"  value="{{$item->id}}"><i class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="card-content mt-4 mt-sm-0 w-100">
                                    <a
                                        href="https://grostore.themetags.com/products/red-tomato-25-gm-syu8x"
                                        class="fw-bold text-heading title fs-sm tt-line-clamp tt-clamp-1">
                                        {{$item->name}}
                                    </a>
                                    <div class="pricing mt-2">
                                        <span class="fw-bold h4 text-danger">{{$item->price}} DH</span>
                                    </div>


                                    <form action="" class="direct-add-to-cart-form">
                                        <input type="hidden" name="_token" value="oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN">
                                        <input type="hidden" name="product_variation_id" value="8">
                                        <input type="hidden" value="1" name="quantity">

                                        <div class="d-flex justify-content-between align-items-center mt-10">
                                            <span class="flex-grow-1">
                                                <a href="#"
                                                    class="fs-xs fw-bold d-inline-block explore-btn direct-add-to-cart-btn BtnAddProductToCart" value="{{$item->id}}">
                                                    <span class="add-to-cart-text">Acheter maintenant</span>
                                                    <span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </span>

                                            <span class="fs-xxs fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Reward Points">
                                                <i class="fas fa-medal"></i> {{$item->qte}}
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
             </div>
         </div>
     </div>
 </div>
</section>
 <!--banner section end-->

 <!--banner 2 section start-->
 <section class="position-relative banner-section z-1 overflow-hidden">
    <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/bg-shape-4.png?v=v4.4.0" alt="bg shape"
        class="position-absolute start-0 bottom-0 w-100 z--1">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-8">
                <a href="#">
                    <img src="{{asset('storage/images/advertising.jpg')}}" alt=""
                        srcset="" class="img-fluid w-100 h-100">
                </a>
            </div>
            <div class="col-xl-4 d-none d-xl-block">
                <a href="#">
                    <img src="{{asset('storage/images/right-advertising.jpg')}}" alt=""
                        srcset="" class="img-fluid w-100 h-100">
                </a>
            </div>
        </div>
    </div>
</section>
 <!--banner 2 section end-->

 <!--feedback section start-->
 <section class="ptb-120 bg-shade position-relative overflow-hidden z-1 feedback-section">
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/bg-shape-5.png?v=v4.4.0" alt="bg shape"
     class="position-absolute start-0 bottom-0 z--1 w-100">
 {{-- <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/map-bg.png?v=v4.4.0" alt="map"
     class="position-absolute start-50 top-50 translate-middle z--1">
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/fd-1.png?v=v4.4.0" alt="shape"
     class="position-absolute z--1 fd-1">
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/fd-2.png?v=v4.4.0" alt="shape"
     class="position-absolute z--1 fd-2">
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/fd-3.png?v=v4.4.0" alt="shape"
     class="position-absolute z--1 fd-3">
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/fd-4.png?v=v4.4.0" alt="shape"
     class="position-absolute z--1 fd-4">
 <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/fd-5.png?v=v4.4.0" alt="shape"
     class="position-absolute z--1 fd-5"> --}}
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-xl-6">
             <div class="section-title text-center">
                 <h2 class="mb-6">Ce que disent nos clients</h2>
             </div>
         </div>
         <div class="col-xl-8">
             <div class="gshop-feedback-slider-wrapper">
                 <div class="swiper gshop-feedback-thumb-slider">
                     <div class="swiper-wrapper">
                                                         <div class="swiper-slide control-thumb">
                                 <img src="https://grostore.themetags.com/public/uploads/media/qsDz8joqI1T9oSLjsmfxSGz1calei39ORQLvMBR4.jpg" alt="clients"
                                     class="img-fluid rounded-circle">
                             </div>
                                                         <div class="swiper-slide control-thumb">
                                 <img src="https://grostore.themetags.com/public/uploads/media/i9t801n1PqHw2C61v7ai0ThySLAwgrj5IITjPfcC.jpg" alt="clients"
                                     class="img-fluid rounded-circle">
                             </div>
                                                 </div>
                 </div>
                 <div class="swiper gshop-feedback-slider mt-4">
                     <div class="swiper-wrapper">
                                                         <div class="swiper-slide feedback-single text-center">
                                 <p class="mb-5">Bonjour ! J'ai découvert votre site et je vous en suis reconnaissant. Je suis très intéressé par le monde du thé et j'apprécie parcourir les sites spécialisés dans le thé. Votre gamme variée de produits et la profondeur de votre contenu sur le thé ont attiré mon attention. Votre site semble offrir une expérience complète pour les amateurs de thé, des débutants aux experts. J'ai hâte d'explorer davantage vos produits et peut-être d'essayer quelques nouvelles variétés !</p>
                                 <span
                                     class="clients_name text-dark fw-bold d-block mb-1">Ahmad</span>
                                 <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                     <li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li>
                                 </ul>
                             </div>
                                                         <div class="swiper-slide feedback-single text-center">
                                 <p class="mb-5">Bonjour ! Je viens de découvrir votre site et je suis vraiment impressionné ! En tant qu'amateur de parfum, je suis toujours à la recherche de nouvelles sources pour enrichir ma passion. Votre sélection de parfum semble vraiment exceptionnelle, et j'apprécie la manière dont vous présentez les informations sur les différentes variétés. Votre site offre une expérience agréable et instructive pour les connaisseurs comme moi. Merci pour tout le travail que vous avez investi pour rendre votre plateforme si captivante !.</p>
                                 <span
                                     class="clients_name text-dark fw-bold d-block mb-1">Ahmad</span>
                                 <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                     <li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li>
                                 </ul>
                             </div>
                                                 </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
</section>
 <!--feedback section end-->


 <!--products listing start-->
 <section class="pt-80 pb-100">
 <div class="container">
     <div class="row justify-content-center justify-content-xl-between g-4">
         <div class="col-xl-9">
             <div class="row g-4">
                 <div class="col-lg-6">
                     <div class="product-listing-box bg-white rounded-2">
                        <div class="d-flex align-items-center justify-content-between gap-3 mb-5 flex-wrap">
                            <h4 class="mb-0">Nouveaux produits</h4>

                        </div>
                        @foreach ($New_Products as $item)
                            <div class="mb-3">

                                <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 border card-md gap-4">
                                    <div class="thumbnail position-relative rounded-2">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('storage/'.$item->image)}}" alt="product"
                                                class="img-fluid"></a>
                                        <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-1 rounded-2">

                                            <a href="#" class="rounded-btn fs-xs IconDisplayModelDetail"  value="{{$item->id}}"
                                                ><i class="fa-solid fa-eye"></i></a>

                                        </div>
                                    </div>
                                    <div class="card-content mt-4 mt-sm-0 w-100">
                                        <a
                                            href="https://grostore.themetags.com/products/rambutan-sweet-delicious-fruit-5p0o9"
                                            class="fw-bold text-heading title fs-sm tt-line-clamp tt-clamp-1">
                                            {{$item->name}}
                                        </a>
                                        <div class="pricing mt-2">
                                            <span class="fw-bold h4 text-danger">{{$item->price}} DH</span>


                                        </div>


                                        <form action="" class="direct-add-to-cart-form">
                                            <input type="hidden" name="_token" value="oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN">
                                            <input type="hidden" name="product_variation_id" value="47">
                                            <input type="hidden" value="1" name="quantity">

                                            <div class="d-flex justify-content-between align-items-center mt-10">
                                                <span class="flex-grow-1">
                                                    <a href="#"
                                                        class="fs-xs fw-bold d-inline-block explore-btn direct-add-to-cart-btn BtnAddProductToCart" value="{{$item->id}}" >
                                                        <span class="add-to-cart-text">Acheter maintenant</span>
                                                        <span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span>
                                                        </a>
                                                </span>

                                                <span class="fs-xxs fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Reward Points">
                                                        <i class="fas fa-medal"></i> {{$item->qte}}
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-listing-box bg-white rounded-2">
                        <div class="d-flex align-items-center justify-content-between gap-3 mb-5 flex-wrap">
                            <h4 class="mb-0">Meilleures ventes</h4>

                        </div>
                        @foreach ($Best_Selling as $item)
                        <div class="mb-3">
                            <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 border card-md gap-4">
                                <div class="thumbnail position-relative rounded-2">
                                    <a href="javascript:void(0);"><img src="{{asset('storage/'.$item->image)}}" alt="product"
                                            class="img-fluid"></a>
                                    <div
                                        class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-1 rounded-2">

                                        <a href="#" class="rounded-btn fs-xs IconDisplayModelDetail"  value="{{$item->id}}"><i class="fa-solid fa-eye"></i></a>

                                    </div>
                                </div>
                                <div class="card-content mt-4 mt-sm-0 w-100">
                                    <a
                                        href="#"
                                        class="fw-bold text-heading title fs-sm tt-line-clamp tt-clamp-1">
                                        {{$item->name}}
                                    </a>
                                    <div class="pricing mt-2">
                                        <span class="fw-bold h4 text-danger">{{$item->price}} DH</span>
                                    </div>


                                    <form action="" class="direct-add-to-cart-form">
                                        <input type="hidden" name="_token" value="oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN">
                                        <input type="hidden" name="product_variation_id" value="3">
                                        <input type="hidden" value="1" name="quantity">

                                        <div class="d-flex justify-content-between align-items-center mt-10">
                                            <span class="flex-grow-1">
                                                <a href="#"
                                                    class="fs-xs fw-bold d-inline-block explore-btn direct-add-to-cart-btn BtnAddProductToCart" value="{{$item->id}}">
                                                    <span class="add-to-cart-text">Acheter maintenant </span>
                                                    <span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </span>

                                            <span class="fs-xxs fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Reward Points">
                                                <i class="fas fa-medal"></i> {{$item->qte}}
                                            </span>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
         </div>
         <div class="col-xl-3 d-none d-xl-block">
             <a href="#" class=""><img
                     src="https://grostore.themetags.com/public/uploads/media/gTeC1mAdsPlHeg3f8GM8KXBlnvwHh493IGMfFvwG.png" alt=""
                     class="img-fluid rounded-2 d-flex flex-column h-100 object-fit-cover"></a>
         </div>
     </div>
 </div>
</section>
 <!--products listing end-->

 <style>
    .card-wrapper{
max-width: 1100px;
margin: 0 auto;
}
.imageDetail{
width: 100%;
display: block;
}
.img-display{
overflow: hidden;
}
.img-showcase{
display: flex;
width: 100%;
transition: all 0.5s ease;
}
.img-showcase img{
min-width: 100%;
}
.img-select{
display: flex;
}
.img-item{
margin: 0.3rem;
}
.img-item:nth-child(1),
.img-item:nth-child(2),
.img-item:nth-child(3){
margin-right: 0;
}
.img-item:hover{
opacity: 0.8;
}
.product-content{
padding: 2rem 1rem;
}
.product-title{
font-size: 3rem;
text-transform: capitalize;
font-weight: 700;
position: relative;
color: #12263a;
margin: 1rem 0;
}
.product-title::after{
content: "";
position: absolute;
left: 0;
bottom: 0;
height: 4px;
width: 80px;
background: #12263a;
}
.product-link{
text-decoration: none;
text-transform: uppercase;
font-weight: 400;
font-size: 0.9rem;
display: inline-block;
margin-bottom: 0.5rem;
background: #256eff;
color: #fff;
padding: 0 0.3rem;
transition: all 0.5s ease;
}
.product-link:hover{
opacity: 0.9;
}
.product-rating{
color: #ffc107;
}
.product-rating span{
font-weight: 600;
color: #252525;
}
.product-price{
margin: 1rem 0;
font-size: 1rem;
font-weight: 700;
}
.product-price span{
font-weight: 400;
}
.last-price span{
color: #f64749;
text-decoration: line-through;
}
.new-price span{
color: #256eff;
}
.product-detail h2{
text-transform: capitalize;
color: #12263a;
padding-bottom: 0.6rem;
}
.product-detail p{
font-size: 0.9rem;
padding: 0.3rem;
opacity: 0.8;
}
.product-detail ul{
margin: 1rem 0;
font-size: 0.9rem;
}
.product-detail ul li{
margin: 0;
list-style: none;
background: url(shoes_images/checked.png) left center no-repeat;
background-size: 18px;
padding-left: 1.7rem;
margin: 0.4rem 0;
font-weight: 600;
opacity: 0.9;
}
.product-detail ul li span{
font-weight: 400;
}
.purchase-info{
margin: 1.5rem 0;
}
.purchase-info input,
.purchase-info .btn{
border: 1.5px solid #ddd;
border-radius: 25px;
text-align: center;
padding: 0.45rem 0.8rem;
outline: 0;
margin-right: 0.2rem;
margin-bottom: 1rem;
}
.purchase-info input{
width: 60px;
}
.purchase-info .btn{
cursor: pointer;
color: #fff;
}
.purchase-info .btn:first-of-type{
background: #256eff;
}
.purchase-info .btn:last-of-type{
background: #f64749;
}
.purchase-info .btn:hover{
opacity: 0.9;
}
.social-links{
display: flex;
align-items: center;
}
.social-links a{
display: flex;
align-items: center;
justify-content: center;
width: 32px;
height: 32px;
color: #000;
border: 1px solid #000;
margin: 0 0.2rem;
border-radius: 50%;
text-decoration: none;
font-size: 0.8rem;
transition: all 0.5s ease;
}
.social-links a:hover{
background: #000;
border-color: transparent;
color: #fff;
}

@media screen and (min-width: 992px){
.card{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 1.5rem;
}
.card-wrapper{

    display: flex;
    justify-content: center;
    align-items: center;
}
.product-imgs{
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.product-content{
    padding-top: 0;
}
}
</style>


     <!-- modals -->
     <div class="modal fade" id="quickview_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content min-h-400">
                <div class="modal-body h-100 bg-white">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class = "card-wrapper">
                        <div class = "card">
                          <!-- card left -->
                            <div class = "product-imgs">
                                <div class = "img-display">
                                    <div class = "img-showcase">

                                    </div>
                                </div>
                                <div class = "img-select">

                                </div>
                            </div>

                        <div class = "product-content" style="background: #fff">
                            <h2 class = "product-title"></h2>

                            <div class = "product-rating">
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star-half-alt"></i>
                                <span>4.7(21)</span>
                            </div>

                            <div class = "product-price">
                                <p class = "new-price">Prix: <span class="PriceProductDetail"></span></p>
                            </div>

                            <div class = "product-detail">
                                <h2 class="DescriptionProductDetail">à propos de cet article: </h2>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-check me-3"></i>Catégories: <span class="CategoryDetail"></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check me-3"></i>Marque: <span class="MarqueDetail"></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check me-3"></i>Disponible: <span class="QteDetail"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center gap-3 flex-wrap mt-5">
                                <div class="product-qty qty-increase-decrease d-flex align-items-center">
                                    <button type="button" class="decrease">-</button>
                                    <input type="text" readonly="" value="1" name="quantity" min="1" max="195" class="QuantityDetail">
                                    <button type="button" class="increase">+</button>
                                </div>

                                <button type="submit" class="btn btn-secondary btn-md add-to-cart-btn BtnAddProductToCart" >
                                    <span class="me-2">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </span>
                                    <span class="add-to-cart-text" _msttexthash="291005" _msthash="353"> Ajouter au panier </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
     <!-- modals -->


     <!--footer section start-->
                 <div class="footer-curve position-relative overflow-hidden">
 <span class="position-absolute section-curve-wrapper top-0 h-100"
     data-background="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/section-curve.png?v=v4.4.0"></span>
</div>

<footer class="gshop-footer position-relative pt-8 bg-dark z-1 overflow-hidden">

 <div class="container">
     <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6">
            <div class="gshop_subscribe_form text-center">
                <h4 class="text-white gshop-title">Abonnez-vous à nous
                    <mark class="p-0 position-relative text-secondary bg-transparent"> Nouvelles Arrivées
                         <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/border-line.svg?v=v4.4.0"
                            alt="border line" class="position-absolute border-line">
                    </mark>
                    <br class="d-none d-sm-block">&amp; Les autres informations.
                </h4>
                <form class="mt-5 d-flex align-items-center bg-white rounded subscribe_form"  action="" method="POST">
                    <input type="email" class="form-control" placeholder="Enter Email Address" type="email" name="email" required>
                    <button type="submit" class="btn btn-primary flex-shrink-0">Abonnez-vous maintenant
                    </button>
                </form>
            </div>
        </div>
     </div>
     <span class="gradient-spacer my-8 d-block"></span>
     <div class="row g-5">
         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
             <div class="footer-widget">
                 <h5 class="text-white mb-4">Catégorie</h5>
                    <ul class="footer-nav">
                        @foreach ($categories as $key => $item)
                            @if ($key < 3)
                                <li>
                                    <a href="{{ url('products/Category/'.$item->id) }}">{{ $item->category_name }}</a>
                                </li>
                            @endif
                        @endforeach

                </ul>
             </div>
         </div>

         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
             <div class="footer-widget">
                 <h5 class="text-white mb-4">Pages clients</h5>
                 <ul class="footer-nav">
                    <li><a href="{{url('/')}}">Accueil</a></li>
                     <li><a href="{{url('Contact')}}">Contactez-nous</a></li>
                     <li><a href="{{url('About')}}">à propos de nous</a></li>

                 </ul>
             </div>
         </div>

         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
             <div class="footer-widget">
                 <h5 class="text-white mb-4">Contact Info</h5>
                 <ul class="footer-nav">
                     <li class="text-white pb-2 fs-xs">{{$Infos->address}}</li>
                     <li class="text-white pb-2 fs-xs">{{$Infos->phone}}</li>
                     <li class="text-white pb-2 fs-xs">{{$Infos->email}}</li>
                 </ul>
             </div>
         </div>
     </div>
 </div>

</footer>
         <div class="mobile-toolbar d-block d-md-none d-lg-none">
 <div class="d-table table-layout-fixed w-100">
     <a class="d-table-cell mobile-toolbar-item  mobile-menu-toggle">
         <span class="mobile-toolbar-icon"><i class="fas fa-bars"></i></span><span
             class="mobile-toolbar-label">Category
         </span>
     </a>

     <a class="d-table-cell mobile-toolbar-item" href="{{url('Account')}}">
         <span class="mobile-toolbar-icon">
             <svg width="18" height="25" viewBox="0 0 22 25" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                 <path
                     d="M11.092 11.9546C12.6656 11.9546 14.0281 11.3902 15.1416 10.2766C16.2547 9.16322 16.8193 7.80093 16.8193 6.2271C16.8193 4.65382 16.2549 3.29134 15.1414 2.1776C14.0279 1.0644 12.6654 0.5 11.092 0.5C9.51825 0.5 8.156 1.0644 7.04266 2.17778C5.92931 3.29116 5.36475 4.65363 5.36475 6.2271C5.36475 7.80093 5.92931 9.1634 7.04266 10.2768C8.15636 11.39 9.51879 11.9546 11.092 11.9546ZM8.0281 3.16308C8.88239 2.30877 9.88453 1.89349 11.092 1.89349C12.2993 1.89349 13.3017 2.30877 14.1561 3.16308C15.0104 4.01757 15.4259 5.01992 15.4259 6.2271C15.4259 7.43464 15.0104 8.43681 14.1561 9.2913C13.3017 10.1458 12.2993 10.5611 11.092 10.5611C9.88489 10.5611 8.88275 10.1456 8.0281 9.2913C7.17364 8.43699 6.7582 7.43464 6.7582 6.2271C6.7582 5.01992 7.17364 4.01757 8.0281 3.16308Z"
                     fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
                 <path
                     d="M21.1339 18.893C21.1012 18.4201 21.0352 17.9043 20.9379 17.3596C20.8397 16.8108 20.7133 16.292 20.562 15.8178C20.4055 15.3277 20.1931 14.8438 19.9301 14.38C19.6575 13.8986 19.3371 13.4794 18.9776 13.1345C18.6016 12.7736 18.1414 12.4835 17.6091 12.2719C17.0787 12.0614 16.4909 11.9547 15.8621 11.9547C15.6152 11.9547 15.3763 12.0564 14.9151 12.3576C14.6313 12.5433 14.2993 12.7581 13.9287 12.9956C13.6118 13.1982 13.1825 13.3879 12.6523 13.5598C12.135 13.7277 11.6098 13.8129 11.0912 13.8129C10.5729 13.8129 10.0477 13.7277 9.53001 13.5598C9.00034 13.3881 8.57088 13.1984 8.25455 12.9958C7.88747 12.7605 7.55527 12.5457 7.26718 12.3574C6.80634 12.0562 6.56753 11.9545 6.32059 11.9545C5.69163 11.9545 5.10401 12.0614 4.57378 12.2721C4.04189 12.4833 3.58143 12.7734 3.20512 13.1347C2.84561 13.4798 2.52522 13.8988 2.25281 14.38C1.99019 14.8438 1.77758 15.3276 1.62108 15.818C1.46993 16.2922 1.34351 16.8108 1.24533 17.3596C1.14788 17.9035 1.082 18.4195 1.04933 18.8935C1.01722 19.3569 1.00098 19.8393 1.00098 20.3266C1.00098 21.5934 1.40238 22.6189 2.19394 23.3752C2.97572 24.1216 4.00996 24.5 5.26808 24.5H16.9157C18.1735 24.5 19.2077 24.1216 19.9897 23.3752C20.7814 22.6194 21.1828 21.5935 21.1828 20.3264C21.1826 19.8374 21.1662 19.3551 21.1339 18.893ZM19.0123 22.3449C18.4957 22.8381 17.8099 23.0779 16.9155 23.0779H5.26808C4.37354 23.0779 3.68773 22.8381 3.17135 22.3451C2.66474 21.8613 2.41854 21.2008 2.41854 20.3266C2.41854 19.8718 2.43349 19.4229 2.46339 18.9918C2.49255 18.569 2.55216 18.1044 2.64056 17.6108C2.72786 17.1233 2.83896 16.6658 2.9711 16.2516C3.09789 15.8545 3.27082 15.4612 3.48527 15.0824C3.68995 14.7214 3.92544 14.4116 4.18529 14.1621C4.42835 13.9286 4.73471 13.7375 5.0957 13.5942C5.42956 13.4616 5.80476 13.3891 6.21208 13.3781C6.26172 13.4046 6.35012 13.4552 6.49334 13.5488C6.78475 13.7394 7.12064 13.9567 7.49197 14.1946C7.91054 14.4624 8.44981 14.7042 9.09409 14.9128C9.75277 15.1265 10.4245 15.235 11.0913 15.235C11.7581 15.235 12.4301 15.1265 13.0884 14.913C13.7333 14.704 14.2723 14.4624 14.6915 14.1943C15.0715 13.9506 15.3979 13.7395 15.6894 13.5488C15.8326 13.4553 15.921 13.4046 15.9706 13.3781C16.3781 13.3891 16.7533 13.4616 17.0874 13.5942C17.4482 13.7375 17.7545 13.9288 17.9976 14.1621C18.2574 14.4114 18.4929 14.7212 18.6976 15.0826C18.9122 15.4612 19.0854 15.8547 19.212 16.2515C19.3443 16.6662 19.4556 17.1235 19.5427 17.6106C19.6309 18.1052 19.6907 18.5699 19.7199 18.992V18.9924C19.7499 19.4218 19.7651 19.8705 19.7653 20.3266C19.7651 21.201 19.5189 21.8613 19.0123 22.3449Z"
                     fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
             </svg>
         </span>
         <span class="mobile-toolbar-label">Compte</span>
     </a>
     <a class="d-table-cell mobile-toolbar-item" href="{{url('Cart')}}">


         <span class="mobile-toolbar-icon mobile-cart-icon">
             <svg width="18" height="25" viewBox="0 0 22 25" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                 <path
                     d="M21.1704 23.9559L19.6264 7.01422C19.5843 6.55156 19.1908 6.19718 18.7194 6.19718H15.5355V4.78227C15.5355 2.14533 13.3583 0 10.6823 0C8.00628 0 5.82937 2.14533 5.82937 4.78227V6.19718H2.6433C2.17192 6.19718 1.77839 6.55156 1.73625 7.01422L0.186259 24.0225C0.163431 24.2735 0.248671 24.5223 0.421216 24.7082C0.593761 24.8941 0.837705 25 1.0933 25H20.2695C20.2702 25 20.2712 25 20.2719 25C20.775 25 21.1826 24.5982 21.1826 24.1027C21.1825 24.0528 21.1784 24.0036 21.1704 23.9559ZM7.65075 4.78227C7.65075 3.1349 9.01071 1.79465 10.6824 1.79465C12.3542 1.79465 13.7142 3.1349 13.7142 4.78227V6.19718H7.65075V4.78227ZM2.08948 23.2055L3.47591 7.99183H5.82937V9.59649C5.82937 10.0921 6.237 10.4938 6.74006 10.4938C7.24313 10.4938 7.65075 10.0921 7.65075 9.59649V7.99183H13.7142V9.59649C13.7142 10.0921 14.1219 10.4938 14.6249 10.4938C15.128 10.4938 15.5356 10.0921 15.5356 9.59649V7.99183H17.8869L19.2733 23.2055H2.08948Z"
                     fill="#5D6374" />
             </svg>
             <small class="badge bg-primary cart-counter">0</small>
         </span>
         <span class="mobile-toolbar-label sub-total-price">₹0.00</span>
     </a>
 </div>
</div>
<div class="offcanvas-left-menu position-fixed">
    <div class="mobile-menu">
        <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
            <a href="{{url('/')}}" class="d-inline-block mb-5"><img
                src="https://grostore.themetags.com/public/uploads/media/0vDgRJLm6biMs5zCaVAze5RFwEwcTF4kSuHsZ9OT.png" alt="logo"></a>
            <nav class="mobile-menu-wrapper scrollbar">
                <ul>
                    @foreach ($categories as $item)
                    <li>
                        <a href="{{url('products/Category/'.$item->id)}}"
                            class="d-flex align-items-center">
                            <div class="me-2 avatar-icon">
                                <img src="https://grostore.themetags.com/public/uploads/media/OfNXzapZlaGqPdd3IcLP4D4bp8BkwDEjlRGhGbfh.png"
                                alt="" class="rounded-circle h-100 w-100">
                            </div>
                            <span>{{$item->category_name}}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
     </nav>
 </div>
</div>
      <!--footer section end-->

 </div>


 <!--scroll bottom to top button start-->
 <button class="scroll-top-btn">
     <i class="fa-regular fa-hand-pointer"></i></button>
     <!--scroll bottom to top button end-->

     <!--build:js-->
     <script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/jquery-3.6.4.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/jquery-ui.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/bootstrap.bundle.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/swiper-bundle.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/jquery.magnific-popup.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/simplebar.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/parallax-scroll.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/isotop.pkgd.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/countdown.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/range-slider.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/waypoints.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/counterup.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/clipboard.min.js?v=v4.4.0"></script>

<script src="https://grostore.themetags.com/public/frontend/common/js/toastr.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/common/js/select2.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/app.js?v=v4.4.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>


<script>
    var AddCart              = "{{ url('AddCart')}}";
    var listCartByMacAddress = "{{ url('listCart') }}";
    var PathImage            = "{{ asset('storage/')}}";
    var DeleteCarte          = "{{ url('DeleteCart') }}";
    var DetailProduct        = "{{ url('DetailProduct')}}";
    var filterByPrice        = "{{ url('filterByPrice')}}";
</script>
<script src="{{asset('Js/welcome.js')}}"></script>
<script>
 "use strict"

 // runs when the document is ready
 $(document).ready(function() {
     initIsotop();
 });

 // tooltip
 $(function() {
     $('[data-bs-toggle="tooltip"]').tooltip();
 });


 //isotop filter grid
 function initIsotop() {
     var $filter_grid = $(".filter_group").isotope({});
     $(".filter-btns").on("click", "button", function() {
         var filterValue = $(this).attr("data-filter");
         $filter_grid.isotope({
             filter: filterValue,
         });
         $(this).parent().find("button.active").removeClass("active");
         $(this).addClass("active");
     });
 }

 // copy coupon code
 $(function() {
     new ClipboardJS('.copy-text');
 });
 $(".copyBtn").each(function() {
     $(this).on("click", function() {
         $(this).html('Copied');
     });
 });

 // change language
 function changeLocaleLanguage(e) {
     var locale = e.dataset.flag;
     $.post("https://grostore.themetags.com/backend/change-language", {
         _token: 'oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN',
         locale: locale
     }, function(data) {
         setTimeout(() => {
             location.reload();
         }, 300);
     });
 }

 // change currency
 function changeLocaleCurrency(e) {
     var currency_code = e.dataset.currency;
     $.post("https://grostore.themetags.com/backend/change-currency", {
         _token: 'oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN',
         currency_code: currency_code
     }, function(data) {
         setTimeout(() => {
             location.reload();
         }, 300);
     });
 }

 // change location
 function changeLocation(e) {
     var location_id = e.dataset.location;
     $.post("https://grostore.themetags.com/backend/change-location", {
         _token: 'oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN',
         location_id: location_id
     }, function(data) {
         setTimeout(() => {
             location.reload();
         }, 300);
     });
 }


 // showRejectionReason
 function showRejectionReason(reason) {
     $('.reason').empty();
     $('#refundRejectionModal').modal('show');
     $('.reason').html(reason);
 }

 // show product details in modal
 function showProductDetailsModal(productId) {
     $('#quickview_modal .product-info').html(null);
     $('.data-preloader-wrapper>div').addClass('spinner-border');
     $('.data-preloader-wrapper').addClass('min-h-400');
     $('#quickview_modal').modal('show');

     $.post('https://grostore.themetags.com/products/show-product-info', {
         _token: 'oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN',
         id: productId
     }, function(data) {
         setTimeout(() => {
             $('.data-preloader-wrapper>div').removeClass('spinner-border');
             $('.data-preloader-wrapper').removeClass('min-h-400');
             $('#quickview_modal .product-info').html(data);
             TT.ProductSliders();
             cartFunc();
         }, 200);
     });
 }

 $('#quickview_modal').on('hide.bs.modal', function(e) {
     $('#quickview_modal .product-info').html(null);
 });

 // address modal select2
 function addressModalSelect2(parent = '.addAddressModal') {
     $('.select2Address').select2({
         dropdownParent: $(parent)
     });
 }
 addressModalSelect2();

 // ajax toast
 function notifyMe(level, message) {
     if (level == 'danger') {
         level = 'error';
     }
     toastr.options = {
         "timeOut": "5000",
         "closeButton": true,
         "positionClass": "toast-top-center",
     };
     toastr[level](message);
 }

 // laravel flash as toast messages




 // get selected variation information
 function getVariationInfo() {
     if ($('.add-to-cart-form input[name=quantity]').val() > 0 && isValidForAddingToCart()) {
         let data = $('.add-to-cart-form').serializeArray();
         $.ajax({
             type: "POST",
             url: 'https://grostore.themetags.com/products/get-variation-info',
             data: data,
             success: function(response) {

                 $('.all-pricing').addClass('d-none');
                 $('.variation-pricing').removeClass('d-none');
                 $('.variation-pricing').html(response.data.price);

                 $('.add-to-cart-form input[name=product_variation_id]').val(response.data
                     .id);
                 $('.add-to-cart-form input[name=quantity]').prop('max', response.data.stock);

                 if (response.data.stock < 1) {
                     $('.add-to-cart-btn').prop('disabled', true);
                     $('.add-to-cart-btn .add-to-cart-text').html(TT.localize.outOfStock);
                 } else {
                     $('.add-to-cart-btn').prop('disabled', false);
                     $('.add-to-cart-btn .add-to-cart-text').html(TT.localize.addToCart);
                     $('.qty-increase-decrease input[name=quantity]').val(1);
                 }
             }
         });
     }
 }

 // check if it can be added to cart
 function isValidForAddingToCart() {

     var count = 0;
     $('.variation-for-cart').each(function() {
         // how many variations
         count++;
     });

     if ($('.product-radio-btn input:radio:checked').length == count) {
         return true;
     }

     return false;
 }

 // cart func
 function cartFunc() {
     // on selection of variation
     $('.product-radio-btn input').on('change', function() {
         getVariationInfo();
     });

     // increase qty
     $('.qty-increase-decrease .increase').on('click', function() {
         var prevValue = $('.product-qty input[name=quantity]').val();
         var maxValue = $('.product-qty input[name=quantity]').attr('max');
         if (maxValue == undefined || parseInt(prevValue) < parseInt(maxValue)) {
             $('.qty-increase-decrease input[name=quantity]').val(parseInt(prevValue) + 1)
         }
     });

     // decrease qty
     $('.qty-increase-decrease .decrease').on('click', function() {
         var prevValue = $('.product-qty input[name=quantity]').val();
         if (prevValue > 1) {
             $('.qty-increase-decrease input[name=quantity]').val(parseInt(prevValue) - 1)
         }
     });

     // add to cart form submit
     $('.add-to-cart-form').on('submit', function(e) {
         e.preventDefault();
         if (isValidForAddingToCart()) {
             $('.add-to-cart-btn').prop('disabled', true);
             $('.add-to-cart-btn .add-to-cart-text').html(TT.localize.addingToCart);

             // add to cart here
             let data = $('.add-to-cart-form').serializeArray();
             $.ajax({
                 type: "POST",
                 url: 'https://grostore.themetags.com/add-to-cart',
                 data: data,
                 success: function(data) {
                     $('.add-to-cart-btn').prop('disabled', false);
                     $('.add-to-cart-btn .add-to-cart-text').html(TT.localize.addToCart);
                     updateCarts(data);
                     notifyMe(data.alert, data.message);
                 }
             });

         } else {
             optionsAlert();
         }
     })
 }
 cartFunc();

 // without variation form submit
 function directAddToCartFormSubmit($this) {
     // add to cart here
     let parent = $($this).closest('.direct-add-to-cart-form');

     parent.find('.direct-add-to-cart-btn').prop('disabled', true);

     let text = parent.find('.add-to-cart-text').html();
     parent.find('.add-to-cart-text').html(TT.localize.pleaseWait);


     let data = parent.serializeArray();
     $.ajax({
         type: "POST",
         url: 'https://grostore.themetags.com/add-to-cart',
         data: data,
         success: function(data) {
             parent.find('.direct-add-to-cart-btn').prop('disabled', false);

             if (text.includes("Buy Now")) {
                 parent.find('.add-to-cart-text').html(TT.localize.buyNow);
             } else {
                 parent.find('.add-to-cart-text').html(TT.localize.addToCart);
             }
             updateCarts(data);
             notifyMe(data.alert, data.message);
         }
     });
 }

 // please choose all the available options
 function optionsAlert() {
     notifyMe('warning', TT.localize.optionsAlert);
 }

 // handleCartItem
 function handleCartItem(action, id) {
     let data = {
         _token: "oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN",
         action: action,
         id: id,
     };

     $.ajax({
         type: "POST",
         url: 'https://grostore.themetags.com/update-cart',
         data: data,
         success: function(data) {
             if (data.success == true) {

                 $('.apply-coupon-btn').removeClass('d-none');
                 $('.clear-coupon-btn').addClass('d-none');
                 $('.apply-coupon-btn').prop('disabled', false);
                 $('.apply-coupon-btn').html(TT.localize.applyCoupon);
                 updateCarts(data);
                 if (action == 'increase' && data.message) {
                     notifyMe(data.alert, data.message);
                 }
             }
         }
     });
 }

 // coupon-form form submit
 $('.coupon-form').on('submit', function(e) {
     e.preventDefault();
     $('.apply-coupon-btn').prop('disabled', true);
     $('.apply-coupon-btn').html(TT.localize.pleaseWait);

     // apply coupon here
     let data = $('.coupon-form').serializeArray();
     $.ajax({
         type: "POST",
         url: 'https://grostore.themetags.com/apply-coupon',
         data: data,
         success: function(data) {
             if (data.success == false) {
                 notifyMe('error', data.message);
                 $('.apply-coupon-btn').prop('disabled', false);
                 $('.apply-coupon-btn').html(TT.localize.applyCoupon);
             } else {
                 // append clear button
                 $('.coupon-input').prop('disabled', false);
                 $('.apply-coupon-btn').addClass('d-none');
                 $('.clear-coupon-btn').removeClass('d-none');

                 $('.apply-coupon-btn').prop('disabled', false);
                 $('.apply-coupon-btn').html(TT.localize.applyCoupon);

                 updateCouponPrice(data);

             }
         }
     });
 })

 // clear-coupon-btn clicked
 $('.clear-coupon-btn').on('click', function(e) {
     e.preventDefault();
     // append clear button
     $('.coupon-input').prop('disabled', false);
     $('.apply-coupon-btn').removeClass('d-none');
     $('.clear-coupon-btn').addClass('d-none');

     $.ajax({
         type: "GET",
         url: 'https://grostore.themetags.com/clear-coupon',
         success: function(data) {
             updateCouponPrice(data);
         }
     });
 })

 function updateCouponPrice(data) {
     $('.coupon-discount-wrapper').toggleClass('d-none');
     $('.coupon-discount-price').html(data.couponDiscount);
 }

 // update carts markup
 function updateCarts(data) {
     $('.cart-counter').empty();
     $('.sub-total-price').empty();

     $('.cart-navbar-wrapper .simplebar-content').empty();
     $('.cart-listing').empty();

     if (data.cartCount > 0) {
         $('.cart-counter').removeClass('d-none');
     } else {
         $('.cart-counter').addClass('d-none');
     }

     $('.cart-counter').html(data.cartCount);
     $('.sub-total-price').html(data.subTotal);
     $('.cart-navbar-wrapper .simplebar-content').html(data.navCarts);
     $('.cart-listing').html(data.carts);
     $('.coupon-discount-wrapper').addClass('d-none');
     $('.checkout-sidebar').empty();

 }

 // get logistics to check out
 function getLogistics(city_id) {
     $.ajax({
         headers: {
             'X-CSRF-TOKEN': 'oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN'
         },
         url: "https://grostore.themetags.com/get-checkout-logistics",
         type: 'POST',
         data: {
             city_id: city_id
         },
         success: function(data) {
             $('.checkout-sidebar').empty();
             $('.checkout-logistics').empty();
             $('.checkout-logistics').html(data.logistics);
             $('.checkout-sidebar').html(data.summary);
         }
     });
 }

 //  get logistics to check out -- onchange
 $(document).on('change', '[name=chosen_logistic_zone_id]', function() {
     var chosen_logistic_zone_id = $(this).val();
     getShippingAmount(chosen_logistic_zone_id);
 });

 // get logistics to check out
 function getShippingAmount(logistic_zone_id) {
     $.ajax({
         headers: {
             'X-CSRF-TOKEN': 'oZYKJTcUpo0VZZrS1F9qkMhBT0npzHg1bLcleeBN'
         },
         url: "https://grostore.themetags.com/shipping-amount",
         type: 'POST',
         data: {
             logistic_zone_id: logistic_zone_id
         },
         success: function(data) {
             $('.checkout-sidebar').empty();
             $('.checkout-sidebar').html(data);
         }
     });
 }

 //  submit checkout form
 $(document).on('submit', '.checkout-form', function(e) {
     // shipping address not selected
     if ($('.checkout-form input[name=shipping_address_id]:checked').length == 0) {
         notifyMe('error', 'Please select shipping address');
         e.preventDefault();;
         return false;
     }

     // logistic not selected
     if ($('.checkout-form input[name=chosen_logistic_zone_id]:checked').length == 0) {
         notifyMe('error', 'Please select logistic');
         e.preventDefault();;
         return false;
     }

     // billing address not selected
     if ($('.checkout-form input[name=billing_address_id]:checked').length == 0) {
         notifyMe('error', 'Please select billing address');
         e.preventDefault();;
         return false;
     }
 });

 // add to wishlist
 function addToWishlist(productId) {
                                 notifyMe('danger', 'Only customer can add products to wishlist');
                     }
</script>
     <!--endbuild-->

     <!--page's scripts-->

     <!--page's script-->

     <!--for pwa-->

     <!--for pwa-->

     </body>

     </html>


