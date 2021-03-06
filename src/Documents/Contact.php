<?php

namespace Documents;

use \Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document(
 *  collection="contacts"
 * )
 */
class Contact
{
    /**
     *@ODM\Id
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @ODM\Field(
     * type="string",
     * name="OP_CARRIER"
     *)
     */
    private $op_carrier;

    public function getOpCarrier()
    {
        return $this->op_carrier;
    }

    public function setOpCarrier($op_carrier)
    {
        $this->op_carrier = $op_carrier;
    }

    /**
     * @ODM\Field(
     * type="int"
     * )
     */
    private $cancelled;
    public function getCancelled()
    {
        return $this->cancelled;
    }
    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;
    }

    /**
     * @ODM\Field(
     * type="string"
     * )
     */
    private $origin;
    public function getOrigin()
    {
        return $this->origin;
    }

    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }
}
