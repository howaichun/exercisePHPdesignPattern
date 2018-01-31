<?php 
    echo "flyweight设计模式(享元模式)(对象方式).<br><br>";  
    abstract class Document {     
        abstract function readDocument();
    }
    
    class AdministrativeDcoment extends Document{      
        public function   readDocument(){
            echo   "请阅读行政文档。<br>";

        }
    }

    class  FinancialDocument extends Document{     
       public function   readDocument(){
              echo "请阅读财务文档。<br>";
       }
    }

    class TechnicalDocument extends Document{
       public function   readDocument(){
          echo "请阅读技术文档。<br>";
       }
    }

    class DocumentRepository { 
      private $DocumentMap = array();

      public function  __construct() {
             $this->initizeRepository();
      } 

      private function initizeRepository(){
        $this->DocumentMap["行政文档"] =  new AdministrativeDcoment();
        $this->DocumentMap["技术文档"] =  new TechnicalDocument();
        $this->DocumentMap["财务文档"] =  new FinancialDocument();                     
      }

      public  function getDocument( $docType ){
          foreach($this->DocumentMap as  $x=>$x_value){
              if( strcasecmp($x,$docType) == 0 ) return $x_value;                      
          }                         
          echo   "没有此类文档。"  ;
          return null;
        }
      }

       /*  程序开始运行  */
      echo "——————程序开始运行.————————<br>";  
      $repository = new DocumentRepository();
      $doc1       = $repository->getDocument("行政文档");
      $doc1->readDocument();
      $doc2       = $repository->getDocument("技术文档");
      $doc2->readDocument();
      $doc3       = $repository->getDocument("财务文档");
      $doc3->readDocument();
      echo "——————程序运行结束.————————<br>";   
?>
