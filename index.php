<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ehya-Bookstore</title>
    <!-- Фавикон -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://code.jquery.com" crossorigin />
    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto+Condensed:wght@700&family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />
    <!-- Стили -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- Картинки -->
    <link rel="prefetch prerender" href="img/like_hov.svg" />
    <link rel="prefetch prerender" href="img/liked.svg" />
    <link rel="prefetch prerender" href="img/menu_open.svg" />
    <link rel="prefetch prerender" href="img/menu_close.svg" />
    <!-- Скрипты -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js" defer></script>
    <script src="scripts/swiper-bundle.min.js" defer></script>
    <script src="scripts/jquery.fancybox.min.js" defer></script>
    <script src="scripts/jquery.mask.min.js" defer></script>
    <script src="scripts/jquery.validate.min.js" defer></script>
    <script src="scripts/main.js" defer></script>
    <!-- ### -->
  </head>
  <body>
    <header class="navbar">
      <div class="container">
        <div class="navbar-wrap">
          <a href="#" class="logo">
            <img src="img/logo.svg" alt="Logo: Ehya-Bookstore" class="logo__img" />
          </a>
          <!-- /.logo -->
          <div class="menu">
            <nav class="menu__links">
              <div class="menu__item">
                <a href="#" class="menu__link">Рекомендации</a>
              </div>
              <div class="menu__item">
                <a href="#" class="menu__link">Книги</a>
              </div>
              <div class="menu__item">
                <a href="#" class="menu__link">Блог</a>
              </div>
            </nav>
            <button class="button button--void menu__button castModal">
              Получить
            </button>
          </div>
          <!-- /.menu -->

          <button class="navbar-button"></button>
        </div>
        <!-- /.navbar-wrap -->
      </div>
      <!-- /.container -->
    </header>
    <!-- /.navbar -->
    <section class="main section">
      <div class="container">
        <div class="main-wrap">
          <div class="main-about">
            <div class="main-about__header">
              <h2 class="section-title section-title--accent">
                Design Theory:
              </h2>
              <h2 class="section-title">
                The Psychology of Graphic Design Pricing
              </h2>
            </div>
            <!-- /.main-about__header -->
            <h3 class="section-heading main-about__author">
              Книга Мишеля Янга
            </h3>
            <p class="main-about__text">
              Спустя 15 лет я управляю собственной студией, выполнив тысячи
              проектов для крупных клиентов. Теперь я делюсь своими золотыми
              стратегиями ценообразования на творческую работу.
            </p>
            <div class="main-about__buttons">
              <button class="button main-button castModal">
                Купить сейчас
              </button>
              <a href="#" class="button button--void main-button">
                Читать демо
              </a>
            </div>
            <!-- /.main-about__buttons -->
          </div>
          <!-- /.main-about -->
          <div class="main-book">
            <div class="main-book__cover">
              <img src="img/books/the_psychology_of_graphic_design_pricing.png" alt="Book: The psychology of graphic design pricing" class="main-book__img" />
            </div>
            <!-- /.main-book__cover -->
          </div>
          <!-- /.main-book -->
        </div>
        <!-- /.main-wrap -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.main -->

    <section class="references section">
      <div class="container references-container">
        <div class="compilation">
          <h3 class="section-subtitle references__title">Рекомендации</h3>
          <div class="compilation-wrap compilation__container">
            <div class="compilation-wrap__grid">
              <!-- #CARDS# -->

              <div class="compilation-card">
                <img
                  src="img/books/the_world_of_abstract_art.png"
                  alt=""
                  class="compilation-card__img"
                />
                <div class="compilation-card__info">
                  <div class="labels compilation-card__labels">
                    <span class="labels__title compilation-card__title"
                      >The World of Abstract Art</span
                    >
                    <span class="labels__genre compilation-card__genre"
                      >Art & Design</span
                    >
                    <span class="labels__price compilation-card__price"
                      >$25.00</span
                    >
                  </div>
                  <!-- /.compilation-card__labels -->
                  <div class="compilation-card__buttons">
                    <button
                      class="
                        references__button
                        compilation-card__button
                        castModal
                      "
                    >
                      Купить
                    </button>

                    <button class="compilation-card__like"></button>
                  </div>
                  <!-- /.compilation-card__buttons -->
                </div>
                <!-- /.compilation-card__info -->
              </div>
              <!-- /.compilation-card -->

              <div class="compilation-card">
                <img
                  src="img/books/educated_a_memoir.png"
                  alt="Book: Educated: a Memoir"
                  class="compilation-card__img"
                />
                <div class="compilation-card__info">
                  <div class="labels compilation-card__labels">
                    <span class="labels__title compilation-card__title"
                      >Educated : a Memoir</span
                    >
                    <span class="labels__genre compilation-card__genre"
                      >Education</span
                    >
                    <span class="labels__price compilation-card__price"
                      >$28.00</span
                    >
                  </div>
                  <!-- /.compilation-card__labels -->
                  <div class="compilation-card__buttons">
                    <button
                      class="
                        references__button
                        compilation-card__button
                        castModal
                      "
                    >
                      Купить
                    </button>
                    <button class="compilation-card__like"></button>
                  </div>
                  <!-- /.compilation-card__buttons -->
                </div>
                <!-- /.compilation-card__info -->
              </div>
              <!-- /.compilation-card -->

              <div class="compilation-card">
                <img
                  src="img/books/the_blue_flowers_ray.png"
                  alt="Book: The Blue Flowers Ray"
                  class="compilation-card__img"
                />
                <div class="compilation-card__info">
                  <div class="labels compilation-card__labels">
                    <span class="labels__title compilation-card__title"
                      >The Blue Flowers Ray…</span
                    >
                    <span class="labels__genre compilation-card__genre"
                      >Novel</span
                    >
                    <span class="labels__price compilation-card__price"
                      >$19.50</span
                    >
                  </div>
                  <!-- /.compilation-card__labels -->
                  <div class="compilation-card__buttons">
                    <button
                      class="
                        references__button
                        compilation-card__button
                        castModal
                      "
                    >
                      Купить
                    </button>
                    <button class="compilation-card__like"></button>
                  </div>
                  <!-- /.compilation-card__buttons -->
                </div>
                <!-- /.compilation-card__info -->
              </div>
              <!-- /.compilation-card -->

              <div class="compilation-card">
                <img
                  src="img/books/there_there.png"
                  alt="Book: There There : a Novel by TO"
                  class="compilation-card__img"
                />
                <div class="compilation-card__info">
                  <div class="labels compilation-card__labels">
                    <span class="labels__title compilation-card__title"
                      >There There : a Novel by TO</span
                    >
                    <span class="labels__genre compilation-card__genre"
                      >Novel</span
                    >
                    <span class="labels__price compilation-card__price"
                      >$20.00</span
                    >
                  </div>
                  <!-- /.compilation-card__labels -->
                  <div class="compilation-card__buttons">
                    <button
                      class="
                        references__button
                        compilation-card__button
                        castModal
                      "
                    >
                      Купить
                    </button>
                    <button class="compilation-card__like"></button>
                  </div>
                  <!-- /.compilation-card__buttons -->
                </div>
                <!-- /.compilation-card__info -->
              </div>
              <!-- /.compilation-card -->

              <div class="compilation-card">
                <img
                  src="img/books/WMNDFL.png"
                  alt="Book: Work for money, design for love"
                  class="compilation-card__img"
                />
                <div class="compilation-card__info">
                  <div class="labels compilation-card__labels">
                    <span class="labels__title compilation-card__title"
                      >WMNDFL : The Inspiration</span
                    >
                    <span class="labels__genre compilation-card__genre"
                      >Business</span
                    >
                    <span class="labels__price compilation-card__price"
                      >$23.00</span
                    >
                  </div>
                  <!-- /.compilation-card__labels -->
                  <div class="compilation-card__buttons">
                    <button
                      class="
                        references__button
                        compilation-card__button
                        castModal
                      "
                    >
                      Купить
                    </button>
                    <button class="compilation-card__like"></button>
                  </div>
                  <!-- /.compilation-card__buttons -->
                </div>
                <!-- /.compilation-card__info -->
              </div>
              <!-- /.compilation-card -->

              <div class="compilation-card">
                <img
                  src="img/books/making_things_happen.png"
                  alt="Book: Making things happen"
                  class="compilation-card__img"
                />
                <div class="compilation-card__info">
                  <div class="labels compilation-card__labels">
                    <span class="labels__title compilation-card__title"
                      >Making Things Happen</span
                    >
                    <span class="labels__genre compilation-card__genre"
                      >Motivation</span
                    >
                    <span class="labels__price compilation-card__price"
                      >$23.00</span
                    >
                  </div>
                  <!-- /.compilation-card__labels -->
                  <div class="compilation-card__buttons">
                    <button
                      class="
                        references__button
                        compilation-card__button
                        castModal
                      "
                    >
                      Купить
                    </button>
                    <button class="compilation-card__like"></button>
                  </div>
                  <!-- /.compilation-card__buttons -->
                </div>
                <!-- /.compilation-card__info -->
              </div>
              <!-- /.compilation-card -->
            </div>
            <!-- /.compilation-wrap__grid -->
            <div class="compilation__else">
              <a href="#" class="references__link">Больше рекомендаций</a>
            </div>
            <!-- /.compilation__else -->
          </div>
          <!-- /.compilation-wrap -->
        </div>
        <!-- /.compilation -->

        <div class="bestsellers">
          <h3 class="section-subtitle references__title">Топ Месяца</h3>
          <div class="bestsellers-wrap bestsellers__container">
            <div class="bestsellers-wrap__grid">
              <!-- #CARDS# -->
              <div class="bestsellers-card">
                <img
                  src="img/books/sprint_solve_test_in_5_days.png"
                  alt="Book: Sprint : Solve,
                Test in 5 Days"
                  class="bestsellers-card__img"
                />
                <div class="bestsellers-card__info">
                  <div class="labels bestsellers-card__labels">
                    <span class="labels__title bestsellers__title"
                      >Sprint : Solve, Test in 5 Days</span
                    >
                    <span class="labels__price bestsellers__price">$23.00</span>
                  </div>
                  <!-- /.bestsellers-card__labels labels -->
                  <button
                    class="references__button bestsellers__button castModal"
                  >
                    Купить
                  </button>
                </div>
                <!-- /.bestsellers-card__info -->
              </div>
              <!-- /.bestsellers-card -->

              <div class="bestsellers-card">
                <img
                  src="img/books/hacking_growth.png"
                  alt="Book: Hacking Growth
                  Break Problem"
                  class="bestsellers-card__img"
                />
                <div class="bestsellers-card__info">
                  <div class="labels bestsellers-card__labels">
                    <span class="labels__title bestsellers__title"
                      >Hacking Growth Break Problem</span
                    >
                    <span class="labels__price bestsellers__price">$23.00</span>
                  </div>
                  <!-- /.bestsellers-card__labels labels -->
                  <button
                    class="references__button bestsellers__button castModal"
                  >
                    Купить
                  </button>
                </div>
                <!-- /.bestsellers-card__info -->
              </div>
              <!-- /.bestsellers-card -->

              <div class="bestsellers-card">
                <img
                  src="img/books/very_nice.png"
                  alt="Book: Very Nice a
                  Novel by Mercy"
                  class="bestsellers-card__img"
                />
                <div class="bestsellers-card__info">
                  <div class="labels bestsellers-card__labels">
                    <span class="labels__title bestsellers__title"
                      >Very Nice a Novel by Mercy</span
                    >
                    <span class="labels__price bestsellers__price">$23.00</span>
                  </div>
                  <!-- /.bestsellers-card__labels labels -->
                  <button
                    class="references__button bestsellers__button castModal"
                  >
                    Купить
                  </button>
                </div>
                <!-- /.bestsellers-card__info -->
              </div>
              <!-- /.bestsellers-card -->

              <div class="bestsellers-card">
                <img
                  src="img/books/hooked_how_to_build_products.png"
                  alt="Book: Hooked: How to
                  Build Products"
                  class="bestsellers-card__img"
                />
                <div class="bestsellers-card__info">
                  <div class="labels bestsellers-card__labels">
                    <span class="labels__title bestsellers__title">
                      Hooked: How to Build Products
                    </span>
                    <span class="labels__price bestsellers__price">$25.00</span>
                  </div>
                  <!-- /.bestsellers-card__labels labels -->
                  <button
                    class="references__button bestsellers__button castModal"
                  >
                    Купить
                  </button>
                </div>
                <!-- /.bestsellers-card__info -->
              </div>
              <!-- /.bestsellers-card -->
            </div>
            <!-- /.bestsellers-wrap__grid -->

            <div class="bestsellers__books">
              <a href="#" class="references__link">Лучшие книги</a>
            </div>
          </div>
          <!-- /.bestsellers-wrap -->

          <!-- /.bestbooks -->
        </div>
        <!-- /.bestsellers -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.references -->
    <div class="categories">
      <!-- <h3 class="section-subtitle categories__title">Жанры</h3> -->
      <div class="container">
        <div class="categories-wrap">
          <!-- Slider main container -->
          <div class="swiper categories-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper categories-slider__wrapper">
              <!-- Slides -->
              <div class="swiper-slide categories-slide">
                <img
                  src="img/genres/business_and_finance.png"
                  alt="Icon: business and finance"
                  class="categories-slide__img"
                />
                <div class="categories-slide__labels">
                  <span class="categories-slide__title">Бизнес & Финансы</span>
                  <span class="categories-slide__about">
                    Книги про мир бизнеса
                  </span>
                </div>
                <!-- /.categories-slide__labels -->
              </div>
              <!-- /.swiper-slide categories-slide -->
              <div class="swiper-slide categories-slide">
                <img
                  src="img/genres/motivation.png"
                  alt="Icon: motivation"
                  class="categories-slide__img"
                />
                <div class="categories-slide__labels">
                  <span class="categories-slide__title">Самомотиватия</span>
                  <span class="categories-slide__about">Книги о мотивации</span>
                </div>
                <!-- /.categories-slide__labels -->
              </div>
              <!-- /.swiper-slide categories-slide -->
              <div class="swiper-slide categories-slide">
                <img
                  src="img/genres/novels.png"
                  alt="Icon: novels"
                  class="categories-slide__img"
                />
                <div class="categories-slide__labels">
                  <span class="categories-slide__title">
                    Романы Теленовеллы
                  </span>
                  <span class="categories-slide__about">
                    Книги с крутыми историями
                  </span>
                </div>
                <!-- /.categories-slide__labels -->
              </div>
              <!-- /.swiper-slide categories-slide -->
              <div class="swiper-slide categories-slide">
                <img
                  src="img/genres/skills.png"
                  alt="Icon: skills"
                  class="categories-slide__img"
                />
                <div class="categories-slide__labels">
                  <span class="categories-slide__title">Навыки будущего</span>
                  <span class="categories-slide__about"
                    >Книги для самоподготовки</span
                  >
                </div>
                <!-- /.categories-slide__labels -->
              </div>
              <!-- /.swiper-slide categories-slide -->

              <!-- /////placeholders///// -->

              <div class="swiper-slide categories-slide">
                <img
                  src="img/genres/placeholder.png"
                  alt="Icon: placeholder"
                  class="categories-slide__img"
                />
                <div class="categories-slide__labels">
                  <span class="categories-slide__title"
                    >Наименование жанра</span
                  >
                  <span class="categories-slide__about">Описание</span>
                </div>
                <!-- /.categories-slide__labels -->
              </div>
              <!-- /.swiper-slide categories-slide -->

              <div class="swiper-slide categories-slide">
                <img
                  src="img/genres/placeholder.png"
                  alt="Icon: placeholder"
                  class="categories-slide__img"
                />
                <div class="categories-slide__labels">
                  <span class="categories-slide__title"
                    >Наименование жанра</span
                  >
                  <span class="categories-slide__about">Описание</span>
                </div>
                <!-- /.categories-slide__labels -->
              </div>
              <!-- /.swiper-slide categories-slide -->

              <div class="swiper-slide categories-slide">
                <img
                  src="img/genres/placeholder.png"
                  alt="Icon: placeholder"
                  class="categories-slide__img"
                />
                <div class="categories-slide__labels">
                  <span class="categories-slide__title"
                    >Наименование жанра</span
                  >
                  <span class="categories-slide__about">Описание</span>
                </div>
                <!-- /.categories-slide__labels -->
              </div>
              <!-- /.swiper-slide categories-slide -->

              <div class="swiper-slide categories-slide">
                <img
                  src="img/genres/placeholder.png"
                  alt="Icon: placeholder"
                  class="categories-slide__img"
                />
                <div class="categories-slide__labels">
                  <span class="categories-slide__title"
                    >Наименование жанра</span
                  >
                  <span class="categories-slide__about">Описание</span>
                </div>
                <!-- /.categories-slide__labels -->
              </div>
              <!-- /.swiper-slide categories-slide -->

              <div class="swiper-slide categories-slide">
                <img
                  src="img/genres/placeholder.png"
                  alt="Icon: placeholder"
                  class="categories-slide__img"
                />
                <div class="categories-slide__labels">
                  <span class="categories-slide__title"
                    >Наименование жанра</span
                  >
                  <span class="categories-slide__about">Описание</span>
                </div>
                <!-- /.categories-slide__labels -->
              </div>
              <!-- /.swiper-slide categories-slide -->

              <!-- ////placeholders///// -->
            </div>
            <!-- /.swiper-wrapper categories-slider__wrapper -->

            <!-- If we need navigation buttons -->
          </div>
          <!-- /.swiper -->
          <button class="categories-button categories-button--prev"></button>
          <button class="categories-button categories-button--next"></button>
        </div>
        <!-- /.categories-wrap -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.categories -->
    <section class="unreleased">
      <div class="container unreleased-container">
        <div class="unreleased-wrap">
          <h3 class="unreleased__title">Неизданные книги</h3>
          <!-- Slider main container -->
          <div class="swiper unreleased-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper unreleased-slider__wrapper">
              <!-- Slides -->
              <div class="swiper-slide unreleased-slider__slide">
                <img
                  src="img/unreleased/logo_modernism.png"
                  alt=""
                  class="unreleased-slider__img"
                />
              </div>
              <div class="swiper-slide unreleased-slider__slide">
                <img
                  src="img/unreleased/the_overdue_life.png"
                  alt=""
                  class="unreleased-slider__img"
                />
              </div>
              <div class="swiper-slide unreleased-slider__slide">
                <img
                  src="img/unreleased/making_short_films.png"
                  alt=""
                  class="unreleased-slider__img"
                />
              </div>
              <div class="swiper-slide unreleased-slider__slide">
                <img
                  src="img/unreleased/on_web_typography.png"
                  alt=""
                  class="unreleased-slider__img"
                />
              </div>
              <div class="swiper-slide unreleased-slider__slide">
                <img
                  src="img/unreleased/after_the_end.png"
                  alt=""
                  class="unreleased-slider__img"
                />
              </div>
              <div class="swiper-slide unreleased-slider__slide">
                <img
                  src="img/unreleased/book_placeholder.png"
                  alt=""
                  class="unreleased-slider__img"
                />
              </div>
              <div class="swiper-slide unreleased-slider__slide">
                <img
                  src="img/unreleased/book_placeholder.png"
                  alt=""
                  class="unreleased-slider__img"
                />
              </div>
              <div class="swiper-slide unreleased-slider__slide">
                <img
                  src="img/unreleased/book_placeholder.png"
                  alt=""
                  class="unreleased-slider__img"
                />
              </div>
              <!-- /// Slides /// -->
            </div>
            <!-- /.swiper-wrapper unreleased-slider__wrapper -->
          </div>
          <!-- /.swiper -->
          <button class="unreleased-button unreleased-button--prev"></button>
          <button class="unreleased-button unreleased-button--next"></button>
        </div>
        <!-- /.unreleased-wrap -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.unreleased -->

    <section class="stories">
      <div class="container stories-container">
        <div class="stories-wrap">
          <div class="stories-header">
            <h3 class="section-title stories-header__title">История Автора</h3>
            <p class="stories-header__description">
              Это раздел авторского рассказа. Каждую неделю мы стараемся
              рассказать вам историю писателя. Расскажем всем о закулисье их
              книг.
            </p>
          </div>
          <!-- /.stories-header -->
          <div class="stories-video video">
            <div class="stories-video__main">
              <img
                src="img/stories/main_01.png"
                alt=""
                class="stories-video__placeholder"
              />
              <a
                data-fancybox
                href="https://www.youtube.com/watch?v=Nj-hdQMa3uA"
                class="stories-video__play"
              ></a>
            </div>
            <!-- /.stories-video__main -->
            <div class="stories-video__other">
              <!-- ///cards/// -->

              <div class="stories-video__item video-card">
                <div class="video-frame">
                  <img
                    src="img/stories/other_01.png"
                    alt=""
                    class="video-frame__placeholder"
                  />
                  <a
                    data-fancybox
                    href="https://www.youtube.com/watch?v=MY5SatbZMAo"
                    class="video-frame__play"
                  ></a>
                </div>
                <!-- /.video-frame -->
                <div class="video-info">
                  <div class="video-info__label">
                    <span class="video-info__author">Emelda Scandroot</span>
                    <span class="video-info__book">Author of Books Tittle</span>
                  </div>
                  <!-- /.video-label -->
                  <button class="video-info__favourites"></button>
                </div>
                <!-- /.video-info -->
              </div>
              <!-- /.stories-video__item video-card -->
              <div class="stories-video__item video-card">
                <div class="video-frame">
                  <img
                    src="img/stories/other_02.png"
                    alt=""
                    class="video-frame__placeholder"
                  />
                  <a
                    data-fancybox
                    href="https://www.youtube.com/watch?v=w-HYZv6HzAs"
                    class="video-frame__play"
                  ></a>
                </div>
                <!-- /.video-frame -->
                <div class="video-info">
                  <div class="video-info__label">
                    <span class="video-info__author">Mar Rueda</span>
                    <span class="video-info__book">Author of Books Tittle</span>
                  </div>
                  <!-- /.video-label -->
                  <button class="video-info__favourites"></button>
                </div>
                <!-- /.video-info -->
              </div>
              <!-- /.stories-video__item video-card -->
              <div class="stories-video__item video-card">
                <div class="video-frame">
                  <img
                    src="img/stories/other_03.png"
                    alt=""
                    class="video-frame__placeholder"
                  />
                  <a
                    data-fancybox
                    href="https://www.youtube.com/watch?v=5MgBikgcWnY"
                    class="video-frame__play"
                  ></a>
                </div>
                <!-- /.video-frame -->
                <div class="video-info">
                  <div class="video-info__label">
                    <span class="video-info__author">Nembo Lukeni</span>
                    <span class="video-info__book">Author of Books Tittle</span>
                  </div>
                  <!-- /.video-label -->
                  <button class="video-info__favourites"></button>
                </div>
                <!-- /.video-info -->
              </div>
              <!-- /.stories-video__item video-card -->

              <!-- ///cards/// -->
            </div>
            <!-- /.stories-video__other -->
          </div>
          <!-- /.stories-video -->
        </div>
        <!-- /.stories-wrap -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.stories -->

    <section class="partners">
      <div class="container">
        <div class="partners-container">
          <h3 class="partners__title">
            Некоторые из издателей, с&nbsp;которыми мы сотрудничали
          </h3>
          <!-- /.partners-title -->
          <div class="partners-wrap">
            <a href="#" class="partners__link">
              <img
                src="img/partners/partner_01.svg"
                alt=""
                class="partners__logo"
              />
            </a>

            <a href="#" class="partners__link">
              <img
                src="img/partners/partner_02.svg"
                alt=""
                class="partners__logo"
              />
            </a>
            <a href="#" class="partners__link">
              <img
                src="img/partners/partner_03.svg"
                alt=""
                class="partners__logo"
              />
            </a>
            <a href="#" class="partners__link"
              ><img
                src="img/partners/partner_04.svg"
                alt=""
                class="partners__logo"
              />
            </a>
            <a href="#" class="partners__link"
              ><img
                src="img/partners/partner_05.svg"
                alt=""
                class="partners__logo"
              />
            </a>
            <a href="#" class="partners__link"
              ><img
                src="img/partners/partner_06.svg"
                alt=""
                class="partners__logo"
              />
            </a>
            <a href="#" class="partners__link"
              ><img
                src="img/partners/partner_07.svg"
                alt=""
                class="partners__logo"
              />
            </a>
            <a href="#" class="partners__link"
              ><img
                src="img/partners/partner_08.svg"
                alt=""
                class="partners__logo"
              />
            </a>
            <a href="#" class="partners__link"
              ><img
                src="img/partners/partner_09.svg"
                alt=""
                class="partners__logo"
              />
            </a>
            <a href="#" class="partners__link"
              ><img
                src="img/partners/partner_10.svg"
                alt=""
                class="partners__logo"
              />
            </a>
            <a href="#" class="partners__link">
              <img
                src="img/partners/partner_11.svg"
                alt=""
                class="partners__logo"
              />
            </a>
            <a href="#" class="partners__link"
              ><img
                src="img/partners/partner_12.svg"
                alt=""
                class="partners__logo"
              />
            </a>
          </div>
          <!-- /.partners-wrap -->
        </div>
        <!-- /.partners-container -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.partners -->
    <section class="blog">
      <div class="container">
        <div class="blog-container">
          <div class="blog-main">
            <h2 class="section-title blog-main__title">Ehya Блог</h2>
            <img src="img/articles/main.png" alt="" class="blog-main__img" />
            <div class="blog-main__info">
              <h3 class="blog-main__subtitle">
                Success Steps For Your Business Life
              </h3>
              <p class="blog-main__text">
                This is the author story section. Every week we try to give you
                the story of book writer. Tell all of you the behind the scene
                of their books.
              </p>
            </div>
            <!-- /.blog-main__info -->
          </div>
          <!-- /.blog-main -->
          <div class="blog-articles">
            <a href="" class="button button--void blog-articles__button">
              Все Блоги
            </a>

            <div class="blog-articles__wrap">
              <!-- ///статьи -->

              <div class="blog-articles__item">
                <img
                  src="img/articles/articles_01.png"
                  alt=""
                  class="blog-articles__img"
                />
                <div class="blog-articles__info">
                  <span class="blog-articles__date">23 марта 2021</span>
                  <span class="blog-articles__title">
                    29 Motivational Quotes for Work Environments
                  </span>
                  <a href="#" class="blog-articles__link">Читать</a>
                </div>
                <!-- /.blog-articles__info -->
              </div>
              <!-- /.blog-articles__item -->

              <div class="blog-articles__item">
                <img
                  src="img/articles/articles_02.png"
                  alt=""
                  class="blog-articles__img"
                />
                <div class="blog-articles__info">
                  <span class="blog-articles__date">28 апреля 2021</span>
                  <span class="blog-articles__title">
                    Learn To Love Growth and You Will Be A Success
                  </span>
                  <a href="#" class="blog-articles__link">Читать</a>
                </div>
                <!-- /.blog-articles__info -->
              </div>
              <!-- /.blog-articles__item -->

              <div class="blog-articles__item">
                <img
                  src="img/articles/articles_03.png"
                  alt=""
                  class="blog-articles__img"
                />
                <div class="blog-articles__info">
                  <span class="blog-articles__date">04 сентября 2021</span>
                  <span class="blog-articles__title">
                    Motivation How To Build Trust at your Work
                  </span>
                  <a href="#" class="blog-articles__link">Читать</a>
                </div>
                <!-- /.blog-articles__info -->
              </div>
              <!-- /.blog-articles__item -->

              <!-- \\\статьи -->
            </div>
            <!-- /.blog-articles__wrap -->
          </div>
          <!-- /.blog-articles -->
        </div>
        <!-- /.blog-container -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.blog -->
    <section class="newsletter">
      <div class="container">
        <div class="newsletter-container">
          <h3 class="newsletter__title">
            Будь первым, кто&nbsp;узнает о&nbsp;наших акциях
          </h3>
          <form action="#" method="POST" class="newsletter__form validate-form">
            <div class="newsletter__block">
              <label class="newsletter__icon" for="newsletter"> </label>
              <input
                type="email"
                class="newsletter__input"
                placeholder="Ваш E-mail"
                name="email"
                id="newsletter"
                required
              />
            </div>
            <button class="newsletter__button" type="submit">
              Регистрация
            </button>
          </form>
        </div>
        <!-- /.newsletter-container -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.newsletter -->

    <footer class="footer">
      <div class="container">
        <div class="footer-container">
          <div class="footer-content">
            <div class="footer-content__main">
              <a href="#" class="logo">
                <img
                  src="img/logo.svg"
                  alt="Logo: Ehya-Bookstore"
                  class="logo__img footer-content__logo"
                />
              </a>
              <p class="footer-content__text">
                Создайте современный и креативный веб-сайт с crealand
              </p>
              <div class="footer-content__socials socials">
                <a href="#" class="socials__link">
                  <img
                    src="img/socials/icon_google.svg"
                    alt=""
                    class="socials__img"
                  />
                </a>
                <a href="#" class="socials__link"
                  ><img
                    src="img/socials/icon_tveeter.svg"
                    alt=""
                    class="socials__img"
                  />
                </a>
                <a href="#" class="socials__link"
                  ><img
                    src="img/socials/icon_instagram.svg"
                    alt=""
                    class="socials__img"
                  />
                </a>
                <a href="#" class="socials__link"
                  ><img
                    src="img/socials/icon_linkedin.svg"
                    alt=""
                    class="socials__img"
                  />
                </a>
              </div>
              <!-- /.footer-content__socials socials -->
            </div>
            <!-- /.footer-content__main -->
            <div class="footer-content__item">
              <h3 class="footer-content__subtitle">Продукт</h3>
              <div class="footer-content__links">
                <a href="" class="footer-content__link">Лэндинг</a>
                <a href="" class="footer-content__link">Функции</a>
                <a href="" class="footer-content__link">Документация</a>
                <a href="" class="footer-content__link">Скидки</a>
                <a href="" class="footer-content__link">Расценки</a>
              </div>
              <!-- /.footer-content__links -->
            </div>
            <!-- /.footer-content__item -->

            <div class="footer-content__item">
              <h3 class="footer-content__subtitle">Сервисы</h3>
              <div class="footer-content__links">
                <a href="" class="footer-content__link">Документация</a>
                <a href="" class="footer-content__link">Дизайн</a>
                <a href="" class="footer-content__link">Темы</a>
                <a href="" class="footer-content__link">Иллюстрации</a>
                <a href="" class="footer-content__link">UI Kit</a>
              </div>
              <!-- /.footer-content__links -->
            </div>
            <!-- /.footer-content__item -->

            <div class="footer-content__item">
              <h3 class="footer-content__subtitle">Компания</h3>
              <div class="footer-content__links">
                <a href="" class="footer-content__link">О нас</a>
                <a href="" class="footer-content__link">Условия</a>
                <a href="" class="footer-content__link">Privacy Policy</a>
                <a href="" class="footer-content__link">Careers</a>
              </div>
              <!-- /.footer-content__links -->
            </div>
            <!-- /.footer-content__item -->

            <div class="footer-content__item">
              <h3 class="footer-content__subtitle">Еще..</h3>
              <div class="footer-content__links">
                <a href="" class="footer-content__link">Документация</a>
                <a href="" class="footer-content__link">Лицензия</a>
                <a href="" class="footer-content__link">Изменения</a>
              </div>
              <!-- /.footer-content__links -->
            </div>
            <!-- /.footer-content__item -->
          </div>
          <!-- /.footer-content -->
          <div class="footer-bottom">
            <img
              src="img/icon_with_love.svg"
              alt=""
              class="footer-bottom__img"
            />
            <span class="footer-bottom__copyright"
              >Copyright © 2019. Crafted with love.</span
            >
          </div>
          <!-- /.footer-bottom -->
        </div>
        <!-- /.footer-container -->
      </div>
    </footer>
    <!-- /.footer -->

    <div class="container container--mobile">
      <div class="menu menu--mobile" id="menu">
        <nav class="menu__links menu__links--mobile">
          <div class="menu__item menu__item--mobile">
            <a href="#" class="menu__link">Рекомендации</a>
          </div>
          <div class="menu__item menu__item--mobile">
            <a href="#" class="menu__link">Книги</a>
          </div>
          <div class="menu__item menu__item--mobile">
            <a href="#" class="menu__link">Блог</a>
          </div>
        </nav>
        <button
          class="
            button button--void
            menu__button menu__button--mobile
            castModal
          "
        >
          Получить
        </button>
      </div>
    </div>
    <!-- /.container -->

    <div class="modal">
      <div class="modal__wrapper"></div>
      <!-- /.modal__wrapper -->
      <div class="modal__window">
        <button class="modal__close">
          <img src="img/modal_close.svg" alt="Icon: close" />
        </button>
        <div class="modal__contact-form form">
          <h3 class="modal__title">Оформить заказ</h3>
          <form action="#" method="POST" class="modal__form validate-form">
            <input
              type="text"
              class="input modal__input"
              placeholder="*Ваше имя"
              name="name"
              minlength="2"
              required
            />
            <input
              type="tel"
              class="input modal__input phone"
              placeholder="*Номер телефона"
              name="phone"
              required
            />
            <input
              type="email"
              class="input modal__input"
              placeholder="*Ваш Email"
              name="email"
              required
            />

            <div class="modal__form__bottom">
              <button class="modal__button form__button" type="submit">
                Отправить
              </button>
              <span class="modal__required form__required"
                >*Обязательные поля</span
              >
            </div>
            <!-- /.modal__form__bottom -->
          </form>
        </div>
        <!-- /.modal__contact-form -->
      </div>
      <!-- /.modal__window -->
    </div>
    <!-- /.modal -->
  </body>
</html>