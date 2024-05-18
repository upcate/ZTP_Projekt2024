<?php
/**
 * Ad Entity.
 */

namespace App\Entity;

use App\Repository\AdRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Ad.
 */
#[ORM\Entity(repositoryClass: AdRepository::class)]
class Ad
{
    /**
     * Int id.
     *
     * @param ?int $id Id
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * DateTimeImmutable createdAt.
     *
     * @var ?\DateTimeImmutable $createdAt Created At
     */
    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    /**
     * Function getId.
     *
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Function getCreatedAt.
     *
     * @return ?\DateTimeImmutable
     */
    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * Function setCreatedAt.
     *
     * @param \DateTimeImmutable $createdAt Created At
     */
    public function setCreatedAt(\DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
