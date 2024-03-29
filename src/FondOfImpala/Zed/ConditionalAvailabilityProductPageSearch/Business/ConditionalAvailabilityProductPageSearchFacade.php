<?php

namespace FondOfImpala\Zed\ConditionalAvailabilityProductPageSearch\Business;

use Generated\Shared\Transfer\ProductPageLoadTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfImpala\Zed\ConditionalAvailabilityProductPageSearch\Business\ConditionalAvailabilityProductPageSearchBusinessFactory getFactory()
 */
class ConditionalAvailabilityProductPageSearchFacade extends AbstractFacade implements ConditionalAvailabilityProductPageSearchFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductPageLoadTransfer $loadTransfer
     *
     * @return \Generated\Shared\Transfer\ProductPageLoadTransfer
     */
    public function expandProductPageData(ProductPageLoadTransfer $loadTransfer): ProductPageLoadTransfer
    {
        return $this->getFactory()->createProductPageLoadExpander()->expand($loadTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return void
     */
    public function triggerStockStatus(): void
    {
        $this->getFactory()->createStockStatusTrigger()->trigger();
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return void
     */
    public function triggerStockStatusDelta(): void
    {
        $this->getFactory()->createStockStatusTrigger()->triggerDelta();
    }
}
