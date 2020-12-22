<?php

class User
{
    protected $pdo;
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function checkInput($variable)
    {
        $variable = htmlspecialchars($variable);        //removing html special chars
        $variable = trim($variable);        // removing whitespaces
        $variable = stripslashes($variable);

        return $variable;
    }
}
