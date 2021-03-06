<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Translator\Cli;

use Behat\Testwork\Translator\Cli\LanguageController as BaseController;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Translation\Translator;

/**
 * Behat language controller.
 *
 * Configures translator service and loads default translations.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class LanguageController extends BaseController
{
    /**
     * @var Translator
     */
    private $translator;

    /**
     * Initializes controller.
     *
     * @param Translator $translator
     */
    public function __construct(Translator $translator)
    {
        $this->translator = $translator;

        parent::__construct($translator);
    }

    /**
     * Executes controller.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return null|integer
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $i18nPath = dirname(dirname(dirname(dirname(dirname(__DIR__))))) . DIRECTORY_SEPARATOR . 'i18n.php';

        foreach (require($i18nPath) as $lang => $messages) {
            $this->translator->addResource('array', $messages, $lang, 'output');
        }

        parent::execute($input, $output);
    }
}
