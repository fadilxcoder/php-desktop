<?php

namespace App\Commands;

use App\Repository\UsersRepository;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserCommand
{
    public function __construct(
        private UsersRepository $usersRepository
    ) {
    }

    public function __invoke(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("\nBeginning query execution... \n");

        $value = $input->getArgument('value');

        if(empty($value)) {
            $output->writeln('Missing argument ID !');
            return;
        }

        $result = $this->usersRepository->getUser($value);

        if(empty($result)) {
            $output->writeln('Not found !');
            return;
        }

        dump('PHP 8.1 : ' . $this->php8Verifier());

        dump($result);

        $output->writeln("\nQuery executed ! \n");
    }

    private function php8Verifier()
    {
        $string = 'The lazy fox jumped over the fence';

        if (str_contains($string, 'lazy')) {
            return true;
        }

        return false;
    }
}
