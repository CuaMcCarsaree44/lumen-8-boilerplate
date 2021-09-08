<?php


namespace App\Facade;


use Symfony\Component\Console\Output\ConsoleOutput;

class Console
{
    /**
     * Private Empty Constructor
     * This prevents any object creation to this Facade.
     */
    private function __construct(){}

    public static function writeLine(string $message): void {

        $console = new ConsoleOutput();

        $console->writeln($message);
    }
}
