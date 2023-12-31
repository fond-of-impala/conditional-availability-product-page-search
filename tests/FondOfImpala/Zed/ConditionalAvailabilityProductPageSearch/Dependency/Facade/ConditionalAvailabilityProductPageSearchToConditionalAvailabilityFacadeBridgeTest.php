<?php

namespace FondOfImpala\Zed\ConditionalAvailabilityProductPageSearch\Dependency\Facade;

use Codeception\Test\Unit;
use FondOfImpala\Zed\ConditionalAvailability\Business\ConditionalAvailabilityFacadeInterface;
use Generated\Shared\Transfer\ConditionalAvailabilityCollectionTransfer;
use Generated\Shared\Transfer\ConditionalAvailabilityCriteriaFilterTransfer;
use PHPUnit\Framework\MockObject\MockObject;

class ConditionalAvailabilityProductPageSearchToConditionalAvailabilityFacadeBridgeTest extends Unit
{
    protected ConditionalAvailabilityProductPageSearchToConditionalAvailabilityFacadeInterface $bridge;

    protected MockObject|ConditionalAvailabilityCollectionTransfer $conditionalAvailabilityCollectionTransferMock;

    protected MockObject|ConditionalAvailabilityCriteriaFilterTransfer $conditionalAvailabilityCriteriaFilterTransferMock;

    protected MockObject|ConditionalAvailabilityFacadeInterface $conditionalAvailabilityFacadeMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->conditionalAvailabilityFacadeMock = $this->getMockBuilder(ConditionalAvailabilityFacadeInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->conditionalAvailabilityCollectionTransferMock = $this
            ->getMockBuilder(ConditionalAvailabilityCollectionTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->conditionalAvailabilityCriteriaFilterTransferMock = $this
            ->getMockBuilder(ConditionalAvailabilityCriteriaFilterTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->bridge = new ConditionalAvailabilityProductPageSearchToConditionalAvailabilityFacadeBridge(
            $this->conditionalAvailabilityFacadeMock,
        );
    }

    /**
     * @return void
     */
    public function testFindConditionalAvailabilities(): void
    {
        $this->conditionalAvailabilityFacadeMock->expects(static::atLeastOnce())
            ->method('findConditionalAvailabilities')
            ->with($this->conditionalAvailabilityCriteriaFilterTransferMock)
            ->willReturn($this->conditionalAvailabilityCollectionTransferMock);

        $conditionalAvailabilityCollectionTransfer =
            $this->bridge->findConditionalAvailabilities($this->conditionalAvailabilityCriteriaFilterTransferMock);

        static::assertEquals(
            $this->conditionalAvailabilityCollectionTransferMock,
            $conditionalAvailabilityCollectionTransfer,
        );
    }
}
