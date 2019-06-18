<?

namespace Sergar\Handlers;

use CFile;

class IblockHandlers
{
    function OnBeforeIBlockElementHandler(&$arFields)
    {
        foreach ($arFields[PROPERTY_VALUES][4] as &$file) {
            CFile::ResizeImage(
                $file[VALUE],
                array("width" => "1400", "height" => "1400"),
                BX_RESIZE_IMAGE_PROPORTIONAL
            );
        }
    }
}