<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Oms\Business;

use Pyz\Zed\Oms\Business\Calculator\InitiationTimeoutCalculator;
use Pyz\Zed\Oms\Business\Calculator\TimeoutProcessorTimeoutCalculatorInterface;
use Spryker\Zed\Oms\Business\OmsBusinessFactory as SprykerOmsBusinessFactory;

/**
 * @method \Pyz\Zed\Oms\OmsConfig getConfig()
 * @method \Spryker\Zed\Oms\Persistence\OmsQueryContainerInterface getQueryContainer()
 * @method \Spryker\Zed\Oms\Persistence\OmsRepositoryInterface getRepository()
 * @method \Spryker\Zed\Oms\Persistence\OmsEntityManagerInterface getEntityManager()
 */
class OmsBusinessFactory extends SprykerOmsBusinessFactory
{
    /**
     * @return \Pyz\Zed\Oms\Business\Calculator\TimeoutProcessorTimeoutCalculatorInterface
     */
    public function createPyzInitiationTimeoutCalculator(): TimeoutProcessorTimeoutCalculatorInterface
    {
        return new InitiationTimeoutCalculator();
    }
}
