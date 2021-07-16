<?php

namespace Sylapi\Feeds\Domodi\Tests;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Sylapi\Feeds\FeedGenerator;
use Sylapi\Feeds\Domodi\Feed;
use Sylapi\Feeds\Domodi\Models\Product;
use Sylapi\Feeds\Domodi\Models\Shipping;

class ProductTest extends PHPUnitTestCase
{

    private $product;

    private $serializer;

    public function setUp():void
    {
        $this->product = $this->createProduct();
        $this->serializer = (new FeedGenerator())->getSerializer();
    }

    private function createProduct(): Product
    {


        $shipping = new Shipping();
        $shipping->setPrice(12.22)
            ->setCurrency('PLN');
    

        $product = new Product();
        
        $product->setId('1234567890')
            ->setTitle('Test title')
            ->setDescription('Test Description')
            ->setLink('http://link.dev/product/1.html')
            ->setImageLink('http://link.dev/storage/1/1.jpg')
            ->setAdditionalImageLinks([
                'http://link.dev/storage/1/2.jpg',
                'http://link.dev/storage/1/3.jpg',
                'http://link.dev/storage/1/4.jpg'
            ])
            ->setAvailability('in_stock')
            ->setCurrency('PLN')
            ->setPrice(100.00)
            ->setSalePrice(90.00)
            ->setProductCategory('Home / Women')
            ->setProductTypes([
                'Maxi Dresses',
                'Dresses'
            ])
            ->setBrand('Test Brand')
            ->setGtin('1234567890')
            ->setMpn('0987654321')
            ->setCondition('new')
            ->setAdult(true)
            ->setAgeGroup('adult')
            ->setColor('red')
            ->setGender('female')
            ->setMaterial('Leather')
            ->setPattern('Striped')
            ->setSize('XL')
            ->setSizeTypes([
                'regular',
                'petite'
            ])
            ->setItemGroupId('abcde')
            ->setCustomLabels([
                'label #1',
                'label #2',
                'label #3'
            ])
            ->setShipping($shipping)
            ->setShippingWeight('3 kg')

            ;
        return $product;
    }


    public function testProductXML()
    {
        $content = $this->serializer->serialize($this->product, 'xml');
        $filePath = __DIR__.'/Mock/product.xml';

        file_put_contents($filePath, $content);

        $this->assertXmlStringEqualsXmlFile($filePath, $content);
    }

    public function testMakeProduct()
    {
        $categoryName = 'Test Category';

        $productBase = new \Sylapi\Feeds\Models\Product();
        $productBase->setProductCategory([
            Feed::NAME => $categoryName
            ])
            ->setShipping(new \Sylapi\Feeds\Models\Shipping());
        $product = (new Product)->make($productBase);
        $this->assertInstanceOf(Product::class, $product);
        $this->assertInstanceOf(Shipping::class, $product->getShipping());
        $this->assertEquals($categoryName, $product->getProductCategory());

    }
}