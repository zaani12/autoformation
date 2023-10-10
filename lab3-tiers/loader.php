<?php
define('Root', __DIR__);
error_reporting(E_ALL);

include Root . '/Application/DatabaseConnection.php';
require_once Root . '/Application/DAL/StudentDAO.php';
require_once Root . '/Application/BLL/StudentBLO.php';
require_once Root . '/Application/Entities/Student.php';
