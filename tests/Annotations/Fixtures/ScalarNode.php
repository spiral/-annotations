<?php
declare(strict_types=1);
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

namespace Spiral\Annotations\Tests\Fixtures;

use Spiral\Annotations\AbstractNode;
use Spiral\Annotations\Parser;

class ScalarNode extends AbstractNode
{
    protected const NAME   = 'scalar';
    protected const SCHEMA = [
        'string'      => Parser::STRING,
        'integer'     => Parser::INTEGER,
        'bool'        => Parser::BOOL,
        'float'       => Parser::FLOAT,
        'array_str'   => [Parser::STRING],
        'array_int'   => [Parser::INTEGER],
        'array_float' => [Parser::FLOAT],
    ];

    public $string;
    public $integer;
    public $bool;
    public $float;
    public $array_str;
    public $array_int;
    public $array_float;
}