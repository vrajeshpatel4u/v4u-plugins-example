<?php
 
namespace V4U\PluginExample\Plugin;
 
class Product
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result;
    }

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result;   
    }

    public function afterGetSku(\Magento\Catalog\Model\Product $subject, $result)

    {
        return $result; 
    }
}