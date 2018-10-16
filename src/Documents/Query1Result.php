<?php
namespace Documents;

use \Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\QueryResultDocument
 */
class Query1Result
{
    /**
     * @ODM\Field(name="_id", type="string")
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
     * @ODM\Field(type="int")
     */
    private $count;
    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }
}
