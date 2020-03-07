<?php

include '../com/apl/auth/Config.php';
include '../com/apl/bean/Career.php';
include '../com/apl/dao/mysql/CareerDao.php';
include '../com/apl/dao/mysql/CareerDaoImpl.php';
include '../com/apl/controller/CareerController.php';

$car = new CareerController();
$result = $car->updateCareerById();