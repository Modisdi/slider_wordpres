<?php if (have_rows('nav-menu')): ?>
<div class="section-menu">
    <div class="container">
        <nav>
            <div class="menu-icon btn-nav" id="menu-icon">
                <span class="menu-span"></span>
            </div>
            <ul class="disonss">
                <?php while (have_rows('nav-menu')): the_row(); ?>
                <li class="element-menu">
                    <a><?php the_sub_field('nav-menu-element') ?></a>
                </li>
                <li class="arrow-menu">
                <?php endwhile; ?>

            </ul>
        </nav>
    </div>
</div>
<?php endif; ?>



<?php if (have_rows('slider-carousel')): ?>
<div class="section-slider">
     <?php while (have_rows('slider-carousel')): the_row(); ?>
    <img class="carousel-img" src="<?php the_sub_field('slider-img') ?>" alt="<?php the_sub_field('slider-img-alt') ?>">
     <?php endwhile; ?>
    <div class="container">
        <button class="arrow left-arrow" type="button">
            <i>
                <img src="<?php the_field('slider-icon-arrow') ?>"></i>
        </button>
        <button class="arrow right-arrow" type="button">
            <i>
                <img src="<?php the_field('slider-icon-arrow') ?>"></i>
        </button>
    </div>
</div>
<?php endif; ?>
<div class="section-content">
    <div class="container">
        <div class="title-catalog">
            <ul>
                <li>
                    <a href="#" class="title-catalog-a1">Главная</a>
                    /
                </li>
                <li>
                    <a href="#" class="title-catalog-a2">Каталог</a>
                    /
                </li>
                <li>
                    <a href="#" class="title-catalog-a3">Бытовая техника</a>
                </li>
            </ul>
        </div>
        <div class="wrapper-catalog">
            <aside class="list-catalog">
                <nav>
                    <ul>
                        <li class="list-li-title">
                            <a class="list-a-title">Автомобили</a>
                            <ul>
                                <li>
                                    <a href="#">Микроволновки</a>
                                </li>
                                <li>
                                    <a href="#">Холодильники
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Посудомоечные машины
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Чайники</a>
                                </li>
                            </ul>
                        </li>

                        <li class="list-li-title display-block list-li-active">
                            <a class="list-a-title">Бытовая техника</a>
                            <ul>
                                <li>
                                    <a href="#" class="list-a-active">Микроволновки</a>
                                </li>
                                <li>
                                    <a href="#">Холодильники
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Посудомоечные машины
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Чайники</a>
                                </li>
                            </ul>
                        </li>

                        <li class="list-li-title">
                            <a class="list-a-title">Мобильная техника</a>
                            <ul>
                                <li>
                                    <a href="#">Микроволновки</a>
                                </li>
                                <li>
                                    <a href="#">Холодильники
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Посудомоечные машины
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Чайники</a>
                                </li>
                            </ul>
                        </li>

                        <li class="list-li-title">
                            <a class="list-a-title">Компьютеры</a>
                            <ul>
                                <li>
                                    <a href="#">Микроволновки</a>
                                </li>
                                <li>
                                    <a href="#">Холодильники
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Посудомоечные машины
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Чайники</a>
                                </li>
                            </ul>
                        </li>

                        <li class="list-li-title">
                            <a class="list-a-title">Одежда</a>
                            <ul>
                                <li>
                                    <a href="#">Микроволновки</a>
                                </li>
                                <li>
                                    <a href="#">Холодильники
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Посудомоечные машины
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Чайники</a>
                                </li>
                            </ul>
                        </li>

                        <li class="list-li-title">
                            <a class="list-a-title">Недвижимость</a>
                            <ul>
                                <li>
                                    <a href="#">Микроволновки</a>
                                </li>
                                <li>
                                    <a href="#" >Холодильники
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Посудомоечные машины
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Чайники</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    </li>
                    </ul>
                    <a href="#" class="price-list"><img src="img/price-list.png" alt="price-list">
                        <span>Прайс-лист</span>
                    </a>
                </nav>
            </aside>
            <div class="wrapper-table-catalog">
                <div class="table-catalog">
                    <div class="element-table">
                        <img src="img/catalog-foto.jpg">
                        <span class="table-text">Самый клевый чайник, который надо купить!</span>
                        <div class="price">
                            <span>1 900 р.</span>
                            <a href="#"/>
                            <i>
                                <img class="table-icon" src="img/icon/price.png" alt="price">
                            </i>
                            </a>
                        </div>
                    </div>

                    <div class="element-table">
                        <img src="img/catalog-foto.jpg">
                        <span class="table-text">Самый клевый чайник, который надо купить!</span>
                        <div class="price">
                            <span>1 900 р.</span>
                            <a href="#"/>
                            <i>
                                <img class="table-icon" src="img/icon/price.png" alt="price">
                            </i>
                            </a>
                        </div>
                    </div>

                    <div class="element-table">
                        <img src="img/catalog-foto.jpg">
                        <span class="table-text">Самый клевый чайник, который надо купить!</span>
                        <div class="price">
                            <span>1 900 р.</span>
                            <a href="#"/>
                            <i>
                                <img class="table-icon" src="img/icon/price.png" alt="price">
                            </i>
                            </a>
                        </div>
                    </div>

                    <div class="element-table">
                        <img src="img/catalog-foto.jpg">
                        <span class="table-text">Самый клевый чайник, который надо купить!</span>
                        <div class="price">
                            <span>1 900 р.</span>
                            <a href="#"/>
                            <i>
                                <img class="table-icon" src="img/icon/price.png" alt="price">
                            </i>
                            </a>
                        </div>
                    </div>
                    <div class="element-table">
                        <img src="img/catalog-foto.jpg">
                        <span class="table-text">Самый клевый чайник, который надо купить!</span>
                        <div class="price">
                            <span>1 900 р.</span>
                            <a href="#"/>
                            <i>
                                <img class="table-icon" src="img/icon/price.png" alt="price">
                            </i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <a>1</a>
                    <a>2</a>
                    <a class="pagination-a-active">3</a>
                    <a>4</a>
                    <a>5</a>
                    <a>6</a>
                    <a>7</a>
                </div>
                <hr>
                <div class="catalog-info">
                    <span class="info-span-1">Компания «Пиксель Плюс» существует более 6 лет, за это время мы принимали участие в разработке более чем 700 сайтов, поэтому можем уверенно
                        называть себя профессионалами. На данный момент наш коллектив состоит из более чем 30 сотрудников работающих в двух офисах в Москве и Зеленограде.
                        характерные для этого жанра мотивы: неразделённой любви, ухода молодости, угасания души. </span>
                    <span class="info-span-2">Одним из основных направлений работ нашей компании является поисковое продвижение сайтов, на данной момент мы работаем с более чем 150 постоянными
                        клиентами по более чем 11 000 поисковым запросам. При этом в работе основной акцент мы делаем на качестве работ, а так же применяем собственные
                        уникальные разработки в области SEO продвижения. На данный момент отдел SEO состоит из 9 человек под руководством ведущего специалиста, преимущественно
                        работающих в нашем московском офисе.</span>
                </div>
            </div>
        </div>


    </div>
</div>