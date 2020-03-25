<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <?php foreach ($categories as $value):?>
            <!--Реализация показа лотов с помощью цикла foreach и двумерного асоциативного массива-->
            <li class="promo__item <?= $value['c_style']?>">
                <a class="promo__link" href="all-lots.html"><?= $value['title']?></a>
            </li>
            <!--Реализация показа лотов с помощью цикла foreach и двумерного асоциативного массива ^ -->
            <?php endforeach;?>
            <!--<li class="promo__item promo__item--attachment"> <a class="promo__link" href="all-lots.html">Крепления</a> </li> <li class="promo__item promo__item--boots"> <a class="promo__link" href="all-lots.html">Ботинки</a> </li> <li class="promo__item
            promo__item--clothing"> <a class="promo__link" href="all-lots.html">Одежда</a> </li> <li class="promo__item promo__item--tools"> <a class="promo__link" href="all-lots.html">Инструменты</a> </li> <li class="promo__item promo__item--other"> <a
            class="promo__link" href="all-lots.html">Разное</a> </li>-->
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <!--Реализация показа лотов с помощью цикла foreach и двумерного асоциативного массива-->
            <?php foreach ($products as $key => $value): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?=esc($value['u_image'])?>" width="350" height="260" alt="Сноуборд">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?=esc($value['category'])?></span>
                    <h3 class="lot__title">
                        <!-- Реализован переход по ссылкам используя ID массива -->
                        <a class="text-link" href="lot.php?id=<?= $key; ?>"><?=esc($value['title'])?></a>
                        <!-- Реализован переход по ссылкам используя ID массива ^ -->
                    </h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <!--Вызов функции форматирования цены-->
                            <span class="lot__cost"><?= str(cost_format($value['cost']))?>
                                <!--Вызов функции форматирования цены ^ -->
                                <b class="rub">р</b>
                                <!--visibility: hidden;-->
                            </span>
                        </div>
                        <div class="lot__timer timer"><?= lotLifeTime(); ?></div>
                    </div>
                </div>
            </li>
            <?php endforeach?>
            <!--Реализация показа лотов с помощью цикла foreach и двумерного асоциативного массива ^-->
        </ul>
    </section>
</main>
