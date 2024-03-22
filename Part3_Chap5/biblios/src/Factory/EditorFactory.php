<?php

namespace App\Factory;

use App\Entity\Editor;
use App\Repository\EditorRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Editor>
 *
 * @method        Editor|Proxy                     create(array|callable $attributes = [])
 * @method static Editor|Proxy                     createOne(array $attributes = [])
 * @method static Editor|Proxy                     find(object|array|mixed $criteria)
 * @method static Editor|Proxy                     findOrCreate(array $attributes)
 * @method static Editor|Proxy                     first(string $sortedField = 'id')
 * @method static Editor|Proxy                     last(string $sortedField = 'id')
 * @method static Editor|Proxy                     random(array $attributes = [])
 * @method static Editor|Proxy                     randomOrCreate(array $attributes = [])
 * @method static EditorRepository|RepositoryProxy repository()
 * @method static Editor[]|Proxy[]                 all()
 * @method static Editor[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Editor[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Editor[]|Proxy[]                 findBy(array $attributes)
 * @method static Editor[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Editor[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class EditorFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'name' => self::faker()->company(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Editor $editor): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Editor::class;
    }
}
