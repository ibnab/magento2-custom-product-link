<?php


namespace Ibnab\CustomLinked\Model;
/**
 * Class \Magento\Catalog\Model\ProductLink\CollectionProvider\Related
 *
 */
class Product Extends \Magento\Catalog\Model\Product
{   
    const LINK_TYPE_CUSTOMLINKED = 17;
    /**
     * Retrieve array of related products
     *
     * @return array
     */
    public function getCustomlinkedProducts()
    {
        if (!$this->hasCustomlinkedProducts()) {

            $products = [];
            $collection = $this->getCustomlinkedProductCollection();
            foreach ($collection as $product) {
                $products[] = $product;
            }
            $this->setCustomlinkedProducts($products);
        }
        return $this->getData('customlinked_products');
    }
    /**
     * Retrieve related products identifiers
     *
     * @return array
     */
    public function getCustomlinkedProductIds()
    {
        if (!$this->hasCustomlinkedProductIds()) {
            $ids = [];
            foreach ($this->getCustomlinkedProducts() as $product) {
                $ids[] = $product->getId();
            }
            $this->setCustomlinkedProductIds($ids);
        }
        return [$this->getData('customlinked_product_ids')];
    }
    /**
     * Retrieve collection related product
     *
     * @return \Magento\Catalog\Model\ResourceModel\Product\Link\Product\Collection
     */
    public function getCustomlinkedProductCollection()
    {
        $collection = $this->getLinkInstance()->setLinkTypeId(static::LINK_TYPE_CUSTOMLINKED)->getProductCollection()->setIsStrongMode();
        $collection->setProduct($this);
        return $collection;
    }

}