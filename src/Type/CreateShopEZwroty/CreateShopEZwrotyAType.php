<?php

namespace Abryb\ENadawca\Type\CreateShopEZwroty;

/**
 * Class representing CreateShopEZwrotyAType
 */
class CreateShopEZwrotyAType
{
    /**
     * @var \Abryb\ENadawca\Type\ShopEZwrotyType $shop
     */
    protected $shop = null;

    /**
     * Gets as shop
     *
     * @return \Abryb\ENadawca\Type\ShopEZwrotyType
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Sets a new shop
     *
     * @param \Abryb\ENadawca\Type\ShopEZwrotyType $shop
     * @return self
     */
    public function setShop(\Abryb\ENadawca\Type\ShopEZwrotyType $shop)
    {
        $this->shop = $shop;
        return $this;
    }
}

