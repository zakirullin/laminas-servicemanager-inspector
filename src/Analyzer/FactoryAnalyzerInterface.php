<?php

/**
 * @see       https://github.com/laminas/laminas-servicemanager-inspector for the canonical source repository
 * @copyright https://github.com/laminas/laminas-servicemanager-inspector/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-servicemanager-inspector/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Laminas\ServiceManager\Inspector\Analyzer;

use Laminas\ServiceManager\Inspector\Traverser\Dependency;

interface FactoryAnalyzerInterface
{
    /**
     * @return Dependency[]
     */
    public function detect(string $serviceName): array;

    public function canDetect(string $serviceName): bool;
}
