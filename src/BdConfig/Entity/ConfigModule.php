<?php

namespace BdConfig\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bd_config_module");
 */
class ConfigModule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="ConfigUnit", mappedBy="configModule", indexBy="id", cascade={"all"}, orphanRemoval=true)
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @var ArrayCollection
     */
    protected $configUnit;

    /**
     * @ORM\Column(type="string", length=40)
     * @var string
     */
    protected $name;
}
