<?php

/**
 * Class Ecommistry_Storage_Model_Core_File_Validator_Image
 */
class Ecommistry_Storage_Model_Core_File_Validator_Image extends Mage_Core_Model_File_Validator_Image
{
    /**
     * @param string $filePath
     * @return null
     */
    public function validate($filePath)
    {
        //Check MIME type and avoid validate if it is a pdf type, otherwise validate with Mage_Core_Model_File_Validator_Image
        $type = mime_content_type($filePath);
        if($type == 'application/pdf'){
            return null;
        }
        else{
            return Mage_Core_Model_File_Validator_Image::validate($filePath);
        }
    }
}