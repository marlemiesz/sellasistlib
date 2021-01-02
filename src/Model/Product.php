<?php


namespace Marlemiesz\SellasistLib\Model;


class Product
{
    private string $catalog;
    private string $ean;
    private string $symbol;
    private int $quantity;
    private float $price;
    private float $price_promo;
    private int $promotion;
    private int $vat;
    private int $status;
    private int $category_id;
    private int $manufacturer_id;
    private string $description;
    private string $description_short;
    /**
     * @var ProductImage
     */
    private ProductImage $images;

    /**
     * Product constructor.
     * @param string $catalog
     * @param string $ean
     * @param string $symbol
     * @param int $quantity
     * @param float $price
     * @param float $price_promo
     * @param int $promotion
     * @param int $vat
     * @param int $status
     * @param int $category_id
     * @param int $manufacturer_id
     * @param string $description
     * @param string $description_short
     * @param ProductImage $images
     */
    public function __construct(
        string $catalog,
        string $ean,
        string $symbol,
        int $quantity,
        float $price,
        float $price_promo,
        int $promotion,
        int $vat,
        int $status,
        int $category_id,
        int $manufacturer_id,
        string $description,
        string $description_short,
        ProductImage $images
    )
    {
        $this->catalog = $catalog;
        $this->ean = $ean;
        $this->symbol = $symbol;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->price_promo = $price_promo;
        $this->promotion = $promotion;
        $this->vat = $vat;
        $this->status = $status;
        $this->category_id = $category_id;
        $this->manufacturer_id = $manufacturer_id;
        $this->description = $description;
        $this->description_short = $description_short;
        $this->images = $images;
    }

    /**
     * @return string
     */
    public function getCatalog(): string
    {
        return $this->catalog;
    }

    /**
     * @param string $catalog
     */
    public function setCatalog(string $catalog): void
    {
        $this->catalog = $catalog;
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan(string $ean): void
    {
        $this->ean = $ean;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPricePromo(): float
    {
        return $this->price_promo;
    }

    /**
     * @param float $price_promo
     */
    public function setPricePromo(float $price_promo): void
    {
        $this->price_promo = $price_promo;
    }

    /**
     * @return int
     */
    public function getPromotion(): int
    {
        return $this->promotion;
    }

    /**
     * @param int $promotion
     */
    public function setPromotion(int $promotion): void
    {
        $this->promotion = $promotion;
    }

    /**
     * @return int
     */
    public function getVat(): int
    {
        return $this->vat;
    }

    /**
     * @param int $vat
     */
    public function setVat(int $vat): void
    {
        $this->vat = $vat;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }

    /**
     * @return int
     */
    public function getManufacturerId(): int
    {
        return $this->manufacturer_id;
    }

    /**
     * @param int $manufacturer_id
     */
    public function setManufacturerId(int $manufacturer_id): void
    {
        $this->manufacturer_id = $manufacturer_id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescriptionShort(): string
    {
        return $this->description_short;
    }

    /**
     * @param string $description_short
     */
    public function setDescriptionShort(string $description_short): void
    {
        $this->description_short = $description_short;
    }

    /**
     * @return ProductImage
     */
    public function getImages(): ProductImage
    {
        return $this->images;
    }

    /**
     * @param ProductImage $images
     */
    public function setImages(ProductImage $images): void
    {
        $this->images = $images;
    }



}