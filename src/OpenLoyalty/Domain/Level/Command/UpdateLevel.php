<?php

namespace OpenLoyalty\Domain\Level\Command;

use OpenLoyalty\Domain\Level\LevelId;

/**
 * Class UpdateLevel.
 */
class UpdateLevel extends LevelCommand
{
    /**
     * @var array
     */
    protected $levelData;

    /**
     * UpdateLevel constructor.
     *
     * @param LevelId $levelId
     * @param array   $levelData
     */
    public function __construct(LevelId $levelId, array $levelData)
    {
        parent::__construct($levelId);
        $this->levelData = $levelData;
    }

    /**
     * @return array
     */
    public function getLevelData()
    {
        return $this->levelData;
    }
}
