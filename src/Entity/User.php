<?php

namespace Uni9\StudyList\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;

#[Entity]
class User
{
    #[Column, GeneratedValue, Id]
    public int $id;

    #[OneToMany('user', StudyItem::class, ['persist', 'remove'])]
    private Collection $items;

    public function __construct(
        #[Column]
        public readonly string $name,
        #[Column]
        public readonly string $email,
        #[Column]
        public readonly string $pass
    ) {
        $this->items = new ArrayCollection();
    }

    /**
     * Autenticação de senha, retorna true em caso de sucesso ou false em caso de senha incorreta.
     */
    public function verifyPassword(String $subjectPassword): bool
    {
        return password_verify($subjectPassword, $this->pass);
    }
}
