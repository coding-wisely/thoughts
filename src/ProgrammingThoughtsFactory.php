<?php

namespace CodingWisely\Thoughts;

class ProgrammingThoughtsFactory
{
    protected $thoughts = [
        "Talk is cheap. Show me the code. ― Linus Torvalds",
        "Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live - John Woods",
        "Any fool can write code that a computer can understand. Good programmers write code that humans can understand. - Martin Flower",
        "Truth can only be found in one place: the code. - Robert C. Martin, Clean Code",
        "That's the thing about people who think they hate computers. What they really hate is lousy programmers. - Larry Niven",
        "You've baked a really lovely cake, but then you've used dog shit for frosting. - Steve Jobs",
        "The most important property of a program is whether it accomplishes the intention of its user. - C.A.R. Hoare",
        "Everyday life is like programming, I guess. If you love something you can put beauty into it. - Donald Knuth",
        "I'm a programmer. I like programming. And the best way I've found to have a positive impact on code is to write it. Robert C.Martin, Clean Architecture",
        "Abstraction is the elimination of the irrelevant and the amplification of the essential. - Robert C. Martin, Agile Principles, Patterns, and Practices in C#",
        "It is what it is because you let it be so.",
        "Programming isn't about what you know; it's about what you can figure out.",
        "The happiest moment i felt; is that moment when i realized my ability to create.",
    ];
    public function __construct(array $thoughts = null)
    {
        if ($thoughts) {
            $this->thoughts = $thoughts;
        }
    }
    /**
     * This method will generate random thought
     * 
     * 
     * @author Vladimir Nikolic <nezaboravi@gmail.com>
     * 
     * @return void
     */
    public function getRandomThought(): string
    {
        return $this->thoughts[array_rand($this->thoughts)];
    }
}
