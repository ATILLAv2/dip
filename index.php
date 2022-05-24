<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ремонт стиральных машин с выездом на дом</title>
    <link rel="stylesheet" href="./style.css">
    <script src="js/jquery.js"></script>
    <script src="js/form1.js"></script>
</head>

<body>

    <?php
    $conn = mysqli_connect("chuc.caseum.ru:33333", "st_2_18_28", "63567181", "is_2_18_st28_VKR");
    
    ?>
    <div class="header">
        <div class="header_container">
            <nav> <a href="#page_link_1">Стоимость ремонта</a> <a href="#anchor_5">О мастере</a> <a href="#">Отзывы</a>
                <a href="#">Вопрос-ответ</a>
            </nav>
        </div>
    </div>

    <div class="main">
        <div class="center">
            <div class="conteiner">
                <div class="slide">
                    <h1>Ремонт бытовой техники <br>по Челябинску</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="price_grid">
        <div class="center">
            <div class="title">Стоимость ремонта техники <br> с типичными неисправностями</div>
            <div class="row">
                <div class="item">
                    <div class="content">
                        <div class="item_title">Стиральная машина<br>Не начинает стирку</div>
                        <div class="price_label">от 200 руб.</div>
                        <p>Может потребоваться:</p>
                        <ul>
                            <li> Замена температурного датчика</li>
                            <li> Замена тэна</li>
                            <li> Устранение неисправности кнопки пуск/старт</li>
                        </ul>
                    </div>
                    <div class="btn btn_simple_rouned">узнать подробнее</div>
                </div>

                <div class="item">
                    <div class="content">
                        <div class="item_title">Посудомоечная машина<br>Не греет воду</div>
                        <div class="price_label">от 210 руб.</div>
                        <p>Может потребоваться:</p>
                        <ul>
                            <li> Замена температурного датчика</li>
                            <li> Замена тэна</li>
                            <li> Устранение программного сбоя</li>
                        </ul>
                    </div>
                    <div class="btn btn_simple_rouned">узнать подробнее</div>
                </div>

                <div class="item">
                    <div class="content">
                        <div class="item_title">Холодильник<br>Не морозит</div>
                        <div class="price_label">от 450 руб.</div>

                        <p>Может потребоваться:</p>
                        <ul>
                            <li> Замена термостата(терморегулятора)</li>
                            <li> Замена мотор-компрессора</li>
                            <li> Устранение утечки хладагента</li>
                            <li> Устранение засора фильтра</li>
                        </ul>
                    </div>
                    <div class="btn btn_simple_rouned">узнать подробнее</div>
                </div>

                <div class="item">
                    <div class="content">
                        <div class="item_title">Духовка не греет</div>
                        <div class="price_label">от 600 руб.</div>

                        <p>Может потребоваться:</p>
                        <ul>
                            <li> Замена термостата</li>
                            <li> Замена тэна</li>
                            <li> Замена переключателя</li>
                            <li> Ремонт модуля</li>
                        </ul>
                    </div>
                    <div class="btn btn_simple_rouned">узнать подробнее</div>
                </div>
            </div>
        </div>
    </div>

    <div class="request">
        <div class="center">
            <p class="title">РАСЧЕТ СТОИМОСТИ РЕМОНТА</p>

            <div class="shell_btn_repair">
                <button class="btn_repair button_washer btn_repair_on">стиральные машины</button>
                <button class="btn_repair button_dishwasher">посудомоечные машины</button>
                <button class="btn_repair button_fridge">холодильники</button>
            </div>

            <div class="request_grid_cover repair_washer">
                <form method="post">
                    <p class="label">Выберите неисправность</p>
                    <div class="checkbox_grid">
                        <label class="checkbox">
                            <input name="form_2[]" type="checkbox" value="Не набирается вода">
                            <span>Не набирается вода</span>
                        </label>
                        <label class="checkbox">
                            <input name="form_2[]" type="checkbox" value="Не включается">
                            <span>Не включается</span>
                        </label>
                        <label class="checkbox">
                            <input name="form_2[]" type="checkbox" value="Сильно шумит">
                            <span>Сильно шумит</span>
                        </label>
                        <label class="checkbox">
                            <input name="form_2[]" type="checkbox" value="Не работает слив">
                            <span>Не работает слив</span>
                        </label>
                        <label class="checkbox">
                            <input name="form_2[]" type="checkbox" value="Не крутится барабан">
                            <span>Не крутится барабан</span>
                        </label>
                        <label class="checkbox">
                            <input name="form_2[]" type="checkbox" value="Заблокировала люк">
                            <span>Заблокировала люк</span>
                        </label>
                        <label class="checkbox">
                            <input name="form_2[]" type="checkbox" value="Течет вода из-под машинки">
                            <span>Течет вода из-под машинки</span>
                        </label>
                        <label class="checkbox">
                            <input name="form_2[]" type="checkbox" value="Другая">
                            <span>Другая</span>
                        </label>
                    </div>
                    <div class="request_col">
                        <div class="select_cover">
                            <div class="select_cover_arrow"></div>
                            <select name="brand">
                                <option value="Не выбрано">Выберите бренд</option>
                                <option value="Aeg">Aeg</option>
                                <option value="Ardo">Ardo</option>
                                <option value="Ariston">Ariston</option>
                                <option value="Asko">Asko</option>
                                <option value="Beko">Beko</option>
                                <option value="Bosch">Bosch</option>
                                <option value="Brandt">Brandt</option>
                                <option value="Candy">Candy</option>
                                <option value="Electrolux">Electrolux</option>
                                <option value="Gorenje">Gorenje</option>
                                <option value="Indesit">Indesit</option>
                                <option value="Kaiser">Kaiser</option>
                                <option value="LG">LG</option>
                                <option value="Miele">Miele</option>
                                <option value="Samsung">Samsung</option>
                                <option value="Siemens">Siemens</option>
                                <option value="Tomson">Tomson</option>
                                <option value="Whirlpool">Whirlpool</option>
                                <option value="Zanussi">Zanussi</option>
                                <option value="Атлант">Атлант</option>
                                <option value="Другой">Другой</option>
                            </select>
                        </div>
                    </div>
                    <div class="request_col">
                        <input name="sendingphone" class="phone" type="text" placeholder="Введите номер телефона"
                            required>
                    </div>
                    <div class="request_col wide">
                        <button type="submit" class="btn btn_simple_yellow">Узнать стоимость ремонта</button>
                        <div class="call_us">
                            или позвоните нам
                            <div class="phone">+7 (343) 243-57-78</div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <div class="faq">
        <i class="anchor" id="anchor_5"></i>
        <div class="center">
            <p class="title">Вопрос — ответ</p>
            <div class="faq_cover">
                <div class="item">
                    <div class="head">
                        Какие неисправности можно устранить самостоятельно?
                    </div>
                    <div class="text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est minus enim tempore ex veniam libero
                        iusto iste quam a sed, sunt necessitatibus dignissimos perspiciatis molestiae ab ut quasi eaque
                        expedita, explicabo aspernatur. Quia natus possimus repudiandae quo unde impedit odit
                        voluptatibus veritatis. Quo ut ad et enim sapiente perferendis laudantium?
                    </div>
                </div>
                <div class="item">
                    <div class="head">
                        В каких случаях проводить ремонт нерентабельно, и проще купить новую технику?
                    </div>
                    <div class="text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione nostrum iure eos accusantium
                        ullam modi non architecto porro temporibus qui aut, consectetur consequuntur ab molestiae
                        possimus! Quam aliquid animi dolorem hic maxime libero numquam mollitia architecto, sequi
                        recusandae harum, illo veritatis similique officia quisquam id odit obcaecati molestiae soluta
                        dignissimos!
                    </div>
                </div>
                <div class="item">
                    <div class="head">
                        Как правильно ухаживать за стиральной машиной?
                    </div>
                    <div class="text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis voluptatem similique
                            maxime assumenda quaerat sint consequatur cumque nam pariatur atque tenetur optio corrupti
                            obcaecati omnis dolorum itaque illum voluptatum, quisquam quibusdam modi totam voluptas,
                            molestiae ea accusantium. Consequuntur, excepturi. Reiciendis omnis vel iste nemo, eum quam
                            qui! Numquam, laboriosam cupiditate.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="center">
            <div class="contact_block">
                <p>Ежедневно с 09.00 до 21.00</p>
            </div>
        </div>
    </footer>
</body>

</html>