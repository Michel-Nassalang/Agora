<?php
/*
 * This file is part of phpDocumentor.
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @link      http://phpdoc.org
 *
 */

declare(strict_types=1);

namespace phpDocumentor\Reflection\PseudoTypes;

use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\Types\Mixed_;

use function sprintf;

final class ArrayShapeItem
{
<<<<<<< HEAD
    private ?string $key;
    private Type $value;
    private bool $optional;
=======
    /** @var string|null */
    private $key;
    /** @var Type */
    private $value;
    /** @var bool */
    private $optional;
>>>>>>> 2b5a5be8c33b93a2ea2500b9c6aa226dbc5bc939

    public function __construct(?string $key, ?Type $value, bool $optional)
    {
        $this->key = $key;
        $this->value = $value ?? new Mixed_();
        $this->optional = $optional;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function getValue(): Type
    {
        return $this->value;
    }

    public function isOptional(): bool
    {
        return $this->optional;
    }

    public function __toString(): string
    {
        if ($this->key !== null) {
            return sprintf(
                '%s%s: %s',
                $this->key,
                $this->optional ? '?' : '',
                (string) $this->value
            );
        }

        return (string) $this->value;
    }
}
