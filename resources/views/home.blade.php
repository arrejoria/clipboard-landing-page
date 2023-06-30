@extends('layouts.app')


@section('content')
    <!-- Main Section starts here  -->
    <section class="main__container d-flex flex-column align-items-center text-center">
        <figure class="main__image__content">
            <img src="images/logo.svg" alt="Logo image" width="125" height="125" loading="lazy">
        </figure>

        <article class="main__text__content col-md-8 col-lg-8 col-xxl-6 d-flex flex-column align-items-center">
            <h1 class="main__title">A history of everything you copy</h1>
            <p class="main__description">Clipboard allows you to track and organize everything you copy. Instantly access
                your
                clipboard on all your
                devices.</p>
            <div class="main__buttons d-flex flex-wrap justify-content-center gap-4">
                <button>Download for IOS</button>
                <button>Download for Mac</button>
            </div>
        </article>

        <article class="main__text__content col-md-8 col-lg-8 col-xxl-6 d-flex flex-column align-items-center">
            <h2>Keep track of your snippets</h2>
            <p>Clipboard instantly stores any item you copy in the cloud,
                meaning you can access your snippets immediately on all your
                devices. Our Mac and iOS apps will help you organize everything.
            </p>
        </article>

    </section>


    <!-- Hero Section starts here  -->
    <section class="hero__container row px-0">

        <div class="hero__content d-flex">

            <figure class="hero__image__content col-xxl-6">
                <img src="images/image-computer.webp" alt="Computer Image" width="752" height="572" loading="lazy">
            </figure>

            <div class="hero__text__content d-flex flex-column col-xxl-4">
                <div class="hero__text-item">
                    <h2>Quick Search</h2>
                    <p>Easily search your snippets by content, category, web address, application, and more.</p>
                </div>
                <div class="hero__text-item">
                    <h2>iCloud Sync</h2>
                    <p>Instantly saves and syncs snippets across all your devices.</p>
                </div>
                <div class="hero__text-item">
                    <h2>Complete History</h2>
                    <p>Retrieve any snippets from the first moment you started using the app.</p>
                </div>
            </div>

        </div>

    </section>

    <section class="access__container d-flex flex-column align-items-center text-center">
        <article class="access__text__content col-md-8 col-lg-8 col-xxl-6 d-flex flex-column align-items-center">
            <h2>Access Clipboard anywhere</h2>
            <p>Whether you’re on the go, or at your computer, you can access all your Clipboard snippets in a few simple
                clicks.</p>
        </article>
        <figure class="access__image__content">
            <img src="images/image-devices.webp" alt="Device Image" width="905" height="575" loading="lazy">
        </figure>
    </section>

    <section class="workflow__container row justify-content-center text-center">
        <article class="workflow__text__contentd-flex flex-column align-items-center">
            <h2>Supercharge your workflow</h2>
            <p>We’ve got the tools to boost your productivity.</p>
        </article>

        <div class="workflow__items d-flex justify-content-center text-center">
            <div class="workflow__item">
                <figure class="workflow__item-image">
                    <img src="images/icon-blacklist.svg" alt="" width="50" loading="lazy">
                </figure>
                <h3>Create blacklists</h3>
                <p>Ensure sensitive information never makes its way to your clipboard by excluding certain sources.</p>
            </div>

            <div class="workflow__item">
                <figure class="workflow__item-image">
                    <img src="images/icon-text.svg" alt="" width="40" loading="lazy">
                </figure>
                <h3>Plain text snippets</h3>
                <p>Remove unwanted formatting from copied text for a consistent look.</p>
            </div>

            <div class="workflow__item">
                <figure class="workflow__item-image">
                    <img src="images/icon-preview.svg" alt="" width="50" loading="lazy">
                </figure>
                <h3>Sneak preview</h3>
                <p>Quick preview of all snippets on your Clipboard for easy access.</p>
            </div>
        </div>
    </section>

    <section class="clients__container">
        {{-- <div class="clients__content clients__slider">
            <div class="clients__brands swiper-wrapper">


                <div class="swiper-slide">
                </div>

                <div class="swiper-slide">
                </div>

                <div class="swiper-slide">
                </div>
            </div>
        </div> --}}

        <!-- Slider main container -->
        <div class="swiper">
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
@endsection

@section('footer')
@endsection
