<?

/*
|--------------------------------------------------------------------------
| � ���� ����� ������� �������������� ����������� ������� Bitrix Framework
|--------------------------------------------------------------------------
|
| @see http://dev.1c-bitrix.ru/api_help/main/functions/module/addeventhandler.php
|
| Ex:
|
| AddEventHandler("main", "OnBeforeUserLogin", Array("MyClass", "BeforeLogin"));
|
| �����!!!
| ���� ���������� ������ ���� ����������� � ���������� local/php_interface/src � ��������������� namespace'�
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