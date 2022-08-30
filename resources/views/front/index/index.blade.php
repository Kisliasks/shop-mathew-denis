@extends('front.layouts.main')
@section('content')
<main>
    <h1 class="visually-hidden">Сайт магазина Girobay</h1>
    <section class="main-preview container">
      <h2 class="visually-hidden">У нас вы найдете</h2>
      <div class="main-preview-slider-wrapper">
        <div class="main-preview-slide-content first-slide">
          <p class="slide-title">Электротранспорт</p>
          <p class="slide-text">Для модных и активных</p>
          <a class="slide-button" href="#">Смотреть товары</a>
        </div>
        <div class="slider-controls">
          <button class="current" type="button" aria-label="Первый слайд"></button>
          <button type="button" aria-label="Второй слайд"></button>
          <button type="button" aria-label="Третий слайд"></button>
          <button type="button" aria-label="Четвертый слайд"></button>
        </div>
      </div>
      <div class="main-preview-categories-wrapper">
        <ul class="preview-categories-list">
          <li class="preview-categories-item">
            <a class="electro-kick-scooters" href="#">Электросамокаты</a>
          </li>
          <li class="preview-categories-item">
            <a class="electro-scooters" href="#">Электроскутеры</a>
          </li>
          <li class="preview-categories-item">
            <a class="electro-bikes" href="#">Электровелосипеды</a>
          </li>
          <li class="preview-categories-item">
            <a class="gyroscooters" href="#">Гироскутеры</a>
          </li>
          <li class="preview-categories-item">
            <a class="monocolous" href="#">Моноколесы</a>
          </li>
          <li class="preview-categories-item">
            <a class="segways" href="#">Сигвеи</a>
          </li>
        </ul>
          <a class="preview-categories-more" href="#">Еще</a>
      </div>
    </section>
    <section class="popular-categories container">
      <h2 class="pages-headers popular-categories-header">Популярные категории</h2>
      <ul class="popular-categories-list">
        <li class="popular-categories-item">
          <a class="popular-electro-scooter-citycoco" href="#">Электроскутеры<br> Citycoco</a>
        </li>
        <li class="popular-categories-item">
          <a class="popular-for-kids" href="#">Электросамокаты<br> для детей</a>
        </li>
        <li class="popular-categories-item">
          <a class="popular-kick-scooters" href="#">Электросамокаты<br> для взрослых</a>
        </li>
        <li class="popular-categories-item">
          <a class="popular-kick-scooters-kugoo" href="#">Электросамокаты<br> kugoo</a>
        </li>
      </ul>
    </section>
    <section class="new container">
      <div class="new-head">
        <h2 class="pages-headers">Новинки</h2>
        <a class="view-all" href="#">Смотреть всё</a>
      </div>
      <ul class="new-list">
        <li class="new-item product-item product-item-sale">
          <img class="product-card-menu-container" src="{{ asset('client/images/products/electro-scooter.jpg') }}   " width="216" height="143" alt="Изображение Электроскутера Kugoo C6 Pro">
          <div class="product-card-menu product-card-menu-container">
            <h3 class="product-name">
              <a href="#">Электроскутер Kugoo C6 Pro</a>
            </h3>
            <div class="product-price-article-wrapper">
              <div class="new-old-price-wrapper">
                <p class="old-price"><s>109 900 ₽</s></p>
                <p class="price new-price">99 900 ₽</p>
              </div>
              <p class="product-article">Артикул: 69846</p>
            </div>
            <a class="to-basket-button" href="#" aria-label="Добавить Электроскутер Kugoo C6 Pro в корзину">В корзину</a>
            <a class="fast-button" href="#" aria-label="Заказать Электроскутер Kugoo C6 Pro быстро">Быстрый заказ</a>
          </div>
          <div class="product-card-buttons">
            <button class="to-comparison-button" type="button" aria-label="Добавить к сравнению"></button>
            <button class="to-favorites-button" type="button" aria-label="Добавить в избранное"></button>
          </div>
          <dl class="product-sublist product-characteristics-list">
            <div class="product-card-menu-container">
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-power">Мощность</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-mileage">Пробег</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-speed">Скорость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-capacity">Ёмкость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-load">Нагрузка</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-diameter">Диаметр</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-weight">Масса</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-time">Время зарядки</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
            </div>
          </dl>
        </li>
        <li class="new-item product-item">
            <img class="product-card-menu-container" src="{{ asset('client/images/products/electro-kick-scooter.jpg') }}   " width="216" height="143" alt="Изображение Электроскутера Kugoo C6 Pro">
            <div class="product-card-menu product-card-menu-container">
              <h3 class="product-name">
                <a href="#">Электроскутер Kugoo C6 Pro</a>
              </h3>
              <div class="product-price-article-wrapper">
                <p class="price">99 900 ₽</p>
                <p class="product-article">Артикул: 69846</p>
              </div>
              <a class="to-basket-button" href="#" aria-label="Добавить Электроскутер Kugoo C6 Pro в корзину">В корзину</a>
              <a class="fast-button" href="#" aria-label="Заказать Электроскутер Kugoo C6 Pro быстро">Быстрый заказ</a>
            </div>
            <div class="product-card-buttons">
              <button class="to-comparison-button" type="button" aria-label="Добавить к сравнению"></button>
              <button class="to-favorites-button" type="button" aria-label="Добавить в избранное"></button>
            </div>
            <dl class="product-sublist product-characteristics-list">
              <div class="product-card-menu-container">
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-power">Мощность</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-mileage">Пробег</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-speed">Скорость</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-capacity">Ёмкость</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-load">Нагрузка</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-diameter">Диаметр</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-weight">Масса</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-time">Время зарядки</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
              </div>
            </dl>
        </li>
        <li class="new-item product-item">
          <img class="product-card-menu-container" src="{{ asset('client/images/products/electro-monocolou.jpg') }}   " width="216" height="143" alt="Изображение Электроскутера Kugoo C6 Pro">
          <div class="product-card-menu product-card-menu-container">
            <h3 class="product-name">
              <a href="#">Электроскутер Kugoo C6 Pro</a>
            </h3>
            <div class="product-price-article-wrapper">
              <p class="price">99 900 ₽</p>
              <p class="product-article">Артикул: 69846</p>
            </div>
            <a class="to-basket-button" href="#" aria-label="Добавить Электроскутер Kugoo C6 Pro в корзину">В корзину</a>
            <a class="fast-button" href="#" aria-label="Заказать Электроскутер Kugoo C6 Pro быстро">Быстрый заказ</a>
          </div>
          <div class="product-card-buttons">
            <button class="to-comparison-button" type="button" aria-label="Добавить к сравнению"></button>
            <button class="to-favorites-button" type="button" aria-label="Добавить в избранное"></button>
          </div>
          <dl class="product-sublist product-characteristics-list">
            <div class="product-card-menu-container">
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-power">Мощность</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-mileage">Пробег</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-speed">Скорость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-capacity">Ёмкость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-load">Нагрузка</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-diameter">Диаметр</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-weight">Масса</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-time">Время зарядки</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
            </div>
          </dl>
        </li>
        <li class="new-item product-item">
          <img class="product-card-menu-container" src="{{ asset('client/images/products/kick-scooter.jpg') }}   " width="216" height="143" alt="Изображение Электроскутера Kugoo C6 Pro">
          <div class="product-card-menu product-card-menu-container">
            <h3 class="product-name">
              <a href="#">Электроскутер Kugoo C6 Pro</a>
            </h3>
            <div class="product-price-article-wrapper">
              <p class="price">99 900 ₽</p>
              <p class="product-article">Артикул: 69846</p>
            </div>
            <a class="to-basket-button" href="#" aria-label="Добавить Электроскутер Kugoo C6 Pro в корзину">В корзину</a>
            <a class="fast-button" href="#" aria-label="Заказать Электроскутер Kugoo C6 Pro быстро">Быстрый заказ</a>
          </div>
          <div class="product-card-buttons">
            <button class="to-comparison-button" type="button" aria-label="Добавить к сравнению"></button>
            <button class="to-favorites-button" type="button" aria-label="Добавить в избранное"></button>
          </div>
          <dl class="product-sublist product-characteristics-list">
            <div class="product-card-menu-container">
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-power">Мощность</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-mileage">Пробег</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-speed">Скорость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-capacity">Ёмкость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-load">Нагрузка</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-diameter">Диаметр</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-weight">Масса</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-time">Время зарядки</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
            </div>
          </dl>
        </li>
      </ul>
      <div class="next-products-wrapper">
        <button class="next-products" type="button" aria-label="Следующие товары"></button>
      </div>
    </section>
    <section class="stoks container">
      <div class="stoks-head">
        <h2 class="pages-headers">Акционные товары</h2>
        <a class="view-all" href="#">Смотреть всё</a>
      </div>
      <ul class="stoks-list">
        <li class="new-item product-item product-item-sale">
          <img class="product-card-menu-container" src="{{ asset('client/images/products/electro-scooter.jpg') }}   " width="216" height="143" alt="Изображение Электроскутера Kugoo C6 Pro">
          <div class="product-card-menu product-card-menu-container">
            <h3 class="product-name">
              <a href="#">Электроскутер Kugoo C6 Pro</a>
            </h3>
            <div class="product-price-article-wrapper">
              <div class="new-old-price-wrapper">
                <p class="old-price"><s>109 900 ₽</s></p>
                <p class="price new-price">99 900 ₽</p>
              </div>
              <p class="product-article">Артикул: 69846</p>
            </div>
            <a class="to-basket-button" href="#" aria-label="Добавить Электроскутер Kugoo C6 Pro в корзину">В корзину</a>
            <a class="fast-button" href="#" aria-label="Заказать Электроскутер Kugoo C6 Pro быстро">Быстрый заказ</a>
          </div>
          <div class="product-card-buttons">
            <button class="to-comparison-button" type="button" aria-label="Добавить к сравнению"></button>
            <button class="to-favorites-button" type="button" aria-label="Добавить в избранное"></button>
          </div>
          <dl class="product-sublist product-characteristics-list">
            <div class="product-card-menu-container">
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-power">Мощность</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-mileage">Пробег</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-speed">Скорость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-capacity">Ёмкость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-load">Нагрузка</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-diameter">Диаметр</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-weight">Масса</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-time">Время зарядки</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
            </div>
          </dl>
        </li>
        <li class="stoks-item product-item">
            <img class="product-card-menu-container" src="{{ asset('client/images/products/electro-kick-scooter.jpg') }}   " width="216" height="143" alt="Изображение Электроскутера Kugoo C6 Pro">
            <div class="product-card-menu product-card-menu-container">
              <h3 class="product-name">
                <a href="#">Электроскутер Kugoo C6 Pro</a>
              </h3>
              <div class="product-price-article-wrapper">
                <p class="price">99 900 ₽</p>
                <p class="product-article">Артикул: 69846</p>
              </div>
              <a class="to-basket-button" href="#" aria-label="Добавить Электроскутер Kugoo C6 Pro в корзину">В корзину</a>
              <a class="fast-button" href="#" aria-label="Заказать Электроскутер Kugoo C6 Pro быстро">Быстрый заказ</a>
            </div>
            <div class="product-card-buttons">
              <button class="to-comparison-button" type="button" aria-label="Добавить к сравнению"></button>
              <button class="to-favorites-button" type="button" aria-label="Добавить в избранное"></button>
            </div>
            <dl class="product-sublist product-characteristics-list">
              <div class="product-card-menu-container">
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-power">Мощность</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-mileage">Пробег</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-speed">Скорость</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-capacity">Ёмкость</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-load">Нагрузка</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-diameter">Диаметр</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-weight">Масса</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
                <div class="product-sublist-item">
                  <dt class="product-characteristic-item product-characteristic-time">Время зарядки</dt>
                  <dd class="product-characteristic-description">00</dd>
                </div>
              </div>
            </dl>
        </li>
        <li class="stoks-item product-item">
          <img class="product-card-menu-container" src="{{ asset('client/images/products/electro-monocolou.jpg') }} " width="216" height="143" alt="Изображение Электроскутера Kugoo C6 Pro">
          <div class="product-card-menu product-card-menu-container">
            <h3 class="product-name">
              <a href="#">Электроскутер Kugoo C6 Pro</a>
            </h3>
            <div class="product-price-article-wrapper">
              <p class="price">99 900 ₽</p>
              <p class="product-article">Артикул: 69846</p>
            </div>
            <a class="to-basket-button" href="#" aria-label="Добавить Электроскутер Kugoo C6 Pro в корзину">В корзину</a>
            <a class="fast-button" href="#" aria-label="Заказать Электроскутер Kugoo C6 Pro быстро">Быстрый заказ</a>
          </div>
          <div class="product-card-buttons">
            <button class="to-comparison-button" type="button" aria-label="Добавить к сравнению"></button>
            <button class="to-favorites-button" type="button" aria-label="Добавить в избранное"></button>
          </div>
          <dl class="product-sublist product-characteristics-list">
            <div class="product-card-menu-container">
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-power">Мощность</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-mileage">Пробег</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-speed">Скорость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-capacity">Ёмкость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-load">Нагрузка</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-diameter">Диаметр</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-weight">Масса</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-time">Время зарядки</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
            </div>
          </dl>
        </li>
        <li class="stoks-item product-item">
          <img class="product-card-menu-container" src="{{ asset('client/images/products/kick-scooter.jpg') }}   " width="216" height="143" alt="Изображение Электроскутера Kugoo C6 Pro">
          <div class="product-card-menu product-card-menu-container">
            <h3 class="product-name">
              <a href="#">Электроскутер Kugoo C6 Pro</a>
            </h3>
            <div class="product-price-article-wrapper">
              <p class="price">99 900 ₽</p>
              <p class="product-article">Артикул: 69846</p>
            </div>
            <a class="to-basket-button" href="#" aria-label="Добавить Электроскутер Kugoo C6 Pro в корзину">В корзину</a>
            <a class="fast-button" href="#" aria-label="Заказать Электроскутер Kugoo C6 Pro быстро">Быстрый заказ</a>
          </div>
          <div class="product-card-buttons">
            <button class="to-comparison-button" type="button" aria-label="Добавить к сравнению"></button>
            <button class="to-favorites-button" type="button" aria-label="Добавить в избранное"></button>
          </div>
          <dl class="product-sublist product-characteristics-list">
            <div class="product-card-menu-container">
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-power">Мощность</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-mileage">Пробег</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-speed">Скорость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-capacity">Ёмкость</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-load">Нагрузка</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-diameter">Диаметр</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-weight">Масса</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
              <div class="product-sublist-item">
                <dt class="product-characteristic-item product-characteristic-time">Время зарядки</dt>
                <dd class="product-characteristic-description">00</dd>
              </div>
            </div>
          </dl>
        </li>
      </ul>
      <div class="next-products-wrapper">
        <button class="next-products" type="button" aria-label="Следующие товары"></button>
      </div>
    </section>
    <section class="video-reviews container">
      <h2 class="pages-headers">Видеообзоры техники</h2>
      <ul class="sort-list video-reviews-sort-list">
        <li class="sort-item video-reviews-sort-item video-reviews-sort-item video-reviews-sort-item-active">
          <a href="#">Все</a>
        </li>
        <li class="sort-item video-reviews-sort-item video-reviews-sort-item">
          <a href="#">Электроскутеры</a>
        </li>
        <li class="sort-item video-reviews-sort-item">
          <a href="#">Электросамокаты</a>
        </li>
      </ul>
      <ul class="video-reviews-list">
        <li class="video-reviews-item">
          <img class="video-reviews-image" src="{{ asset('client/images/video-citycoco-ws-mini-r-1200w.jpg') }}   " width="261" height="298" alt="Изображение самокаката Citycoco ws-mini r 1200W">
          <div class="video-reviews-item-menu">
            <a class="video-review-button" href="#">Видеообзор</a>
            <h3 class="video-review-title">Citycoco ws-mini<br> r 1200w</h3>
          </div>
        </li>
        <li class="video-reviews-item">
          <img class="video-reviews-image" src="{{ asset('client/images/video-yokamura-raptor-11.jpg') }}  " width="261" height="298" alt="Изображение Yokamura raptor 11">
          <div class="video-reviews-item-menu">
            <a class="video-review-button" href="#">Видеообзор</a>
            <h3 class="video-review-title">Yokamura raptor 11</h3>
          </div>
        </li>
        <li class="video-reviews-item">
          <img class="video-reviews-image" src="{{ asset('client/images/video-mini-citycoco-gt-x4.jpg') }}   " width="261" height="298" alt="Изображение Mini sitycoco gt x4">
          <div class="video-reviews-item-menu">
            <a class="video-review-button" href="#">Видеообзор</a>
            <h3 class="video-review-title">Mini citycoco gt x4</h3>
          </div>
        </li>
        <li class="video-reviews-item-more video-reviews-view-all">
          <div class="video-reviews-item-more-wrapper">
            <h3 class="video-review-title video-view-all-title">Видеообзоры техники</h3>
            <a class="video-view-all-button" href="#">Смотреть больше</a>
          </div>
        </li>
      </ul>
    </section>
    <section class="brands container">
      <h2 class="pages-headers">Бренды</h2>
      <ul class="brands-list">
        <li class="brands-item">
          <a href="#">
            <img src="{{ asset('client/images/products/brands/ninebot-logo.png') }}   " width="161" height="102" alt="Логотип компании Ninebot">
          </a>
        </li>
        <li class="brands-item">
          <a href="#">
            <img src="{{ asset('client/images/products/brands/ultron-logo.png') }}   " width="161" height="102" alt="Логотип компании Ultron">
          </a>
        </li>
        <li class="brands-item">
          <a href="#">
            <img src="{{ asset('client/images/products/brands/e-twow-logo.jpg') }}   " width="161" height="102" alt="Логотип компании E-twow">
          </a>
        </li>
        <li class="brands-item">
          <a href="#">
            <img src="{{ asset('client/images/products/brands/ws-logo.png') }}   " width="161" height="102" alt="Логотип компании WS">
          </a>
        </li>
        <li class="brands-item">
          <a href="#">
            <img src="{{ asset('client/images/products/brands/gw-logo.jpg') }}   " width="161" height="102" alt="Логотип компании GW">
          </a>
        </li>
      </ul>
      <div class="next-brands-wrapper">
        <button class="next-products next-brands" type="button" aria-label="Следующие бренды"></button>
      </div>
    </section>
      <article class="for-you container">
        <h2 class="visually-hidden">Для вас</h2>
        <div class="for-you-content-container">
          <p class="for-you-title">Ты точно найдешь своё!</p>
          <ul class="for-you-list">
            <li class="for-you-item">
              <a href="#">Самые мощные электросамокаты</a>
            </li>
            <li class="for-you-item">
              <a href="#">Тренды 2021 года</a>
            </li>
            <li class="for-you-item">
              <a href="#">Оранжевые электровелосипеды</a>
            </li>
            <li class="for-you-item">
              <a href="#">Новинки от Citycoco</a>
            </li>
            <li class="for-you-item">
              <a href="#">Топ 10 самокатов для взрослых</a>
            </li>
            <li class="for-you-item">
              <a href="#">Оранжевые электровелосипеды</a>
            </li>
            <li class="for-you-item">
              <a href="#">Новинки от Citycoco</a>
            </li>
            <li class="for-you-item">
              <a href="#">Топ 10 самокатов для взрослых</a>
            </li>
            <li class="for-you-item">
              <a href="#">Новинки от Citycoco</a>
            </li>
            <li class="for-you-item">
              <a href="#">Самокаты с сиденьем</a>
            </li>
            <li class="for-you-item">
              <a href="#">Электросамокаты kugoo</a>
            </li>
            <li class="for-you-item">
              <a href="#">Самые лёгкие самокаты</a>
            </li>
            <li class="for-you-item">
              <a href="#">Электроскутеры для бездорожья</a>
            </li>
            <li class="for-you-item">
              <a href="#">Новинки для детей</a>
            </li>
            <li class="for-you-item">
              <a href="#">Для тех кто не боится скорости</a>
            </li>
            <li class="for-you-item">
              <a href="#">Новинки от Citycoco</a>
            </li>
            <li class="for-you-item">
              <a href="#">Лучшие решения для города</a>
            </li>
            <li class="for-you-item">
              <a href="#">Новинки от Citycoco</a>
            </li>
          </ul>
      </article>
    </div>
    <section class="about container">
      <h2 class="visually-hidden">О нас</h2>
      <div class="about-content-container">
        <p class="about-title">Girobay - это</p>
        <ul class="about-list">
          <li class="about-item">
            Высокие требования к качеству обслуживания клиентов
          </li>
          <li class="about-item">
            Представлен лучший ассортимент, который подбирался опираясь на отзывы наших клиентов и собственное тестирование товара
          </li>
          <li class="about-item">
            Товар есть в наличии, а если вдруг интересующий вас товар отсутствует, то наши менеджеры подберут для вас похожий товар или в ближайшее время мы привезем для вас необходимый
          </li>
          <li class="about-item">
            Удобная навигация на сайте.
          </li>
          <li class="about-item">
            Мы предлагаем доставку в день заказа*( действует по г. Москве) и доставку по России
          </li>
        </ul>
      </div>
    </section>
    <section class="advantages container">
      <h2 class="visually-hidden">Нашии преимущества</h2>
      <ul class="advantages-list">
        <li class="advantages-item advantages-test-drive">
          Бесплатный тест-драйв<br> и обучение
        </li>
        <li class="advantages-item advantages-guarantee">
          Гарантия и сервис
        </li>
        <li class="advantages-item advantages-fast-delivery">
          Быстрая и удобная<br> доставка
        </li>
        <li class="advantages-item advantages-low-price"
        >Актуально низкие цены
      </li>
      </ul>
    </section>
    <blockquote class="reviews container">
      <div class="reviews-content-container">
        <h2 class="reviews-title">Отзывы покупателей</h2>
        <p class="review-text">
          Уже два раза приходилось купить гироскутер. Первый гироскутер купил для сына, очень он его просил. Друзья ему посоветовали именно этого производителя, проверен на практике. Второй гироскутер купил уже дочке, когда подросла, чтоб не дрались с братом за него. Честно сказать ничего не жалко, лишь бы у детей было счастливое детство. Да и гироскутеры сделаны вполне качественно, ни разу ещё не ломались, заряд держат долго.
        </p>
        <cite class="review-author">Алексей Никонов, Санкт-Петербург</cite>
      </div>
      <div class="previous-review-button-wrapper">
        <button class="previous-review previous-next-review-button" type="button" aria-label="Предыдущий отзыв"></button>
      </div>
      <div class="next-review-button-wrapper">
        <button class="next-review previous-next-review-button" type="button" aria-label="Следующий отзыв"></button>
      </div>
      <div class="reviews-slider-controls">
        <button class="current" type="button" aria-label="Первый слайд"></button>
        <button type="button" aria-label="Второй слайд"></button>
        <button type="button" aria-label="Третий слайд"></button>
        <button type="button" aria-label="Четвёртый слайд"></button>
        <button type="button" aria-label="Пятый слайд"></button>
        <button type="button" aria-label="Шестой слайд"></button>
        <button type="button" aria-label="Седьмой слайд"></button>
      </div>
    </blockquote>
  </main>

  @endsection