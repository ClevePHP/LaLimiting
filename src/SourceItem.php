<?php 
namespace ClevePHP\LaLimiting;
class SourceItem {
    public static $resources;
    public static $funname;
    public static $data=[];
    public static $sourceItemRules;
    static public  function  New($resources,$funname,$data=[],\ClevePHP\LaLimiting\SourceItemRules $SourceItemRules){
        self::$resources=$resources;
        self::$data=$data;
        self::$sourceItemRules=$SourceItemRules;
        return new self;
    }
}
