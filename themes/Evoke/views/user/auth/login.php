<?php

use \yii\helpers\Url;
use yii\widgets\ActiveForm;
use \humhub\compat\CHtml;

$this->pageTitle = Yii::t('UserModule.views_auth_login', 'Login');
?>
<link href="<?php echo $this->theme->getBaseUrl() . '/css/homepage.css'; ?>" rel="stylesheet">


<div class="container" style="text-align: center; position:relative;">
    <?= humhub\widgets\SiteLogo::widget(['place' => 'login']); ?>

    <div id="homeAnimation" class="">
      <div class="top">
        <div id="creativeVisionaryPowers" class="power-group">
          <span class="power">
            <img width='50em' height='50em' src="<?php echo $this->theme->getBaseUrl() . '/img/powers/courage.svg'; ?>" alt="courage" />
            <span class="power-name">Courage</span>
          </span>
          <span class="power">
            <img width='50em' height='50em' src="<?php echo $this->theme->getBaseUrl() . '/img/powers/ideation.svg'; ?>" alt="ideation" />
            <span class="power-name">Ideation</span>
          </span>
          <span class="power">
            <img width='50em' height='50em' src="<?php echo $this->theme->getBaseUrl() . '/img/powers/imagination.svg'; ?>" alt="imagination" />
            <span class="power-name">Imagination</span>
          </span>
          <span class="power">
            <img width='50em' height='50em' src="<?php echo $this->theme->getBaseUrl() . '/img/powers/vision.svg'; ?>" alt="vision" />
            <span class="power-name">Vision</span>
          </span>
        </div>
      </div>
      <div class="left-side">
        <span id="creativeVisionary" class="super-power">
          <svg width="200px" height="200px" viewBox="0 0 400 400" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 3.8.3 (29802) - http://www.bohemiancoding.com/sketch -->
            <title>creative_visionary</title>
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="super-powers" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="creative_visionary">
                    <g id="Group" transform="translate(77.000000, 90.000000)">
                        <g id="vision" transform="translate(20.000000, 105.000000)" stroke="#fff" stroke-width="4">
                            <path d="M85.730993,58 L44.2901424,58 C44.2871932,58.2413102 44.2857143,58.4829798 44.2857143,58.725 C44.2857143,90.357109 69.5496463,116 100.714286,116 C131.878925,116 157.142857,90.357109 157.142857,58.725 C157.142857,27.092891 131.878925,1.45 100.714286,1.45 C100.475842,1.45 100.237744,1.45150111 100,1.45449454 L100,43.5169579 C100.236702,43.5056947 100.474839,43.5 100.714286,43.5 C108.998557,43.5 115.714286,50.3164647 115.714286,58.725 C115.714286,67.1335353 108.998557,73.95 100.714286,73.95 C92.4300145,73.95 85.7142857,67.1335353 85.7142857,58.725 C85.7142857,58.4819612 85.7198962,58.2402525 85.730993,58 Z" id="Combined-Shape"></path>
                            <path d="M100,116 C168.020339,116 200,58 200,58 C200,58 160,7.72715225e-15 100,0 C40,-5.15143483e-15 0,58 0,58 C0,58 31.9796607,116 100,116 Z" id="Oval-8"></path>
                            <ellipse id="Oval-9-Copy-2" cx="100.714286" cy="58.725" rx="56.4285714" ry="57.275"></ellipse>
                            <ellipse id="Oval-9-Copy" cx="100.714286" cy="58.725" rx="15" ry="15.225"></ellipse>
                        </g>
                        <circle id="Oval-8" stroke="#fff" stroke-width="4" cx="56" cy="29" r="10"></circle>
                        <circle id="Oval-8-Copy-2" stroke="#fff" stroke-width="4" cx="52" cy="83" r="4"></circle>
                        <circle id="Oval-8-Copy-4" stroke="#fff" stroke-width="4" transform="translate(238.660254, 115.660254) rotate(-240.000000) translate(-238.660254, -115.660254) " cx="238.660254" cy="115.660254" r="5"></circle>
                        <circle id="Oval-8-Copy-3" stroke="#fff" stroke-width="4" transform="translate(210.464102, 37.464102) rotate(-240.000000) translate(-210.464102, -37.464102) " cx="210.464102" cy="37.4641016" r="4"></circle>
                        <circle id="Oval-8-Copy" fill="#fff" cx="172.5" cy="76.5" r="6.5"></circle>
                        <circle id="Oval-8-Copy-5" fill="#fff" cx="102.5" cy="6.5" r="6.5"></circle>
                        <g id="twinkle" transform="translate(124.000000, 1.000000)" stroke="#fff" stroke-width="4" stroke-linecap="round">
                            <path d="M8,0.5 L8,54.5" id="Line"></path>
                            <path d="M20,27 L0,27" id="Line-Copy"></path>
                        </g>
                        <g id="twinkle" transform="translate(0.000000, 66.000000)" stroke="#fff" stroke-width="3" stroke-linecap="round">
                            <path d="M7.8,0.436363636 L7.8,47.5636364" id="Line"></path>
                            <path d="M12,25.0909091 L0,25.0909091" id="Line-Copy"></path>
                        </g>
                    </g>
                </g>
            </g>
          </svg>
          <span class="super-power-name">Creative Visionary</span>
        </span>
        <span id="deepCollaborator" class="super-power">
          <svg id="svg" version="1.1" width="200px" height="200px" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="svgg" stroke="#fff" stroke-width="4">
              <path id="path0" d="M107.229 83.669 C 105.113 84.521,103.000 89.657,103.000 93.950 L 103.000 98.000 94.934 98.000 C 82.091 98.000,83.000 95.956,83.000 124.835 C 83.000 152.847,82.760 152.000,90.705 152.000 L 96.010 152.000 95.922 163.099 C 95.813 176.910,98.028 181.582,106.880 186.206 L 112.228 189.000 135.164 189.000 C 167.440 189.000,167.000 189.307,167.000 166.777 L 167.000 152.000 178.878 152.000 C 188.215 152.000,191.021 152.321,192.000 153.500 C 193.562 155.382,206.978 155.622,208.800 153.800 C 209.676 152.924,210.000 145.094,210.000 124.823 L 210.000 97.046 207.493 95.403 C 204.126 93.197,193.231 93.837,191.840 96.322 C 191.042 97.747,189.097 98.000,178.950 98.000 L 167.000 98.000 167.000 95.573 C 167.000 94.124,165.907 92.285,164.288 91.012 C 161.702 88.978,160.619 88.897,156.840 90.459 C 155.676 90.940,154.981 90.516,154.512 89.038 C 152.591 82.986,142.915 80.585,139.373 85.281 L 137.653 87.562 135.372 85.281 C 132.236 82.145,125.785 82.130,122.714 85.250 L 120.500 87.500 118.295 85.250 C 116.169 83.079,110.653 82.291,107.229 83.669 M239.362 84.500 C 238.946 85.584,237.222 86.006,233.143 86.022 C 215.256 86.092,210.994 93.738,211.015 125.718 C 211.034 155.984,211.714 157.227,228.571 157.847 L 238.000 158.193 238.000 174.474 C 238.000 187.726,237.721 190.987,236.500 192.000 C 234.618 193.562,234.378 206.978,236.200 208.800 C 238.223 210.823,292.380 210.478,294.429 208.429 C 296.954 205.903,296.633 193.412,294.000 191.768 C 292.129 190.600,292.000 189.436,292.000 173.759 L 292.000 157.000 295.845 157.000 C 301.597 157.000,306.127 149.051,301.874 146.422 C 301.199 146.005,302.063 145.173,304.024 144.348 C 310.366 141.681,312.228 134.354,307.677 129.974 L 305.353 127.738 307.677 125.414 C 310.638 122.453,310.749 117.222,307.927 113.635 L 305.855 111.000 307.927 108.365 C 313.578 101.182,308.887 94.000,298.545 94.000 L 292.000 94.000 292.000 89.700 C 292.000 87.335,291.460 84.860,290.800 84.200 C 288.830 82.230,240.124 82.514,239.362 84.500 M287.000 88.622 C 287.000 89.951,286.729 90.020,285.500 89.000 C 284.675 88.315,284.000 87.585,284.000 87.378 C 284.000 87.170,284.675 87.000,285.500 87.000 C 286.325 87.000,287.000 87.730,287.000 88.622 M115.393 89.582 C 118.498 97.672,114.482 108.556,109.917 104.425 C 107.670 102.391,107.145 91.255,109.200 89.200 C 110.914 87.486,114.678 87.718,115.393 89.582 M131.800 89.200 C 133.628 91.028,133.348 102.509,131.429 104.429 C 127.752 108.105,125.000 104.766,125.000 96.629 C 125.000 90.304,126.068 88.000,129.000 88.000 C 129.880 88.000,131.140 88.540,131.800 89.200 M148.965 89.934 C 152.474 96.492,148.707 107.519,143.845 104.917 C 141.974 103.915,140.989 90.344,142.667 88.667 C 144.048 87.285,147.969 88.074,148.965 89.934 M281.965 92.934 C 284.750 98.139,282.153 99.000,263.679 98.998 L 247.500 98.996 247.815 110.746 C 248.288 128.431,246.260 133.484,237.500 136.449 C 233.103 137.937,230.552 146.000,234.478 146.000 C 235.760 146.000,235.862 145.611,235.000 144.000 C 234.093 142.305,234.240 142.000,235.965 142.000 C 237.769 142.000,238.000 142.634,238.000 147.599 L 238.000 153.199 228.911 152.849 C 215.560 152.336,216.000 153.257,216.000 125.849 C 216.000 99.625,217.383 95.335,227.000 91.722 C 231.754 89.935,280.941 91.020,281.965 92.934 M162.000 99.892 C 162.000 105.235,161.319 106.510,159.342 104.869 C 157.696 103.502,157.569 96.831,159.160 95.240 C 161.073 93.327,162.000 94.844,162.000 99.892 M205.000 124.500 L 205.000 150.000 200.607 150.000 C 197.558 150.000,196.032 149.525,195.618 148.447 C 195.097 147.089,191.405 146.908,166.261 147.003 C 150.442 147.063,131.918 147.087,125.096 147.056 L 112.691 147.000 113.316 134.683 C 114.183 117.560,112.023 112.000,104.500 112.000 C 96.944 112.000,94.494 118.208,95.327 135.250 L 95.901 147.000 91.951 147.000 L 88.000 147.000 88.000 125.000 L 88.000 103.000 95.525 103.000 C 102.592 103.000,103.106 103.149,103.982 105.452 C 106.101 111.026,115.140 112.342,118.719 107.597 L 120.406 105.361 122.597 107.908 C 125.524 111.311,131.815 111.462,135.275 108.212 C 137.640 105.989,137.678 105.987,139.435 107.928 C 142.738 111.578,153.000 110.891,153.000 107.020 C 153.000 106.509,154.105 107.195,155.455 108.545 C 159.334 112.425,167.000 110.023,167.000 104.927 C 167.000 103.113,167.849 103.000,181.500 103.000 C 195.333 103.000,196.000 102.908,196.000 101.000 C 196.000 99.296,196.667 99.000,200.500 99.000 L 205.000 99.000 205.000 124.500 M303.800 100.200 C 308.437 104.837,299.600 108.876,290.283 106.378 C 287.600 105.659,286.384 102.447,288.040 100.452 C 289.556 98.625,302.026 98.426,303.800 100.200 M282.831 106.528 C 283.464 107.919,284.661 109.316,285.490 109.635 C 286.731 110.111,286.555 110.741,284.499 113.183 C 281.049 117.283,282.185 127.000,286.115 127.000 C 286.699 127.000,286.013 128.385,284.589 130.077 C 281.473 133.780,281.276 137.810,284.041 141.325 L 286.081 143.919 284.041 145.959 C 281.287 148.713,281.470 152.561,284.500 155.591 C 286.991 158.082,287.000 158.161,287.000 177.045 C 287.000 195.333,287.070 196.000,289.000 196.000 C 290.704 196.000,291.000 196.667,291.000 200.500 L 291.000 205.000 265.500 205.000 L 240.000 205.000 240.000 200.607 C 240.000 197.625,240.482 196.029,241.500 195.638 C 242.783 195.146,243.000 191.074,243.000 167.467 L 243.000 139.871 246.044 137.310 C 251.679 132.568,253.000 128.434,253.000 115.540 L 253.000 104.000 267.339 104.000 L 281.679 104.000 282.831 106.528 M303.066 116.035 C 305.246 117.202,305.602 119.998,303.800 121.800 C 302.219 123.381,289.781 123.381,288.200 121.800 C 283.458 117.058,295.936 112.219,303.066 116.035 M107.438 119.215 C 108.750 121.088,108.890 123.824,108.347 136.965 L 107.705 152.500 121.854 152.174 L 136.003 151.849 138.892 154.738 C 140.873 156.719,142.152 159.414,142.961 163.313 L 144.142 169.000 148.571 169.000 C 153.040 169.000,153.935 168.025,152.110 165.143 C 151.510 164.197,151.043 164.122,150.566 164.893 C 149.268 166.994,148.262 165.987,147.735 162.060 C 147.444 159.893,146.519 156.743,145.680 155.060 L 144.153 152.000 153.327 151.998 L 162.500 151.996 162.000 166.458 C 161.346 185.368,163.500 183.928,135.815 183.968 C 101.030 184.019,101.258 184.256,100.370 147.014 C 99.842 124.881,99.962 121.707,101.410 119.497 C 103.431 116.412,105.410 116.319,107.438 119.215 M304.390 134.250 C 306.540 137.671,304.002 139.469,296.556 139.798 C 287.994 140.176,284.228 137.172,288.239 133.161 C 290.217 131.183,303.005 132.045,304.390 134.250 M298.000 150.393 C 298.000 152.048,295.844 153.006,292.168 152.985 C 288.826 152.966,286.528 151.572,287.431 150.112 C 288.480 148.415,298.000 148.668,298.000 150.393 M105.571 191.571 C 103.046 194.097,103.367 206.588,106.000 208.232 C 107.870 209.400,108.000 210.564,108.000 226.080 L 108.000 242.679 105.528 243.805 C 102.625 245.128,101.377 248.967,102.915 251.841 C 104.342 254.507,104.285 255.000,102.556 255.000 C 96.722 255.000,93.699 264.397,97.765 269.896 C 99.706 272.521,99.766 272.949,98.358 274.118 C 94.492 277.327,94.772 285.636,98.825 287.935 C 100.388 288.821,100.386 288.972,98.795 290.192 C 92.266 295.200,95.941 306.000,104.174 306.000 L 108.000 306.000 108.000 310.300 C 108.000 312.665,108.540 315.140,109.200 315.800 C 111.170 317.770,159.876 317.486,160.638 315.500 C 161.052 314.422,162.739 314.000,166.639 314.000 C 184.693 314.000,188.953 306.463,188.963 274.500 C 188.973 243.989,188.314 242.774,171.429 242.153 L 162.000 241.807 162.000 225.526 C 162.000 212.274,162.279 209.013,163.500 208.000 C 165.382 206.438,165.622 193.022,163.800 191.200 C 161.777 189.177,107.620 189.522,105.571 191.571 M160.000 199.393 C 160.000 202.413,159.522 203.969,158.471 204.373 C 157.147 204.881,156.954 208.654,157.031 232.493 L 157.121 260.027 154.017 262.639 C 148.318 267.434,147.000 271.534,147.000 284.460 L 147.000 296.000 135.000 296.000 C 126.415 296.000,123.000 295.663,123.000 294.814 C 123.000 294.162,122.018 292.584,120.819 291.307 C 118.829 289.189,118.781 288.877,120.274 287.743 C 124.204 284.757,124.448 278.408,120.787 274.355 C 119.396 272.816,119.182 272.006,120.027 271.483 C 123.236 269.500,124.199 263.979,122.081 259.700 C 120.380 256.262,120.266 255.349,121.374 254.050 C 125.787 248.876,123.080 243.047,116.250 243.015 L 113.000 243.000 113.000 223.500 C 113.000 204.667,112.932 204.000,111.000 204.000 C 109.296 204.000,109.000 203.333,109.000 199.500 L 109.000 195.000 134.500 195.000 L 160.000 195.000 160.000 199.393 M238.314 212.950 C 233.437 215.924,233.000 217.609,233.000 233.434 L 233.000 248.000 221.122 248.000 C 211.785 248.000,208.979 247.679,208.000 246.500 C 206.438 244.618,193.022 244.378,191.200 246.200 C 190.324 247.076,190.000 254.906,190.000 275.177 L 190.000 302.954 192.507 304.597 C 195.874 306.803,206.769 306.163,208.160 303.678 C 208.958 302.253,210.903 302.000,221.050 302.000 L 233.000 302.000 233.000 304.427 C 233.000 305.876,234.093 307.715,235.712 308.988 C 238.298 311.022,239.381 311.103,243.160 309.541 C 244.324 309.060,245.019 309.484,245.488 310.962 C 247.409 317.014,257.085 319.415,260.627 314.719 L 262.347 312.438 264.628 314.719 C 267.764 317.855,274.215 317.870,277.286 314.750 L 279.500 312.500 281.705 314.750 C 283.899 316.990,288.892 317.746,292.455 316.379 C 294.875 315.450,297.000 310.621,297.000 306.050 L 297.000 302.000 305.066 302.000 C 317.909 302.000,317.000 304.044,317.000 275.165 C 317.000 247.153,317.240 248.000,309.295 248.000 L 303.990 248.000 304.078 236.901 C 304.187 223.090,301.972 218.418,293.120 213.794 L 287.772 211.000 264.636 211.004 C 243.491 211.007,241.226 211.175,238.314 212.950 M288.685 217.067 C 298.020 220.603,299.028 223.900,299.688 253.053 C 300.281 279.247,299.760 283.000,295.534 283.000 C 291.676 283.000,290.931 279.188,291.624 263.000 L 292.288 247.500 278.143 247.826 L 263.997 248.151 261.108 245.262 C 259.127 243.281,257.848 240.586,257.039 236.687 L 255.858 231.000 251.429 231.000 C 246.960 231.000,246.065 231.975,247.890 234.857 C 248.490 235.803,248.957 235.878,249.434 235.107 C 250.732 233.006,251.738 234.013,252.265 237.940 C 252.556 240.107,253.481 243.257,254.320 244.940 L 255.847 248.000 246.673 248.002 L 237.500 248.004 238.000 233.542 C 238.448 220.581,238.708 218.923,240.500 217.572 C 242.963 215.715,283.982 215.285,288.685 217.067 M117.094 248.050 C 120.142 249.681,118.360 251.000,113.108 251.000 C 107.765 251.000,106.490 250.319,108.131 248.342 C 109.460 246.741,114.350 246.582,117.094 248.050 M182.089 249.861 C 185.041 253.507,184.987 294.145,182.023 299.956 C 177.781 308.270,177.016 308.461,146.658 308.796 C 116.555 309.129,114.864 308.814,120.436 303.922 L 123.764 301.000 138.132 301.002 L 152.500 301.004 152.185 289.254 C 151.712 271.569,153.740 266.516,162.500 263.551 C 166.867 262.073,169.451 254.000,165.557 254.000 C 163.697 254.000,163.550 255.150,165.200 256.800 C 166.133 257.733,165.911 258.000,164.200 258.000 C 162.195 258.000,162.000 257.503,162.000 252.401 L 162.000 246.801 171.089 247.151 C 179.212 247.463,180.381 247.751,182.089 249.861 M204.382 251.553 C 204.903 252.911,208.595 253.092,233.739 252.997 C 249.558 252.937,268.082 252.913,274.904 252.944 L 287.309 253.000 286.684 265.317 C 285.817 282.440,287.977 288.000,295.500 288.000 C 302.925 288.000,305.357 281.957,304.849 264.776 L 304.500 253.000 308.250 253.000 L 312.000 253.000 312.000 275.000 L 312.000 297.000 304.475 297.000 C 297.408 297.000,296.894 296.851,296.018 294.548 C 293.899 288.974,284.860 287.658,281.281 292.403 L 279.594 294.639 277.403 292.092 C 274.476 288.689,268.185 288.538,264.725 291.788 C 262.360 294.011,262.322 294.013,260.565 292.072 C 257.262 288.422,247.000 289.109,247.000 292.980 C 247.000 293.491,245.895 292.805,244.545 291.455 C 240.666 287.575,233.000 289.977,233.000 295.073 C 233.000 296.887,232.151 297.000,218.500 297.000 C 204.667 297.000,204.000 297.092,204.000 299.000 C 204.000 300.704,203.333 301.000,199.500 301.000 L 195.000 301.000 195.000 275.500 L 195.000 250.000 199.393 250.000 C 202.442 250.000,203.968 250.475,204.382 251.553 M116.418 260.607 C 118.282 261.322,118.514 265.086,116.800 266.800 C 113.245 270.355,101.000 267.707,101.000 263.383 C 101.000 260.329,111.001 258.528,116.418 260.607 M117.988 278.977 C 119.809 282.379,116.115 285.000,109.500 285.000 C 102.885 285.000,99.191 282.379,101.012 278.977 C 101.921 277.280,103.123 277.000,109.500 277.000 C 115.877 277.000,117.079 277.280,117.988 278.977 M116.505 294.380 C 118.314 295.702,118.270 295.866,115.446 298.348 C 109.202 303.836,96.340 300.660,101.977 295.023 C 104.409 292.591,113.507 292.188,116.505 294.380 M242.000 300.000 C 242.000 303.593,240.043 306.710,238.658 305.325 C 236.403 303.070,238.339 293.206,240.658 295.131 C 241.396 295.744,242.000 297.935,242.000 300.000 M257.791 303.807 C 257.515 311.110,257.376 311.517,255.056 311.845 C 249.871 312.577,247.430 298.913,252.155 295.604 C 256.454 292.593,258.123 295.023,257.791 303.807 M273.472 295.615 C 277.773 299.916,273.918 314.322,269.250 311.390 C 265.327 308.926,266.829 294.000,271.000 294.000 C 271.471 294.000,272.584 294.727,273.472 295.615 M290.171 295.655 C 294.349 299.436,292.224 312.000,287.407 312.000 C 282.070 312.000,282.573 294.416,287.921 294.030 C 288.153 294.014,289.165 294.745,290.171 295.655 M115.000 311.500 C 116.020 312.729,115.951 313.000,114.622 313.000 C 113.730 313.000,113.000 312.325,113.000 311.500 C 113.000 310.675,113.170 310.000,113.378 310.000 C 113.585 310.000,114.315 310.675,115.000 311.500 "></path>
            </g>
          </svg>
          <span class="super-power-name">Deep Collaborator</span>
        </span>
      </div>
      <div class="right-side">
        <span id="empatheticActivist" class="super-power">
          <svg width="200px" height="200px" viewBox="0 0 400 400" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 3.8.3 (29802) - http://www.bohemiancoding.com/sketch -->
              <title>empathetic_activist</title>
              <desc>Created with Sketch.</desc>
              <defs></defs>
              <g id="super-powers" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="empathetic_activist" stroke-width="6" stroke="#fff">
                      <g id="Group-3" transform="translate(119.000000, 54.000000)">
                          <g id="Group">
                              <rect id="Rectangle-24" x="88.1893491" y="7.65562914" width="30.6308441" height="67.1763819" rx="15.3154221"></rect>
                              <rect id="Rectangle-24-Copy" x="124.615385" y="29.6655629" width="23.9070003" height="52.248297" rx="11.9535001"></rect>
                              <path d="M55.5976331,41.8013279 L55.5976331,14.1843709 C55.5976331,6.35055917 61.9511295,0 69.7924146,0 C77.6319759,0 83.987196,6.34668605 83.987196,14.1843709 L83.987196,48.8453208" id="Rectangle-24-Copy-2"></path>
                              <path d="M21.0887574,46.8982841 L21.4462534,24.9212688 C21.4462534,17.4997629 27.4653553,11.4834437 34.8939411,11.4834437 C42.3208939,11.4834437 48.3416287,17.4960937 48.3416287,24.9212688 L48.5838506,46.5833948" id="Rectangle-24-Copy-3"></path>
                              <path d="M3.83431953,62.9044227 C7.82969539,55.6806871 19.3648517,44.0198675 27.8248588,44.0198675 L68.6159567,44.0198675 C77.0805986,44.0198675 83.9425467,50.8604646 83.9425467,59.3037248 L83.9425467,60.8065416 C83.9425467,69.2475828 77.0759637,76.0903988 68.6159567,76.0903988 L33.7879561,80.3818134" id="Rectangle-24-Copy-4" stroke-linecap="round"></path>
                              <path d="M125.573964,196.22693 L125.573964,140.3749 C125.573964,140.3749 163.95007,136.30758 148.605464,73.6854305" id="Path-41" stroke-linecap="round"></path>
                              <path d="M106.157261,118.45822 C106.157261,118.45822 105.897298,89.2306729 79.5629785,84.0748732 C58.3536783,82.1623248 34.5088757,81.3410596 34.5088757,81.3410596" id="Path-43" stroke-linecap="round"></path>
                              <path d="M42.2667703,199.116626 L42.2667703,142.261616 C42.2667703,142.261616 2.41690597,132.916984 0.143523012,90.6139409 C-1.3572167,62.6882201 9.14014889,49.6206119 20.9220682,45.9337748" id="Combined-Shape" stroke-linecap="round"></path>
                          </g>
                          <g id="Group-2" transform="translate(3.834320, 137.887417)">
                              <path d="M79.425186,56.2777003 C76.2400296,47.8431737 67.1457478,42.8803493 59.648572,42.8803493 C44.5501856,42.8803493 37.7310258,50.6409375 38.7051914,63.7369302 C39.1552847,83.4578419 74.4150569,111.739171 79.8851345,114.899381 C79.8894417,115.023137 79.894062,115.107738 79.8990117,115.150827 C79.9067746,115.218405 80.0265403,115.196986 80.246664,115.092642 C80.4667878,115.196986 80.5865535,115.218405 80.5943164,115.150827 C80.5992661,115.107738 80.6038864,115.023137 80.6081936,114.899381 C86.0782711,111.739171 121.338043,83.4578419 121.788137,63.7369302 C122.762302,50.6409375 115.943143,42.8803493 100.844756,42.8803493 C93.3475802,42.8803493 84.2532985,47.8431737 81.0681421,56.2777003 L79.425186,56.2777003 Z" id="Combined-Shape"></path>
                              <path d="M139.952663,78.384106 L157.439237,78.384106" id="Path-21-Copy-3" stroke-linecap="round"></path>
                              <path d="M0,78.384106 L17.4865738,78.384106" id="Path-21-Copy-4" stroke-linecap="round"></path>
                              <g id="Group" transform="translate(15.131361, 0.000000)" stroke-linecap="round">
                                  <path d="M63.8757396,17.494186 L63.8757396,0" id="Path-21"></path>
                                  <path d="M116.946746,32.3801914 L129.330214,20.0099338" id="Path-21-Copy"></path>
                                  <path d="M12.3834687,32.3801914 L4.61852778e-14,20.0099338" id="Path-21-Copy-2"></path>
                              </g>
                              <g id="Group-Copy" transform="translate(79.624852, 134.612583) rotate(-180.000000) translate(-79.624852, -134.612583) translate(14.624852, 116.112583)" stroke-linecap="round">
                                  <path d="M65.8757396,17.494186 L65.8757396,-6.03961325e-14" id="Path-21"></path>
                                  <path d="M116.946746,36.3801914 L129.330214,24.0099338" id="Path-21-Copy"></path>
                                  <path d="M12.3834687,36.3801914 L5.41788836e-14,24.0099338" id="Path-21-Copy-2"></path>
                              </g>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
          <span class="super-power-name">Empathetic Activist</span>
        </span>
        <span id="systemsThinker" class="super-power">
          <svg width="200px" height="200px" viewBox="0 0 400 400" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 3.8.3 (29802) - http://www.bohemiancoding.com/sketch -->
              <title>systems_thinker</title>
              <desc>Created with Sketch.</desc>
              <defs></defs>
              <g id="super-powers" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="systems_thinker" stroke="#fff" stroke-width="4.4">
                      <g id="Group" transform="translate(92.000000, 83.000000)">
                          <path d="M56.8045104,85.1152897 C56.8045104,85.1152897 104.674944,79.3398393 122.60384,106.818174 C140.532735,134.296508 163.710829,132.046442 177.077285,125.613669 C190.443742,119.180896 206.149117,103.163572 195.448071,66.8113818 C184.747025,30.4591915 155.345888,15.3744791 110.382919,14.5626576 C65.41995,13.750836 44.1698458,18.9728993 34.8085417,51.5862159 C25.4472375,84.1995325 56.8045104,85.1152897 56.8045104,85.1152897 Z" id="Path-2"></path>
                          <path d="M87.1688742,224.48651 C88.6592404,229.085349 93.5205019,231.347854 98.0323913,229.53355 C98.0323913,229.53355 167.751311,201.632012 174.037535,197.746404 C180.32376,193.860796 171.588848,190.904911 174.592008,180.44393 C177.595169,169.982949 178.501465,155.089253 197.150894,135.757225 C215.800323,116.425197 217.652319,83.4467014 211.606594,64.333781 C205.560869,45.2208606 190.044071,17.3885832 146.944356,5.43036711 C103.844642,-6.52784897 57.7333229,3.11288337 35.2898354,23.4786495 C12.8463479,43.8444157 9.47729167,75.3116312 13.2319458,88.0900961 C16.9866,100.868561 20.7102938,108.424963 11.2589229,125.728841 C1.80755208,143.03272 -2.37914063,143.035529 1.68089583,147.74915 C5.65368021,152.323723 6.84565625,148.249165 12.73095,151.965566 C18.6162438,155.681967 12.5094056,162.945001 14.3268188,166.703358 C16.1442319,170.461716 22.8606354,168.452005 22.1091417,171.359394 C21.8957971,172.184784 22.2569073,174.697975 22.2569073,174.697975 C22.2569073,174.697975 15.922306,180.287224 19.8687333,184.076059 C26.0200052,188.491919 26.5674417,189.595884 25.8159479,201.253529 C25.0644542,212.911175 39.2978021,216.756793 63.427225,213.630297 C87.5566479,210.503801 87.1688742,224.48651 87.1688742,224.48651 Z" id="Path-3"></path>
                          <path d="M99.667,54.2265931 L99.667,56.8880374 C99.667,57.5550618 99.1723333,58.1189553 98.5096667,58.2071156 L92.5893333,58.9949031 C92.2273333,60.4959577 91.6363333,61.9078538 90.8503333,63.1886738 L94.4773333,67.9223851 C94.8833333,68.4520125 94.8333333,69.1998783 94.3606667,69.6716193 L92.4753333,71.553593 C92.217,71.8117531 91.8753333,71.9434946 91.5323333,71.9434946 C91.248,71.9434946 90.963,71.8533382 90.7226667,71.6700312 L85.9796667,68.0498017 C84.696,68.8339297 83.2816667,69.424105 81.778,69.785396 L80.9886667,75.6941348 C80.9003333,76.355171 80.3353333,76.8492016 79.667,76.8492016 L77.0003333,76.8492016 C76.332,76.8492016 75.767,76.3555037 75.6786667,75.6941348 L74.8893333,69.785396 C73.3853333,69.424105 71.9706667,68.8342624 70.6873333,68.0498017 L65.9443333,71.6696985 C65.704,71.8530055 65.419,71.9431619 65.1346667,71.9431619 C64.7916667,71.9431619 64.45,71.8114204 64.1916667,71.5532603 L62.306,69.6716193 C61.8333333,69.200211 61.7836667,68.4523451 62.1893333,67.9223851 L65.8166667,63.1886738 C65.031,61.9075211 64.4396667,60.4959577 64.0776667,58.9952358 L58.1573333,58.2074483 C57.495,58.119288 57,57.5553945 57,56.88837 L57,54.2269258 C57,53.5599014 57.4946667,52.9960079 58.1573333,52.9078475 L64.0776667,52.1200601 C64.4396667,50.6190055 65.0306667,49.207442 65.8166667,47.926622 L62.1893333,43.1929108 C61.7833333,42.6629507 61.8333333,41.9150849 62.306,41.4436766 L64.1916667,39.5617029 C64.45,39.3035428 64.7916667,39.1718013 65.1346667,39.1718013 C65.419,39.1718013 65.704,39.2619577 65.9443333,39.4452647 L70.6873333,43.0654942 C71.971,42.2813662 73.3853333,41.6911909 74.889,41.3298999 L75.6783333,35.421161 C75.7666667,34.7601248 76.3316667,34.2660942 77,34.2660942 L79.6666667,34.2660942 C80.335,34.2660942 80.9,34.7597921 80.9883333,35.421161 L81.7776667,41.3298999 C83.2816667,41.6911909 84.696,42.2810335 85.9793333,43.0654942 L90.7223333,39.4452647 C90.9626667,39.261625 91.2476667,39.1718013 91.532,39.1718013 C91.875,39.1718013 92.2166667,39.3035428 92.475,39.5617029 L94.3606667,41.4436766 C94.8333333,41.9150849 94.883,42.6632834 94.4773333,43.1929108 L90.85,47.926622 C91.6356667,49.2077747 92.227,50.6193382 92.589,52.1200601 L98.5093333,52.9078475 C99.1723333,52.9956752 99.667,53.5595687 99.667,54.2265931 L99.667,54.2265931 Z M78.3336667,63.5416479 C82.752,63.5416479 86.3336667,59.9669956 86.3336667,55.5573153 C86.3336667,51.1476349 82.752,47.5729826 78.3336667,47.5729826 C73.9153333,47.5729826 70.3336667,51.1476349 70.3336667,55.5573153 C70.3336667,59.9669956 73.9153333,63.5416479 78.3336667,63.5416479 L78.3336667,63.5416479 Z" id="Shape" transform="translate(78.333500, 55.557648) rotate(14.000000) translate(-78.333500, -55.557648) "></path>
                          <path d="M177.527638,94.0092121 L177.527638,96.6706563 C177.527638,97.3376808 177.032971,97.9015743 176.370304,97.9897346 L170.449971,98.7775221 C170.087971,100.278577 169.496971,101.690473 168.710971,102.971293 L172.337971,107.705004 C172.743971,108.234631 172.693971,108.982497 172.221304,109.454238 L170.335971,111.336212 C170.077638,111.594372 169.735971,111.726114 169.392971,111.726114 C169.108638,111.726114 168.823638,111.635957 168.583304,111.45265 L163.840304,107.832421 C162.556638,108.616549 161.142304,109.206724 159.638638,109.568015 L158.849304,115.476754 C158.760971,116.13779 158.195971,116.631821 157.527638,116.631821 L154.860971,116.631821 C154.192638,116.631821 153.627638,116.138123 153.539304,115.476754 L152.749971,109.568015 C151.245971,109.206724 149.831304,108.616881 148.547971,107.832421 L143.804971,111.452317 C143.564638,111.635624 143.279638,111.725781 142.995304,111.725781 C142.652304,111.725781 142.310638,111.594039 142.052304,111.335879 L140.166638,109.454238 C139.693971,108.98283 139.644304,108.234964 140.049971,107.705004 L143.677304,102.971293 C142.891638,101.69014 142.300304,100.278577 141.938304,98.7778548 L136.017971,97.9900673 C135.355638,97.9019069 134.860638,97.3380134 134.860638,96.670989 L134.860638,94.0095448 C134.860638,93.3425203 135.355304,92.7786268 136.017971,92.6904665 L141.938304,91.902679 C142.300304,90.4016245 142.891304,88.990061 143.677304,87.709241 L140.049971,82.9755297 C139.643971,82.4455697 139.693971,81.6977038 140.166638,81.2262955 L142.052304,79.3443218 C142.310638,79.0861617 142.652304,78.9544202 142.995304,78.9544202 C143.279638,78.9544202 143.564638,79.0445766 143.804971,79.2278836 L148.547971,82.8481131 C149.831638,82.0639851 151.245971,81.4738099 152.749638,81.1125188 L153.538971,75.20378 C153.627304,74.5427438 154.192304,74.0487132 154.860638,74.0487132 L157.527304,74.0487132 C158.195638,74.0487132 158.760638,74.5424111 158.848971,75.20378 L159.638304,81.1125188 C161.142304,81.4738099 162.556638,82.0636524 163.839971,82.8481131 L168.582971,79.2278836 C168.823304,79.044244 169.108304,78.9544202 169.392638,78.9544202 C169.735638,78.9544202 170.077304,79.0861617 170.335638,79.3443218 L172.221304,81.2262955 C172.693971,81.6977038 172.743638,82.4459023 172.337971,82.9755297 L168.710638,87.709241 C169.496304,88.9903937 170.087638,90.4019571 170.449638,91.902679 L176.369971,92.6904665 C177.032971,92.7782941 177.527638,93.3421876 177.527638,94.0092121 L177.527638,94.0092121 Z M156.194304,103.324267 C160.612638,103.324267 164.194304,99.7496146 164.194304,95.3399342 C164.194304,90.9302538 160.612638,87.3556016 156.194304,87.3556016 C151.775971,87.3556016 148.194304,90.9302538 148.194304,95.3399342 C148.194304,99.7496146 151.775971,103.324267 156.194304,103.324267 L156.194304,103.324267 Z" id="Shape-Copy-2" transform="translate(156.194138, 95.340267) rotate(7.000000) translate(-156.194138, -95.340267) "></path>
                          <path d="M158.667109,49.1323134 L158.667109,52.667044 C158.667109,53.5529359 158.01013,54.3018569 157.130026,54.4189449 L149.267083,55.4652251 C148.786302,57.4588132 148.00138,59.3339878 146.957474,61.0350769 L151.774583,67.3220371 C152.313802,68.0254484 152.247396,69.0187077 151.619635,69.6452387 L149.115677,72.1447351 C148.772578,72.487604 148.318802,72.6625731 147.863255,72.6625731 C147.485625,72.6625731 147.107109,72.5428341 146.787917,72.2993796 L140.48862,67.4912623 C138.78375,68.5326823 136.905339,69.3165088 134.908281,69.7963485 L133.859948,77.6438922 C133.74263,78.5218309 132.99224,79.1779653 132.104609,79.1779653 L128.562943,79.1779653 C127.675313,79.1779653 126.924922,78.5222728 126.807604,77.6438922 L125.759271,69.7963485 C123.761771,69.3165088 121.882917,68.5331241 120.17849,67.4912623 L113.879193,72.2989377 C113.56,72.5423923 113.181484,72.6621313 112.803854,72.6621313 C112.348307,72.6621313 111.894531,72.4871621 111.551432,72.1442933 L109.047031,69.6452387 C108.419271,69.0191496 108.353307,68.0258903 108.892083,67.3220371 L113.709635,61.0350769 C112.666172,59.3335459 111.880807,57.4588132 111.400026,55.465667 L103.537083,54.4193867 C102.657422,54.3022988 102,53.5533777 102,52.6674859 L102,49.1327553 C102,48.2468634 102.656979,47.4979424 103.537083,47.3808544 L111.400026,46.3345742 C111.880807,44.3409861 112.665729,42.4662534 113.709635,40.7651643 L108.892083,34.4782041 C108.352865,33.7743508 108.419271,32.7810915 109.047031,32.1550024 L111.551432,29.655506 C111.894531,29.3126371 112.348307,29.137668 112.803854,29.137668 C113.181484,29.137668 113.56,29.257407 113.879193,29.5008615 L120.17849,34.3089788 C121.883359,33.2675588 123.761771,32.4837323 125.758828,32.0038926 L126.807161,24.1563489 C126.924479,23.2784102 127.67487,22.6222758 128.5625,22.6222758 L132.104167,22.6222758 C132.991797,22.6222758 133.742188,23.2779683 133.859505,24.1563489 L134.907839,32.0038926 C136.905339,32.4837323 138.78375,33.267117 140.488177,34.3089788 L146.787474,29.5008615 C147.106667,29.2569651 147.485182,29.137668 147.862813,29.137668 C148.318359,29.137668 148.772135,29.3126371 149.115234,29.655506 L151.619635,32.1550024 C152.247396,32.7810915 152.313359,33.7747927 151.774583,34.4782041 L146.957031,40.7651643 C148.000495,42.4666952 148.785859,44.3414279 149.266641,46.3345742 L157.129583,47.3808544 C158.01013,47.4975005 158.667109,48.2464216 158.667109,49.1323134 L158.667109,49.1323134 Z M130.333776,61.5038705 C136.201875,61.5038705 140.958776,56.7562855 140.958776,50.8996787 C140.958776,45.043072 136.201875,40.2954869 130.333776,40.2954869 C124.465677,40.2954869 119.708776,45.043072 119.708776,50.8996787 C119.708776,56.7562855 124.465677,61.5038705 130.333776,61.5038705 L130.333776,61.5038705 Z" id="Shape-Copy"></path>
                      </g>
                  </g>
              </g>
          </svg>
          <span class="super-power-name">Systems Thinker</span>
        </span>
      </div>
    </div>

    <div class="panel panel-default animated bounceIn" id="login-form"
         style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Please</strong> sign in'); ?></div>

        <div class="panel-body">

            <?php $form = ActiveForm::begin(['id' => 'account-login-form', 'enableClientValidation'=>false]); ?>

            <p><?php echo Yii::t('UserModule.views_auth_login', "If you're already a member, please login with your username/email and password."); ?></p>

            <?php echo $form->field($model, 'username')->textInput(['id' => 'login_username', 'placeholder' => $model->getAttributeLabel('username')])->label(false); ?>
            <?php echo $form->field($model, 'password')->passwordInput(['id' => 'login_password', 'placeholder' => $model->getAttributeLabel('password')])->label(false); ?>
            <?php echo $form->field($model, 'rememberMe')->checkbox(); ?>

            <hr>
            <div class="row">
                <div class="col-md-4">
                    <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Sign in'), array('id' => 'login-button', 'class' => 'btn btn-large btn-primary')); ?>
                </div>
                <div class="col-md-8 text-right">
                    <small>
                        <?php echo Yii::t('UserModule.views_auth_login', 'Forgot your password?'); ?>
                        <a
                            href="<?php echo Url::toRoute('/user/auth/recover-password'); ?>"><br><?php echo Yii::t('UserModule.views_auth_login', 'Create a new one.') ?></a>
                    </small>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>

    <br>

    <?php if ($canRegister) : ?>
        <div id="register-form"
             class="panel panel-default animated bounceInLeft"
             style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

            <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Sign</strong> up') ?></div>

            <div class="panel-body">

                <p><?php echo Yii::t('UserModule.views_auth_login', "Don't have an account? Join the network by entering your e-mail address."); ?></p>

                <?php $form = ActiveForm::begin(['id' => 'account-register-form']); ?>

                <?php echo $form->field($registerModel, 'email')->textInput(['id' => 'register-email', 'placeholder' => $registerModel->getAttributeLabel('email')])->label(false); ?>
                <hr>
                <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Register'), array('class' => 'btn btn-primary')); ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

    <?php endif; ?>

    <?= humhub\widgets\LanguageChooser::widget(); ?>
</div>

<script type="text/javascript">
    $(function () {
        // set cursor to login field
        $('#login_username').focus();
    })

    // Shake panel after wrong validation
<?php if ($model->hasErrors()) { ?>
        $('#login-form').removeClass('bounceIn');
        $('#login-form').addClass('shake');
        $('#register-form').removeClass('bounceInLeft');
        $('#app-title').removeClass('fadeIn');
<?php } ?>

    // Shake panel after wrong validation
<?php if ($registerModel->hasErrors()) { ?>
        $('#register-form').removeClass('bounceInLeft');
        $('#register-form').addClass('shake');
        $('#login-form').removeClass('bounceIn');
        $('#app-title').removeClass('fadeIn');
<?php } ?>

window.onload = function() {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = '<?php echo $this->theme->getBaseUrl() . '/js/home-animation.js'; ?>';
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
}

</script>
