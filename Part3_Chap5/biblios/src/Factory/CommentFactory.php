<?php

namespace App\Factory;

use App\Entity\Comment;
use App\Repository\CommentRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Comment>
 *
 * @method        Comment|Proxy                     create(array|callable $attributes = [])
 * @method static Comment|Proxy                     createOne(array $attributes = [])
 * @method static Comment|Proxy                     find(object|array|mixed $criteria)
 * @method static Comment|Proxy                     findOrCreate(array $attributes)
 * @method static Comment|Proxy                     first(string $sortedField = 'id')
 * @method static Comment|Proxy                     last(string $sortedField = 'id')
 * @method static Comment|Proxy                     random(array $attributes = [])
 * @method static Comment|Proxy                     randomOrCreate(array $attributes = [])
 * @method static CommentRepository|RepositoryProxy repository()
 * @method static Comment[]|Proxy[]                 all()
 * @method static Comment[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Comment[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Comment[]|Proxy[]                 findBy(array $attributes)
 * @method static Comment[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Comment[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class CommentFactory extends ModelFactory
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
            'content' => self::faker()->text(),
            'createdAt' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'email' => self::faker()->text(255),
            'name' => self::faker()->text(255),
            'status' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Comment $comment): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Comment::class;
    }
}
