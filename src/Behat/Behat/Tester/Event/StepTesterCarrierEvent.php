<?php

namespace Behat\Behat\Tester\Event;

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Behat\Behat\Context\Pool\ContextPoolInterface;
use Behat\Behat\Suite\SuiteInterface;
use Behat\Behat\Tester\Event\ContextualTesterCarrierEvent;
use Behat\Gherkin\Node\StepNode;

/**
 * Step tester carrier event.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class StepTesterCarrierEvent extends ContextualTesterCarrierEvent
{
    /**
     * @var StepNode
     */
    private $step;

    /**
     * Initializes event.
     *
     * @param SuiteInterface       $suite
     * @param ContextPoolInterface $contexts
     * @param StepNode             $step
     */
    public function __construct(SuiteInterface $suite, ContextPoolInterface $contexts, StepNode $step)
    {
        parent::__construct($suite, $contexts);

        $this->step = $step;
    }

    /**
     * Returns step node.
     *
     * @return StepNode
     */
    public function getStep()
    {
        return $this->step;
    }
}
