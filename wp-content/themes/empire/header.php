<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>


    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&display=swap&subset=cyrillic"
          rel="stylesheet">


    <link rel="apple-touch-icon" sizes="180x180" href="./images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicons/favicon-16x16.png">
    <link rel="manifest" href="./images/favicons/site.webmanifest">
    <link rel="mask-icon" href="./images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="./images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-config" content="./images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Global site tag (gtag.js) - Google Analytics -->


    <!-- Facebook Pixel Code -->


    <!-- End Facebook Pixel Code -->
</head>

<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="phone-icon" viewBox="0 0 485.213 485.212">
        <path fill="#f24141" d="M242.607,0C108.629,0,0.001,108.628,0.001,242.606c0,133.976,108.628,242.606,242.606,242.606
                c133.978,0,242.604-108.631,242.604-242.606C485.212,108.628,376.585,0,242.607,0z M370.719,353.989l-19.425,19.429
                c-3.468,3.463-13.623,5.624-13.949,5.624c-61.452,0.536-120.621-23.602-164.095-67.08c-43.593-43.618-67.759-102.998-67.11-164.657
                c0-0.028,2.224-9.892,5.689-13.324l19.424-19.427c7.108-7.141,20.762-10.368,30.327-7.168l4.086,1.363
                c9.537,3.197,19.55,13.742,22.185,23.457l9.771,35.862c2.635,9.743-0.919,23.604-8.025,30.712l-12.97,12.972
                c12.734,47.142,49.723,84.138,96.873,96.903l12.965-12.975c7.141-7.141,20.997-10.692,30.719-8.061l35.857,9.806
                c9.717,2.67,20.26,12.62,23.456,22.154l1.363,4.145C381.028,333.262,377.826,346.913,370.719,353.989z"/>
    </symbol>

    <symbol id="prev-arrow-icon" viewBox="0 0 32.635 32.635">
        <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5
	        	S32.411,16.817,32.135,16.817z"/>
        <path d="M13.037,29.353c-0.128,0-0.256-0.049-0.354-0.146L0.146,16.669C0.053,16.575,0,16.448,0,16.315s0.053-0.26,0.146-0.354
	        	L12.684,3.429c0.195-0.195,0.512-0.195,0.707,0s0.195,0.512,0,0.707L1.207,16.315l12.184,12.184c0.195,0.195,0.195,0.512,0,0.707
	        	C13.293,29.304,13.165,29.353,13.037,29.353z"/>
    </symbol>

    <symbol id="next-arrow-icon" viewBox="0 0 32.635 32.635">
        <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5
	        	S32.411,16.817,32.135,16.817z"/>
        <path d="M19.598,29.353c-0.128,0-0.256-0.049-0.354-0.146c-0.195-0.195-0.195-0.512,0-0.707l12.184-12.184L19.244,4.136
	        	c-0.195-0.195-0.195-0.512,0-0.707s0.512-0.195,0.707,0l12.537,12.533c0.094,0.094,0.146,0.221,0.146,0.354
	        	s-0.053,0.26-0.146,0.354L19.951,29.206C19.854,29.304,19.726,29.353,19.598,29.353z"/>
    </symbol>

    <symbol id="search-icon" viewBox="0 0 129 129">
        <path fill="#f24141"
              d="M51.6,96.7c11,0,21-3.9,28.8-10.5l35,35c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2c1.6-1.6,1.6-4.2,0-5.8l-35-35   c6.5-7.8,10.5-17.9,10.5-28.8c0-24.9-20.2-45.1-45.1-45.1C26.8,6.5,6.5,26.8,6.5,51.6C6.5,76.5,26.8,96.7,51.6,96.7z M51.6,14.7   c20.4,0,36.9,16.6,36.9,36.9C88.5,72,72,88.5,51.6,88.5c-20.4,0-36.9-16.6-36.9-36.9C14.7,31.3,31.3,14.7,51.6,14.7z"/>
    </symbol>

    <symbol id="checked-icon" viewBox="0 0 129 129">
        <path fill="#f24141"
              d="m40.5,61.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l18.9,18.9c0.8,0.8 1.8,1.2 2.9,1.2 0.1,0 0.1,0 0.2,0 1.1-0.1 2.2-0.6 3-1.5l47.3-56.7c1.4-1.7 1.2-4.3-0.5-5.8-1.7-1.4-4.3-1.2-5.8,0.5l-44.5,53.3-15.7-15.7z"/>
        <path fill="#f24141"
              d="m95.1,15.3c-23-14.4-52.5-11-71.7,8.2-22.6,22.6-22.6,59.5 7.10543e-15,82.1 11.3,11.3 26.2,17 41,17s29.7-5.7 41-17c19.3-19.3 22.6-48.9 8.1-71.9-1.2-1.9-3.7-2.5-5.6-1.3-1.9,1.2-2.5,3.7-1.3,5.6 12.5,19.8 9.6,45.2-7,61.8-19.4,19.4-51.1,19.4-70.5,0-19.4-19.4-19.4-51.1 0-70.5 16.6-16.5 41.9-19.4 61.7-7.1 1.9,1.2 4.4,0.6 5.6-1.3 1.2-1.9 0.6-4.4-1.3-5.6z"/>
    </symbol>

    <symbol id="edit-icon" viewBox="0 0 520.2 520.2">
        <path fill="#f24141" d="M508.725,89.888l-22.949-22.95c-15.301-15.3-38.25-15.3-53.551,0l-68.85,68.85L248.625,1.913H38.25
                C17.212,1.913,0,19.125,0,40.163v439.875c0,21.037,17.212,38.25,38.25,38.25h286.875c21.037,0,38.25-17.213,38.25-38.25v-191.25
                l145.35-145.35C524.025,128.138,524.025,105.188,508.725,89.888z M248.625,30.6l89.888,105.188H267.75
                c-9.562,0-19.125-9.562-19.125-19.125V30.6z M344.25,480.038c0,9.562-7.65,19.125-19.125,19.125H38.25
                c-9.562,0-19.125-7.65-19.125-19.125V40.163c0-9.562,7.65-19.125,19.125-19.125H229.5v95.625c0,21.038,17.212,38.25,38.25,38.25
                h76.5L153,346.163l-19.125,95.625l95.625-19.125l114.75-114.75V480.038z M170.212,357.637l47.812,47.812l-59.288,11.476
                L170.212,357.637z M233.325,392.063L183.6,342.337l214.2-214.2l49.726,49.725L233.325,392.063z M495.338,130.05l-32.513,32.512
                L413.1,112.837l32.513-32.512c7.65-7.65,19.125-7.65,26.775,0l22.95,22.95C502.987,110.925,502.987,122.4,495.338,130.05z"/>
    </symbol>

    <symbol id="control-icon" viewBox="0 0 485.69 485.69">
        <path fill="#f24141" d="M410.428,34.738h-76.405l5.155,23.852c0.634,2.961,0.603,5.934,0.271,8.859h54.621V452.98H91.588V67.449h54.637
                        c-0.332-2.941-0.348-5.914,0.285-8.891l5.156-23.82H75.248c-9.031,0-16.34,7.324-16.34,16.354v418.243
                        c0,9.016,7.309,16.354,16.34,16.354h335.18c9.031,0,16.354-7.341,16.354-16.354V51.093
                        C426.783,42.062,419.459,34.738,410.428,34.738z"/>
        <path fill="#f24141" d="M355.568,152.949h-111.71c-9.047,0-16.355,7.324-16.355,16.34c0,9.035,7.309,16.355,16.355,16.355h111.71
                        c9.047,0,16.354-7.32,16.354-16.355C371.924,160.273,364.615,152.949,355.568,152.949z"/>
        <path fill="#f24141" d="M355.568,253.254h-111.71c-9.047,0-16.355,7.323-16.355,16.354c0,9.021,7.309,16.357,16.355,16.357h111.71
                        c9.047,0,16.354-7.34,16.354-16.357C371.924,260.577,364.615,253.254,355.568,253.254z"/>
        <path fill="#f24141" d="M119.556,156.792c-6.898,5.82-7.786,16.137-1.965,23.047l23.855,28.27c3.117,3.699,7.688,5.805,12.496,5.805
                        c0.398,0,0.792-0.016,1.203-0.047c5.219-0.379,9.949-3.258,12.703-7.719l42.914-69.477c4.746-7.688,2.375-17.75-5.312-22.492
                        c-7.688-4.777-17.75-2.375-22.497,5.313l-31.066,50.273l-9.301-11.012C136.763,151.843,126.467,150.956,119.556,156.792z"/>
        <path fill="#f24141" d="M158.72,245.094c-13.554,0-24.535,10.978-24.535,24.517c0,13.543,10.98,24.52,24.535,24.52
                        c13.543,0,24.52-10.977,24.52-24.52C183.24,256.07,172.263,245.094,158.72,245.094z"/>
        <path fill="#f24141" d="M355.568,351.359h-111.71c-9.047,0-16.355,7.309-16.355,16.358c0,9.017,7.309,16.34,16.355,16.34h111.71
                        c9.047,0,16.354-7.323,16.354-16.34C371.924,358.667,364.615,351.359,355.568,351.359z"/>
        <path fill="#f24141" d="M158.72,343.199c-13.554,0-24.535,10.977-24.535,24.52c0,13.539,10.98,24.521,24.535,24.521
                        c13.543,0,24.52-10.979,24.52-24.521C183.24,354.176,172.263,343.199,158.72,343.199z"/>
        <path fill="#f24141" d="M173.463,75.613h138.73c3.401,0,6.613-1.521,8.746-4.176c2.137-2.629,2.961-6.105,2.229-9.43L311.686,8.859
                        C310.564,3.687,305.994,0,300.708,0H184.963c-5.281,0-9.852,3.688-10.977,8.859l-11.5,53.148
                        c-0.695,3.324,0.125,6.801,2.247,9.43C166.868,74.093,170.08,75.613,173.463,75.613z"/>
    </symbol>

    <symbol id="clearance-icon" viewBox="0 0 512 512">
        <path fill="#f24141" d="M376.661,393.213H59.038c-23.899,0-43.342-19.442-43.342-43.341V162.129c0-23.899,19.443-43.342,43.342-43.342h48.425
                c4.334,0,7.848-3.513,7.848-7.848c0-4.335-3.514-7.848-7.848-7.848H59.038C26.484,103.091,0,129.575,0,162.129v187.743
                c0,32.554,26.484,59.037,59.038,59.037h317.623c4.334,0,7.848-3.513,7.848-7.848S380.995,393.213,376.661,393.213z"/>
        <path fill="#f24141" d="M452.962,103.091H138.855c-4.334,0-7.848,3.513-7.848,7.848c0,4.335,3.514,7.848,7.848,7.848h314.107
                c23.899,0,43.342,19.443,43.342,43.342v187.743c0,23.899-19.443,43.341-43.342,43.341h-44.909c-4.334,0-7.848,3.513-7.848,7.848
                s3.514,7.848,7.848,7.848h44.909c32.554,0,59.038-26.484,59.038-59.037V162.129C512,129.575,485.516,103.091,452.962,103.091z"/>
        <path fill="#f24141" d="M452.963,139.715H59.038c-12.359,0-22.414,10.056-22.414,22.414v187.742c0,12.359,10.055,22.414,22.414,22.414h393.925
                c12.359,0,22.413-10.055,22.413-22.414V162.129C475.376,149.77,465.322,139.715,452.963,139.715z M459.679,349.871
                c0,3.704-3.013,6.718-6.717,6.718H59.038c-3.704,0-6.718-3.014-6.718-6.718v-29.906h407.359V349.871z M459.679,304.269H52.32
                v-96.538h407.359V304.269z M459.679,192.035H52.32v-29.906c0-3.704,3.014-6.718,6.718-6.718h393.925
                c3.703,0,6.716,3.014,6.716,6.718V192.035z"/>
        <path fill="#f24141" d="M100.322,217.31H81.79l-12.892,80.573h11.626l2.187-14.618H98.25l2.187,14.618h12.777L100.322,217.31z M84.322,272.329
                l6.101-40.747l6.101,40.747H84.322z"/>
        <path fill="#f24141" d="M153.154,254.947c5.64-2.647,8.172-7.942,8.172-16.23v-2.878c0-12.431-5.64-18.532-18.762-18.532h-19.107v80.573h19.913
                c12.661,0.001,19.222-6.675,19.222-19.106v-6.562C162.593,263.695,159.946,257.594,153.154,254.947z M136.119,228.819h6.101
                c4.489,0,6.446,2.532,6.446,8.288v4.488c0,6.446-2.878,8.519-7.597,8.519h-4.95V228.819z M149.932,278.43
                c0,5.985-2.302,7.942-6.561,7.942h-7.252v-24.748h5.64c5.755,0,8.172,2.302,8.172,9.784V278.43z"/>
        <path fill="#f24141" d="M211.281,244.473v-7.827c0-12.892-6.446-20.258-18.877-20.258c-12.431,0-18.877,7.367-18.877,20.258v41.898
                c0,12.892,6.445,20.258,18.877,20.258c12.431,0,18.877-7.367,18.877-20.258v-10.704H199.31v11.51c0,5.755-2.532,7.826-6.561,7.826
                s-6.561-2.071-6.561-7.826v-43.51c0-5.755,2.532-7.942,6.561-7.942s6.561,2.187,6.561,7.942v8.633H211.281z"/>
        <rect fill="#f24141" x="245.004" y="251.838" width="23.021" height="11.51"/>
        <path fill="#f24141"
              d="M325.001,217.309c-1.957,5.41-4.144,10.129-13.929,10.129v8.978h9.785v61.466h12.661v-80.573H325.001z"/>
        <path fill="#f24141" d="M365.862,286.371c-0.115-0.576-0.115-1.151-0.115-1.727c0-13.237,25.209-22.676,25.209-47.998
                c0-12.892-6.446-20.258-18.877-20.258s-18.877,7.367-18.877,20.258v7.827h11.97v-8.633c0-5.755,2.532-7.942,6.562-7.942
                c4.029,0,6.561,1.957,6.561,9.208c0,23.251-25.092,27.165-25.092,50.876v9.899h36.602v-11.51h-0.001H365.862z"/>
        <path fill="#f24141" d="M440.219,238.718v-2.072c0-12.892-6.446-20.258-18.877-20.258c-12.431,0-18.877,7.367-18.877,20.258v4.374h11.97v-5.18
                c0-5.755,2.533-7.942,6.562-7.942c4.029,0,6.561,1.957,6.561,9.208v4.488c0,6.446-2.878,8.519-7.597,8.519h-4.948v11.51h4.258
                c5.755,0,8.288,2.764,8.288,10.244v6.331c0,7.136-2.532,9.093-6.561,9.093c-4.029,0-6.562-2.187-6.562-7.942v-7.482h-11.97v6.676
                c0,12.892,6.446,20.258,18.877,20.258c12.431,0,18.877-7.367,18.877-20.258v-6.331c0-8.172-2.532-14.158-8.863-16.92
                C437.456,252.761,440.219,247.351,440.219,238.718z"/>
        <circle fill="#f24141" cx="128.938" cy="173.86" r="8.598"/>
        <circle fill="#f24141" cx="128.938" cy="338.313" r="8.598"/>
        <circle fill="#f24141" cx="383.067" cy="173.86" r="8.598"/>
        <circle fill="#f24141" cx="383.067" cy="338.313" r="8.598"/>
    </symbol>

    <symbol id="delivery-icon" viewBox="0 0 511.998 511.998">
        <path fill="#f24141" d="M414.498,188.525h-32.234l9.712-111.509c0.018-0.202,0.021-0.401,0.022-0.6c0-0.017,0.002-0.033,0.002-0.05
                c0-0.003,0-0.005,0-0.008c0-3.035-1.831-5.71-4.522-6.873c-0.023-0.01-0.045-0.022-0.068-0.032c-0.167-0.07-0.34-0.13-0.514-0.188
                c-0.065-0.021-0.127-0.047-0.192-0.067c-0.142-0.043-0.288-0.077-0.433-0.112c-0.102-0.024-0.2-0.053-0.303-0.073
                c-0.127-0.025-0.259-0.041-0.389-0.06c-0.122-0.018-0.242-0.039-0.365-0.05c-0.021-0.002-0.04-0.006-0.061-0.008
                c-0.132-0.012-0.262-0.01-0.393-0.015c-0.088-0.003-0.174-0.013-0.262-0.013h-0.094c-0.008,0-0.016,0-0.023,0H231.01
                c-4.14,0-7.5,3.36-7.5,7.5c0,4.13,3.36,7.5,7.5,7.5h145.313l-14.926,171.375c-0.002,0.013-0.002,0.026-0.004,0.039l-3.766,43.241
                H97.018l4.359-44.998h49.621c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-48.167l9.204-94.995h78.975
                c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-77.521l4.328-44.662h83.193c4.13,0,7.5-3.37,7.5-7.5
                c0-4.14-3.37-7.5-7.5-7.5h-90c-0.004,0-0.007,0.001-0.011,0.001c-3.523-0.001-6.579,2.479-7.318,5.917
                c-0.005,0.025-0.014,0.049-0.019,0.074c-0.038,0.187-0.063,0.378-0.088,0.57c-0.007,0.061-0.02,0.119-0.026,0.18
                c-0.001,0.012-0.004,0.023-0.005,0.035l-5.124,52.885H7.5c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h89.465
                l-9.204,94.995H61.002c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h25.306l-5.012,51.721
                c-0.001,0.008-0.001,0.016-0.002,0.023l-7.749,79.979c-0.001,0.009-0.002,0.019-0.003,0.027l-0.003,0.029
                c-0.01,0.104-0.009,0.206-0.015,0.31c-0.007,0.138-0.021,0.273-0.021,0.413c0,0.006,0.001,0.012,0.001,0.019
                c0,0.193,0.014,0.383,0.028,0.573c0.006,0.061,0.004,0.123,0.011,0.183c0.02,0.194,0.053,0.385,0.088,0.575
                c0.01,0.056,0.015,0.113,0.026,0.168c0.029,0.144,0.07,0.283,0.108,0.424c0.026,0.099,0.047,0.2,0.077,0.297
                c0.009,0.027,0.021,0.053,0.029,0.081c0.363,1.116,0.979,2.118,1.783,2.936c0.015,0.015,0.027,0.032,0.042,0.046
                c0.08,0.08,0.167,0.152,0.251,0.228c0.517,0.474,1.101,0.876,1.74,1.191c0.133,0.066,0.264,0.135,0.4,0.192
                c0.041,0.018,0.085,0.03,0.127,0.046c0.188,0.075,0.377,0.147,0.572,0.208c0.018,0.005,0.035,0.008,0.053,0.014
                c0.222,0.066,0.446,0.124,0.675,0.171c0.03,0.006,0.061,0.008,0.09,0.014c0.218,0.041,0.437,0.076,0.66,0.098
                c0.005,0,0.009,0.001,0.014,0.002c0.246,0.024,0.49,0.036,0.732,0.036c0.003,0,0.007-0.001,0.011-0.001h33.388
                c3.687,27.953,27.652,49.603,56.597,49.603c28.943,0,52.908-21.65,56.595-49.603H347.9c3.688,27.953,27.652,49.603,56.596,49.603
                c28.943,0,52.91-21.65,56.598-49.603h33.396c0.005,0,0.011,0.001,0.016,0.001c0.25,0,0.496-0.015,0.74-0.039
                c0.044-0.004,0.086-0.013,0.13-0.018c0.195-0.023,0.389-0.05,0.579-0.088c0.082-0.016,0.161-0.038,0.242-0.057
                c0.147-0.034,0.295-0.07,0.439-0.113c0.098-0.029,0.193-0.063,0.289-0.096c0.123-0.042,0.246-0.086,0.367-0.135
                c0.104-0.041,0.203-0.086,0.304-0.131c0.11-0.051,0.22-0.103,0.327-0.158c0.102-0.052,0.2-0.106,0.298-0.162
                c0.103-0.06,0.205-0.122,0.306-0.186c0.094-0.06,0.188-0.121,0.278-0.185c0.102-0.071,0.199-0.146,0.298-0.222
                c0.082-0.065,0.165-0.129,0.245-0.197c0.103-0.087,0.2-0.178,0.298-0.271c0.068-0.065,0.139-0.129,0.205-0.197
                c0.104-0.106,0.203-0.218,0.302-0.331c0.053-0.061,0.108-0.12,0.159-0.182c0.11-0.136,0.21-0.276,0.31-0.417
                c0.034-0.049,0.072-0.095,0.105-0.145c0.122-0.183,0.237-0.371,0.343-0.565c0.008-0.012,0.016-0.023,0.021-0.036
                c0.113-0.208,0.217-0.421,0.31-0.641c0.026-0.063,0.046-0.128,0.071-0.191c0.061-0.155,0.121-0.31,0.172-0.471
                c0.033-0.104,0.057-0.211,0.086-0.316c0.033-0.125,0.068-0.249,0.096-0.376c0.025-0.113,0.041-0.229,0.06-0.344
                c0.017-0.101,0.039-0.2,0.052-0.303c0.318-2.548,6.191-49.667,8.814-80.135c0.003-0.029,0.004-0.059,0.007-0.088
                c0.755-8.783,1.239-16.179,1.239-20.707C511.998,232.264,468.26,188.525,414.498,188.525z M380.957,203.527h30.683l-3.919,44.996
                h-30.683L380.957,203.527z M171.008,428.129c-23.217,0-42.105-18.888-42.105-42.104s18.889-42.104,42.105-42.104
                s42.104,18.888,42.104,42.104S194.224,428.129,171.008,428.129z M404.496,428.129c-23.216,0-42.103-18.888-42.103-42.104
                s18.888-42.104,42.103-42.104c23.217,0,42.105,18.888,42.105,42.104S427.713,428.129,404.496,428.129z M487.863,378.522h-26.767
                c-3.686-27.955-27.652-49.606-56.598-49.606c-28.944,0-52.91,21.652-56.596,49.606H227.604
                c-3.686-27.955-27.651-49.606-56.596-49.606s-52.912,21.652-56.598,49.606H89.266l6.299-65.004H364.5v0.004
                c0.004,0,0.007,0,0.011,0c0.251,0,0.5-0.014,0.746-0.039c0.046-0.004,0.091-0.014,0.137-0.02c0.196-0.023,0.391-0.051,0.583-0.089
                c0.083-0.017,0.164-0.04,0.246-0.06c0.15-0.036,0.3-0.071,0.446-0.115c0.1-0.03,0.195-0.066,0.292-0.1
                c0.126-0.044,0.252-0.087,0.374-0.137c0.105-0.043,0.206-0.091,0.308-0.139c0.111-0.051,0.222-0.102,0.329-0.158
                c0.102-0.054,0.202-0.112,0.303-0.17c0.103-0.06,0.205-0.121,0.305-0.185c0.097-0.063,0.189-0.129,0.282-0.195
                c0.099-0.07,0.195-0.142,0.291-0.217c0.086-0.069,0.171-0.14,0.255-0.213c0.095-0.082,0.188-0.166,0.278-0.253
                c0.076-0.073,0.152-0.148,0.226-0.225c0.09-0.094,0.177-0.191,0.263-0.29c0.067-0.078,0.133-0.156,0.197-0.236
                c0.083-0.105,0.162-0.213,0.24-0.322c0.059-0.082,0.116-0.164,0.172-0.248c0.073-0.113,0.143-0.229,0.21-0.347
                c0.051-0.088,0.103-0.176,0.149-0.266c0.063-0.118,0.117-0.238,0.174-0.359c0.044-0.097,0.089-0.192,0.129-0.292
                c0.049-0.118,0.09-0.239,0.133-0.36c0.037-0.107,0.076-0.214,0.109-0.324c0.033-0.116,0.06-0.235,0.09-0.353
                c0.029-0.119,0.061-0.237,0.084-0.358c0.023-0.118,0.037-0.238,0.055-0.358c0.018-0.124,0.039-0.246,0.051-0.372
                c0.002-0.018,0.006-0.035,0.007-0.053l3.759-43.15h38.762c22.979,0,33.343,11.906,44.314,24.512
                c9.053,10.401,19.16,22.006,36.34,24.837C492.968,335.938,489.441,365.554,487.863,378.522z M496.432,297.838
                c-11.145-2.272-18.002-10.107-26.309-19.651c-10.389-11.935-23.072-26.5-47.385-29.214l3.88-44.548
                c39.764,5.881,70.38,40.229,70.38,81.602C496.998,288.838,496.788,292.922,496.432,297.838z"/>
        <path fill="#f24141" d="M171.008,358.524c-15.163,0-27.5,12.336-27.5,27.5s12.337,27.5,27.5,27.5c15.163,0,27.5-12.336,27.5-27.5
                C198.508,370.861,186.171,358.524,171.008,358.524z M171.008,398.524c-6.893,0-12.5-5.607-12.5-12.5s5.607-12.5,12.5-12.5
                s12.5,5.607,12.5,12.5S177.9,398.524,171.008,398.524z"/>
        <path fill="#f24141" d="M404.496,358.524c-15.163,0-27.5,12.336-27.5,27.5s12.337,27.5,27.5,27.5c15.163,0,27.5-12.336,27.5-27.5
                C431.996,370.861,419.659,358.524,404.496,358.524z M404.496,398.524c-6.893,0-12.5-5.607-12.5-12.5s5.607-12.5,12.5-12.5
                s12.5,5.607,12.5,12.5S411.389,398.524,404.496,398.524z"/>
        <path fill="#f24141" d="M71,188.527H34.334c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5H71c4.143,0,7.5-3.358,7.5-7.5
                C78.5,191.885,75.143,188.527,71,188.527z"/>
    </symbol>

    <symbol id="youtube-icon" viewBox="0 0 461.001 461.001">
        <path d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728
	c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137
	C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607
	c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z"/>
    </symbol>

    <symbol id="play-icon" viewBox="0 0 60 60">
	<path d="M45.563,29.174l-22-15c-0.307-0.208-0.703-0.231-1.031-0.058C22.205,14.289,22,14.629,22,15v30
		c0,0.371,0.205,0.711,0.533,0.884C22.679,45.962,22.84,46,23,46c0.197,0,0.394-0.059,0.563-0.174l22-15
		C45.836,30.64,46,30.331,46,30S45.836,29.36,45.563,29.174z M24,43.107V16.893L43.225,30L24,43.107z"/>
        <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
		S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
</symbol>

</svg>

<!-- App-header -->
<header id="app-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-row">
                    <div class="header-row-item justify-content-start">
                        <a href="#intro" class="logo scroll-link">
                            <img src="<?= get_theme_file_uri('images/icon/logo/logo.png'); ?>" alt="Empire logo">
                        </a>
                    </div>
                    <div class="header-row-item d-none d-lg-flex">
                        <ul class="header-nav-menu d-flex justify-content-between align-items-center w-100">
                            <li><a href="#comparison" class="scroll-link"><?= get_field('comparison_header_title',
                                        80); ?></a></li>
                            <li><a href="#advantages" class="scroll-link"><?= get_the_title(165); ?></a></li>
                            <li><a href="#contacts" class="scroll-link"><?= get_field('contact_head_title', 90); ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-row-item  d-none d-sm-flex">
                        <ul class="phone-list">
                            <li>
                                <a href="tel: <?= get_theme_mod('phone'); ?>">
                                    <svg width="20" height="20">
                                        <use xlink:href="#phone-icon"></use>
                                    </svg>
                                    <?= get_theme_mod('phone'); ?>
                                </a>
                                <div class="small">по Украине бесплатно</div>
                            </li>
                        </ul>
                    </div>
                    <div class="header-row-item  d-none d-sm-flex">
                        <a href="#comparison" class="btn btn-primary scroll-link">
                            Подобрать авто
                        </a>
                    </div>
                    <div class="header-row-item justify-content-center">
                        <div class="burger-menu d-flex flex-column justify-content-center align-items-start">
                            <div class="line line--top"></div>
                            <div class="line line--middle d-flex justify-content-between align-items-start">
                                <div class="line line--small"></div>
                                <div class="line line--big"></div>
                            </div>
                            <div class="line line--bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="menu">
    <div class="menu-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-5 pr-sm-0">
                    <ul class="menu-nav">
                        <li><a href="#pain" class="scroll-link"><?= get_the_title(74); ?></a></li>
                        <li><a href="#comparison" class="scroll-link"><?= get_the_title(80); ?></a></li>
                        <li><a href="#sale" class="scroll-link"><?= get_the_title(82); ?></a></li>
                        <li><a href="#reviews" class="scroll-link"><?= get_the_title(136); ?></a></li>
                        <li><a href="#saving" class="scroll-link"><?= get_the_title(84); ?></a></li>
                        <li><a href="#stages" class="scroll-link"><?= get_the_title(130); ?></a></li>
                        <li><a href="#teams" class="scroll-link"><?= get_the_title(119); ?></a></li>
                        <li><a href="#contacts" class="scroll-link"><?= get_the_title(90); ?></a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-lg-3 p-lg-0 ml-auto mr-0 d-none d-sm-block">
                    <h3 class="section-title text-white mb-4">
                        <?= get_field('main_burger_title', 92); ?>
                    </h3>

                    <?php require('template-parts/modules/form.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main -->
<main>