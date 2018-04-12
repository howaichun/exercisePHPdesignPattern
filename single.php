<?php
	
    echo "singleton设计模式(对象方式)\n";  
    class SaleMan {
           private   $name;
           private   $service;

           function __construct($name, $service){
               $this->name = $name;
               $this->service  = $service;
           }

           function getName(){
               return $this->name;
           }

           function setName( $name ){
               $this->name = $name;
           }

           function   getService(){
                  return $this->service;
           }

           function setService($service){
                  $this->service = $service;
           }

     }

      

       class  ServiceManager {

           private $saleMan = null;

 

           function __construct($saleMan){

               $this->saleMan = $saleMan;               

           }

 

           function getSaleManService(){

                  if ( !empty($this->saleMan) )

                        return $this->saleMan;

                  return $this->saleMan;

           }

     }  
 /*  程序开始运行  */

     echo "——————程序开始运行.————————\n";  

  

     $saleMan = new SaleMan("小刘", "小刘的服务\n");

       $service  = new ServiceManager($saleMan);

             

       echo  "第一次获得服务：\n";

       $saleman  = $service->getSaleManService();       

       echo  $saleman->getService();

             

       echo  "第二次获得服务：\n";

       $saleman  = $service->getSaleManService();

       echo  $saleman->getService();

             

       echo  "第三次获得服务：\n";

       $saleman  = $service->getSaleManService();

       echo  $saleman->getService();

 

     echo "——————程序运行结束.————————\n";   