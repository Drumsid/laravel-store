<?php

namespace App\Query\Region\Find;

use App\ReadRepository\RegionReadRepository;

class FindByParentIdQueryHandler
{
    private $regions;

    public function __construct(RegionReadRepository $regions)
    {
        $this->regions = $regions;
    }

    public function __invoke(FindByParentIdQuery $query)
    {
        $regions = $this->regions->findByParentId($query->parentId);
        return $regions;
    }
}