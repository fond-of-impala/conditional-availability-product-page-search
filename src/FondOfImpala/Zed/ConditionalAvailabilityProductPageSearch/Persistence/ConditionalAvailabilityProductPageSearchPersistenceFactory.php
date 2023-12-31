<?php

namespace FondOfImpala\Zed\ConditionalAvailabilityProductPageSearch\Persistence;

use Orm\Zed\ConditionalAvailability\Persistence\Base\FoiConditionalAvailabilityQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @codeCoverageIgnore
 *
 * @method \FondOfImpala\Zed\ConditionalAvailabilityProductPageSearch\ConditionalAvailabilityProductPageSearchConfig getConfig()
 */
class ConditionalAvailabilityProductPageSearchPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\ConditionalAvailability\Persistence\Base\FoiConditionalAvailabilityQuery
     */
    public function createFoiConditionalAvailabilityQuery(): FoiConditionalAvailabilityQuery
    {
        return FoiConditionalAvailabilityQuery::create();
    }
}
