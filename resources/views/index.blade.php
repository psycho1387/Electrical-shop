<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>قالب Stroyka</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('../css/all.css', false) }}">
    <!-- <link rel="stylesheet" href="vendor/bootstrap-4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/lightgallery-1.6.12/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css"> -->
    <!-- js -->
    <script src="{{ asset('../js/all.js', false) }}"></script>
    <!-- <script src="vendor/jquery-3.3.1/jquery.min.js"></script>
    <script src="vendor/bootstrap-4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <script src="vendor/nouislider-12.1.0/nouislider.min.js"></script>
    <script src="vendor/lightgallery-1.6.12/js/lightgallery.min.js"></script>
    <script src="vendor/lightgallery-1.6.12/js/lg-thumbnail.min.js"></script>
    <script src="vendor/lightgallery-1.6.12/js/lg-zoom.min.js"></script>
    <script src="js/number.js"></script>
    <script src="js/main.js"></script>
    <script src="vendor/svg4everybody-2.1.9/svg4everybody.min.js"></script> -->
    <script>
        svg4everybody();
    </script>
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="../fonts/fontawesome-5.6.3/css/all.min.css">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="../fonts/stroyka/stroyka.css">
    <link rel="stylesheet" href="../css/font/primary-iran-yekan.css">
</head>

<body>
    <!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div>
    <!-- quickview-modal / end -->
    <!-- mobilemenu -->
    <div class="mobilemenu">
        <div class="mobilemenu__backdrop"></div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__header">
                <div class="mobilemenu__title">منو</div>
                <button type="button" class="mobilemenu__close">
                    <svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#cross-20"></use>
                    </svg>
                </button>
            </div>
            <div class="mobilemenu__content">
                <ul class="mobile-links mobile-links--level--0" data-collapse
                    data-collapse-opened-class="mobile-links__item--open">
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title"><a href="index.html"
                                class="mobile-links__item-link">خانه</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="index.html"
                                            class="mobile-links__item-link">خانه 1</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="index-2.html"
                                            class="mobile-links__item-link">خانه 2</a></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title"><a href="" class="mobile-links__item-link">دسته
                                ها</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href=""
                                            class="mobile-links__item-link">ابزار برقی</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href=""
                                                        class="mobile-links__item-link">نگارندگان</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href=""
                                                        class="mobile-links__item-link">آچار ها</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href=""
                                                        class="mobile-links__item-link">دیوار شکن</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href=""
                                                        class="mobile-links__item-link">ابزار پنوماتیک</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href=""
                                            class="mobile-links__item-link">ابزار ماشینی</a>
                                        <button class="mobile-links__item-toggle" type="button"
                                            data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href=""
                                                        class="mobile-links__item-link">ابزار برش</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href=""
                                                        class="mobile-links__item-link">دمنده</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href=""
                                                        class="mobile-links__item-link">ماشین های تیز کننده</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href=""
                                                        class="mobile-links__item-link">لوله بر</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href=""
                                                        class="mobile-links__item-link">شکافنده</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href=""
                                                        class="mobile-links__item-link">ماشین آلات</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title"><a href="shop-grid-3-columns-sidebar.html"
                                class="mobile-links__item-link">فروشگاه</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="shop-grid-3-columns-sidebar.html"
                                            class="mobile-links__item-link">فروشگاه توری</a>
                                        <button class="mobile-links__item-toggle" type="button"
                                            data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a
                                                        href="shop-grid-3-columns-sidebar.html"
                                                        class="mobile-links__item-link">3 ستون با نوار کناری</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a
                                                        href="shop-grid-4-columns-full.html"
                                                        class="mobile-links__item-link">4 ستون تمام عرض</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a
                                                        href="shop-grid-5-columns-full.html"
                                                        class="mobile-links__item-link">5 ستون تمام عرض</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="shop-list.html"
                                            class="mobile-links__item-link">فروشگاه لیست</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="shop-left-sidebar.html"
                                            class="mobile-links__item-link">فروشگاه نوار کناری چپ</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="product.html"
                                            class="mobile-links__item-link">محصول</a>
                                        <button class="mobile-links__item-toggle" type="button"
                                            data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href="product.html"
                                                        class="mobile-links__item-link">محصول</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href="product-alt.html"
                                                        class="mobile-links__item-link">محصول طرح 2</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href="product-sidebar.html"
                                                        class="mobile-links__item-link">محصول با نوار کناری</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="cart.html"
                                            class="mobile-links__item-link">سبد خرید</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="cart-empty.html"
                                            class="mobile-links__item-link">سبد خرید خالی</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="checkout.html"
                                            class="mobile-links__item-link">پرداخت</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="wishlist.html"
                                            class="mobile-links__item-link">لیست علاقه‌مندی‌ها</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="compare.html"
                                            class="mobile-links__item-link">مقایسه</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="track-order.html"
                                            class="mobile-links__item-link">پیگیری سفارش</a></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title"><a href="account-login.html"
                                class="mobile-links__item-link">حساب کاربری</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="account-login.html"
                                            class="mobile-links__item-link">ورود</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="account-dashboard.html"
                                            class="mobile-links__item-link">داشبورد</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="account-profile.html"
                                            class="mobile-links__item-link">ویرایش پروفایل</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="account-orders.html"
                                            class="mobile-links__item-link">سابقه خرید</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="account-addresses.html"
                                            class="mobile-links__item-link">دفتر آدرس</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="account-password.html"
                                            class="mobile-links__item-link">تغییر رمز عبور</a></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title"><a href="blog-classic.html"
                                class="mobile-links__item-link">بلاگ</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="blog-classic.html"
                                            class="mobile-links__item-link">بلاگ کلاسیک</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="blog-grid.html"
                                            class="mobile-links__item-link">بلاگ توری</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="blog-list.html"
                                            class="mobile-links__item-link">بلاگ لیست</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="blog-right-sidebar.html"
                                            class="mobile-links__item-link">بلاگ نوار کناری راست</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="post.html"
                                            class="mobile-links__item-link">صفحه مطلب بلاگ</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="post-without-sidebar.html"
                                            class="mobile-links__item-link">مطلب بدون نوار کناری</a></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title"><a href=""
                                class="mobile-links__item-link">صفحات</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="about-us.html"
                                            class="mobile-links__item-link">درباره ما</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="contact-us.html"
                                            class="mobile-links__item-link">تماس با ما</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="contact-us-alt.html"
                                            class="mobile-links__item-link">تماس با ما طرح 2</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="404.html"
                                            class="mobile-links__item-link">404</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="terms-and-conditions.html"
                                            class="mobile-links__item-link">قوانین و مقررات</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="faq.html"
                                            class="mobile-links__item-link">سوالات متداول</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="components.html"
                                            class="mobile-links__item-link">اجزاء</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="typography.html"
                                            class="mobile-links__item-link">تایپوگرافی</a></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title"><a data-collapse-trigger
                                class="mobile-links__item-link">واحد پول</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href=""
                                            class="mobile-links__item-link">€
                                            یورو</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href=""
                                            class="mobile-links__item-link">£
                                            پوند</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href=""
                                            class="mobile-links__item-link">$
                                            دلار آمریکا</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href=""
                                            class="mobile-links__item-link">₽
                                            روبل روسیه</a></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title"><a data-collapse-trigger
                                class="mobile-links__item-link">زبان</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href=""
                                            class="mobile-links__item-link">انگلیسی</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href=""
                                            class="mobile-links__item-link">فرانسوی</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href=""
                                            class="mobile-links__item-link">آلمانی</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href=""
                                            class="mobile-links__item-link">روسی</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href=""
                                            class="mobile-links__item-link">ایتالیایی</a></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- mobilemenu / end -->
    <!-- site -->
    <div class="site">
        <!-- mobile site__header -->
        <header class="site__header d-lg-none">
            <div class="mobile-header mobile-header--sticky mobile-header--stuck">
                <div class="mobile-header__panel">
                    <div class="container">
                        <div class="mobile-header__body">
                            <button class="mobile-header__menu-button">
                                <svg width="18px" height="14px">
                                    <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                </svg>
                            </button>
                            <a class="mobile-header__logo" href="index.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120px" height="20px">
                                    <path
                                        d="M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3
                                 l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4
                                 h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8
                                 C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5
                                 c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3
                                 L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6
                                 S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3
                                 c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z
                                  M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13
                                 C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7
                                 c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9
                                 c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7
                                 C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9
                                 c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6
                                 z">
                                    </path>
                                </svg>
                            </a>
                            <div class="mobile-header__search">
                                <form class="mobile-header__search-form" action="">
                                    <input class="mobile-header__search-input" name="search"
                                        placeholder="جستجو از میان 10,000 محصول" aria-label="Site search"
                                        type="text" autocomplete="off">
                                    <button class="mobile-header__search-button mobile-header__search-button--submit"
                                        type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#search-20"></use>
                                        </svg>
                                    </button>
                                    <button class="mobile-header__search-button mobile-header__search-button--close"
                                        type="button">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#cross-20"></use>
                                        </svg>
                                    </button>
                                    <div class="mobile-header__search-body"></div>
                                </form>
                            </div>
                            <div class="mobile-header__indicators">
                                <div class="indicator indicator--mobile-search indicator--mobile d-sm-none">
                                    <button class="indicator__button"><span class="indicator__area"><svg
                                                width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                            </svg></span></button>
                                </div>
                                <div class="indicator indicator--mobile d-sm-flex d-none"><a href="wishlist.html"
                                        class="indicator__button"><span class="indicator__area"><svg width="20px"
                                                height="20px">
                                                <use xlink:href="images/sprite.svg#heart-20"></use>
                                            </svg> <span class="indicator__value">0</span></span></a></div>
                                <div class="indicator indicator--mobile"><a href="cart.html"
                                        class="indicator__button"><span class="indicator__area"><svg width="20px"
                                                height="20px">
                                                <use xlink:href="images/sprite.svg#cart-20"></use>
                                            </svg> <span class="indicator__value">3</span></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile site__header / end -->
        <!-- desktop site__header -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <!-- .topbar -->
                <div class="site-header__topbar topbar">
                    <div class="topbar__container container">
                        <div class="topbar__row">
                            <div class="topbar__item topbar__item--link"><a class="topbar-link"
                                    href="about-us.html">درباره ما</a></div>
                            <div class="topbar__item topbar__item--link"><a class="topbar-link"
                                    href="contact-us.html">تماس</a></div>
                            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="">مکان
                                    فروشگاه</a>
                            </div>
                            <div class="topbar__item topbar__item--link"><a class="topbar-link"
                                    href="track-order.html">پیگیری سفارش</a></div>
                            <div class="topbar__item topbar__item--link"><a class="topbar-link"
                                    href="blog-classic.html">بلاگ</a></div>
                            <div class="topbar__spring"></div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">حساب کاربری
                                        <svg width="7px" height="5px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                        </svg>
                                    </button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <ul class="menu menu--layout--topbar">
                                            <li><a href="account-dashboard.html">داشبورد</a></li>
                                            <li><a href="account-profile.html">ویرایش پروفایل</a></li>
                                            <li><a href="account-orders.html">سابقه خرید</a></li>
                                            <li><a href="account-addresses.html">آدرس ها</a></li>
                                            <li><a href="account-password.html">رمز عبور</a></li>
                                            <li><a href="account-login.html">خروج</a></li>
                                        </ul>
                                        <!-- .menu / end -->
                                    </div>
                                </div>
                            </div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">واحد پول: <span
                                            class="topbar__item-value">تومان</span>
                                        <svg width="7px" height="5px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                        </svg>
                                    </button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <ul class="menu menu--layout--topbar">
                                            <li><a href="">€ یورو</a></li>
                                            <li><a href="">£ پوند</a></li>
                                            <li><a href="">$ دلار آمریکا</a></li>
                                            <li><a href="">₽ روبل روسیه</a></li>
                                        </ul>
                                        <!-- .menu / end -->
                                    </div>
                                </div>
                            </div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">زبان: <span
                                            class="topbar__item-value">فارسی</span>
                                        <svg width="7px" height="5px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                        </svg>
                                    </button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <ul class="menu menu--layout--topbar menu--with-icons">
                                            <li>
                                                <a href="">
                                                    <div class="menu__icon"><img
                                                            srcset="images/languages/language-1.png, images/languages/language-1@2x.png 2x"
                                                            src="images/languages/language-1.png" alt="">
                                                    </div>انگلیسی
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <div class="menu__icon"><img
                                                            srcset="images/languages/language-2.png, images/languages/language-2@2x.png 2x"
                                                            src="images/languages/language-2.png" alt="">
                                                    </div>فرانسوی
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <div class="menu__icon"><img
                                                            srcset="images/languages/language-3.png, images/languages/language-3@2x.png 2x"
                                                            src="images/languages/language-3.png" alt="">
                                                    </div>آلمانی
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <div class="menu__icon"><img
                                                            srcset="images/languages/language-4.png, images/languages/language-4@2x.png 2x"
                                                            src="images/languages/language-4.png" alt="">
                                                    </div>روسی
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <div class="menu__icon"><img
                                                            srcset="images/languages/language-5.png, images/languages/language-5@2x.png 2x"
                                                            src="images/languages/language-5.png" alt="">
                                                    </div>ایتالیایی
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- .menu / end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .topbar / end -->
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <a href="index.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="196px" height="26px">
                                <path
                                    d="M194.797,18 L184,18 C184,18.552 183.552,19 183,19 L182,19 C181.448,19 181,18.552 181,18 L181,16 L178.377,16 C177.708,16 177.119,15.556 176.935,14.912 L173.246,2 L168,2 L168,4 L168.500,4 C169.328,4 170,4.672 170,5.500 L170,24.500 C170,25.328 169.328,26 168.500,26 L165.500,26 C164.672,26 164,25.328 164,24.500 L164,5.500 C164,4.672 164.672,4 165.500,4 L166,4 L166,1.500 C166,0.672 166.672,0 167.500,0 L173.622,0 C174.292,0 174.881,0.444 175.065,1.088 L178.754,14 L181,14 L181,13 C181,12.448 181.448,12 182,12 L183,12 C183.552,12 184,12.448 184,13 L194.797,13 C195.461,13 196,13.539 196,14.203 L196,16.797 C196,17.461 195.461,18 194.797,18 ZM156.783,26 L154.483,26 C153.767,26 153.129,25.552 152.884,24.878 L150.437,18.135 C150.407,18.054 150.331,18 150.245,18 L142.768,18 C142.682,18 142.606,18.054 142.576,18.135 L140.129,24.878 C139.884,25.552 139.245,26 138.530,26 L136.230,26 C135.395,26 134.815,25.169 135.100,24.383 L143.445,1.122 C143.690,0.448 144.328,0 145.044,0 L147.969,0 C148.685,0 149.323,0.448 149.568,1.122 L157.913,24.383 C158.198,25.169 157.618,26 156.783,26 ZM148.472,12.725 L146.698,7.848 C146.633,7.668 146.380,7.668 146.315,7.848 L144.541,12.725 C144.492,12.859 144.591,13 144.733,13 L148.280,13 C148.422,13 148.521,12.859 148.472,12.725 ZM130.493,26 L128.090,26 C127.555,26 127.060,25.714 126.792,25.250 L122.610,18 L120.003,22.520 L120.003,24.500 C120.003,25.328 119.333,26 118.505,26 L116.507,26 C115.680,26 115.009,25.328 115.009,24.500 L115.009,1.500 C115.009,0.672 115.680,0 116.507,0 L118.505,0 C119.333,0 120.003,0.672 120.003,1.500 L120.003,12.520 L126.792,0.750 C127.060,0.286 127.555,0 128.090,0 L130.493,0 C131.646,0 132.367,1.250 131.791,2.250 L125.487,13 L131.791,23.750 C132.367,24.750 131.646,26 130.493,26 ZM103.987,15.775 L103.987,24.500 C103.987,25.328 103.315,26 102.486,26 L100.485,26 C99.656,26 98.984,25.328 98.984,24.500 L98.984,15.775 L98.594,15.100 L91.180,2.250 C90.610,1.250 91.330,0 92.481,0 L94.792,0 C95.322,0 95.823,0.290 96.093,0.750 L101.486,10.090 L106.879,0.750 C107.149,0.290 107.649,0 108.179,0 L110.491,0 C111.641,0 112.362,1.250 111.791,2.250 L103.987,15.775 ZM79,26 C71.821,26 66,20.179 66,13 C66,5.820 71.821,-0.001 79,-0.001 C86.180,-0.001 92.001,5.820 92.001,13 C92.001,20.179 86.180,26 79,26 ZM79,5 C74.582,5 71,8.582 71,13 C71,17.418 74.582,21 79,21 C83.418,21 87,17.418 87,13 C87,8.582 83.418,5 79,5 ZM62.793,23.750 C63.362,24.750 62.643,26 61.494,26 L59.186,26 C58.656,26 58.157,25.710 57.887,25.250 L53.711,18 L49.005,18 L49.005,24.500 C49.005,25.330 48.335,26 47.506,26 L45.508,26 C44.679,26 44.009,25.330 44.009,24.500 L44.009,1.500 C44.009,0.670 44.679,0 45.508,0 L54,0 C58.966,0 62.992,4.030 62.992,9 C62.992,12.240 61.274,15.090 58.706,16.670 L62.793,23.750 ZM54,5 L50.004,5 C49.454,5 49.005,5.450 49.005,6 L49.005,12 C49.005,12.550 49.454,13 50.004,13 L54,13 C56.208,13 57.997,11.210 57.997,9 C57.997,6.790 56.208,5 54,5 ZM39.500,5 L33,5 L33,24.500 C33,25.328 32.328,26 31.500,26 L29.500,26 C28.672,26 28,25.328 28,24.500 L28,5 L21.500,5 C20.672,5 20,4.328 20,3.500 L20,1.500 C20,0.672 20.672,0 21.500,0 L39.500,0 C40.328,0 41,0.672 41,1.500 L41,3.500 C41,4.328 40.328,5 39.500,5 ZM16.487,8 L14.181,8 C13.565,8 13.040,7.611 12.790,7.048 C12.261,5.856 10.765,5 9,5 C6.793,5 5.005,6.340 5.005,8 C5.005,8.940 5.575,9.780 6.483,10.320 C6.706,10.455 6.948,10.574 7.206,10.673 C8.059,11 8.412,12.020 7.955,12.812 L6.948,14.558 C6.573,15.208 5.768,15.499 5.080,15.201 C3.872,14.679 2.815,13.924 1.989,13 C0.751,11.630 0.012,9.890 0.012,8 C0.012,3.580 4.037,0 9,0 C13.254,0 17.017,2.629 17.950,6.163 C18.196,7.095 17.450,8 16.487,8 ZM1.513,18 L3.820,18 C4.435,18 4.960,18.389 5.210,18.952 C5.739,20.144 7.236,21 9,21 C11.207,21 12.995,19.660 12.995,18 C12.995,17.060 12.426,16.220 11.517,15.680 C11.294,15.544 11.052,15.426 10.794,15.327 C9.941,14.999 9.588,13.980 10.045,13.188 L11.053,11.442 C11.427,10.792 12.233,10.501 12.920,10.799 C14.128,11.320 15.185,12.075 16.011,13 C17.249,14.370 17.988,16.110 17.988,18 C17.988,22.420 13.964,26 9,26 C4.747,26 0.983,23.371 0.050,19.837 C-0.196,18.905 0.550,18 1.513,18 Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="site-header__search">
                        <div class="search">
                            <form class="search__form" action="">
                                <input class="search__input" name="search" placeholder="جستجو از میان 10,000 محصول"
                                    aria-label="Site search" type="text" autocomplete="off">
                                <button class="search__button" type="submit">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#search-20"></use>
                                    </svg>
                                </button>
                                <div class="search__border"></div>
                            </form>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <div class="site-header__phone-title">خدمات مشتری</div>
                        <div class="site-header__phone-number"><span class="ltr_text">(800) 060-0730</span></div>
                    </div>
                </div>
                <div class="site-header__nav-panel">
                    <div class="nav-panel">
                        <div class="nav-panel__container container">
                            <div class="nav-panel__row">
                                <div class="nav-panel__departments">
                                    <!-- .departments -->
                                    <div class="departments departments--opened departments--fixed"
                                        data-departments-fixed-by=".block-slideshow">
                                        <div class="departments__body">
                                            <div class="departments__links-wrapper">
                                                <ul class="departments__links">
                                                    <li class="departments__item"><a href="">ابزار برقی <svg
                                                                class="departments__link-arrow" width="6px"
                                                                height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg></a>
                                                        <div class="departments__megamenu departments__megamenu--xl">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments"
                                                                style="background-image: url('images/megamenu/megamenu-1.jpg');">
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">ابزار برقی</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">نگارندگان</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">دریل ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">آچار ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">لوله کشی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">دیوار
                                                                                            شکن</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            پنوماتیک</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">برش فرز</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="megamenu__item"><a
                                                                                    href="">میزکار</a></li>
                                                                            <li class="megamenu__item"><a
                                                                                    href="">مطبوعات</a></li>
                                                                            <li class="megamenu__item"><a
                                                                                    href="">گردپاش</a></li>
                                                                            <li class="megamenu__item"><a
                                                                                    href="">ریدرها</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">ابزار دستی</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">پیچ گوشتی
                                                                                            ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره دستی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">چاقو ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">تبر ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            چندکاره</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            نقاشی</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">تجهیزات باغبانی</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">پمپ های
                                                                                            موتور</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره برقی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره
                                                                                            الکتریکی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">چمن زن</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">ابزار ماشینی</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            برش</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">دمنده</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ماشین های
                                                                                            تیز
                                                                                            کننده</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">لوله بر</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">شکافنده</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ماشین
                                                                                            آلات</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">ابزار</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">تجهیزات
                                                                                            جوشکاری</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            برقی</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            دستی</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار اندازه
                                                                                            گیری</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item"><a href="">ابزار دستی <svg
                                                                class="departments__link-arrow" width="6px"
                                                                height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg></a>
                                                        <div class="departments__megamenu departments__megamenu--lg">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments"
                                                                style="background-image: url('images/megamenu/megamenu-2.jpg');">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">ابزار دستی</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">پیچ گوشتی
                                                                                            ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره دستی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">چاقو ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">تبر ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            چندکاره</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            نقاشی</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">تجهیزات باغبانی</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">پمپ های
                                                                                            موتور</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره برقی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره
                                                                                            الکتریکی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">چمن زن</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">ابزار ماشینی</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            برش</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">دمنده</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ماشین های
                                                                                            تیز
                                                                                            کننده</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">لوله بر</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">شکافنده</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ماشین
                                                                                            آلات</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">ابزار</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">تجهیزات
                                                                                            جوشکاری</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            برقی</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            دستی</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار اندازه
                                                                                            گیری</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item"><a href="">ابزار ماشینی <svg
                                                                class="departments__link-arrow" width="6px"
                                                                height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg></a>
                                                        <div class="departments__megamenu departments__megamenu--nl">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments"
                                                                style="background-image: url('images/megamenu/megamenu-3.jpg');">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">ابزار دستی</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">پیچ گوشتی
                                                                                            ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره دستی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">چاقو ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">تبر ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            چندکاره</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            نقاشی</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">تجهیزات باغبانی</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">پمپ های
                                                                                            موتور</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره برقی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره
                                                                                            الکتریکی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">چمن زن</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">ابزار</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">تجهیزات
                                                                                            جوشکاری</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            برقی</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            دستی</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار اندازه
                                                                                            گیری</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item"><a href="">لوازم ساختمان <svg
                                                                class="departments__link-arrow" width="6px"
                                                                height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg></a>
                                                        <div class="departments__megamenu departments__megamenu--sm">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">ابزار دستی</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">پیچ گوشتی
                                                                                            ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره دستی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">چاقو ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">تبر ها</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            چندکاره</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">ابزار
                                                                                            نقاشی</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="">تجهیزات باغبانی</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">پمپ های
                                                                                            موتور</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره برقی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">اره
                                                                                            الکتریکی</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="">چمن زن</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item departments__item--menu"><a
                                                            href="">الکتریکی <svg
                                                                class="departments__link-arrow" width="6px"
                                                                height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg></a>
                                                        <div class="departments__menu">
                                                            <!-- .menu -->
                                                            <ul class="menu menu--layout--classic">
                                                                <li><a href="">تجهیزات لحیم کاری <svg
                                                                            class="menu__arrow" width="6px"
                                                                            height="9px">
                                                                            <use
                                                                                xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                            </use>
                                                                        </svg></a>
                                                                    <div class="menu__submenu">
                                                                        <!-- .menu -->
                                                                        <ul class="menu menu--layout--classic">
                                                                            <li><a href="">ایستگاه لحیم کاری</a>
                                                                            </li>
                                                                            <li><a href="">خشک کن لحیم کاری</a>
                                                                            </li>
                                                                            <li><a href="">آهن لحیم کاری گاز</a>
                                                                            </li>
                                                                            <li><a href="">آهن لحیم کاری
                                                                                    الکتریکی</a>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- .menu / end -->
                                                                    </div>
                                                                </li>
                                                                <li><a href="">لامپ برقی</a></li>
                                                                <li><a href="">باتری ها</a></li>
                                                                <li><a href="">وسایل نور</a></li>
                                                                <li><a href="">کف گرمایشی</a></li>
                                                                <li><a href="">ژنراتور ها</a></li>
                                                                <li><a href="">یو پی اس</a></li>
                                                            </ul>
                                                            <!-- .menu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item"><a href="">ماشین آلات
                                                            برقی</a></li>
                                                    <li class="departments__item"><a href="">اندازه گیری</a>
                                                    </li>
                                                    <li class="departments__item"><a href="">لباس کار</a></li>
                                                    <li class="departments__item"><a href="">لوله کشی</a></li>
                                                    <li class="departments__item"><a href="">ذخیره سازی و
                                                            سازماندهی</a>
                                                    </li>
                                                    <li class="departments__item"><a href="">جوشکاری و لحیم
                                                            کاری</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button class="departments__button">
                                            <svg class="departments__button-icon" width="18px" height="14px">
                                                <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                            </svg> دسته‌بندی‌ها
                                            <svg class="departments__button-arrow" width="9px" height="6px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- .departments / end -->
                                </div>
                                <!-- .nav-links -->
                                <div class="nav-panel__nav-links nav-links">
                                    <ul class="nav-links__list">
                                        <li class="nav-links__item nav-links__item--with-submenu"><a
                                                href="index.html"><span>خانه <svg class="nav-links__arrow"
                                                        width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg></span></a>
                                            <div class="nav-links__menu">
                                                <!-- .menu -->
                                                <ul class="menu menu--layout--classic">
                                                    <li><a href="index.html">خانه 1</a></li>
                                                    <li><a href="index-2.html">خانه 2</a></li>
                                                </ul>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item nav-links__item--with-submenu"><a
                                                href=""><span>مگامنو <svg class="nav-links__arrow"
                                                        width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg></span></a>
                                            <div class="nav-links__megamenu nav-links__megamenu--size--nl">
                                                <!-- .megamenu -->
                                                <div class="megamenu">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                <li
                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                    <a href="">ابزار برقی</a>
                                                                    <ul
                                                                        class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item"><a
                                                                                href="">نگارندگان</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">آچار
                                                                                ها</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">دیوار
                                                                                شکن</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">ابزار
                                                                                پنوماتیک</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li
                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                    <a href="">ابزار ماشینی</a>
                                                                    <ul
                                                                        class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item"><a
                                                                                href="">ابزار
                                                                                برش</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">دمنده</a>
                                                                        </li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">ماشین های
                                                                                تیز کننده</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">لوله
                                                                                بر</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">شکافنده</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">ماشین
                                                                                آلات</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-6">
                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                <li
                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                    <a href="">ابزار دستی</a>
                                                                    <ul
                                                                        class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item"><a
                                                                                href="">پیچ گوشتی
                                                                                ها</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">اره
                                                                                دستی</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">چاقو
                                                                                ها</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">تبر ها</a>
                                                                        </li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">ابزار
                                                                                چندکاره</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">ابزار
                                                                                نقاشی</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li
                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                    <a href="">تجهیزات باغبانی</a>
                                                                    <ul
                                                                        class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item"><a
                                                                                href="">پمپ های
                                                                                موتور</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">اره
                                                                                برقی</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">اره
                                                                                الکتریکی</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="">چمن زن</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .megamenu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item nav-links__item--with-submenu"><a
                                                href="shop-grid-3-columns-sidebar.html"><span>فروشگاه <svg
                                                        class="nav-links__arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg></span></a>
                                            <div class="nav-links__menu">
                                                <!-- .menu -->
                                                <ul class="menu menu--layout--classic">
                                                    <li><a href="shop-grid-3-columns-sidebar.html">فروشگاه توری <svg
                                                                class="menu__arrow" width="6px" height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg></a>
                                                        <div class="menu__submenu">
                                                            <!-- .menu -->
                                                            <ul class="menu menu--layout--classic">
                                                                <li><a href="shop-grid-3-columns-sidebar.html">3 ستون
                                                                        با
                                                                        نوار کناری</a></li>
                                                                <li><a href="shop-grid-4-columns-full.html">4 ستون تمام
                                                                        عرض</a></li>
                                                                <li><a href="shop-grid-5-columns-full.html">5 ستون تمام
                                                                        عرض</a></li>
                                                            </ul>
                                                            <!-- .menu / end -->
                                                        </div>
                                                    </li>
                                                    <li><a href="shop-list.html">فروشگاه لیست</a></li>
                                                    <li><a href="shop-left-sidebar.html">فروشگاه نوار کناری چپ</a></li>
                                                    <li><a href="product.html">محصول <svg class="menu__arrow"
                                                                width="6px" height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg></a>
                                                        <div class="menu__submenu">
                                                            <!-- .menu -->
                                                            <ul class="menu menu--layout--classic">
                                                                <li><a href="product.html">محصول</a></li>
                                                                <li><a href="product-alt.html">محصول طرح 2</a></li>
                                                                <li><a href="product-sidebar.html">محصول با نوار
                                                                        کناری</a></li>
                                                            </ul>
                                                            <!-- .menu / end -->
                                                        </div>
                                                    </li>
                                                    <li><a href="cart.html">سبد خرید</a></li>
                                                    <li><a href="cart-empty.html">سبد خرید خالی</a></li>
                                                    <li><a href="checkout.html">پرداخت</a></li>
                                                    <li><a href="wishlist.html">لیست علاقه‌مندی‌ها</a></li>
                                                    <li><a href="compare.html">مقایسه</a></li>
                                                    <li><a href="track-order.html">پیگیری سفارش</a></li>
                                                </ul>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item nav-links__item--with-submenu"><a
                                                href="account-login.html"><span>حساب کاربری <svg
                                                        class="nav-links__arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg></span></a>
                                            <div class="nav-links__menu">
                                                <!-- .menu -->
                                                <ul class="menu menu--layout--classic">
                                                    <li><a href="account-login.html">ورود</a></li>
                                                    <li><a href="account-dashboard.html">داشبورد</a></li>
                                                    <li><a href="account-profile.html">ویرایش پروفایل</a></li>
                                                    <li><a href="account-orders.html">سابقه خرید</a></li>
                                                    <li><a href="account-addresses.html">دفتر آدرس</a></li>
                                                    <li><a href="account-password.html">تغییر رمز عبور</a></li>
                                                </ul>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item nav-links__item--with-submenu"><a
                                                href="blog-classic.html"><span>بلاگ <svg class="nav-links__arrow"
                                                        width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg></span></a>
                                            <div class="nav-links__menu">
                                                <!-- .menu -->
                                                <ul class="menu menu--layout--classic">
                                                    <li><a href="blog-classic.html">بلاگ کلاسیک</a></li>
                                                    <li><a href="blog-grid.html">بلاگ توری</a></li>
                                                    <li><a href="blog-list.html">بلاگ لیست</a></li>
                                                    <li><a href="blog-right-sidebar.html">بلاگ نوار کناری راست</a>
                                                    </li>
                                                    <li><a href="post.html">صفحه مطلب بلاگ</a></li>
                                                    <li><a href="post-without-sidebar.html">مطلب بدون نوار کناری</a>
                                                    </li>
                                                </ul>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item nav-links__item--with-submenu"><a
                                                href=""><span>صفحات
                                                    <svg class="nav-links__arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg></span></a>
                                            <div class="nav-links__menu">
                                                <!-- .menu -->
                                                <ul class="menu menu--layout--classic">
                                                    <li><a href="about-us.html">درباره ما</a></li>
                                                    <li><a href="contact-us.html">تماس با ما</a></li>
                                                    <li><a href="contact-us-alt.html">تماس با ما طرح 2</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                    <li><a href="terms-and-conditions.html">قوانین و مقررات</a></li>
                                                    <li><a href="faq.html">سوالات متداول</a></li>
                                                    <li><a href="components.html">اجزاء</a></li>
                                                    <li><a href="typography.html">تایپوگرافی</a></li>
                                                </ul>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item"><a href="https://www.rtl-theme.com"><span>خرید
                                                    قالب</span></a></li>
                                    </ul>
                                </div>
                                <!-- .nav-links / end -->
                                <div class="nav-panel__indicators">
                                    <div class="indicator"><a href="wishlist.html" class="indicator__button"><span
                                                class="indicator__area"><svg width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#heart-20"></use>
                                                </svg> <span class="indicator__value">0</span></span></a></div>
                                    <div class="indicator indicator--trigger--click"><a href="cart.html"
                                            class="indicator__button"><span class="indicator__area"><svg
                                                    width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#cart-20"></use>
                                                </svg> <span class="indicator__value">3</span></span></a>
                                        <div class="indicator__dropdown">
                                            <!-- .dropcart -->
                                            <div class="dropcart">
                                                <div class="dropcart__products-list">
                                                    <div class="dropcart__product">
                                                        <div class="dropcart__product-image">
                                                            <a href="product.html"><img
                                                                    src="images/products/product-1.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="dropcart__product-info">
                                                            <div class="dropcart__product-name"><a
                                                                    href="product.html">اره برقی برندیکس مدل 300
                                                                    وات</a>
                                                            </div>
                                                            <ul class="dropcart__product-options">
                                                                <li>رنگ: زرد</li>
                                                                <li>جنس: آلومینیوم</li>
                                                            </ul>
                                                            <div class="dropcart__product-meta"><span
                                                                    class="dropcart__product-quantity">2</span> ×
                                                                <span class="dropcart__product-price">699,000
                                                                    تومان</span>
                                                            </div>
                                                        </div>
                                                        <button type="button"
                                                            class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                            <svg width="10px" height="10px">
                                                                <use xlink:href="images/sprite.svg#cross-10"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="dropcart__product">
                                                        <div class="dropcart__product-image">
                                                            <a href="product.html"><img
                                                                    src="images/products/product-2.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="dropcart__product-info">
                                                            <div class="dropcart__product-name"><a
                                                                    href="product.html">اره چوب بری IRadix مدل 2700
                                                                    وات</a></div>
                                                            <div class="dropcart__product-meta"><span
                                                                    class="dropcart__product-quantity">1</span> ×
                                                                <span class="dropcart__product-price">849,000
                                                                    تومان</span>
                                                            </div>
                                                        </div>
                                                        <button type="button"
                                                            class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                            <svg width="10px" height="10px">
                                                                <use xlink:href="images/sprite.svg#cross-10"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="dropcart__product">
                                                        <div class="dropcart__product-image">
                                                            <a href="product.html"><img
                                                                    src="images/products/product-5.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="dropcart__product-info">
                                                            <div class="dropcart__product-name"><a
                                                                    href="product.html">میخ کوب برقی برندیکس مدل
                                                                    2019</a></div>
                                                            <ul class="dropcart__product-options">
                                                                <li>رنگ: قرمز</li>
                                                            </ul>
                                                            <div class="dropcart__product-meta"><span
                                                                    class="dropcart__product-quantity">3</span> ×
                                                                <span class="dropcart__product-price">1,210,000
                                                                    تومان</span></div>
                                                        </div>
                                                        <button type="button"
                                                            class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                            <svg width="10px" height="10px">
                                                                <use xlink:href="images/sprite.svg#cross-10"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="dropcart__totals">
                                                    <table>
                                                        <tr>
                                                            <th>جمع جزء</th>
                                                            <td>5,877,000 تومان</td>
                                                        </tr>
                                                        <tr>
                                                            <th>حمل و نقل</th>
                                                            <td>25,000 تومان</td>
                                                        </tr>
                                                        <tr>
                                                            <th>مالیات</th>
                                                            <td>0 تومان</td>
                                                        </tr>
                                                        <tr>
                                                            <th>جمع کل</th>
                                                            <td>5,902,000 تومان</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="dropcart__buttons"><a class="btn btn-secondary"
                                                        href="cart.html">مشاهده سبد</a> <a class="btn btn-primary"
                                                        href="checkout.html">پرداخت</a></div>
                                            </div>
                                            <!-- .dropcart / end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- desktop site__header / end -->
        <!-- site__body -->
        <div class="site__body">
            <!-- .block-slideshow -->
            <div class="block-slideshow block-slideshow--layout--with-departments block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 d-none d-lg-block"></div>
                        <div class="col-12 col-lg-9">
                            <div class="block-slideshow__body">
                                <div class="owl-carousel">
                                    <a class="block-slideshow__slide" href="">
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                            style="background-image: url('images/slides/slide-1.jpg')"></div>
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                            style="background-image: url('images/slides/slide-1-mobile.jpg')"></div>
                                        <div class="block-slideshow__slide-content">
                                            <div class="block-slideshow__slide-title">انتخاب بهترین
                                                <br>ابزار برای لوله کشی
                                            </div>
                                            <div class="block-slideshow__slide-text">لورم ایپسوم متن ساختگی با تولید
                                                سادگی نامفهوم از صنعت چاپ
                                                <br>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                            </div>
                                            <div class="block-slideshow__slide-button"><span
                                                    class="btn btn-primary btn-lg">هم اکنون بخرید</span></div>
                                        </div>
                                    </a>
                                    <a class="block-slideshow__slide" href="">
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                            style="background-image: url('images/slides/slide-2.jpg')"></div>
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                            style="background-image: url('images/slides/slide-2-mobile.jpg')"></div>
                                        <div class="block-slideshow__slide-content">
                                            <div class="block-slideshow__slide-title">پیچ گوشتی برقی
                                                <br>ابزار حرفه ای برای کار
                                            </div>
                                            <div class="block-slideshow__slide-text">لورم ایپسوم متن ساختگی با تولید
                                                سادگی نامفهوم از صنعت چاپ
                                                <br>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                            </div>
                                            <div class="block-slideshow__slide-button"><span
                                                    class="btn btn-primary btn-lg">هم اکنون بخرید</span></div>
                                        </div>
                                    </a>
                                    <a class="block-slideshow__slide" href="">
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                            style="background-image: url('images/slides/slide-3.jpg')"></div>
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                            style="background-image: url('images/slides/slide-3-mobile.jpg')"></div>
                                        <div class="block-slideshow__slide-content">
                                            <div class="block-slideshow__slide-title">یک کلاه ایمنی بیشتر
                                                <br>برای امنیت بیشتر شما
                                            </div>
                                            <div class="block-slideshow__slide-text">لورم ایپسوم متن ساختگی با تولید
                                                سادگی نامفهوم از صنعت
                                                <br>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                            </div>
                                            <div class="block-slideshow__slide-button"><span
                                                    class="btn btn-primary btn-lg">هم اکنون بخرید</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-slideshow / end -->
            <!-- .block-features -->
            <div class="block block-features block-features--layout--classic">
                <div class="container">
                    <div class="block-features__list">
                        <div class="block-features__item">
                            <div class="block-features__icon">
                                <svg width="48px" height="48px">
                                    <use xlink:href="images/sprite.svg#fi-free-delivery-48"></use>
                                </svg>
                            </div>
                            <div class="block-features__content">
                                <div class="block-features__title">ارسال رایگان</div>
                                <div class="block-features__subtitle">لورم ایپسوم متن ساختگی</div>
                            </div>
                        </div>
                        <div class="block-features__divider"></div>
                        <div class="block-features__item">
                            <div class="block-features__icon">
                                <svg width="48px" height="48px">
                                    <use xlink:href="images/sprite.svg#fi-24-hours-48"></use>
                                </svg>
                            </div>
                            <div class="block-features__content">
                                <div class="block-features__title">پشتیبانی 24 ساعته</div>
                                <div class="block-features__subtitle">هر زمان تماس بگیرید</div>
                            </div>
                        </div>
                        <div class="block-features__divider"></div>
                        <div class="block-features__item">
                            <div class="block-features__icon">
                                <svg width="48px" height="48px">
                                    <use xlink:href="images/sprite.svg#fi-payment-security-48"></use>
                                </svg>
                            </div>
                            <div class="block-features__content">
                                <div class="block-features__title">100% امن</div>
                                <div class="block-features__subtitle">پرداخت های امن</div>
                            </div>
                        </div>
                        <div class="block-features__divider"></div>
                        <div class="block-features__item">
                            <div class="block-features__icon">
                                <svg width="48px" height="48px">
                                    <use xlink:href="images/sprite.svg#fi-tag-48"></use>
                                </svg>
                            </div>
                            <div class="block-features__content">
                                <div class="block-features__title">پیشنهادات داغ</div>
                                <div class="block-features__subtitle">تخفیف تا 90%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-features / end -->
            <!-- .block-products-carousel -->
            <div class="block block-products-carousel" data-layout="grid-4">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">محصولات ویژه</h3>
                        <div class="block-header__divider"></div>
                        <ul class="block-header__groups-list">
                            <li>
                                <button type="button"
                                    class="block-header__group block-header__group--active">همه</button>
                            </li>
                            <li>
                                <button type="button" class="block-header__group">ابزار برقی</button>
                            </li>
                            <li>
                                <button type="button" class="block-header__group">ابزار دستی</button>
                            </li>
                            <li>
                                <button type="button" class="block-header__group">لوله کشی</button>
                            </li>
                        </ul>
                        <div class="block-header__arrows-list">
                            <button class="block-header__arrow block-header__arrow--left" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                                </svg>
                            </button>
                            <button class="block-header__arrow block-header__arrow--right" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="block-products-carousel__slider">
                        <div class="block-products-carousel__preloader"></div>
                        <div class="owl-carousel">
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--new">جدید</div>
                                        </div>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">اره برقی برندیکس
                                                    مدل
                                                    300 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">749,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--hot">داغ</div>
                                        </div>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">اره چوب بری
                                                    IRadix
                                                    مدل 2700 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">1,019,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">پیچ گوشتی برقی
                                                    برندیکس مدل 200 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">850,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--sale">فروش</div>
                                        </div>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">دریل برندیکس سری
                                                    3
                                                    مدل 2018</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices"><span
                                                    class="product-card__new-price">949,000 تومان</span> <span
                                                    class="product-card__old-price">1,189,000 تومان</span></div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-5.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">میخ کوب برقی
                                                    برندیکس
                                                    مدل 2019</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">1,700,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">ماشین دریل
                                                    برندیکس
                                                    مدل 4KW 200 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">3,199,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">انبردست های
                                                    برندیکس</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">24,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">شلنگ آب 40cm</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">15,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">لورم ایپسوم
                                                    متن</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">19,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-10.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">فلکه آب</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">15,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-11.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">مجموعه ابزار
                                                    دستی</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">149,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-12.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">اره برقی 3.5
                                                    کیلووات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">666,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-13.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">سنگ شکن برندیکس
                                                    مدل
                                                    2019</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">649,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-14.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">کمپرسور هوا
                                                    برندیکس
                                                    دلتا</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">1,800,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-15.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">اره مویی
                                                    الکترونیکی
                                                    7000BQ</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">290,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-16.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">پیچ گوشتی
                                                    الکتریکی
                                                    برندیکس 1500AAC</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">1,499,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-products-carousel / end -->
            <!-- .block-banner -->
            <div class="block block-banner">
                <div class="container">
                    <a href="" class="block-banner__body">
                        <div class="block-banner__image block-banner__image--desktop"
                            style="background-image: url('images/banners/banner-1.jpg')"></div>
                        <div class="block-banner__image block-banner__image--mobile"
                            style="background-image: url('images/banners/banner-1-mobile.jpg')"></div>
                        <div class="block-banner__title">صدها
                            <br class="block-banner__mobile-br">ابزار دستی
                        </div>
                        <div class="block-banner__text">چکش ها، مته ها، انبرها، چاقوها، آچارها و اره ها</div>
                        <div class="block-banner__button"><span class="btn btn-sm btn-primary">هم اکنون بخرید</span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- .block-banner / end -->
            <!-- .block-products -->
            <div class="block block-products block-products--layout--large-first">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">پرفروش ترین ها</h3>
                        <div class="block-header__divider"></div>
                    </div>
                    <div class="block-products__body">
                        <div class="block-products__featured">
                            <div class="block-products__featured-item">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg> <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--new">جدید</div>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product.html"><img src="images/products/product-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">اره برقی برندیکس مدل
                                                300
                                                وات</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>سرعت: 750 RPM</li>
                                            <li>منبع تغزیه: برق</li>
                                            <li>نوع باتری: لیتیوم</li>
                                            <li>ولتاژ: 20 ولت</li>
                                            <li>ظرفیت باتری: 2 ساعت</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">موجودی: <span
                                                class="text-success">موجود
                                                در انبار</span></div>
                                        <div class="product-card__prices">749,000 تومان</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart"
                                                type="button">افزودن
                                                به سبد</button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">افزودن به سبد</button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__list">
                            <div class="block-products__list-item">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg> <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--hot">داغ</div>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product.html"><img src="images/products/product-2.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">اره چوب بری IRadix
                                                مدل
                                                2700 وات</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 نقد و بررسی</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>سرعت: 750 RPM</li>
                                            <li>منبع تغزیه: برق</li>
                                            <li>نوع باتری: لیتیوم</li>
                                            <li>ولتاژ: 20 ولت</li>
                                            <li>ظرفیت باتری: 2 ساعت</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">موجودی: <span
                                                class="text-success">موجود
                                                در انبار</span></div>
                                        <div class="product-card__prices">1,019,000 تومان</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart"
                                                type="button">افزودن
                                                به سبد</button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">افزودن به سبد</button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products__list-item">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg> <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image">
                                        <a href="product.html"><img src="images/products/product-3.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">پیچ گوشتی برقی
                                                برندیکس
                                                مدل 200 وات</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>سرعت: 750 RPM</li>
                                            <li>منبع تغزیه: برق</li>
                                            <li>نوع باتری: لیتیوم</li>
                                            <li>ولتاژ: 20 ولت</li>
                                            <li>ظرفیت باتری: 2 ساعت</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">موجودی: <span
                                                class="text-success">موجود
                                                در انبار</span></div>
                                        <div class="product-card__prices">850,000 تومان</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart"
                                                type="button">افزودن
                                                به سبد</button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">افزودن به سبد</button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products__list-item">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg> <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--sale">فروش</div>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product.html"><img src="images/products/product-4.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">دریل برندیکس سری 3
                                                مدل
                                                2018</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">7 نقد و بررسی</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>سرعت: 750 RPM</li>
                                            <li>منبع تغزیه: برق</li>
                                            <li>نوع باتری: لیتیوم</li>
                                            <li>ولتاژ: 20 ولت</li>
                                            <li>ظرفیت باتری: 2 ساعت</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">موجودی: <span
                                                class="text-success">موجود
                                                در انبار</span></div>
                                        <div class="product-card__prices"><span
                                                class="product-card__new-price">949,000
                                                تومان</span> <span class="product-card__old-price">1,189,000
                                                تومان</span></div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart"
                                                type="button">افزودن
                                                به سبد</button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">افزودن به سبد</button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products__list-item">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg> <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image">
                                        <a href="product.html"><img src="images/products/product-5.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">میخ کوب برقی برندیکس
                                                مدل
                                                2019</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>سرعت: 750 RPM</li>
                                            <li>منبع تغزیه: برق</li>
                                            <li>نوع باتری: لیتیوم</li>
                                            <li>ولتاژ: 20 ولت</li>
                                            <li>ظرفیت باتری: 2 ساعت</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">موجودی: <span
                                                class="text-success">موجود
                                                در انبار</span></div>
                                        <div class="product-card__prices">1,700,000 تومان</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart"
                                                type="button">افزودن
                                                به سبد</button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">افزودن به سبد</button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products__list-item">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg> <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image">
                                        <a href="product.html"><img src="images/products/product-6.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">ماشین دریل برندیکس
                                                مدل
                                                4KW 200 وات</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">7 نقد و بررسی</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>سرعت: 750 RPM</li>
                                            <li>منبع تغزیه: برق</li>
                                            <li>نوع باتری: لیتیوم</li>
                                            <li>ولتاژ: 20 ولت</li>
                                            <li>ظرفیت باتری: 2 ساعت</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">موجودی: <span
                                                class="text-success">موجود
                                                در انبار</span></div>
                                        <div class="product-card__prices">3,199,000 تومان</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart"
                                                type="button">افزودن
                                                به سبد</button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">افزودن به سبد</button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products__list-item">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg> <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image">
                                        <a href="product.html"><img src="images/products/product-7.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">انبردست های
                                                برندیکس</a>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">4 نقد و بررسی</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>سرعت: 750 RPM</li>
                                            <li>منبع تغزیه: برق</li>
                                            <li>نوع باتری: لیتیوم</li>
                                            <li>ولتاژ: 20 ولت</li>
                                            <li>ظرفیت باتری: 2 ساعت</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">موجودی: <span
                                                class="text-success">موجود
                                                در انبار</span></div>
                                        <div class="product-card__prices">24,000 تومان</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart"
                                                type="button">افزودن
                                                به سبد</button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">افزودن به سبد</button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-products / end -->
            <!-- .block-categories -->
            <div class="block block--highlighted block-categories block-categories--layout--classic">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">دسته های محبوب</h3>
                        <div class="block-header__divider"></div>
                    </div>
                    <div class="block-categories__list">
                        <div class="block-categories__item category-card category-card--layout--classic">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-1.jpg"
                                            alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name"><a href="">ابزار برقی</a></div>
                                    <ul class="category-card__links">
                                        <li><a href="">پیچ گوشتی ها</a></li>
                                        <li><a href="">برش فرز</a></li>
                                        <li><a href="">ماشین آلات شن و ماسه</a></li>
                                        <li><a href="">آچار ها</a></li>
                                        <li><a href="">دریل ها</a></li>
                                    </ul>
                                    <div class="category-card__all"><a href="">نمایش همه</a></div>
                                    <div class="category-card__products">572 محصول</div>
                                </div>
                            </div>
                        </div>
                        <div class="block-categories__item category-card category-card--layout--classic">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-2.jpg"
                                            alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name"><a href="">ابزار دستی</a></div>
                                    <ul class="category-card__links">
                                        <li><a href="">پیچ گوشتی ها</a></li>
                                        <li><a href="">چکش ها</a></li>
                                        <li><a href="">پیچ و مهره</a></li>
                                        <li><a href="">اره دستی</a></li>
                                        <li><a href="">ابزار نقاشی</a></li>
                                    </ul>
                                    <div class="category-card__all"><a href="">نمایش همه</a></div>
                                    <div class="category-card__products">134 محصول</div>
                                </div>
                            </div>
                        </div>
                        <div class="block-categories__item category-card category-card--layout--classic">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-4.jpg"
                                            alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name"><a href="">ابزار ماشینی</a></div>
                                    <ul class="category-card__links">
                                        <li><a href="">ماشین آلات</a></li>
                                        <li><a href="">ماشین آلات فرز</a></li>
                                        <li><a href="">ماشین آلات سنگ زنی</a></li>
                                        <li><a href="">ماشین های CNC</a></li>
                                        <li><a href="">ماشین های تیز کننده</a></li>
                                    </ul>
                                    <div class="category-card__all"><a href="">نمایش همه</a></div>
                                    <div class="category-card__products">301 محصول</div>
                                </div>
                            </div>
                        </div>
                        <div class="block-categories__item category-card category-card--layout--classic">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-3.jpg"
                                            alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name"><a href="">ماشین آلات برقی</a></div>
                                    <ul class="category-card__links">
                                        <li><a href="">ژنراتور ها</a></li>
                                        <li><a href="">کمپرسور ها</a></li>
                                        <li><a href="">جک برقی</a></li>
                                        <li><a href="">برش پلاسما</a></li>
                                        <li><a href="">موتورهای الکتریکی</a></li>
                                    </ul>
                                    <div class="category-card__all"><a href="">نمایش همه</a></div>
                                    <div class="category-card__products">79 محصول</div>
                                </div>
                            </div>
                        </div>
                        <div class="block-categories__item category-card category-card--layout--classic">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-5.jpg"
                                            alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name"><a href="">اندازه گیری</a></div>
                                    <ul class="category-card__links">
                                        <li><a href="">اندازه گیری نواری</a></li>
                                        <li><a href="">دوربین های مهندسی</a></li>
                                        <li><a href="">تصویربرداری حرارتی</a></li>
                                        <li><a href="">کولیس ها</a></li>
                                        <li><a href="">تراز ها</a></li>
                                    </ul>
                                    <div class="category-card__all"><a href="">نمایش همه</a></div>
                                    <div class="category-card__products">366 محصول</div>
                                </div>
                            </div>
                        </div>
                        <div class="block-categories__item category-card category-card--layout--classic">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-6.jpg"
                                            alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name"><a href="">لباس کار</a></div>
                                    <ul class="category-card__links">
                                        <li><a href="">لباس کار زمستانی</a></li>
                                        <li><a href="">لباس کار تابستانی</a></li>
                                        <li><a href="">کلاه ایمنی</a></li>
                                        <li><a href="">کمربند ایمنی</a></li>
                                        <li><a href="">کفش های کار</a></li>
                                    </ul>
                                    <div class="category-card__all"><a href="">نمایش همه</a></div>
                                    <div class="category-card__products">81 محصول</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-categories / end -->
            <!-- .block-products-carousel -->
            <div class="block block-products-carousel" data-layout="horizontal">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">محصولات جدید</h3>
                        <div class="block-header__divider"></div>
                        <ul class="block-header__groups-list">
                            <li>
                                <button type="button"
                                    class="block-header__group block-header__group--active">همه</button>
                            </li>
                            <li>
                                <button type="button" class="block-header__group">ابزار برقی</button>
                            </li>
                            <li>
                                <button type="button" class="block-header__group">ابزار دستی</button>
                            </li>
                            <li>
                                <button type="button" class="block-header__group">لوله کشی</button>
                            </li>
                        </ul>
                        <div class="block-header__arrows-list">
                            <button class="block-header__arrow block-header__arrow--left" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                                </svg>
                            </button>
                            <button class="block-header__arrow block-header__arrow--right" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="block-products-carousel__slider">
                        <div class="block-products-carousel__preloader"></div>
                        <div class="owl-carousel">
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--new">جدید</div>
                                        </div>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">اره برقی برندیکس
                                                    مدل
                                                    300 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">749,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--hot">داغ</div>
                                        </div>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">اره چوب بری
                                                    IRadix
                                                    مدل 2700 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">1,019,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">پیچ گوشتی برقی
                                                    برندیکس مدل 200 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">850,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--sale">فروش</div>
                                        </div>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">دریل برندیکس سری
                                                    3
                                                    مدل 2018</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices"><span
                                                    class="product-card__new-price">949,000 تومان</span> <span
                                                    class="product-card__old-price">1,189,000 تومان</span></div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-5.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">میخ کوب برقی
                                                    برندیکس
                                                    مدل 2019</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">1,700,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">ماشین دریل
                                                    برندیکس
                                                    مدل 4KW 200 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">3,199,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">انبردست های
                                                    برندیکس</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">24,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">شلنگ آب 40cm</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">15,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">لورم ایپسوم
                                                    متن</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">19,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-10.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">فلکه آب</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">15,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-11.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">مجموعه ابزار
                                                    دستی</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">149,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-12.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">اره برقی 3.5
                                                    کیلووات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">666,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-13.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">سنگ شکن برندیکس
                                                    مدل
                                                    2019</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">649,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-14.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">کمپرسور هوا
                                                    برندیکس
                                                    دلتا</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">1,800,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-15.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">اره مویی
                                                    الکترونیکی
                                                    7000BQ</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">290,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-16.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">پیچ گوشتی
                                                    الکتریکی
                                                    برندیکس 1500AAC</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">1,499,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-products-carousel / end -->
            <!-- .block-posts -->
            <div class="block block-posts block-posts--layout--list-sm" data-layout="list-sm">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">آخرین اخبار</h3>
                        <div class="block-header__divider"></div>
                        <div class="block-header__arrows-list">
                            <button class="block-header__arrow block-header__arrow--left" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                                </svg>
                            </button>
                            <button class="block-header__arrow block-header__arrow--right" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="block-posts__slider">
                        <div class="owl-carousel">
                            <div class="post-card">
                                <div class="post-card__image">
                                    <a href=""><img src="images/posts/post-1.jpg" alt=""></a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="">پیشنهادهای ویژه</a></div>
                                    <div class="post-card__name"><a href="">لورم ایپسوم متن ساختگی با تولید
                                            سادگی
                                            نامفهوم از صنعت</a></div>
                                    <div class="post-card__date">19 اردیبهشت 1398</div>
                                    <div class="post-card__content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                        در ستون و سطرآنچنان</div>
                                    <div class="post-card__read-more"><a href=""
                                            class="btn btn-secondary btn-sm">بیشتر
                                            بخوانید</a></div>
                                </div>
                            </div>
                            <div class="post-card">
                                <div class="post-card__image">
                                    <a href=""><img src="images/posts/post-2.jpg" alt=""></a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="">آخرین اخبار</a></div>
                                    <div class="post-card__name"><a href="">لورم ایپسوم متن ساختگی با تولید
                                            سادگی
                                            نامفهوم از صنعت</a></div>
                                    <div class="post-card__date">5 فروردین 1398</div>
                                    <div class="post-card__content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                        در ستون و سطرآنچنان</div>
                                    <div class="post-card__read-more"><a href=""
                                            class="btn btn-secondary btn-sm">بیشتر
                                            بخوانید</a></div>
                                </div>
                            </div>
                            <div class="post-card">
                                <div class="post-card__image">
                                    <a href=""><img src="images/posts/post-3.jpg" alt=""></a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="">محصولات جدید</a></div>
                                    <div class="post-card__name"><a href="">لورم ایپسوم متن ساختگی با تولید
                                            سادگی
                                            نامفهوم از صنعت چاپ و با</a></div>
                                    <div class="post-card__date">12 اسفند 1397</div>
                                    <div class="post-card__content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                        در ستون و سطرآنچنان</div>
                                    <div class="post-card__read-more"><a href=""
                                            class="btn btn-secondary btn-sm">بیشتر
                                            بخوانید</a></div>
                                </div>
                            </div>
                            <div class="post-card">
                                <div class="post-card__image">
                                    <a href=""><img src="images/posts/post-4.jpg" alt=""></a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="">پیشنهادهای ویژه</a></div>
                                    <div class="post-card__name"><a href="">لورم ایپسوم متن ساختگی با تولید
                                            سادگی
                                            نامفهوم از صنعت چاپ و با استفاده از طراحان</a></div>
                                    <div class="post-card__date">30 بهمن 1397</div>
                                    <div class="post-card__content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                        در ستون و سطرآنچنان</div>
                                    <div class="post-card__read-more"><a href=""
                                            class="btn btn-secondary btn-sm">بیشتر
                                            بخوانید</a></div>
                                </div>
                            </div>
                            <div class="post-card">
                                <div class="post-card__image">
                                    <a href=""><img src="images/posts/post-5.jpg" alt=""></a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="">محصولات جدید</a></div>
                                    <div class="post-card__name"><a href="">لورم ایپسوم متن ساختگی با تولید
                                            سادگی
                                            نامفهوم از صنعت چاپ و</a></div>
                                    <div class="post-card__date">12 دی 1397</div>
                                    <div class="post-card__content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                        در ستون و سطرآنچنان</div>
                                    <div class="post-card__read-more"><a href=""
                                            class="btn btn-secondary btn-sm">بیشتر
                                            بخوانید</a></div>
                                </div>
                            </div>
                            <div class="post-card">
                                <div class="post-card__image">
                                    <a href=""><img src="images/posts/post-6.jpg" alt=""></a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="">پیشنهادهای ویژه</a></div>
                                    <div class="post-card__name"><a href="">لورم ایپسوم متن ساختگی با تولید
                                            سادگی
                                            نامفهوم از صنعت</a></div>
                                    <div class="post-card__date">21 آذر 1397</div>
                                    <div class="post-card__content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                        در ستون و سطرآنچنان</div>
                                    <div class="post-card__read-more"><a href=""
                                            class="btn btn-secondary btn-sm">بیشتر
                                            بخوانید</a></div>
                                </div>
                            </div>
                            <div class="post-card">
                                <div class="post-card__image">
                                    <a href=""><img src="images/posts/post-7.jpg" alt=""></a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="">پیشنهادهای ویژه</a></div>
                                    <div class="post-card__name"><a href="">لورم ایپسوم متن ساختگی با تولید
                                            سادگی
                                            نامفهوم از صنعت چاپ و با استفاده از</a></div>
                                    <div class="post-card__date">3 آذر 1397</div>
                                    <div class="post-card__content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                        در ستون و سطرآنچنان</div>
                                    <div class="post-card__read-more"><a href=""
                                            class="btn btn-secondary btn-sm">بیشتر
                                            بخوانید</a></div>
                                </div>
                            </div>
                            <div class="post-card">
                                <div class="post-card__image">
                                    <a href=""><img src="images/posts/post-8.jpg" alt=""></a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="">آخرین اخبار</a></div>
                                    <div class="post-card__name"><a href="">لورم ایپسوم متن ساختگی با تولید
                                            سادگی
                                            نامفهوم از صنعت چاپ و با استفاده</a></div>
                                    <div class="post-card__date">29 آبان 1397</div>
                                    <div class="post-card__content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                        در ستون و سطرآنچنان</div>
                                    <div class="post-card__read-more"><a href=""
                                            class="btn btn-secondary btn-sm">بیشتر
                                            بخوانید</a></div>
                                </div>
                            </div>
                            <div class="post-card">
                                <div class="post-card__image">
                                    <a href=""><img src="images/posts/post-9.jpg" alt=""></a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="">محصولات جدید</a></div>
                                    <div class="post-card__name"><a href="">لورم ایپسوم متن ساختگی با تولید
                                            سادگی
                                            نامفهوم از صنعت چاپ و با استفاده از</a></div>
                                    <div class="post-card__date">10 مهر 1397</div>
                                    <div class="post-card__content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                        در ستون و سطرآنچنان</div>
                                    <div class="post-card__read-more"><a href=""
                                            class="btn btn-secondary btn-sm">بیشتر
                                            بخوانید</a></div>
                                </div>
                            </div>
                            <div class="post-card">
                                <div class="post-card__image">
                                    <a href=""><img src="images/posts/post-10.jpg" alt=""></a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="">پیشنهادهای ویژه</a></div>
                                    <div class="post-card__name"><a href="">لورم ایپسوم متن ساختگی با تولید
                                            سادگی
                                            نامفهوم از صنعت چاپ</a></div>
                                    <div class="post-card__date">1 شهریور 1397</div>
                                    <div class="post-card__content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                        در ستون و سطرآنچنان</div>
                                    <div class="post-card__read-more"><a href=""
                                            class="btn btn-secondary btn-sm">بیشتر
                                            بخوانید</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-posts / end -->
            <!-- .block-brands -->
            <div class="block block-brands">
                <div class="container">
                    <div class="block-brands__slider">
                        <div class="owl-carousel">
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-1.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-2.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-3.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-4.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-5.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-6.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-7.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-brands / end -->
            <!-- .block-product-columns -->
            <div class="block block-product-columns d-lg-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="block-header">
                                <h3 class="block-header__title">محصولات امتیاز بالا</h3>
                                <div class="block-header__divider"></div>
                            </div>
                            <div class="block-product-columns__column">
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--layout--horizontal">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--new">جدید</div>
                                        </div>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">اره برقی برندیکس
                                                    مدل
                                                    300 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">749,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--layout--horizontal">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--hot">داغ</div>
                                        </div>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">اره چوب بری
                                                    IRadix
                                                    مدل 2700 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">1,019,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--layout--horizontal">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">پیچ گوشتی برقی
                                                    برندیکس مدل 200 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">850,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="block-header">
                                <h3 class="block-header__title">پیشنهادهای ویژه</h3>
                                <div class="block-header__divider"></div>
                            </div>
                            <div class="block-product-columns__column">
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--layout--horizontal">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--sale">فروش</div>
                                        </div>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">دریل برندیکس سری
                                                    3
                                                    مدل 2018</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices"><span
                                                    class="product-card__new-price">949,000 تومان</span> <span
                                                    class="product-card__old-price">1,189,000 تومان</span></div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--layout--horizontal">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-5.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">میخ کوب برقی
                                                    برندیکس
                                                    مدل 2019</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">1,700,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--layout--horizontal">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">ماشین دریل
                                                    برندیکس
                                                    مدل 4KW 200 وات</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">3,199,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="block-header">
                                <h3 class="block-header__title">پرفروش ترین ها</h3>
                                <div class="block-header__divider"></div>
                            </div>
                            <div class="block-product-columns__column">
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--layout--horizontal">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">انبردست های
                                                    برندیکس</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">24,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--layout--horizontal">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">شلنگ آب 40cm</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">15,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--layout--horizontal">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image">
                                            <a href="product.html"><img src="images/products/product-9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">لورم ایپسوم
                                                    متن</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active"
                                                            width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 نقد و بررسی</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>سرعت: 750 RPM</li>
                                                <li>منبع تغزیه: برق</li>
                                                <li>نوع باتری: لیتیوم</li>
                                                <li>ولتاژ: 20 ولت</li>
                                                <li>ظرفیت باتری: 2 ساعت</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">موجودی: <span
                                                    class="text-success">موجود در انبار</span></div>
                                            <div class="product-card__prices">19,000 تومان</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">افزودن به سبد</button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-product-columns / end -->
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
        <footer class="site__footer">
            <div class="site-footer">
                <div class="container">
                    <div class="site-footer__widgets">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="site-footer__widget footer-contacts">
                                    <h5 class="footer-contacts__title">تماس با ما</h5>
                                    <div class="footer-contacts__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                        از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                    <ul class="footer-contacts__contacts">
                                        <li><i class="footer-contacts__icon fas fa-globe-americas"></i> تبریز، چهارراه
                                            آبرسان، برج بلور، طبقه 456</li>
                                        <li><i class="footer-contacts__icon far fa-envelope"></i> stroyka@example.com
                                        </li>
                                        <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> <span
                                                class="ltr_text">(800) 060-0730</span>, <span class="ltr_text">(800)
                                                060-0730</span></li>
                                        <li><i class="footer-contacts__icon far fa-clock"></i> شنبه - پنجشنبه : 10 صبح
                                            -
                                            7 عصر</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">اطلاعات</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">درباره
                                                ما</a></li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">نحوه
                                                ارسال</a></li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">حریم
                                                خصوصی</a></li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">برند ها</a>
                                        </li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">تماس با
                                                ما</a></li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">بازگشت
                                                ها</a></li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">نقشه
                                                سایت</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">حساب کاربری</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">مکان
                                                فروشگاه</a></li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">سابقه
                                                خرید</a></li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">علاقه‌مندی‌ها</a></li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">خبرنامه</a>
                                        </li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">محصولات
                                                ویژه</a></li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">کارت های
                                                هدیه</a></li>
                                        <li class="footer-links__item"><a href=""
                                                class="footer-links__link">نمایندگی
                                                ها</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="site-footer__widget footer-newsletter">
                                    <h5 class="footer-newsletter__title">خبرنامه</h5>
                                    <div class="footer-newsletter__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                        از صنعت چاپ و با استفاده از طراحان گرافیک</div>
                                    <form action="" class="footer-newsletter__form">
                                        <label class="sr-only" for="footer-newsletter-address">آدرس ایمیل</label>
                                        <input type="text" class="footer-newsletter__form-input form-control"
                                            id="footer-newsletter-address" placeholder="... آدرس ایمیل"
                                            dir="ltr">
                                        <button class="footer-newsletter__form-button btn btn-primary">اشتراک</button>
                                    </form>
                                    <div class="footer-newsletter__text footer-newsletter__text--social">ما را در شبکه
                                        های اجتماعی دنبال کنید</div>
                                    <ul class="footer-newsletter__social-links">
                                        <li
                                            class="footer-newsletter__social-link footer-newsletter__social-link--facebook">
                                            <a href="#" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li
                                            class="footer-newsletter__social-link footer-newsletter__social-link--twitter">
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li
                                            class="footer-newsletter__social-link footer-newsletter__social-link--youtube">
                                            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                                        </li>
                                        <li
                                            class="footer-newsletter__social-link footer-newsletter__social-link--instagram">
                                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li
                                            class="footer-newsletter__social-link footer-newsletter__social-link--rss">
                                            <a href="#" target="_blank"><i class="fas fa-rss"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="site-footer__copyright">ارائه شده در وب‌سایت <a href="https://www.rtl-theme.com"
                                target="_blank">راست‌چین</a></div>
                        <div class="site-footer__payments"><img src="images/payments.png" alt=""></div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
</body>

</html>
