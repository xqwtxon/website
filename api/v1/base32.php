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

if(!isset($_GET['format'])){
       echo json_encode(["error" => "An Exception: The format provided doesnt match on our targets."]);
       return;
}

if(!isset($_GET['text'])){
       echo json_encode(["error" => "An Exception: Text must be specified."]);
       return;
}

switch(strtolower($_GET['format'])){
        case "encode":
                  echo json_encode(["output" => base32_encode($_GET['text'])]);
                  break;
        case "decode":
                  echo json_encode(["output" => base32_decode($_GET['text'])]);
                  break;
        case "plain_encode":
                  echo base32_encode($_GET['text']);
                  break;
        case "plain_decode":
                  echo base32_decode($_GET['text']);
                  break;
        default:
                  echo json_encode(["error" => "The specified format doesnt match on our targets."]);
                  break;
}
