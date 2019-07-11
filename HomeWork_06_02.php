<?php

/* Сделать класс Employee, в котором будут следующие private свойства: name (имя), age (возраст) и salary (зарплата).
Сделайте геттеры и сеттеры для всех свойств класса Employee.
Дополнить класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
Пусть зарплата работников хранится в долларах. Сделать так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара. */

	class Employee {
		private $name;
		private $age;
		private $salary;

		public function getName() : string {
			return $this->name;
		}
		public function setName(string $name) {
			$this->name = $name;
		}


		public function getAge() : int {
			return $this->age;
		}
		public function setAge(int $age) {
		$newAge = $this->age + $age; 
			if($this->isAgeCorrect($newAge)) { 
			$this->age = $age; 
			}
		}
		private function isAgeCorrect($age){
			return $age >= 1 && $age <= 100;
		} 


		public function getSalary() {
			return $this->salary . '$';
		}
		public function setSalary(string $salary) {
			$this->salary = $salary;
		}
	}




$ivan = new Employee();
$ivan->setName('Иван');
$ivan->setAge(25);
$ivan->setAge(125);
$ivan->setSalary(1000);

echo $ivan->getName() . ' ' . $ivan->getAge() . ' ' . $ivan->getSalary() . "\n";
