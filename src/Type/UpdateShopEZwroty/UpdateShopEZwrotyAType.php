<?php

namespace Abryb\ENadawca\Type\UpdateShopEZwroty;

/**
 * Class representing UpdateShopEZwrotyAType
 */
class UpdateShopEZwrotyAType
{
    /**
     * @var \Abryb\ENadawca\Type\ShopEZwrotyType $shop
     */
    private $shop = null;

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

