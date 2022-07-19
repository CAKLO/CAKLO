<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:url" content="https://www.Caklo.com/">

    <meta property="og:type" content="website">

    <meta property="og:title" content="CaKlo">

    <meta property="og:description" content="Disfruta de ver anime Online sin publicidad">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="./assets/img/ghost-regular-24.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./assets/css/styles.css">

    <!--=============== CSS slider ===============-->
    <link rel="stylesheet" href="./assets/css/slider.css">

    <link rel="stylesheet" href="./assets/css/span-container.css">


    <title>CAkLO</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <i class='bx bxs-ghost'></i> CAkLO
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#featured" class="nav__link">Tendencia</a>
                    </li>
                    <li class="nav__item">
                        <a href="#products" class="nav__link">Mes pasado</a>
                    </li>
                    <li class="nav__item">
                        <a href="#new" class="nav__link">New</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class='bx bx-moon change-theme' id="theme-button"></i>

                <div class="nav__shop" id="cart-shop">
                    <i class='bx bxs-ghost'></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </div>
        </nav>
    </header>





    <div class="cart" id="cart">
        <i class='bx bx-x cart__close' id="cart-close"></i>

        <h2 class="cart__title-center">Fundadores</h2>



    <!--=============== Buscador ===============-->
        <section  class="btn-buscar" id="icon-menu">

            <form autocomplete="off">
                <div>
                    <input type="text" name="q" id="input-search" placeholder="¿Qué deseas buscar?">
                </div>
              



            </form>
        </section>
<!--=============== Buscador ===============-->




        <div class="cart__container">
            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/testimonial1.jpg" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Josua Lopez</h3>
                    <span class="cart__price">Desarrollador, estudiante</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                        </div>

                        <i class='bx bx-trash-alt cart__amount-trash'></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/testimonial3.jpg" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Carlos Navas</h3>
                    <span class="cart__price">Desarrollador, estudiante</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                            <span class="cart__amount-number">2</span>

                            <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                        </div>

                        <i class='bx bx-trash-alt cart__amount-trash'></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/testimonial2.jpg" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Camila Salinas</h3>
                    <span class="cart__price">Desarrollador, estudiante</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                            <span class="cart__amount-number">3</span>

                            <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                        </div>

                        <i class='bx bx-trash-alt cart__amount-trash'></i>
                    </div>
                </div>

            </article>


            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/testimonial2.jpg" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Keren Pineda</h3>
                    <span class="cart__price">Desarrollador, estudiante</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                            <span class="cart__amount-number">4</span>

                            <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                        </div>

                        <i class='bx bx-trash-alt cart__amount-trash'></i>
                    </div>
                </div>

            </article>





        </div>

        <div class="cart__prices">
            <span class="cart__prices-item">4 Fundadores</span>
            <span class="cart__prices-total">2022</span>
        </div>


    </div>

    <!--==================== MAIN ====================-->
    <main class="main">


