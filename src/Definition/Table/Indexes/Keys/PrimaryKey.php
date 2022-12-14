<?php declare(strict_types=1);
/*
 * This file is part of Aplus Framework Database Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Framework\Database\Definition\Table\Indexes\Keys;

use Framework\Database\Definition\Table\Indexes\Index;

/**
 * Class PrimaryKey.
 *
 * @package database
 */
final class PrimaryKey extends Index
{
    use Traits\Constraint;
    protected string $type = 'PRIMARY KEY';
}
