<?php
include 'vendor/autoload.php';

use Casabuena\StudentManagement\Model\StudentModel;

$student = new StudentModel;
$student->id = 202473022;
$student->fullname = "Casabuena Mary Ann";
$student->yearlevel = "First Year";
$student->course = "BSIT";
$student->section = "A";

$student->displayInfo();