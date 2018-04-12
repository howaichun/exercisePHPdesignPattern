<?php
     echo "proxy设计模式(对象方式).<br><br>"; 
     abstract class AbstractOrganization {   
       	abstract function request();
     }    

     class Corporation extends AbstractOrganization{ 
        function request(){
            echo "这是公司的答复。<br>";
		}
     }

     class  Agency extends AbstractOrganization {
       private $corporation;
       function request() {
			if ($this->corporation == null)
				$this->corporation = new  Corporation();
				$this->corporation->request();
       }
   }           

 /*  程序开始运行  */
 echo "——————程序开始运行.————————<br>";  
 echo  "—————没有代理的直接答复。——————<br>";
 $corporation  = new Corporation();
 $corporation->request();
 echo  "—————有代理的答复。——————<br>";  
 $agency = new Agency();
 $agency->request();
 echo "——————程序运行结束.————————<br>";       

?>

 