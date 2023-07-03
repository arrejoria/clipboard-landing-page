@extends('layouts.app')


@section('content')
    <!-- download Section starts here  -->
    <section class="download__container d-flex flex-column align-items-center text-center">
        <figure class="download__image__content">
            <img src="images/logo.svg" alt="Logo image" width="125" height="125" loading="lazy">
        </figure>

        <article class="download__text__content col-md-8 col-lg-8 col-xxl-6 d-flex flex-column align-items-center">
            <h1 class="download__title">A history of everything you copy</h1>
            <p class="download__description">Clipboard allows you to track and organize everything you copy. Instantly access
                your
                clipboard on all your
                devices.</p>
            <div class="download__buttons d-flex flex-wrap justify-content-center gap-4">
                <button>Download for IOS</button>
                <button>Download for Mac</button>
            </div>
        </article>
    </section>


    <!-- Hero Section starts here  -->
    <section class="hero__container row justify-content-center px-0">
        <article class="hero__text__content col-md-8 col-xxl-6 d-flex flex-column text-center">
            <h2>Keep track of your snippets</h2>
            <p>Clipboard instantly stores any item you copy in the cloud,
                meaning you can access your snippets immediately on all your
                devices. Our Mac and iOS apps will help you organize everything.
            </p>
        </article>
        <div class="hero__content d-flex pt-4">

            <figure class="hero__image__content figure col-xxl-6">
                <img src="images/image-computer.webp" alt="Computer Image" width="752" height="572" loading="lazy" class="figure-img img-fluid">
            </figure>

            <div class="hero__text__content d-flex flex-column col-xxl-4">
                <div class="hero__text-item">
                    <h3>Quick Search</h3>
                    <p>Easily search your snippets by content, category, web address, application, and more.</p>
                </div>
                <div class="hero__text-item">
                    <h3>iCloud Sync</h3>
                    <p>Instantly saves and syncs snippets across all your devices.</p>
                </div>
                <div class="hero__text-item">
                    <h3>Complete History</h3>
                    <p>Retrieve any snippets from the first moment you started using the app.</p>
                </div>
            </div>

        </div>

    </section>

    <section class="access__container d-flex flex-column align-items-center text-center">
        <article class="access__text__content row col-md-8 col-lg-8 col-xxl-6 justify-content-center gap-2">
            <h2>Access Clipboard anywhere</h2>
            <p>Whether you’re on the go, or at your computer, you can access all your Clipboard snippets in a few simple
                clicks.</p>
        </article>
        <figure class="access__image__content">
            <img src="images/image-devices.webp" alt="Device Image" width="905" height="575" loading="lazy">
        </figure>
    </section>

    <section class="workflow__container row col-xxl-12 justify-content-center text-center">
        <article class="workflow__text__content row">
            <h2>Supercharge your workflow</h2>
            <p>We’ve got the tools to boost your productivity.</p>
        </article>

        <div class="workflow__items row col-xxl-10 align-items-baseline">
            <div class="workflow__item col-xxl-4 d-flex flex-column gap-3">
                <figure class="workflow__item-image figure my-4">
                    <img src="images/icon-blacklist.svg" alt="" width="40" loading="lazy" class="figure-img img-fluid">
                </figure>
                <h3>Create blacklists</h3>
                <p>Ensure sensitive information never makes its way to your clipboard by excluding certain sources.</p>
            </div>

            <div class="workflow__item col-xxl-4 d-flex flex-column gap-3 ">
                <figure class="workflow__item-image figure my-4">
                    <img src="images/icon-text.svg" alt="" width="40" loading="lazy" class="figure-img img-fluid">
                </figure>
                <h3>Plain text snippets</h3>
                <p>Remove unwanted formatting from copied text for a consistent look.</p>
            </div>

            <div class="workflow__item col-xxl-4 d-flex flex-column gap-3 ">
                <figure class="workflow__item-image figure my-4">
                    <img src="images/icon-preview.svg" alt="" width="40" loading="lazy" class="figure-img img-fluid">
                </figure>
                <h3>Sneak preview</h3>
                <p>Quick preview of all snippets on your Clipboard for easy access.</p>
            </div>
        </div>
    </section>

    <section class="clients__container">
        <!-- Slider download container -->
        <div class="swiper clients__swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="images/logo-google.webp" alt="Logo Google" loading="lazy">
                </div>

                <div class="swiper-slide">
                    <img src="images/logo-ibm.webp" alt="Logo IBM" loading="lazy">
                </div>

                <div class="swiper-slide">
                    <img src="images/logo-microsoft.webp" alt="Logo Microsoft" loading="lazy">
                </div>

                <div class="swiper-slide">
                    <img src="images/logo-hp.webp" alt="Logo Hewlett Packard" loading="lazy">
                </div>

                <div class="swiper-slide">
                    <img src="images/logo-vector-graphics.webp" alt="Logo Vector Graphics" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="download__container d-flex flex-column align-items-center text-center">
        <article class="download__text__content col-md-8 col-lg-8 col-xxl-6 d-flex flex-column align-items-center">
            <h2 class="download__title">Clipboard for iOS and Mac OS</h2>
            <p class="download__description">Available for free on the App Store. Download for Mac or iOS, sync with iCloud
                and you’re ready to start adding to your clipboard.</p>
            <div class="download__buttons d-flex flex-wrap justify-content-center gap-4">
                <button>Download for IOS</button>
                <button>Download for Mac</button>
            </div>
        </article>
    </section>

    <footer class="footer__container">
        <div class="footer__content row align-items-center col-xxl-10">
            <div class="logo__section col-xxl-3 text-center">
                <figure>
                    <img src="images/logo.svg" alt="Company Logo" width="60" height="60">
                </figure>
            </div>

            <div class="menu__section row col-xxl-6 d-flex ">
                <ul class="menu__items">
                    <li class="menu__item"><a href="#">FAQs</a></li>
                    <li class="menu__item"><a href="#">Contact Us</a></li>
                </ul>
                <ul class="menu__items">
                    <li class="menu__item"><a href="#">Privacy Policy</a></li>
                    <li class="menu__item"><a href="#">Press kit</a></li>
                </ul>
                <ul class="menu__items">
                    <li class="menu__item"><a href="#">Install Guide</a></li>
                </ul>
            </div>

            <div class="social__section col-xxl-3 text-center">
                <ul class="social__items d-flex gap-3">
                    <li class="social__item"><a href="#"><i class="social__icon"
                                data-icon="icon-facebook"></i></a></li>
                    <li class="social__item"><a href="#"><i class="social__icon" data-icon="icon-twitter"></i></a>
                    </li>
                    <li class="social__item"><a href="#"><i class="social__icon"
                                data-icon="icon-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
@endsection

@section('footer')
@endsection
