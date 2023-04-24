<?php


class A
{
   function __toString() {
        return __CLASS__;
    }
    
}


$xml = new SimpleXMLElement("<note>Hello <to>Tove</to><from>Jani</from>World!</note>");
echo $xml;

$ob= new A();
echo $ob;