<?php

/**
 * This is part of legacy of public api.
 * Apart of contruct on website.
 *
 * This file is protected on MIT LICENSE (c)
 *
 * @author xqwtxon
 * @link https://xqwtxon.ml/
*/

$startTime = microtime(true);
if(!isset($_GET['url'])){
       echo json_encode(["status" => "error", "message" => "Please specify a url.", "time" => number_format($startTime - $endTime, 2) . "s"]);
       return;
}
if (filter_var($_GET['url'], FILTER_VALIDATE_URL) === FALSE) {
       $endTime = microtime(true);
       echo json_encode(["status" => "error", "message" => $_GET['url'] . " is an invalid url.", "time" => number_format($startTime - $endTime) . "s"]);
} else {
       $endTime = microtime(true);
       echo json_encode(["status"=> "valid", "message" => $_GET['url'] . " is a valid url.", "time" => number_format($startTime - $endTime, 2) . "s"]);
}
