<?php
// src/AppBundle/Command/CreateUserCommand.php
namespace Migration;
use League\Csv\Reader;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    protected function configure()
    {
         $this
        // the name of the command (the part after "bin/console")
        ->setName('app:create-user')

        // the short description shown while running "php bin/console list"
        ->setDescription('Creates a new user.')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('This command allows you to create a user...')
    ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ... 
		$filename='/home/hbwsl/lampstack-7.0.16-1/apache2/htdocs/Project/customer.csv';
		$output->writeln("<info>Hello Everyone</info>");  
		if(file_exists($filename)){
			$csv = Reader::createFromPath($filename);

			//get the first row, usually the CSV header
			$headers = $csv->fetchOne();

			//get 25 rows starting from the 11th row
			$res = $csv->setOffset(0)->setLimit(25)->fetchAssoc();
			foreach($res as $row)
				print_r($row);
		}
    }
}
?>
