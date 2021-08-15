<?php

namespace zetsoft\system\targets\Leinonen\Factories;

use Yii;
use yii\base\InvalidConfigException;
use Monolog\Handler\HandlerInterface;
use Monolog\Formatter\FormatterInterface;
use zetsoft\system\targets\Leinonen\CreationStrategies\CreationStrategyInterface;
use zetsoft\system\targets\Leinonen\CreationStrategies\StrategyResolver;

class GenericStrategyBasedFactory
{
    /**
     * @var StrategyResolver
     */
    private $strategyResolver;

    /**
     * Initiates a new AbstractStrategyBasedFactory.
     *
     * @param StrategyResolver $strategyResolver
     */
    public function __construct(StrategyResolver $strategyResolver)
    {
        $this->strategyResolver = $strategyResolver;
    }

    /**
     * Makes the given class with config utilizing the resolved strategy based on class.
     *
     * @param string $className
     * @param array $config
     *
     * @see StrategyResolver::resolve()
     *
     * @return mixed
     * @throws InvalidConfigException
     */
    public function makeWithStrategy(
        string $className,
        array $config = []
    ) {
        $strategy = $this->strategyResolver->resolve($className);
        $this->validateConfigParameters($strategy, $className, $config);

        $instance = Yii::$container->get($className, $strategy->getConstructorParameters($config));
        $configure = $strategy->getConfigurationCallable($config);

        $configuredInstance = $configure($instance, $config);
        $this->validateConfiguredInstance($configuredInstance, $className);

        return $configuredInstance;
    }

    /**
     * Validates the given config against the given strategy.
     *
     * @param CreationStrategyInterface $strategy
     * @param string $className
     * @param array $config
     *
     * @throws InvalidConfigException
     */
    private function validateConfigParameters(
        CreationStrategyInterface $strategy,
        string $className,
        array $config
    ) {
        $requiredParameters = $strategy->getRequiredParameters();
        $givenParameters = \array_keys($config);

        foreach ($requiredParameters as $requiredParameter) {
            if (! \in_array($requiredParameter, $givenParameters, true)) {
                throw new InvalidConfigException(
                    "The parameter '{$requiredParameter}' is required for {$className}"
                );
            }
        }
    }

    /**
     * @param HandlerInterface|FormatterInterface|callable $configuredInstance
     * @param string $className
     *
     * @throws InvalidConfigException
     */
    private function validateConfiguredInstance($configuredInstance, string $className)
    {
        if (! \is_object($configuredInstance)) {
            throw new InvalidConfigException(
               \sprintf(
                   'The return value of the configure callable must be an instance of %s got %s',
                   $className,
                   \gettype($configuredInstance)
               )
           );
        }

        $instanceClassName = (new \ReflectionClass($configuredInstance))->name;

        if ($instanceClassName !== $className) {
            throw new InvalidConfigException(
                "The return value of the configure callable must be an instance of {$className} got {$instanceClassName}"
            );
        }
    }
}
