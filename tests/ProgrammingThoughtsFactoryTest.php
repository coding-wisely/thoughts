<?php

namespace CodingWisely\Thoughts\Tests;

use CodingWisely\Thoughts\ProgrammingThoughtsFactory;
use PHPUnit\Framework\TestCase;

class ProgrammingThoughtsFactoryTest extends TestCase
{
    /**
     * This method will test if class returns a random joke
     * 
     * @test
     * 
     * @author Vladimir Nikolic <nezaboravi@gmail.com>
     * 
     * @return void
     */
    public function it_returns_a_random_joke()
    {
        $thoughts = new ProgrammingThoughtsFactory([
            'This is a thought'
        ]);
        $joke = $thoughts->getRandomThought();
        $this->assertSame('This is a thought', $joke);
    }
}
