<?php

namespace App\Factory;

use App\Entity\Author;
use App\Repository\AuthorRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Author>
 *
 * @method        Author|Proxy                     create(array|callable $attributes = [])
 * @method static Author|Proxy                     createOne(array $attributes = [])
 * @method static Author|Proxy                     find(object|array|mixed $criteria)
 * @method static Author|Proxy                     findOrCreate(array $attributes)
 * @method static Author|Proxy                     first(string $sortedField = 'id')
 * @method static Author|Proxy                     last(string $sortedField = 'id')
 * @method static Author|Proxy                     random(array $attributes = [])
 * @method static Author|Proxy                     randomOrCreate(array $attributes = [])
 * @method static AuthorRepository|RepositoryProxy repository()
 * @method static Author[]|Proxy[]                 all()
 * @method static Author[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Author[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Author[]|Proxy[]                 findBy(array $attributes)
 * @method static Author[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Author[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class AuthorFactory extends ModelFactory
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
            'dateOfBirth' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'name' => self::faker()->name(),
            'nationality' => self::faker()->country(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Author $author): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Author::class;
    }
}
