<?php

namespace App\Entity\Platform\DTO;

use App\Repository\Platform\DTO\BoardRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BoardRepository::class)]
class Board
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nbUserMax = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $creationDate = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $invitationTimer = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $inactivityTimer = null;

    #[ORM\Column(length: 255)]
    private ?string $invitationHash = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbUserMax(): ?int
    {
        return $this->nbUserMax;
    }

    public function setNbUserMax(int $nbUserMax): static
    {
        $this->nbUserMax = $nbUserMax;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): static
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getInvitationTimer(): ?\DateTimeInterface
    {
        return $this->invitationTimer;
    }

    public function setInvitationTimer(\DateTimeInterface $invitationTimer): static
    {
        $this->invitationTimer = $invitationTimer;

        return $this;
    }

    public function getInactivityTimer(): ?\DateTimeInterface
    {
        return $this->inactivityTimer;
    }

    public function setInactivityTimer(\DateTimeInterface $inactivityTimer): static
    {
        $this->inactivityTimer = $inactivityTimer;

        return $this;
    }

    public function getInvitationHash(): ?string
    {
        return $this->invitationHash;
    }

    public function setInvitationHash(string $invitationHash): static
    {
        $this->invitationHash = $invitationHash;

        return $this;
    }
}
