<?php

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\CollectionValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-07-27
 * @version 1.0
 */
class PetsValueObjectTest extends PHPUnit_Framework_TestCase
{
    private $collectedPets;
    private $numNotCollected;
    private $numCollected;

    public function setUp()
    {
        $this->numCollected = 123;
        $this->numNotCollected = 123;
        $this->collectedPets = $this->getMockBuilder('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\PetValueObject')->disableOriginalConstructor()->getMock();
    }

    public function testGetNumCollected()
    {
        $object = new CollectionValueObject(
            $this->numCollected,
            $this->numNotCollected,
            $this->collectedPets
        );

        $this->assertEquals($this->numCollected, $object->getNumCollected());
    }

    public function testGetNumNotCollected()
    {
        $object = new CollectionValueObject(
            $this->numCollected,
            $this->numNotCollected,
            $this->collectedPets
        );

        $this->assertEquals($this->numNotCollected, $object->getNumNotCollected());
    }

    public function testGetCollectedPets()
    {
        $object = new CollectionValueObject(
            $this->numCollected,
            $this->numNotCollected,
            $this->collectedPets
        );

        $this->assertEquals($this->collectedPets, $object->getCollected());
    }
}
