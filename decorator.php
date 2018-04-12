<?php

     echo "decorator设计模式(装饰器模式).<br><br>";  
     abstract class AbstractProcess {

             protected  $componentList = array();

      

           function addProcess($processName){                

                     $this->componentList[]  = $processName ;

           }

      

           function showAllProcess(){

                  if (count($this->componentList) ==  0){echo "没有过程";}           

             for($x=0;$x<count($this->componentList);$x++){

                echo  $this->componentList[$x]. ";" ;                        

                     }                  

           }

     }

 

       class  StandardProcess extends AbstractProcess{

              public  function StandardProcess(){

                  $this->initizeProcess();

           }    

      

           function initizeProcess(){

                  $this->addProcess("需求分析过程");

                  $this->addProcess("设计过程");

                  $this->addProcess("编码过程");

                  $this->addProcess("测试过程");

                  $this->addProcess("部署过程");

                  $this->addProcess("维护过程");                

           }

     }

           

       class  AdditionalProcess extends AbstractProcess{

           protected $actualProcess;      

 

           function setActualProcess($actualProcess)  {

                  $this->actualProcess = $actualProcess;

           }

     }    

     

     class DesignCheckProcess extends AdditionalProcess{       

           function ConcreteActualProcess(){

                   $this->actualProcess->addProcess("设计检查");

           }

     }    

     

       class  RequestVerificationProcess extends AdditionalProcess{

           function ConcreteActualProcess(){

                   $this->actualProcess->addProcess("需求验证");

           }

     }           

 

     /*  程序开始运行  */

     echo "——————程序开始运行.————————<br>";  

  

     $projectProcess = new StandardProcess();

       echo  "——————项目的标准过程———————<br>";

       $projectProcess->showAllProcess();

       echo  "<br>";

             

       //附加需求验证过程

       $projectAddProcess1  = new RequestVerificationProcess();

       $projectAddProcess1->setActualProcess($projectProcess);

       $projectAddProcess1->ConcreteActualProcess();

             

       echo  "——————增加需求验证过程后的项目过程———————<br>";

       $projectProcess->showAllProcess();

       echo  "<br>";

             

       //附加设计检查过程

       $projectAddProcess2  = new DesignCheckProcess();

       $projectAddProcess2->setActualProcess($projectProcess);

       $projectAddProcess2->ConcreteActualProcess();

             

       echo  "——————再增加设计检查过程后的项目过程———————<br>";

       $projectProcess->showAllProcess();

       echo  "<br>";

 

     echo "——————程序运行结束.————————<br>";   

  

?>

 