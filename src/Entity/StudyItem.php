<?php

namespace Uni9\StudyList\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class StudyItem
{
    #[Id, Column, GeneratedValue]
    public int $id;

    public function __construct(
        #[Column]
        public int $user_id,
        #[Column]
        public string $name,
        #[Column]
        public string $description,
        #[Column(nullable: true)]
        public ?string $video
    ) {
    }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Set the value of video
         *
         * @return  self
         */ 
        public function setVideo($video)
        {
                $this->video = $video;

                return $this;
        }
}
