<?php

namespace BdConfig\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="bd_config_unit");
 */
class ConfigUnit
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
     * @ORM\ManyToOne(targetEntity="ConfigModule", inversedBy="configUnit")
     * @var ConfigModule
     */
    protected $configModule;

    /**
     * @ORM\OneToMany(targetEntity="ConfigScopeValue", mappedBy="configUnit", indexBy="id", cascade={"all"}, orphanRemoval=true)
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @var ArrayCollection
     */
    protected $configScopeValue;

    /**
     * @ORM\Column(type="string", length=200)
     * @var string
     */
    protected $key;
}
