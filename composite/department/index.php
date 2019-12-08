<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use wzorce\composite\department\Budgeted;
use wzorce\composite\department\BudgetedComposite;
use wzorce\composite\department\Department;
use wzorce\composite\department\Employee;

$company = new Department("Global");
$accounting = new Department("Accounting");
$magda = new Employee("Magda",3000);
$maria = new Employee("Maria",5000);

$accounting->addDependent($magda);
$accounting->addDependent($maria);

$it = new Department('It');
$adam = new Employee("Adam",8000);
$grzegorz = new Employee("Grzegorz",5000);

$it->addDependent($adam);
$it->addDependent($grzegorz);

$devops = new Department("Devops");
$johny = new Employee("Johny", 15000);
$devops->addDependent($johny);

$company->addDependent($accounting);
$company->addDependent($it);
$company->addDependent($devops);

dump($company);

dump($company->calculateBudget());
