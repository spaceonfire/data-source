<?php

declare(strict_types=1);

namespace spaceonfire\DataSource\Bridge\CycleOrm\Mapper;

use Cycle\ORM\ORMInterface;
use spaceonfire\LaminasHydratorBridge\StdClassHydrator;
use stdClass;

class StdClassCycleMapper extends BasicCycleMapper
{
    /**
     * @var StdClassHydrator
     */
    protected $hydrator;

    /**
     * StdClassCycleMapper constructor.
     * @param ORMInterface $orm
     * @param string $role
     */
    public function __construct(ORMInterface $orm, string $role)
    {
        parent::__construct($orm, $role);

        $this->entity = stdClass::class;
        $this->hydrator = new StdClassHydrator();
    }

    /**
     * @inheritdoc
     */
    public function init(array $data): array
    {
        return [new stdClass(), $data];
    }
}
