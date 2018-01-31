<?php

     echo "facade设计模式(门面模式)(对象方式).<br><br>";
     class  DoWork {
         function operate(){
                echo   "员工：打卡考勤。<br>";
         }
     }

     class Inspection {
         function operate(){
                 echo "领导视察：端茶倒水。<br>";
         }
     }

     class Post {
         function operate(){
                echo "邮递员：登记收发物品。<br>";
         }
     }

     class Visit {
         function operate(){
               echo "访客：登记身份证。<br>";
         }
     }

     class Facade {
          private  $visit ;
          private  $post ;
          private  $inspection;
          private  $doWork ;
          function  __construct() {
               $this->visit      = new Visit();
               $this->post       = new Post();
               $this->inspection = new Inspection();
               $this->doWork     = new DoWork();
          }

          function Operate($operation){
                if (strcasecmp($operation,"visit")== 0 ) {
                       $this->visit->operate();
                } else if (  strcasecmp($operation,"post")== 0) {
                       $this->post->operate();
                } else if (  strcasecmp($operation,"inspection")== 0) {
                       $this->inspection->operate();
                } else if (  strcasecmp($operation,"doWork")== 0) {
                       $this->doWork->operate();
                } else echo "没有对应事项，不能工作。<br>";
          }
     }

     /*  程序开始运行  */
     echo "——————程序开始运行.————————<br>";
     $facade = new Facade();
     //向前台要求访客
     $facade->Operate("visit");
     //向前台提交邮品
     $facade->Operate("post");
     //领导过来视察
     $facade->Operate("inspection");
     //员工上班
     $facade->Operate("doWork");
     //study是没有对应的工作接口
     $facade->Operate("study");
     echo "——————程序运行结束.————————<br>";

?>
