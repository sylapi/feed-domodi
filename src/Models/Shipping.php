<?php
namespace Sylapi\Feeds\Domodi\Models;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("shipping")
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlNamespace(uri="http://base.google.com/ns/1.0", prefix="g")
 */
class Shipping
{
    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     * @Serializer\Exclude
     */
    private $currency;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $price;
    

    /**
     * Get the value of currency
     */ 
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     *
     * @return  self
     */ 
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        if($this->price && $this->getCurrency()) {
            return $this->price.' '.$this->getCurrency();
        }
        return null;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function make($shipping): self
    {
        $item  = new self;

        $itemVars = array_keys(get_class_vars(self::class));
    
        foreach($itemVars as $itemVar) {
            $getterName = 'get'.ucfirst($itemVar);
            $setterName = 'set'.ucfirst($itemVar);

            if(method_exists($shipping, $getterName) && method_exists($item, $setterName)) {
                $elem =  $shipping->{$getterName}();
                $item->{$setterName}($elem);  
            }
        }

        return $item;
    }      
}