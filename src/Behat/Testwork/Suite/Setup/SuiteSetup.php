<?php

/*
 * This file is part of the Behat Testwork.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Testwork\Suite\Setup;

use Behat\Testwork\Suite\Suite;

/**
 * Testwork suite setup interface.
 *
 * Sets up provided suites.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface SuiteSetup
{
    /**
     * Checks if setup supports provided suite.
     *
     * @param Suite $suite
     *
     * @return Boolean
     */
    public function supportsSuite(Suite $suite);

    /**
     * Sets up provided suite.
     *
     * @param Suite $suite
     */
    public function setupSuite(Suite $suite);
}
