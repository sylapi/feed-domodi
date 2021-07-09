<?php
namespace Sylapi\Feeds\Domodi\Models;

use JMS\Serializer\Annotation as Serializer;
use Sylapi\Feeds\Contracts\ProductSerializer;
use Sylapi\Feeds\Domodi\Feed;

/**
 * @Serializer\XmlRoot("entry")
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlNamespace(uri="http://base.google.com/ns/1.0", prefix="g")
 */

class Product implements ProductSerializer
{
    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $title;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $description;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    private $link;

    /**
     * @Serializer\Type("string") 
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $imageLink;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\XmlList(inline = true, entry = "additional_image_link", namespace="http://base.google.com/ns/1.0")
     */
    private $additionalImageLinks;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $availability;

    /**
     * @Serializer\Type("string")
     * @Serializer\Exclude
     */
    private $currency;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $price;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $salePrice;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $productCategory; 

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\XmlList(inline = true, entry = "google_product_category", namespace="http://base.google.com/ns/1.0")
     */
    private $productTypes;  

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $brand;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $gtin;  

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $mpn;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $condition;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $adult;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $ageGroup;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $color;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $gender;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $material;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $pattern;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $size;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\XmlList(inline = true, entry = "size_type", namespace="http://base.google.com/ns/1.0")
     */
    private $sizeTypes;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $itemGroupId;

    /**
     * @Serializer\Exclude
     */
    private $customLabels;
    
    /**
     * @Serializer\Type("Sylapi\Feeds\Domodi\Models\Shipping")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $shipping;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     */
    private $shippingWeight;

    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }    

    /**
     * Get the value of imageLink
     */ 
    public function getImageLink()
    {
        return $this->imageLink;
    }

    /**
     * Set the value of imageLink
     *
     * @return  self
     */ 
    public function setImageLink($imageLink)
    {
        $this->imageLink = $imageLink;

        return $this;
    }

    /**
     * Get the value of additionalImageLinks
     */ 
    public function getAdditionalImageLinks()
    {
        return $this->additionalImageLinks;
    }

    /**
     * Set the value of additionalImageLinks
     *
     * @return  self
     */ 
    public function setAdditionalImageLinks($additionalImageLinks)
    {
        $this->additionalImageLinks = $additionalImageLinks;

        return $this;
    }

    /**
     * Get the value of availability
     */ 
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set the value of availability
     *
     * @return  self
     */ 
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

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
        return $this->price.' '.$this->getCurrency();
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

    /**
     * Get the value of salePrice
     */ 
    public function getSalePrice()
    {
        return $this->salePrice.' '.$this->getCurrency();
    }

    /**
     * Set the value of salePrice
     *
     * @return  self
     */ 
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get the value of productCategory
     */ 
    public function getProductCategory()
    {
        if(isset($this->productCategory[Feed::NAME])) {
            return $this->productCategory[Feed::NAME];
        }
        
        return null;
    }

    /**
     * Set the value of productCategory
     *
     * @return  self
     */ 
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    /**
     * Get the value of productTypes
     */ 
    public function getProductTypes()
    {
        return $this->productTypes;
    }

    /**
     * Set the value of productTypes
     *
     * @return  self
     */ 
    public function setProductTypes($productTypes)
    {
        $this->productTypes = $productTypes;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of gtin
     */ 
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * Set the value of gtin
     *
     * @return  self
     */ 
    public function setGtin($gtin)
    {
        $this->gtin = $gtin;

        return $this;
    }

    /**
     * Get the value of mpn
     */ 
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * Set the value of mpn
     *
     * @return  self
     */ 
    public function setMpn($mpn)
    {
        $this->mpn = $mpn;

        return $this;
    }

    /**
     * Get the value of condition
     */ 
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set the value of condition
     *
     * @return  self
     */ 
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get the value of adult
     */ 
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Set the value of adult
     *
     * @return  self
     */ 
    public function setAdult($adult)
    {
        $this->adult = $adult;

        return $this;
    }

    /**
     * Get the value of ageGroup
     */ 
    public function getAgeGroup()
    {
        return $this->ageGroup;
    }

    /**
     * Set the value of ageGroup
     *
     * @return  self
     */ 
    public function setAgeGroup($ageGroup)
    {
        $this->ageGroup = $ageGroup;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of pattern
     */ 
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * Set the value of pattern
     *
     * @return  self
     */ 
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of sizeTypes
     */ 
    public function getSizeTypes()
    {
        return $this->sizeTypes;
    }

    /**
     * Set the value of sizeTypes
     *
     * @return  self
     */ 
    public function setSizeTypes($sizeTypes)
    {
        $this->sizeTypes = $sizeTypes;

        return $this;
    }


    /**
     * Get the value of itemGroupId
     */ 
    public function getItemGroupId()
    {
        return $this->itemGroupId;
    }

    /**
     * Set the value of itemGroupId
     *
     * @return  self
     */ 
    public function setItemGroupId($itemGroupId)
    {
        $this->itemGroupId = $itemGroupId;

        return $this;
    }

    /**
     * Get the value of customLabels
     */ 
    public function getCustomLabels()
    {
        return $this->customLabels;
    }

    /**
     * Set the value of customLabels
     *
     * @return  self
     */ 
    public function setCustomLabels($customLabels)
    {
        $this->customLabels = $customLabels;

        return $this;
    }

    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("custom_label_0")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     * @return string
     */
    public function getCustomLabel0()
    {
        $lables = $this->getCustomLabels();
        if(!isset($lables[0])) {
            return null;
        }
        return $lables[0];
    }

    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("custom_label_1")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     * @return string
     */
    public function getCustomLabel1()
    {
        $lables = $this->getCustomLabels();
        if(!isset($lables[1])) {
            return null;
        }
        return $lables[1];
    }
    
    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("custom_label_2")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     * @return string
     */
    public function getCustomLabel2()
    {
        $lables = $this->getCustomLabels();
        if(!isset($lables[2])) {
            return null;
        }
        return $lables[2];
    }
    
    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("custom_label_3")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     * @return string
     */
    public function getCustomLabel3()
    {
        $lables = $this->getCustomLabels();
        if(!isset($lables[3])) {
            return null;
        }
        return $lables[3];
    }
    
    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("custom_label_4")
     * @Serializer\XmlElement(cdata=false, namespace="http://base.google.com/ns/1.0")
     * @return string
     */
    public function getCustomLabel4()
    {
        $lables = $this->getCustomLabels();
        if(!isset($lables[4])) {
            return null;
        }
        return $lables[4];
    }

    /**
     * Get the value of shipping
     */ 
    public function getShipping()
    {
        return $this->shipping;
    }


    /**
     * Set the value of shipping
     *
     * @return  self
     */ 
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    } 

    /**
     * Get the value of shippingWeight
     */ 
    public function getShippingWeight()
    {
        return $this->shippingWeight;
    }

    /**
     * Set the value of shippingWeight
     *
     * @return  self
     */ 
    public function setShippingWeight($shippingWeight)
    {
        $this->shippingWeight = $shippingWeight;

        return $this;
    }


    public function make(\Sylapi\Feeds\Models\Product $product): self
    {
        $item  = new self;

        $itemVars = array_keys(get_class_vars(self::class));
    
        foreach($itemVars as $itemVar) {
            $getterName = 'get'.ucfirst($itemVar);
            $setterName = 'set'.ucfirst($itemVar);

            if(method_exists($product, $getterName) && method_exists($item, $setterName)) {
                $elem =  $product->{$getterName}();
                if(is_object($elem)) {
                    switch(get_class($elem)) {
                        case 'Sylapi\Feeds\Models\Shipping' :
                            $elem = (new Shipping)->make($elem);
                        break;                        
                    }
                }

                $item->{$setterName}($elem);  
            }
        }

        return $item;
    }
}
