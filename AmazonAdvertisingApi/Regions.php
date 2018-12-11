<?php
namespace AmazonAdvertisingApi;

class Regions
{
    public $endpoints = array(
        "na" => array(
            "prod"     => "advertising-api.amazon.com/v2",
            "sandbox"  => "advertising-api-test.amazon.com/v2",
            "tokenUrl" => "api.amazon.com/auth/o2/token"),
        "eu" => array(
            "prod"     => "advertising-api-eu.amazon.com/v2",
            "sandbox"  => "advertising-api-test.amazon.com/v2",
            "tokenUrl" => "api.amazon.com/auth/o2/token"
        )
    );
}
