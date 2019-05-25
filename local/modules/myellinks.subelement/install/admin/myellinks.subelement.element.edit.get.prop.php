<?php

if (is_file($_SERVER["DOCUMENT_ROOT"] . "/local/modules/myellinks.subelement/admin/myellinks.subelement.element.edit.get.prop.php")) {
    /** @noinspection PhpIncludeInspection */
    require($_SERVER["DOCUMENT_ROOT"] . "/local/modules/myellinks.subelement/admin/myellinks.subelement.element.edit.get.prop.php");
} else {
    /** @noinspection PhpIncludeInspection */
    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/myellinks.subelement/admin/myellinks.subelement.element.edit.get.prop.php");
}