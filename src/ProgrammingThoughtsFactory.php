<?php

namespace CodingWisely\Thoughts;

class ProgrammingThoughtsFactory
{
    protected $thoughts = [
        'Talk is cheap. Show me the code. ― Linus Torvalds',
        'Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live - John Woods',
        'Any fool can write code that a computer can understand. Good programmers write code that humans can understand. - Martin Flower',
        'Truth can only be found in one place: the code. - Robert C. Martin, Clean Code',
        "That's the thing about people who think they hate computers. What they really hate is lousy programmers. - Larry Niven",
        "You've baked a really lovely cake, but then you've used dog shit for frosting. - Steve Jobs",
        'The most important property of a program is whether it accomplishes the intention of its user. - C.A.R. Hoare',
        'Everyday life is like programming, I guess. If you love something you can put beauty into it. - Donald Knuth',
        "I'm a programmer. I like programming. And the best way I've found to have a positive impact on code is to write it. Robert C.Martin, Clean Architecture",
        'Abstraction is the elimination of the irrelevant and the amplification of the essential. - Robert C. Martin, Agile Principles, Patterns, and Practices in C#',
        'It is what it is because you let it be so.',
        "Programming isn't about what you know; it's about what you can figure out.",
        'The happiest moment i felt; is that moment when i realized my ability to create.',
        'Could we can have developer acceptance criteria?',
        'The fundamental programming rules are simple. Programs we build on top of that rules tend to introduce own rules and complexity. Looks like we build our own maze and might just get lost in it- Vladimir Nikolic, Coding Wisely',
        'Think twice, write code once.',
        'Tests are stories we tell the next generation of programmers on a project. ― Roy Osherove',
        'First ubnderstand and solve the problem. Then, go code. - Vladimir Nikolic, Coding Wisely',
        'Programming is usually taught by examples. -  Waseem Latif',
        'Simplicity is prerequisite for reliability.',
        'So if you want to go fast, if you want to get done quickly, if you want your code to be easy to write, make it easy to read.',
        'Programming is breaking of one big impossible task into several very small possible tasks.',
        "Life doesn't have a ctrl-z. Type wisely.",
        'Premature optimization is the root of all evil.',
        "Code without tests is bad code. It doesn't matter how well written it is; it doesn't matter how pretty or object-oriented or well-encapsulated it is. With tests, we can change the behavior of our code quickly and verifiably. Without them, we really don't know if our code is getting better or worse.",
        "If you're good at the debugger it means you spent a lot of time debugging. I don't want you to be good at the debugger.",
        "Over the past few years i've learned that code comments should be considered smells.",
        'Programming is the art of doing one thing at a time',
        'Share what you have learned from your bugs.',
        'Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program. -Linus Torvalds',

    ];

    public function __construct(array $thoughts = null)
    {
        if ($thoughts) {
            $this->thoughts = $thoughts;
        }
    }

    /**
     * This method will generate random thought.
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
