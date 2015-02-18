<?php
require "app/Mage.php";

Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);

Mage::app();


// OUTPUT CONFIG
//Mage::app('admin');
//header('Content-Type: text/xml');
//echo Mage::getConfig()->loadModulesConfiguration('config.xml')->getNode()->asNiceXML();


// SHIPPING SENDER REGION_ID
//echo Mage::getStoreConfig('shipping/origin/region_id', 1);


// ACTION GET LAYOUT XML FROM CONTROLLER
//$xml = $this->loadLayout()->getLayout()->getUpdate()->asString();
//$this->getResponse()->setHeader('Content Type', 'text/plain')->setBody($xml);


// MATRIXRATE MODULE
//var_dump(get_class(Mage::getModel('matrixrate/carrier_matrixrate')));
//var_dump(get_class(Mage::getModel('chilexpress/carrier_matrixrate')));
//var_dump(Mage::getModel('matrixrate/carrier_matrixrate')->getConfigFlag('active'));
//var_dump(Mage::getModel('chilexpress/carrier_matrixrate')->getConfigFlag('active'));