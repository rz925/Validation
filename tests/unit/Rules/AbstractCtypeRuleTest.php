<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Rules;

use PHPUnit\Framework\TestCase;

class AbstractCtypeRuleTest extends TestCase
{
    public function testValidateCleanShouldReturnTrueWhenCtypeFunctionReturnsTrue()
    {
        $ctypeRuleMock = $this->getMockForAbstractClass(AbstractCtypeRule::class);
        $ctypeRuleMock->expects($this->once())
            ->method('ctypeFunction')
            ->will($this->returnValue(true));

        $this->assertTrue($ctypeRuleMock->validateClean('anything'));
    }

    public function testValidateCleanShouldReturnFalseWhenCtypeFunctionReturnsFalse()
    {
        $ctypeRuleMock = $this->getMockForAbstractClass(AbstractCtypeRule::class);
        $ctypeRuleMock->expects($this->once())
            ->method('ctypeFunction')
            ->will($this->returnValue(false));

        $this->assertFalse($ctypeRuleMock->validateClean('anything'));
    }
}
