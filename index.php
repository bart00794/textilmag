<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Купить текстиль оптом \"ТекстильМаг\": полотенца, кухонные наборы, фартуки, скатерти");
?>

<?if(false){?>
    <div class="banner-area pt--80 pt-md--60 pb--30 pb-md--25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-box banner-type-5 banner-hover-3">
                        <div class="banner-inner">
                            <div class="banner-image">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/m05-banner1.jpg" alt="Banner">
                            </div>
                            <div class="banner-info">
                                <div class="banner-info--inner">
                                    <p class="banner-title-1 lts-10 lts-xs-0 font-bold text-uppercase">Checked Shirt</p>
                                    <p class="banner-title-4 mtb--10">
                                        <span>Sale</span>
                                        <span>50%</span>
                                    </p>
                                    <p class="banner-title-5 mt--10 mb--20">Don't Miss This Chance</p>
                                </div>
                                <a class="btn btn-medium btn-style-1 btn-bordered mt--30 mt-lg--10" href="shop-sidebar.html">Shop Now</a>
                            </div>
                            <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-box banner-type-5 banner-hover-3">
                        <div class="banner-inner">
                            <div class="banner-image">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/m05-banner2.jpg" alt="Banner">
                            </div>
                            <div class="banner-info">
                                <div class="banner-info--inner">
                                    <p class="banner-title-6">Woman Dress 2018</p>
                                    <p class="heading-bigger color--white text-capitalize">Sale 30%</p>
                                    <p class="banner-title-1 lts-10 lts-xl-1 text-uppercase font-weight-700 mb--20">Don't Miss This Chance</p>
                                </div>
                                <a class="btn btn-medium btn-style-1 btn-bordered mt--30 mt-lg--10" href="shop-sidebar.html">Shop Now</a>
                            </div>
                            <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?}?>
    <!-- Product tab area Start Here -->
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", ".default", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "products",	// Тип инфоблока
		"IBLOCK_ID" => "2",	// Инфоблок
		"SECTION_ID" => "",	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
		"TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "NAME",
			1 => "PICTURE",
			2 => "",
		),
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
		"VIEW_MODE" => "TILE",	// Вид списка подразделов
		"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"HIDE_SECTION_NAME" => "Y",	// Не показывать названия подразделов
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>