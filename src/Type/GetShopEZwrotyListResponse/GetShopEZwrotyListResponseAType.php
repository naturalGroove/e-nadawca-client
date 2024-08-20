<?php

namespace Abryb\ENadawca\Type\GetShopEZwrotyListResponse;

/**
 * Class representing GetShopEZwrotyListResponseAType
 */
class GetShopEZwrotyListResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\ShopEZwrotyInfoType[] $shops
     */
    protected $shops = [
        
    ];

    /**
     * Adds as shops
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ShopEZwrotyInfoType $shops
     */
    public function addToShops(\Abryb\ENadawca\Type\ShopEZwrotyInfoType $shops)
    {
        $this->shops[] = $shops;
        return $this;
    }

    /**
     * isset shops
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShops($index)
    {
        return isset($this->shops[$index]);
    }

    /**
     * unset shops
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShops($index)
    {
        unset($this->shops[$index]);
    }

    /**
     * Gets as shops
     *
     * @return \Abryb\ENadawca\Type\ShopEZwrotyInfoType[]
     */
    public function getShops()
    {
        return $this->shops;
    }

    /**
     * Sets a new shops
     *
     * @param \Abryb\ENadawca\Type\ShopEZwrotyInfoType[] $shops
     * @return self
     */
    public function setShops(array $shops = null)
    {
        $this->shops = $shops;
        return $this;
    }
}

