<?php

namespace App\Entity;

use App\Repository\BabyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BabyRepository::class)
 */
class Baby
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Products::class, mappedBy="Baby")
     */

    private $productBaby;

    public function __construct()
    {
        $this->productBaby = new ArrayCollection();
    }

    public function __toString(){
        return $this->getName();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


    /**
     * @return Collection|Products[]
     */
    public function getProducts(): Collection
    {
        return $this->productBaby;
    }

    public function addProduct(Products $product): self
    {
        if (!$this->productBaby->contains($product)) {
            $this->productBaby[] = $product;
            $product->setBaby($this);
        }

        return $this;
    }

    public function removeProduct(Products $product): self
    {
        if ($this->productBaby->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getBaby() == $this) {
                $product->setBaby(null);
            }
        }

        return $this;
    }
}
