<?php

namespace OpenLoyalty\Bundle\LevelBundle\Model;

/**
 * Class SpecialReward.
 */
class SpecialReward extends \OpenLoyalty\Domain\Level\SpecialReward
{
    public function __construct()
    {
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param float $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function toArray()
    {
        return [
            'name' => $this->getName(),
            'value' => $this->getValue(),
            'code' => $this->getCode(),
            'startAt' => $this->getStartAt(),
            'endAt' => $this->getEndAt(),
            'active' => $this->isActive(),
            'id' => $this->getSpecialRewardId()->__toString(),
        ];
    }
}
