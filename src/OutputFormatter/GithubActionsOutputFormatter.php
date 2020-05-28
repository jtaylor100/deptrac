<?php


namespace SensioLabs\Deptrac\OutputFormatter;


use SensioLabs\Deptrac\RulesetEngine\Context;
use Symfony\Component\Console\Output\OutputInterface;

class GithubActionsOutputFormatter implements OutputFormatterInterface
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'github-actions';
    }

    /**
     * @inheritDoc
     */
    public function configureOptions(): array
    {
        return [];
    }

    public function enabledByDefault(): bool
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function finish(Context $context, OutputInterface $output, OutputFormatterInput $outputFormatterInput): void
    {
    }
}