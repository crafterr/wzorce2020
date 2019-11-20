<?php
namespace wzorce\nastyboss;

class NastyBoss
{
    private $employees = [];

    public function addEmployee(Employee $employee) {
        $this->employees[] = $employee;
    }

    public function removeEmployee(Employee $employee) {
        $index = array_search($employee,$this->employees,true);

        if (is_int($index)) {
            array_splice($this->employees,$index,1,[]);
        }
        return $index;
       /* $searchedValue = $id; // Value to search.
        $neededObject = array_filter(
            $this->employees,
            function ($e) use ($searchedValue) {

                if ($e->getId() == $searchedValue) {

                    foreach ($this->employees as $key => $employee) {
                        if ($employee === $e) {
                            unset($this->employees[$key]);
                        }
                    }

                }
            }
        );*/

    }

    public function projectFails() {

    }

    public function getEmployes():array {
        return $this->employees;
    }
}