<?php


namespace App\classes;


class FullName
{
    public $firstName, $lastName, $fullName;
    public function makeFullName($formdata)
    {
        $this->firstName = $formdata['first_name'];
        $this->lastName = $formdata['last_name'];
        $this->fullName = $this->firstName.''.$this->lastName;

        header('Location: action.php?page=full_name&message='.$this->fullName);
    }
}