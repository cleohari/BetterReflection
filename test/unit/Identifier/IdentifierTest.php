<?php

namespace BetterReflectionTest\Identifier;

use BetterReflection\Identifier\Identifier;
use BetterReflection\Identifier\IdentifierType;

/**
 * @covers \BetterReflection\Identifier\Identifier
 */
class IdentifierTest extends \PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $beforeName = '\Some\Thing\Here';
        $afterName = 'Some\Thing\Here';

        $identifier = new Identifier($beforeName, new IdentifierType(IdentifierType::IDENTIFIER_CLASS));
        $this->assertSame($afterName, $identifier->getName());
    }

    public function testGetType()
    {
        $identifierType = new IdentifierType(IdentifierType::IDENTIFIER_CLASS);

        $identifier = new Identifier('Foo', $identifierType);
        $this->assertSame($identifierType, $identifier->getType());
    }
}
