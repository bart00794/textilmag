<?

/*
|--------------------------------------------------------------------------
| В этом файле следует регистрировать обработчики событий Bitrix Framework
|--------------------------------------------------------------------------
|
| @see http://dev.1c-bitrix.ru/api_help/main/functions/module/addeventhandler.php
|
| Ex:
|
| AddEventHandler("main", "OnBeforeUserLogin", Array("MyClass", "BeforeLogin"));
|
| ВАЖНО!!!
| Сами оработчики должны быть расположены в директории local/php_interface/src и соответствовать namespace'у
|
*/
use Bitrix\Main\EventManager;

$eventManager = EventManager::getInstance();

$eventManager->AddEventHandler(
    'iblock',
    'OnBeforeIBlockElementAdd',
    [
        'Sergar\Handlers\IblockHandlers',
        'OnBeforeIBlockElementHandler'
    ]
);