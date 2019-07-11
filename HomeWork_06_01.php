<?php

/* Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age(возраст), salary (зарплата).
Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'Иван', возраст 25, зарплата 1000.
Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи.
Выведите на экран сумму возрастов Ивана и Васи. */

	class Employee {
		public $name;
		public $age;
		public $salary;

		public function __construct(string $name, int $age, int $salary) {
			$this->name = $name;
			$this->age = $age;
			$this->salary = $salary;
			}
	}

$ivan = new Employee('Иван', 25, 1000);
$vasia = new Employee('Вася', 26, 2000);

$ageSum = $ivan->age + $vasia->age;
echo $ageSum . "\n";

$salarySum = $ivan->salary + $vasia->salary;
echo $salarySum . "\n";

