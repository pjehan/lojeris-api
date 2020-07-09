<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use App\Repository\PropertyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PropertyRepository::class)
 * @ApiResource(normalizationContext={"groups"={"property_group"}})
 * @ApiFilter(OrderFilter::class, properties={"created_at"}, arguments={"orderParameterName"="order"})
 * @ORM\HasLifecycleCallbacks
 */
class Property
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"property_group"})
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     * @Groups({"property_group"})
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"property_group"})
     */
    private $surface;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"property_group"})
     */
    private $bedroom;

    /**
     * @ORM\Column(type="text")
     * @Groups({"property_group"})
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=MediaObject::class)
     * @ApiProperty(iri="http://schema.org/image")
     * @Groups({"property_group"})
     */
    private $picture;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="properties")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"property_group"})
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity=District::class, inversedBy="properties")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"property_group"})
     */
    private $district;

    /**
     * @ORM\ManyToMany(targetEntity=Feature::class, inversedBy="properties")
     * @Groups({"property_group"})
     */
    private $features;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"property_group"})
     */
    private $createdAt;

    public function __construct()
    {
        $this->features = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getBedroom(): ?int
    {
        return $this->bedroom;
    }

    public function setBedroom(int $bedroom): self
    {
        $this->bedroom = $bedroom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture(): ?MediaObject
    {
        return $this->picture;
    }

    public function setPicture(?MediaObject $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getDistrict(): ?District
    {
        return $this->district;
    }

    public function setDistrict(?District $district): self
    {
        $this->district = $district;

        return $this;
    }

    /**
     * @return Collection|Feature[]
     */
    public function getFeatures(): Collection
    {
        return $this->features;
    }

    public function addFeature(Feature $feature): self
    {
        if (!$this->features->contains($feature)) {
            $this->features[] = $feature;
        }

        return $this;
    }

    public function removeFeature(Feature $feature): self
    {
        if ($this->features->contains($feature)) {
            $this->features->removeElement($feature);
        }

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist(): void
    {
        if (empty($this->getCreatedAt())) {
            $this->setCreatedAt(new \DateTime());
        }
    }

}
