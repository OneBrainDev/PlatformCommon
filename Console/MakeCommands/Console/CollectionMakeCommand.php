<?php declare(strict_types=1);

namespace Platform\Shared\Console\MakeCommands\Console;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'make:collection')]
class CollectionMakeCommand extends GeneratorCommand
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new collection file';
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:collection';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Collection';

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Collections';
    }

    /**
     * Get the console command options.
     *
     * @return array<int, array<int, int|string>>
     */
    protected function getOptions()
    {
        return [
            ['force', 'f', InputOption::VALUE_NONE, 'Create the class even if the query already exists'],
        ];
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->laravel->basePath('stubs/collection.stub');
    }
}
