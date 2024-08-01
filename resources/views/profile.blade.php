@extends('layouts.frontend')
@section('content')
<!---------------user-profile-section---------------->
<section class="user-profile footer-padding">
    <div class="container">
        <div class="user-profile-section">
            <div class="dashboard-heading ">
                <h5 class="dashboard-title">Profile</h5>
            </div>
            <div class="user-dashboard">
                <div class="nav nav-item nav-pills  me-3" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">

                    <!-- nav-buttons -->
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">
                        <span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.21258 4.98254C9.21258 6.17687 9.20926 7.37119 9.21391 8.56552C9.21723 9.41928 9.69987 9.9079 10.5483 9.90989C12.2512 9.91454 13.9547 9.91454 15.6576 9.90989C16.5007 9.9079 16.9966 9.40799 16.9979 8.56751C16.9999 6.16757 16.9999 3.76763 16.9979 1.36835C16.9973 0.508624 16.4961 0.00340804 15.6423 0.00274416C13.9613 0.000752505 12.2804 0.00141639 10.5994 0.00274416C9.69722 0.00340804 9.2159 0.488044 9.21391 1.40022C9.21059 2.59388 9.21258 3.78821 9.21258 4.98254ZM7.78722 12.0522C7.78722 10.8579 7.78921 9.66359 7.78656 8.46926C7.78456 7.57036 7.31122 7.09104 6.42028 7.08971C4.73933 7.08639 3.05837 7.08705 1.37742 7.08971C0.489805 7.09104 0.00251398 7.57965 0.0018501 8.46395C0.000522332 10.8526 0.000522332 13.2413 0.0018501 15.6299C0.00251398 16.4896 0.503747 16.9969 1.35551 16.9982C3.04775 17.0002 4.73933 17.0002 6.43157 16.9982C7.2913 16.9969 7.78257 16.5036 7.78589 15.6359C7.78988 14.4409 7.78722 13.2466 7.78722 12.0522ZM3.89022 5.66236C4.75261 5.66236 5.61499 5.66767 6.47738 5.66103C7.28665 5.65439 7.77925 5.16444 7.78523 4.35782C7.79253 3.34075 7.79253 2.32302 7.78523 1.30595C7.77925 0.505968 7.27337 0.00473581 6.47339 0.00274416C4.75924 -0.00123915 3.04576 -0.000575264 1.33161 0.00274416C0.519016 0.00407193 0.00516952 0.516591 0.00251398 1.32719C-0.00146932 2.32236 -0.000141552 3.31752 0.00251398 4.31268C0.00450564 5.15648 0.49578 5.65638 1.33626 5.66169C2.18736 5.667 3.03846 5.66236 3.89022 5.66236ZM13.1083 11.3372C12.2459 11.3372 11.3835 11.3319 10.5211 11.3386C9.71248 11.3452 9.21988 11.8358 9.21457 12.6431C9.20793 13.6602 9.20727 14.6779 9.21457 15.695C9.22055 16.493 9.72908 16.9955 10.5271 16.9969C12.2412 17.0008 13.9547 17.0002 15.6689 16.9969C16.4801 16.9955 16.994 16.481 16.9973 15.6704C17.0013 14.6752 16.9999 13.6801 16.9973 12.6849C16.9953 11.8418 16.502 11.3425 15.6622 11.3379C14.8111 11.3333 13.9594 11.3372 13.1083 11.3372Z" />
                                <path
                                    d="M9.21223 4.98269C9.21223 3.78837 9.21024 2.59404 9.2129 1.39971C9.21489 0.487533 9.69621 0.00289744 10.5984 0.00223355C12.2794 0.000905786 13.9603 0.000241902 15.6413 0.00223355C16.495 0.00356132 16.9963 0.508777 16.9969 1.36784C16.9983 3.76778 16.9989 6.16773 16.9969 8.567C16.9963 9.40748 16.5004 9.90739 15.6566 9.90938C13.9537 9.91402 12.2502 9.91402 10.5473 9.90938C9.69886 9.90672 9.21622 9.41877 9.2129 8.56501C9.20891 7.37135 9.21223 6.17702 9.21223 4.98269Z" />
                                <path
                                    d="M7.78832 12.0524C7.78832 13.2467 7.79098 14.441 7.78699 15.6353C7.78434 16.503 7.2924 16.9963 6.43267 16.9976C4.74043 16.9996 3.04885 16.9996 1.35661 16.9976C0.504845 16.9963 0.00361284 16.4891 0.00294895 15.6294C0.00162118 13.2407 0.00162118 10.8521 0.00294895 8.4634C0.00361284 7.57911 0.490904 7.09115 1.37852 7.08916C3.05947 7.08651 4.74043 7.08584 6.42138 7.08916C7.31231 7.09115 7.785 7.56981 7.78766 8.46871C7.79031 9.6637 7.78832 10.858 7.78832 12.0524Z" />
                                <path
                                    d="M3.89062 5.6621C3.03952 5.6621 2.18775 5.66609 1.33665 5.66077C0.496177 5.65613 0.00490302 5.15622 0.00224748 4.31243C-0.000408054 3.31726 -0.00107194 2.3221 0.00224748 1.32694C0.0055669 0.516336 0.519413 0.00381733 1.33201 0.00248957C3.04616 -0.000829855 4.75964 -0.000829855 6.47379 0.00248957C7.27311 0.00448122 7.77965 0.50505 7.78563 1.30569C7.79293 2.32276 7.79293 3.3405 7.78563 4.35757C7.77965 5.16485 7.28771 5.6548 6.47777 5.66077C5.61539 5.66741 4.753 5.6621 3.89062 5.6621Z" />
                                <path
                                    d="M13.1081 11.3378C13.9592 11.3378 14.811 11.3338 15.6621 11.3391C16.5019 11.3444 16.9952 11.843 16.9972 12.6862C16.9998 13.6813 17.0005 14.6765 16.9972 15.6716C16.9939 16.4822 16.48 16.9968 15.6687 16.9981C13.9546 17.0014 12.2411 17.0014 10.527 16.9981C9.72831 16.9961 9.21977 16.4935 9.21446 15.6962C9.20716 14.6791 9.20716 13.6614 9.21446 12.6443C9.21977 11.837 9.71237 11.3464 10.521 11.3398C11.3834 11.3325 12.2458 11.3378 13.1081 11.3378Z" />
                            </svg>
                        </span>
                        <span class="text">Dashboard</span>
                    </button>

                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">
                        <span>
                            <svg width="14" height="19" viewBox="0 0 14 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.96898 10.7061H3.78814C1.6967 10.7061 0.00346265 12.4028 0 14.4942V18.3481H13.7606V14.4942C13.7571 12.4028 12.0604 10.7061 9.96898 10.7061Z" />
                                <path
                                    d="M6.88098 9.17603C9.41488 9.17603 11.469 7.12191 11.469 4.58802C11.469 2.05412 9.41488 0 6.88098 0C4.34709 0 2.29297 2.05412 2.29297 4.58802C2.29297 7.12191 4.34709 9.17603 6.88098 9.17603Z" />
                            </svg>
                        </span>
                        <span class="text">
                            Parsonal Info
                        </span>
                    </button>


                    <button class="nav-link" id="v-pills-order-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-order" type="button" role="tab" aria-controls="v-pills-order"
                        aria-selected="false">
                        <span>
                            <svg width="15" height="18" viewBox="0 0 15 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.9643 15.8454C10.8728 15.8399 10.8054 15.8331 10.7381 15.8331C9.37517 15.8324 8.01229 15.8324 6.60539 15.8324C6.85294 16.5145 6.77799 17.099 6.11648 17.4676C5.68672 17.7076 5.24457 17.6615 4.86018 17.3562C4.36027 16.9594 4.3087 16.4409 4.56175 15.8317C3.82667 15.8317 3.13285 15.8406 2.43903 15.8296C1.53136 15.8152 0.910425 14.8958 1.25974 14.0638C1.34845 13.852 1.51898 13.6581 1.69295 13.502C2.43628 12.8384 3.19199 12.1872 3.95182 11.5429C4.11204 11.4075 4.16499 11.2816 4.11479 11.074C3.36389 7.96037 2.61506 4.8454 1.87999 1.72768C1.82085 1.476 1.71564 1.42512 1.48597 1.432C0.997754 1.44712 0.507472 1.43681 0 1.43681C0 1.06824 0 0.741614 0 0.390921C0.782525 0.390921 1.54786 0.377856 2.31182 0.397798C2.58825 0.405362 2.70308 0.630905 2.76772 0.885329C3.01389 1.86177 3.27725 2.83339 3.5138 3.81189C3.57775 4.07732 3.68846 4.22034 3.96901 4.19971C3.98001 4.19903 3.9917 4.20315 4.00339 4.20315C4.60369 4.21003 4.95026 4.4507 5.25488 5.03863C6.60195 7.64613 10.1907 7.96587 12.0686 5.68981C12.2206 5.50622 12.3512 5.44639 12.585 5.4904C13.0911 5.58529 13.6027 5.64855 14.1136 5.71801C14.333 5.74826 14.4306 5.85416 14.4251 6.08314C14.3839 7.93906 14.3461 9.79498 14.3144 11.6509C14.3089 11.9816 14.0937 11.9665 13.8661 11.9665C11.0819 11.9651 8.29697 11.9693 5.51274 11.9596C5.2425 11.959 5.03897 12.0291 4.8368 12.2072C4.05428 12.8962 3.25525 13.5659 2.47135 14.2536C2.37095 14.3416 2.32488 14.4908 2.25337 14.6111C2.38264 14.6552 2.51192 14.737 2.64119 14.737C6.60608 14.7439 10.571 14.7425 14.5358 14.7425C14.6823 14.7425 14.8288 14.7425 15 14.7425C15 15.1152 15 15.4514 15 15.8193C14.3426 15.8193 13.6935 15.8193 13.0127 15.8193C13.25 16.4568 13.2156 17.0055 12.6442 17.4064C12.2536 17.68 11.7406 17.6814 11.3521 17.4091C10.78 17.011 10.7339 16.4636 10.9643 15.8454Z" />
                                <path
                                    d="M8.8449 6.1337C7.15883 6.12476 5.787 4.74744 5.78906 3.06549C5.79113 1.37254 7.18564 -0.00685072 8.88753 2.55979e-05C10.5702 0.00690192 11.9413 1.38835 11.9392 3.07374C11.9372 4.77563 10.555 6.14264 8.8449 6.1337ZM9.94924 1.61802C9.38194 2.22039 8.85178 2.78287 8.31199 3.35636C8.11326 3.12806 7.94342 2.93278 7.76394 2.72786C7.48201 2.96853 7.22553 3.1872 6.95735 3.41618C7.28191 3.80125 7.57484 4.16708 7.8884 4.51502C8.10157 4.75225 8.43232 4.77082 8.65236 4.54458C9.33656 3.83907 10.0042 3.11775 10.6382 2.44593C10.4031 2.16332 10.1858 1.9027 9.94924 1.61802Z" />
                            </svg>
                        </span>
                        <span class="text">
                            Order
                        </span>
                    </button>



                    <button class="nav-link" id="v-pills-address-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-address" type="button" role="tab" aria-controls="v-pills-address"
                        aria-selected="false">
                        <span>
                            <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.864 15.9822C11.4632 12.6506 9.25877 11.1118 7.04363 11.0545C5.70166 11.0223 4.5422 11.5126 3.57598 12.4609C2.60976 13.4057 2.19465 14.5938 1.99067 16.0288C1.37873 15.7461 0.809733 15.5063 0.272945 15.2128C0.147695 15.1449 0.0582333 14.8944 0.0582333 14.7262C0.0439189 13.5631 -0.0849134 12.3822 0.0940158 11.2478C0.365988 9.54079 1.99067 8.23819 3.71555 8.05568C4.60661 7.96264 5.46547 7.9519 6.35296 8.1702C6.88617 8.3026 7.51243 8.19167 8.06711 8.05926C10.2357 7.52963 13.1559 8.64973 13.7571 10.9973C14.0577 12.1675 14.0577 13.3663 13.8751 14.5615C13.8107 14.9981 13.6068 15.3202 13.1737 15.4812C12.7336 15.6387 12.3042 15.8105 11.864 15.9822Z" />
                                <path
                                    d="M10.6071 3.72194C10.5928 5.77962 8.96814 7.38999 6.93193 7.36494C4.8814 7.33989 3.24241 5.7009 3.26388 3.69331C3.28535 1.59984 4.90287 -0.0212607 6.94982 0.000210833C9.01824 0.0181038 10.6215 1.64994 10.6071 3.72194Z" />
                                <path
                                    d="M10.9467 16.0178C10.9109 18.2795 9.07512 19.9972 6.74188 19.9507C4.58041 19.9077 2.77681 18.0719 2.80902 15.9498C2.8448 13.7454 4.69493 11.9776 6.9387 12.0062C9.17174 12.0384 10.9789 13.8492 10.9467 16.0178ZM6.84208 18.4834C7.27509 18.462 7.76893 18.4262 8.26278 18.419C8.62779 18.4154 8.74947 18.2222 8.74947 17.8966C8.74947 17.1808 8.75305 16.4687 8.74589 15.753C8.74589 15.6599 8.70652 15.5025 8.65642 15.4882C8.32719 15.4059 8.40234 15.1482 8.38087 14.9263C8.36298 14.7367 8.34151 14.547 8.30572 14.3645C8.15542 13.6309 7.64011 13.2122 6.91723 13.2229C6.22299 13.2337 5.64683 13.7418 5.52874 14.4432C5.4679 14.8154 5.65041 15.2735 5.17088 15.5096C5.14941 15.5204 5.14941 15.5919 5.14941 15.6349C5.14941 16.4508 5.1351 17.2667 5.16015 18.0826C5.16372 18.19 5.34981 18.3689 5.4679 18.3868C5.90449 18.4477 6.34108 18.4548 6.84208 18.4834Z" />
                                <path
                                    d="M7.78818 15.3706C7.81323 14.8159 7.93491 14.2684 7.41601 13.9069C7.09036 13.6815 6.70745 13.6851 6.40327 13.9499C5.95953 14.3328 6.03826 14.8481 6.08836 15.3706C6.66451 15.3706 7.19414 15.3706 7.78818 15.3706ZM6.76113 17.643C6.8828 17.643 7.00448 17.643 7.11899 17.643C7.15836 17.3209 7.22635 17.0239 7.21561 16.7304C7.21204 16.6088 7.02953 16.4978 6.92933 16.3797C6.83986 16.4835 6.6824 16.5837 6.67883 16.6911C6.67167 16.9988 6.72892 17.3137 6.76113 17.643Z"
                                    fill="white" />
                                <path
                                    d="M7.78818 15.3706C7.19414 15.3706 6.66451 15.3706 6.08836 15.3706C6.03826 14.8445 5.95953 14.3328 6.40327 13.9499C6.71103 13.6851 7.09394 13.6815 7.41601 13.9069C7.93491 14.2684 7.81323 14.8159 7.78818 15.3706Z" />
                                <path
                                    d="M6.76261 17.6421C6.7304 17.3129 6.67314 17.0016 6.6803 16.6902C6.68388 16.5865 6.84134 16.4827 6.9308 16.3789C7.031 16.4934 7.21351 16.6079 7.21709 16.7296C7.22782 17.0231 7.15983 17.3201 7.12046 17.6421C7.00595 17.6421 6.88786 17.6421 6.76261 17.6421Z" />
                            </svg>
                        </span>
                        <span class="text">
                            Address
                        </span>
                    </button>



                    <div class="nav-link">
                        <a href="login.html">
                            <span>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_113_3043)">
                                        <path
                                            d="M7.50224 15.7537C7.50224 16.0247 7.50895 16.2465 7.5 16.4683C7.4597 17.5682 6.52164 18.2515 5.4806 17.9155C4.00075 17.4383 2.52761 16.9387 1.05448 16.4392C0.380597 16.2107 0 15.6641 0 14.9405C0 10.4892 0 6.03569 0.00223881 1.58218C0.00223881 0.627852 0.629104 0.00955666 1.59403 0.00731646C4.28731 0.00283606 6.98284 -0.00164434 9.67612 0.000595862C11.0104 0.00283606 11.9798 0.961641 12 2.29904C12.0112 2.99126 12.0067 3.68124 12 4.37347C11.9955 4.90439 11.6933 5.25162 11.2478 5.25162C10.8022 5.25386 10.4955 4.90663 10.491 4.37571C10.4843 3.69693 10.4933 3.0159 10.4888 2.33712C10.4843 1.79276 10.209 1.50153 9.67388 1.49705C8.72463 1.48585 7.77761 1.49481 6.82836 1.49481C6.72313 1.49481 6.61791 1.49481 6.46791 1.49481C6.51492 1.55081 6.53284 1.59114 6.56418 1.60682C7.24254 1.91597 7.51119 2.46481 7.51119 3.1884C7.50672 6.72791 7.50895 10.2674 7.50895 13.8069C7.50895 13.9436 7.50895 14.0802 7.50895 14.2415C8.32164 14.2415 9.09179 14.2662 9.8597 14.2303C10.2649 14.2124 10.4888 13.8898 10.491 13.4396C10.4978 12.5031 10.4955 11.5645 10.4933 10.6259C10.4933 10.2854 10.594 10.0008 10.9119 9.83507C11.3888 9.58865 11.9754 9.89332 11.9888 10.4511C12.0179 11.5511 12.0493 12.6577 11.9664 13.7532C11.8746 14.9494 10.9052 15.7447 9.69403 15.7514C8.97537 15.7559 8.26343 15.7537 7.50224 15.7537Z" />
                                        <path
                                            d="M13.4942 6.75005C13.4942 6.02423 13.5009 5.33425 13.492 4.64651C13.4875 4.27463 13.5927 3.96997 13.9532 3.81539C14.3136 3.66082 14.6046 3.79523 14.8688 4.06181C15.8002 5.0027 16.7405 5.93462 17.674 6.87326C18.1061 7.30786 18.1129 7.69094 17.6897 8.11882C16.7494 9.06642 15.8024 10.0073 14.8599 10.9549C14.6091 11.2058 14.327 11.3402 13.9755 11.1946C13.6129 11.0445 13.492 10.7533 13.4964 10.3769C13.5032 9.68695 13.4987 8.99473 13.4987 8.24875C13.3576 8.24875 13.2345 8.24875 13.1114 8.24875C12.2808 8.24875 11.4479 8.25099 10.6173 8.24651C10.0711 8.24427 9.75315 7.962 9.75987 7.4938C9.76435 7.03456 10.0912 6.75453 10.6352 6.75229C11.5666 6.75005 12.5024 6.75005 13.4942 6.75005Z" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_113_3043">
                                            <rect width="18" height="18" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <div>
                                <a type="button" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <span class="text">
                                        Logout
                                    </span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </a>
                    </div>

                </div>

                <!-- nav-content -->
                <div class="tab-content nav-content" id="v-pills-tabContent" style="flex: 1 0%;">

                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab" tabindex="0">
                        <div class="user-profile">
                            <div class="user-title">
                                <p class="paragraph">Hello, Sajjad</p>
                                <h5 class="heading">Welcome to your Profile </h5>
                            </div>
                            <div class="profile-section">
                                <div class="row g-5">
                                    <div class="col-lg-4 col-sm-6">

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="info-section">
                                            <div class="seller-info">
                                                <h5 class="heading">Personal Information</h5>
                                                <div class="info-list">
                                                    <div class="info-title">
                                                        <p>Name:</p>
                                                        <p>Email:</p>
                                                        <p>Phone:</p>
                                                        <p>City:</p>
                                                        <p>Zip:</p>
                                                    </div>
                                                    <div class="info-details">
                                                        <p>Sajjad</p>
                                                        <p>demoemail@gmail.com</p>
                                                        <p>023 434 54354</p>
                                                        <p>Haydarabad, Rord 34</p>
                                                        <p>3454</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="devider"></div>
                                            <div class="shop-info">
                                                <h5 class="heading">Shop Information</h5>
                                                <div class="info-list">
                                                    <div class="info-title">
                                                        <p>Name:</p>
                                                        <p>Email:</p>
                                                        <p>Phone:</p>
                                                        <p>City:</p>
                                                        <p>Zip:</p>
                                                    </div>
                                                    <div class="info-details">
                                                        <p>ShopUs Super-Shop</p>
                                                        <p>demoemail@gmail.com</p>
                                                        <p>023 434 54354</p>
                                                        <p>Haydarabad, Rord 34</p>
                                                        <p>3454</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <div class="seller-application-section">
                            <div class="row ">
                                <div class="col-lg-7">
                                    <div class=" account-section">
                                        <div class="review-form">
                                            <div class=" account-inner-form">
                                                <div class="review-form-name">
                                                    <label for="firname" class="form-label">First Name*</label>
                                                    <input type="text" id="firname" class="form-control"
                                                        placeholder="First Name">
                                                </div>
                                                <div class="review-form-name">
                                                    <label for="latname" class="form-label">Last Name*</label>
                                                    <input type="text" id="latname" class="form-control"
                                                        placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class=" account-inner-form">
                                                <div class="review-form-name">
                                                    <label for="gmail" class="form-label">Email*</label>
                                                    <input type="email" id="gmail" class="form-control"
                                                        placeholder="user@gmail.com">
                                                </div>
                                                <div class="review-form-name">
                                                    <label for="telephone" class="form-label">Phone*</label>
                                                    <input type="tel" id="telephone" class="form-control"
                                                        placeholder="+880388**0899">
                                                </div>
                                            </div>
                                            <div class="review-form-name">
                                                <label for="region" class="form-label">Country*</label>
                                                <select id="region" class="form-select">
                                                    <option>Choose...</option>
                                                    <option>Bangladesh</option>
                                                    <option>United States</option>
                                                    <option>United Kingdom</option>
                                                </select>
                                            </div>
                                            <div class="review-form-name address-form">
                                                <label for="addres" class="form-label">Address*</label>
                                                <input type="text" id="addres" class="form-control"
                                                    placeholder="Enter your Address">
                                            </div>
                                            <div class=" account-inner-form city-inner-form">
                                                <div class="review-form-name">
                                                    <label for="teritory" class="form-label">Town / City*</label>
                                                    <select id="teritory" class="form-select">
                                                        <option>Choose...</option>
                                                        <option>Newyork</option>
                                                        <option>Dhaka</option>
                                                        <option selected>London</option>
                                                    </select>
                                                </div>
                                                <div class="review-form-name">
                                                    <label for="post" class="form-label">Postcode / ZIP*</label>
                                                    <input type="number" id="post" class="form-control"
                                                        placeholder="0000">
                                                </div>
                                            </div>
                                            <div class="submit-btn">
                                                <a href="#" class="shop-btn cancel-btn">Cancel</a>
                                                <a href="#" class="shop-btn update-btn">Update Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="img-upload-section">
                                        <div class="logo-wrapper">
                                            <h5 class="comment-title">Update Logo</h5>
                                            <p class="paragraph">Size300x300. Gifs work
                                                too.Max 5mb.</p>
                                            <div class="logo-upload">
                                                <img src="assets/images/homepage-one/sallers-cover.png" alt="upload"
                                                    class="upload-img" id="upload-img">
                                                <div class="upload-input">
                                                    <label for="input-file">
                                                        <span>
                                                            <svg width="32" height="32" viewBox="0 0 32 32"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M16.5147 11.5C17.7284 12.7137 18.9234 13.9087 20.1296 15.115C19.9798 15.2611 19.8187 15.4109 19.6651 15.5683C17.4699 17.7635 15.271 19.9587 13.0758 22.1539C12.9334 22.2962 12.7948 22.4386 12.6524 22.5735C12.6187 22.6034 12.5663 22.6296 12.5213 22.6296C11.3788 22.6334 10.2362 22.6297 9.09365 22.6334C9.01498 22.6334 9 22.6034 9 22.536C9 21.4009 9 20.2621 9.00375 19.1271C9.00375 19.0746 9.02997 19.0109 9.06368 18.9772C10.4123 17.6249 11.7609 16.2763 13.1095 14.9277C14.2295 13.8076 15.3459 12.6913 16.466 11.5712C16.4884 11.5487 16.4997 11.5187 16.5147 11.5Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M20.9499 14.2904C19.7436 13.0842 18.5449 11.8854 17.3499 10.6904C17.5634 10.4694 17.7844 10.2446 18.0054 10.0199C18.2639 9.76139 18.5261 9.50291 18.7884 9.24443C19.118 8.91852 19.5713 8.91852 19.8972 9.24443C20.7251 10.0611 21.5492 10.8815 22.3771 11.6981C22.6993 12.0165 22.7105 12.4698 22.3996 12.792C21.9238 13.2865 21.4443 13.7772 20.9686 14.2717C20.9648 14.2792 20.9536 14.2867 20.9499 14.2904Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </span>
                                                    </label>
                                                    <input type="file"
                                                        accept="image/jpeg, image/jpg, image/png, image/webp"
                                                        id="input-file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-payment" role="tabpanel"
                        aria-labelledby="v-pills-order-tab" tabindex="0">
                        <div class="payment-section">
                            <div class="wrapper">
                                <div class="wrapper-item">
                                    <div class="wrapper-img">
                                        <img src="./assets/images/homepage-one/payment-img-1.png" alt="payment">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading">Dutch Bangl Bank Lmtd</h5>
                                        <p class="paragraph">Bank **********5535</p>
                                        <p class="verified">Verified</p>
                                    </div>
                                </div>
                                <a href="#" class="shop-btn">Manage</a>
                            </div>
                            <hr>
                            <div class="wrapper">
                                <div class="wrapper-item">
                                    <div class="wrapper-img">
                                        <img src="./assets/images/homepage-one/payment-img-2.png" alt="payment">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading">Master Card</h5>
                                        <p class="paragraph">Bank **********5535</p>
                                        <p class="verified">Verified</p>
                                    </div>
                                </div>
                                <a href="#" class="shop-btn">Manage</a>
                            </div>
                            <hr>
                            <div class="wrapper">
                                <div class="wrapper-item">
                                    <div class="wrapper-img">
                                        <img src="./assets/images/homepage-one/payment-img-3.png" alt="payment">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading">Paypal Account</h5>
                                        <p class="paragraph">Bank **********5535</p>
                                        <p class="verified">Verified</p>
                                    </div>
                                </div>
                                <a href="#" class="shop-btn">Manage</a>
                            </div>
                            <hr>
                            <div class="wrapper">
                                <div class="wrapper-item">
                                    <div class="wrapper-img">
                                        <img src="./assets/images/homepage-one/payment-img-4.png" alt="payment">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading">Visa Card</h5>
                                        <p class="paragraph">Bank **********5535</p>
                                        <p class="verified">Verified</p>
                                    </div>
                                </div>
                                <a href="#" class="shop-btn">Manage</a>
                            </div>
                            <hr>
                            <div class="wrapper-btn">
                                <a href="#" class="shop-btn" onclick="modalAction('.cart')">Add Cart</a>

                                <!-- cart-modal -->
                                <div class="modal-wrapper cart">
                                    <div onclick="modalAction('.cart')" class="anywhere-away"></div>

                                    <!-- change this -->
                                    <div class="login-section account-section modal-main">
                                        <div class="review-form">
                                            <div class="review-content">
                                                <h5 class="comment-title">Add New Card</h5>
                                                <div class="close-btn">
                                                    <img src="./assets/images/homepage-one/close-btn.png"
                                                        onclick="modalAction('.cart')" alt="close-btn">
                                                </div>
                                            </div>
                                            <div class="review-form-name address-form">
                                                <label for="cnumber" class="form-label">Card Number*</label>
                                                <input type="number" id="cnumber" class="form-control"
                                                    placeholder="*** *** ***">
                                            </div>
                                            <div class="review-form-name address-form">
                                                <label for="holdername" class="form-label">Card Holder Name*</label>
                                                <input type="text" id="holdername" class="form-control"
                                                    placeholder="Demo Name">
                                            </div>
                                            <div class=" account-inner-form">
                                                <div class="review-form-name">
                                                    <label for="expirydate" class="form-label">Expiry Date*</label>
                                                    <input type="date" id="expirydate" class="form-control">
                                                </div>
                                                <div class="review-form-name">
                                                    <label for="cvv" class="form-label">CVV*</label>
                                                    <input type="number" id="cvv" class="form-control"
                                                        placeholder="21232">
                                                </div>
                                            </div>
                                            <div class="login-btn text-center">
                                                <a href="#" onclick="modalAction('.cart')" class="shop-btn">Add
                                                    Card</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- change this -->

                                </div>
                                <a href="#" class="shop-btn bank-btn" onclick="modalAction('.bank')">Add Bank</a>

                                <!-- bank-modal -->
                                <div class="modal-wrapper bank">
                                    <div onclick="modalAction('.bank')" class="anywhere-away"></div>

                                    <!-- change this -->
                                    <div class="login-section account-section modal-main">
                                        <div class="review-form">
                                            <div class="review-content">
                                                <h5 class="comment-title">Add Bank Account</h5>
                                                <div class="close-btn">
                                                    <img src="./assets/images/homepage-one/close-btn.png"
                                                        onclick="modalAction('.bank')" alt="close-btn">
                                                </div>
                                            </div>
                                            <div class="review-form-name address-form">
                                                <label for="accountnumber" class="form-label">Account
                                                    Number*</label>
                                                <input type="number" id="accountnumber" class="form-control"
                                                    placeholder="*** *** ***">
                                            </div>
                                            <div class="review-form-name address-form">
                                                <label for="accountholdername" class="form-label">Card Holder
                                                    Name*</label>
                                                <input type="text" id="accountholdername" class="form-control"
                                                    placeholder="Demo Name">
                                            </div>
                                            <div class=" account-inner-form">
                                                <div class="review-form-name">
                                                    <label for="branchname" class="form-label">Branch*</label>
                                                    <input type="text" id="branchname" class="form-control"
                                                        placeholder="Demo Branch">
                                                </div>
                                                <div class="review-form-name">
                                                    <label for="ipscode" class="form-label">IPSC Code</label>
                                                    <input type="number" id="ipscode" class="form-control"
                                                        placeholder="21232">
                                                </div>
                                            </div>
                                            <div class="login-btn text-center">
                                                <a href="#" onclick="modalAction('.bank')" class="shop-btn">Add Bank
                                                    Account</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- change this -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-order" role="tabpanel"
                        aria-labelledby="v-pills-order-tab" tabindex="0">
                        <div class="cart-section">
                            <table>
                                <tbody>
                                    <tr class="table-row table-top-row">
                                        <td class="table-wrapper wrapper-product">
                                            <h5 class="table-heading">PRODUCT</h5>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <h5 class="table-heading">PRICE</h5>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <h5 class="table-heading">QUANTITY</h5>
                                            </div>
                                        </td>
                                        <td class="table-wrapper wrapper-total">
                                            <div class="table-wrapper-center">
                                                <h5 class="table-heading">TOTAL</h5>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <h5 class="table-heading">ACTION</h5>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-row ticket-row">
                                        <td class="table-wrapper wrapper-product">
                                            <div class="wrapper">
                                                <div class="wrapper-img">
                                                    <img src="./assets/images/homepage-one/product-img/product-img-1.webp"
                                                        alt="img">
                                                </div>
                                                <div class="wrapper-content">
                                                    <h5 class="heading">Classic Design Skart</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <h5 class="heading">$20.00</h5>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <div class="quantity">
                                                    <span class="minus">
                                                        -
                                                    </span>
                                                    <span class="number">1</span>
                                                    <span class="plus">
                                                        +
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-wrapper wrapper-total">
                                            <div class="table-wrapper-center">
                                                <h5 class="heading">$40.00</h5>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <span>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                            fill="#AAAAAA"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-row ticket-row">
                                        <td class="table-wrapper wrapper-product">
                                            <div class="wrapper">
                                                <div class="wrapper-img">
                                                    <img src="./assets/images/homepage-one/product-img/product-img-2.webp"
                                                        alt="img">
                                                </div>
                                                <div class="wrapper-content">
                                                    <h5 class="heading">Classic Black Suit</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <h5 class="heading">$20.00</h5>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <div class="quantity">
                                                    <span class="minus">
                                                        -
                                                    </span>
                                                    <span class="number">1</span>
                                                    <span class="plus">
                                                        +
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-wrapper wrapper-total">
                                            <div class="table-wrapper-center">
                                                <h5 class="heading">$40.00</h5>
                                            </div>
                                        </td>
                                        <td class="table-wrapper ">
                                            <div class="table-wrapper-center">
                                                <span>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                            fill="#AAAAAA"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-row ticket-row">
                                        <td class="table-wrapper wrapper-product">
                                            <div class="wrapper">
                                                <div class="wrapper-img">
                                                    <img src="./assets/images/homepage-one/product-img/product-img-3.webp"
                                                        alt="img">
                                                </div>
                                                <div class="wrapper-content">
                                                    <h5 class="heading">Blue Party Dress</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <h5 class="heading">$20.00</h5>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <div class="quantity">
                                                    <span class="minus">
                                                        -
                                                    </span>
                                                    <span class="number">1</span>
                                                    <span class="plus">
                                                        +
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-wrapper wrapper-total">
                                            <div class="table-wrapper-center">
                                                <h5 class="heading">$40.00</h5>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <span>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                            fill="#AAAAAA"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-row ticket-row">
                                        <td class="table-wrapper wrapper-product">
                                            <div class="wrapper">
                                                <div class="wrapper-img">
                                                    <img src="./assets/images/homepage-one/product-img/product-img-4.webp"
                                                        alt="img">
                                                </div>
                                                <div class="wrapper-content">
                                                    <h5 class="heading">Classic Party Dress</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <h5 class="heading">$20.00</h5>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <div class="quantity">
                                                    <span class="minus">
                                                        -
                                                    </span>
                                                    <span class="number">1</span>
                                                    <span class="plus">
                                                        +
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-wrapper wrapper-total">
                                            <div class="table-wrapper-center">
                                                <h5 class="heading">$40.00</h5>
                                            </div>
                                        </td>
                                        <td class="table-wrapper">
                                            <div class="table-wrapper-center">
                                                <span>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                            fill="#AAAAAA"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel"
                        aria-labelledby="v-pills-wishlist-tab" tabindex="0">

                        <div class="wishlist">
                            <div class="cart-content">
                                <h5 class="cart-heading">SpaceRace</h5>
                                <p>Order ID: <span class="inner-text">#4345</span></p>
                            </div>
                            <div class="cart-section wishlist-section">
                                <table>
                                    <tbody>
                                        <tr class="table-row table-top-row">
                                            <td class="table-wrapper wrapper-product">
                                                <h5 class="table-heading">PRODUCT</h5>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="table-heading">PRICE</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="table-heading">ACTION</h5>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper wrapper-product">
                                                <div class="wrapper">
                                                    <div class="wrapper-img">
                                                        <img src="./assets/images/homepage-one/product-img/product-img-1.webp"
                                                            alt="img">
                                                    </div>
                                                    <div class="wrapper-content">
                                                        <h5 class="heading">Classic Design Skart</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$20.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper wrapper-product">
                                                <div class="wrapper">
                                                    <div class="wrapper-img">
                                                        <img src="./assets/images/homepage-one/product-img/product-img-2.webp"
                                                            alt="img">
                                                    </div>
                                                    <div class="wrapper-content">
                                                        <h5 class="heading">Classic Black Suit</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$20.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper ">
                                                <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper wrapper-product">
                                                <div class="wrapper">
                                                    <div class="wrapper-img">
                                                        <img src="./assets/images/homepage-one/product-img/product-img-3.webp"
                                                            alt="img">
                                                    </div>
                                                    <div class="wrapper-content">
                                                        <h5 class="heading">Blue Party Dress</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$20.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper wrapper-product">
                                                <div class="wrapper">
                                                    <div class="wrapper-img">
                                                        <img src="./assets/images/homepage-one/product-img/product-img-4.webp"
                                                            alt="img">
                                                    </div>
                                                    <div class="wrapper-content">
                                                        <h5 class="heading">Classic Party Dress</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$20.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="wishlist-btn">
                                <a href="#" class="clean-btn">Clean Wishlist</a>
                                <a href="#" class="shop-btn">View Cards</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-address" role="tabpanel"
                        aria-labelledby="v-pills-address-tab" tabindex="0">
                        <div class="profile-section address-section addresses ">
                            <div class="row gy-md-0 g-5">
                                <div class="col-md-6">
                                    <div class="seller-info">
                                        <h5 class="heading">Address-01</h5>
                                        <div class="info-list">
                                            <div class="info-title">
                                                <p>Name:</p>
                                                <p>Email:</p>
                                                <p>Phone:</p>
                                                <p>City:</p>
                                                <p>Zip:</p>
                                            </div>
                                            <div class="info-details">
                                                <p>Sajjad</p>
                                                <p>demoemail@gmail.com</p>
                                                <p>023 434 54354</p>
                                                <p>Haydarabad, Rord 34</p>
                                                <p>3454</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="seller-info">
                                        <h5 class="heading">Address-02</h5>
                                        <div class="info-list">
                                            <div class="info-title">
                                                <p>Name:</p>
                                                <p>Email:</p>
                                                <p>Phone:</p>
                                                <p>City:</p>
                                                <p>Zip:</p>
                                            </div>
                                            <div class="info-details">
                                                <p>Sajjad</p>
                                                <p>demoemail@gmail.com</p>
                                                <p>023 434 54354</p>
                                                <p>Haydarabad, Rord 34</p>
                                                <p>3454</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#" class="shop-btn" onclick="modalAction('.submit')">Add New
                                        Address</a>
                                    <!-- modal -->
                                    <div class="modal-wrapper submit">
                                        <div onclick="modalAction('.submit')" class="anywhere-away"></div>

                                        <!-- change this -->
                                        <div class="login-section account-section modal-main">
                                            <div class="review-form">
                                                <div class="review-content">
                                                    <h5 class="comment-title">Add Your Address</h5>
                                                    <div class="close-btn">
                                                        <img src="./assets/images/homepage-one/close-btn.png"
                                                            onclick="modalAction('.submit')" alt="close-btn">
                                                    </div>
                                                </div>
                                                <div class=" account-inner-form">
                                                    <div class="review-form-name">
                                                        <label for="firstname" class="form-label">First
                                                            Name*</label>
                                                        <input type="text" id="firstname" class="form-control"
                                                            placeholder="First Name">
                                                    </div>
                                                    <div class="review-form-name">
                                                        <label for="lastname" class="form-label">Last Name*</label>
                                                        <input type="text" id="lastname" class="form-control"
                                                            placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class=" account-inner-form">
                                                    <div class="review-form-name">
                                                        <label for="useremail" class="form-label">Email*</label>
                                                        <input type="email" id="useremail" class="form-control"
                                                            placeholder="user@gmail.com">
                                                    </div>
                                                    <div class="review-form-name">
                                                        <label for="userphone" class="form-label">Phone*</label>
                                                        <input type="tel" id="userphone" class="form-control"
                                                            placeholder="+880388**0899">
                                                    </div>
                                                </div>
                                                <div class="review-form-name address-form">
                                                    <label for="useraddress" class="form-label">Address*</label>
                                                    <input type="text" id="useraddress" class="form-control"
                                                        placeholder="Enter your Address">
                                                </div>
                                                <div class=" account-inner-form city-inner-form">
                                                    <div class="review-form-name">
                                                        <label for="usercity" class="form-label">Town /
                                                            City*</label>
                                                        <select id="usercity" class="form-select">
                                                            <option>Choose...</option>
                                                            <option>Newyork</option>
                                                            <option>Dhaka</option>
                                                            <option selected>London</option>
                                                        </select>
                                                    </div>
                                                    <div class="review-form-name">
                                                        <label for="usernumber" class="form-label">Postcode /
                                                            ZIP*</label>
                                                        <input type="number" id="usernumber" class="form-control"
                                                            placeholder="0000">
                                                    </div>
                                                </div>
                                                <div class="login-btn text-center">
                                                    <a href="#" onclick="modalAction('.submit')"
                                                        class="shop-btn">Add Address</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- change this -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-review" role="tabpanel"
                        aria-labelledby="v-pills-review-tab" tabindex="0">

                        <div class="top-selling-section">
                            <div class="row g-5">
                                <div class="col-md-6">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <img src="./assets/images/homepage-one/product-img/product-img-5.webp"
                                                alt="product-img">
                                        </div>
                                        <div class="product-info">
                                            <div class="review-date">
                                                <p>July 22, 2022</p>
                                            </div>
                                            <div class="ratings">
                                                <span>
                                                    <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                            fill="#FFA800" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="product-description">
                                                <a href="product-sidebar.html" class="product-details">Rainbow
                                                    Sequin Dress
                                                </a>
                                                <p>Didn't I tell you not put your phone on charge because weekend?
                                                </p>
                                            </div>
                                        </div>
                                        <div class="product-cart-btn">
                                            <a href="cart.html" class="product-btn">Edit Review</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <img src="./assets/images/homepage-one/product-img/product-img-6.webp"
                                                alt="product-img">
                                        </div>
                                        <div class="product-info">
                                            <div class="review-date">
                                                <p>July 22, 2022</p>
                                            </div>
                                            <div class="ratings">
                                                <span>
                                                    <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                            fill="#FFA800" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="product-description">
                                                <a href="product-sidebar.html" class="product-details">Rainbow
                                                    Sequin Dress
                                                </a>
                                                <p>Didn't I tell you not put your phone on charge because weekend?
                                                </p>
                                            </div>
                                        </div>
                                        <div class="product-cart-btn">
                                            <a href="cart.html" class="product-btn">Edit Review</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <img src="./assets/images/homepage-one/product-img/product-img-7.webp"
                                                alt="product-img">
                                        </div>
                                        <div class="product-info">
                                            <div class="review-date">
                                                <p>July 22, 2022</p>
                                            </div>
                                            <div class="ratings">
                                                <span>
                                                    <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                            fill="#FFA800" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="product-description">
                                                <a href="product-sidebar.html" class="product-details">Rainbow
                                                    Sequin Dress
                                                </a>
                                                <p>Didn't I tell you not put your phone on charge because weekend?
                                                </p>
                                            </div>
                                        </div>
                                        <div class="product-cart-btn">
                                            <a href="cart.html" class="product-btn">Edit Review</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <img src="./assets/images/homepage-one/product-img/product-img-8.webp"
                                                alt="product-img">
                                        </div>
                                        <div class="product-info">
                                            <div class="review-date">
                                                <p>July 22, 2022</p>
                                            </div>
                                            <div class="ratings">
                                                <span>
                                                    <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                            fill="#FFA800" />
                                                        <path
                                                            d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                            fill="#FFA800" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="product-description">
                                                <a href="product-sidebar.html" class="product-details">Rainbow
                                                    Sequin Dress
                                                </a>
                                                <p>Didn't I tell you not put your phone on charge because weekend?
                                                </p>
                                            </div>
                                        </div>
                                        <div class="product-cart-btn">
                                            <a href="cart.html" class="product-btn">Edit Review</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="v-pills-ticket" role="tabpanel"
                        aria-labelledby="v-pills-ticket-tab" tabindex="0">
                        <div class="support-ticket">
                            <a href="#" class="shop-btn" onclick="modalAction('.ticket')">Add New Support</a>

                            <!-- ticket-modal -->
                            <div class="modal-wrapper ticket">
                                <div onclick="modalAction('.ticket')" class="anywhere-away"></div>

                                <!-- change this -->
                                <div class="login-section account-section modal-main">
                                    <div class="review-form">
                                        <div class="review-content">
                                            <h5 class="comment-title">Add New Ticket</h5>
                                            <div class="close-btn">
                                                <img src="./assets/images/homepage-one/close-btn.png"
                                                    onclick="modalAction('.ticket')" alt="close-btn">
                                            </div>
                                        </div>
                                        <div class="review-form-name address-form">
                                            <label for="ticket" class="form-label">First Name*</label>
                                            <input type="text" id="ticket" class="form-control" placeholder="Name">
                                        </div>
                                        <div class=" account-inner-form">
                                            <div class="review-form-name">
                                                <label for="ticketaddress" class="form-label">Email Address*</label>
                                                <input type="email" id="ticketaddress" class="form-control"
                                                    placeholder="email@gmail.com">
                                            </div>
                                            <div class="review-form-name">
                                                <label for="ticketphone" class="form-label">Phone Number*</label>
                                                <input type="tel" id="ticketphone" class="form-control"
                                                    placeholder="******">
                                            </div>
                                        </div>
                                        <div class="review-form-name address-form">
                                            <label for="ticketmassage" class="form-label">Description*</label>
                                            <textarea name="ticketmassage" id="ticketmassage" cols="10" rows="3"
                                                class="form-control"
                                                placeholder="Write Here your Description"></textarea>
                                        </div>
                                        <div class="login-btn text-center">
                                            <a href="#" onclick="modalAction('.ticket')" class="shop-btn">Add Ticekt
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- change this -->

                            </div>
                            <div class="ticket-section">
                                <table>
                                    <tbody>
                                        <tr class="table-row table-top-row">
                                            <td class="table-wrapper">
                                                <h5 class="table-heading">NO</h5>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="table-heading">TIME</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="table-heading">REPORT</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="table-heading">ACTION</h5>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper">
                                                <p class="ticker-number">#354</p>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-date">11th Oct, 2023</p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-info">Printing and typesetting industry
                                                        standard <span class="inner-text">dummy text ever
                                                            since</span></p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center table-wrapper-img">
                                                    <div class="comment-img">
                                                        <span>
                                                            <svg width="18" height="17" viewBox="0 0 18 17"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="delete-img">
                                                        <span>
                                                            <svg width="16" height="19" viewBox="0 0 16 19"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z" />
                                                                <path
                                                                    d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                    fill="#EB5757" />
                                                            </svg>

                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper">
                                                <p class="ticker-number">#355</p>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-date">11th Oct, 2023</p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-info">Printing and typesetting industry
                                                        standard <span class="inner-text">dummy text ever
                                                            since</span></p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center table-wrapper-img">
                                                    <div class="comment-img">
                                                        <span>
                                                            <svg width="18" height="17" viewBox="0 0 18 17"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                    fill="#27AE60" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="delete-img">
                                                        <span>
                                                            <svg width="16" height="19" viewBox="0 0 16 19"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                    fill="#EB5757" />
                                                                <path
                                                                    d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                    fill="#EB5757" />
                                                            </svg>

                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper">
                                                <p class="ticker-number">#356</p>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-date">11th Oct, 2023</p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-info">Printing and typesetting industry
                                                        standard <span class="inner-text">dummy text ever
                                                            since</span></p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center table-wrapper-img">
                                                    <div class="comment-img">
                                                        <span>
                                                            <svg width="18" height="17" viewBox="0 0 18 17"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                    fill="#27AE60" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="delete-img">
                                                        <span>
                                                            <svg width="16" height="19" viewBox="0 0 16 19"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                    fill="#EB5757" />
                                                                <path
                                                                    d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                    fill="#EB5757" />
                                                            </svg>

                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper">
                                                <p class="ticker-number">#357</p>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-date">11th Oct, 2023</p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-info">Printing and typesetting industry
                                                        standard <span class="inner-text">dummy text ever
                                                            since</span></p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center table-wrapper-img">
                                                    <div class="comment-img">
                                                        <span>
                                                            <svg width="18" height="17" viewBox="0 0 18 17"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                    fill="#27AE60" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="delete-img">
                                                        <span>
                                                            <svg width="16" height="19" viewBox="0 0 16 19"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                    fill="#EB5757" />
                                                                <path
                                                                    d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                    fill="#EB5757" />
                                                            </svg>

                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper">
                                                <p class="ticker-number">#358</p>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-date">11th Oct, 2023</p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-info">Printing and typesetting industry
                                                        standard <span class="inner-text">dummy text ever
                                                            since</span></p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center table-wrapper-img">
                                                    <div class="comment-img">
                                                        <span>
                                                            <svg width="18" height="17" viewBox="0 0 18 17"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                    fill="#27AE60" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="delete-img">
                                                        <span>
                                                            <svg width="16" height="19" viewBox="0 0 16 19"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                    fill="#EB5757" />
                                                                <path
                                                                    d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                    fill="#EB5757" />
                                                            </svg>

                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper">
                                                <p class="ticker-number">#359</p>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-date">11th Oct, 2023</p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-info">Printing and typesetting industry
                                                        standard <span class="inner-text">dummy text ever
                                                            since</span></p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center table-wrapper-img">
                                                    <div class="comment-img">
                                                        <span>
                                                            <svg width="18" height="17" viewBox="0 0 18 17"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                    fill="#27AE60" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="delete-img">
                                                        <span>
                                                            <svg width="16" height="19" viewBox="0 0 16 19"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                    fill="#EB5757" />
                                                                <path
                                                                    d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                    fill="#EB5757" />
                                                            </svg>

                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper">
                                                <p class="ticker-number">#360</p>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-date">11th Oct, 2023</p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <p class="ticket-info">Printing and typesetting industry
                                                        standard <span class="inner-text">dummy text ever
                                                            since</span></p>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center table-wrapper-img">
                                                    <div class="comment-img">
                                                        <span>
                                                            <svg width="18" height="17" viewBox="0 0 18 17"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                    fill="#27AE60" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="delete-img">
                                                        <span>
                                                            <svg width="16" height="19" viewBox="0 0 16 19"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                    fill="#EB5757" />
                                                                <path
                                                                    d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                    fill="#EB5757" />
                                                            </svg>

                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--------------- user-profile-section-end --------------->
@endsection
