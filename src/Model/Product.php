<?php


namespace Marlemiesz\SellasistLib\Model;


class Product implements Model
{
    private int $id;
    private string $name;
    private float $price;
    private float $price_promo;
    private float $price_buy;
    private bool $promotion;
    private int $tax;
    private int $quantity;
    private string $ean;
    private bool $status;
    /**
     * @var ProductImage
     */
    private ProductImage $images;
    private string $description;

    /**
     * Product constructor.
     * @param int $id
     * @param string $name
     * @param float $price
     * @param float $price_promo
     * @param float $price_buy
     * @param bool $promotion
     * @param int $tax
     * @param int $quantity
     * @param string $ean
     * @param bool $status
     * @param ProductImage $images
     * @param string $description
     */
    public function __construct(
        int $id,
        string $name,
        float $price,
        float $price_promo,
        float $price_buy,
        bool $promotion,
        int $tax,
        int $quantity,
        string $ean,
        bool $status,
        ProductImage $images,
        string $description
    )
    {

        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->price_promo = $price_promo;
        $this->price_buy = $price_buy;
        $this->promotion = $promotion;
        $this->tax = $tax;
        $this->quantity = $quantity;
        $this->ean = $ean;
        $this->status = $status;
        $this->images = $images;
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     * @return float
     */
    public function getPriceBuy(): float
    {
        return $this->price_buy;
    }

    /**
     * @param float $price_buy
     */
    public function setPriceBuy(float $price_buy): void
    {
        $this->price_buy = $price_buy;
    }

    /**
     * @return bool
     */
    public function isPromotion(): bool
    {
        return $this->promotion;
    }

    /**
     * @param bool $promotion
     */
    public function setPromotion(bool $promotion): void
    {
        $this->promotion = $promotion;
    }

    /**
     * @return int
     */
    public function getTax(): int
    {
        return $this->tax;
    }

    /**
     * @param int $tax
     */
    public function setTax(int $tax): void
    {
        $this->tax = $tax;
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
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus(bool $status): void
    {
        $this->status = $status;
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






}