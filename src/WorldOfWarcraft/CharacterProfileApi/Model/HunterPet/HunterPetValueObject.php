<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\HunterPet;

/**
 * @author  Willy Reiche
 * @since   2017-07-23
 * @version 1.0
 */
class HunterPetValueObject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $creature;

    /**
     * @var string
     */
    private $slot;

    /**
     * @var HunterPetSpecValueObject
     */
    private $hunterPetSpecValueObject;

    /**
     * @var string
     */
    private $calcSpec;

    /**
     * @var string
     */
    private $familyId;

    /**
     * @var string
     */
    private $familyName;

    /**
     * HunterPetValueObject constructor.
     * @param string                    $name
     * @param string                    $creature
     * @param string                    $slot
     * @param HunterPetSpecValueObject  $hunterPetSpecValueObject
     * @param string                    $calcSpec
     * @param string                    $familyId
     * @param string                    $familyName
     */
    public function __construct(
        $name,
        $creature,
        $slot,
        $calcSpec,
        $familyId,
        $familyName,
        HunterPetSpecValueObject $hunterPetSpecValueObject = null
    ) {
        $this->name = $name;
        $this->creature = $creature;
        $this->slot = $slot;
        $this->hunterPetSpecValueObject = $hunterPetSpecValueObject;
        $this->calcSpec = $calcSpec;
        $this->familyId = $familyId;
        $this->familyName = $familyName;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCreature()
    {
        return $this->creature;
    }

    /**
     * @return string
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * @return HunterPetSpecValueObject
     */
    public function getHunterPetSpecValueObject()
    {
        return $this->hunterPetSpecValueObject;
    }

    /**
     * @return string
     */
    public function getCalcSpec()
    {
        return $this->calcSpec;
    }

    /**
     * @return string
     */
    public function getFamilyId()
    {
        return $this->familyId;
    }

    /**
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }
}
