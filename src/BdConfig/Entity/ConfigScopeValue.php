<?php

namespace BdConfig\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bd_config_scope_value");
 */
class ConfigScopeValue
{
    const SCOPE_GLOBAL = 'global';
    const SCOPE_USER = 'user';

    /**
     * @var array
     */
    protected $allScope = array(
        self::SCOPE_GLOBAL,
        self::SCOPE_USER,
    );

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="ConfigUnit", inversedBy="configScopeValue")
     * @var ConfigUnit
     */
    protected $configUnit;

    /**
     * @ORM\Column(type="string", length=40)
     * @var string
     */
    protected $scope;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $value;
}
