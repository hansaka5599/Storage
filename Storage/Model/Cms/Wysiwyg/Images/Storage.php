<?php

/**
 * Class Ecommistry_Storage_Model_Cms_Wysiwyg_Images_Storage
 */
class Ecommistry_Storage_Model_Cms_Wysiwyg_Images_Storage extends Mage_Cms_Model_Wysiwyg_Images_Storage
{
    /**
     * @param string $source
     * @param bool $keepRation
     * @return bool|string
     */
    public function resizeFile($source, $keepRation = true)
    {
        //Check MIME type and avoid resize if it is a pdf type,
        //otherwise pass to Mage_Cms_Model_Wysiwyg_Images_Storage::resizeFile()
        $type = mime_content_type($source);
        if($type == 'application/pdf'){
            return false;
        }
        else{
            return Mage_Cms_Model_Wysiwyg_Images_Storage::resizeFile($source, $keepRation);
        }
    }
}