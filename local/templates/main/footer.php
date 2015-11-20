<?php
/**
 * Created by PhpStorm.
 * User: Adasdad
 * Date: 06.11.2015
 * Time: 15:33
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<!-- Footer -->
<div id="footer">
    <p class="left">
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top_menu",
            Array(
                "COMPONENT_TEMPLATE" => ".default",
                "ROOT_MENU_TYPE" => "top",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(""),
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "N"
            )
        );?>
    </p>
    <p class="right">
        &copy; <?php echo date(Y);?> Книги
    </p>
    <p class="center">
        <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array( "COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/phonenumber.php" ));?>
    </p>
    <p class="sn">
		<?$APPLICATION->IncludeComponent("bitrix:news.list", "sn", Array(
			"COMPONENT_TEMPLATE" => ".default",
			"IBLOCK_TYPE" => "photos",	// Тип информационного блока (используется только для проверки)
			"IBLOCK_ID" => "42",	// Код информационного блока
			"NEWS_COUNT" => "20",	// Количество новостей на странице
			"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
			"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
			"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
			"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
			"FILTER_NAME" => "",	// Фильтр
			"FIELD_CODE" => array(	// Поля
				0 => "ID",
				1 => "NAME",
				2 => "SORT",
				3 => "PREVIEW_PICTURE",
				4 => "",
			),
			"PROPERTY_CODE" => array(	// Свойства
				0 => "URL",
				1 => "",
			),
			"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
			"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
			"AJAX_MODE" => "N",	// Включить режим AJAX
			"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
			"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
			"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
			"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
			"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
			"CACHE_GROUPS" => "Y",	// Учитывать права доступа
			"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
			"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
			"SET_TITLE" => "N",	// Устанавливать заголовок страницы
			"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
			"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
			"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
			"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
			"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
			"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
			"PARENT_SECTION" => "",	// ID раздела
			"PARENT_SECTION_CODE" => "",	// Код раздела
			"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
			"DISPLAY_DATE" => "Y",	// Выводить дату элемента
			"DISPLAY_NAME" => "Y",	// Выводить название элемента
			"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
			"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
			"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
			"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
			"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
			"PAGER_TITLE" => "Социальные сети",	// Название категорий
			"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
			"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
			"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		),
			false
		);?>
    </p>
</div>
<!-- End Footer -->

</div>
<!-- End Shell -->


</body>
</html>
