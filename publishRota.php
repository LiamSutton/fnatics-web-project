<?php
session_start();

require_once("models/ScheduleData.php");
$rotaData = new ScheduleData();

$to = $_GET['to'];
$from = $_GET['from'];
$devA = $_GET['devA'];
$devB = $_GET['devB'];

$rotaData->createRota($from, $to, $devA, $devB);

header("Location: rota.php");