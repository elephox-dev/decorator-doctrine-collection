<?php
declare(strict_types=1);

namespace Elephox\Decorator\Doctrine\Collection\Contract;

use Doctrine\Common\Collections\Collection as DoctrineCollection;
use Elephox\Collection\Contract\GenericKeyedEnumerable;

/**
 * @template TKey of array-key
 * @template TValue
 *
 * @extends DoctrineCollection<TKey, TValue>
 * @extends GenericKeyedEnumerable<TKey, TValue>
 */
interface DoctrineEnumerable extends DoctrineCollection, GenericKeyedEnumerable
{
}
