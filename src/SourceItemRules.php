<?php 
namespace ClevePHP\LaLimiting;
class SourceItemRules{
    public static $requestNumber;              //达到条件，X次请求(qps)
    public static $requestEnvSeconds;          //多少秒内触发条件
    public static $requestStopSeconds;         //停x秒 
    static public  function  New(){
        return new self;
    }
}
