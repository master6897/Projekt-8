<?php

namespace app\controllers;
class ResultsCtrl{
    public $datas;
    public function action_showResults(){
        try{
            $database = new \Medoo\Medoo([
                'database_type'=>'mysql',
                'database_name'=>'kalk',
                'server'=>'localhost',
                'username'=>'root',
                'password'=>'',
                'charset'=>'utf8',
                'colltion'=>'utf8_polish_ci',
                'port'=>'3306',
                'option'=>[
                \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            ]);
            
            $this->datas = $database->select("wyniki",[
               "kwota",
                "lat",
                "procent",
                "rata",
                "data"
            ]);
        } catch (\PDOException $ex) {
            getMessages()->addError("DB Error: ".$ex->getMessage());
        }
        $this->generateView();
       }
    public function generateView(){

         getSmarty()->assign('page_title','Strona logowania');
         getSmarty()->assign('page_person','Marcin Puc');
         getSmarty()->assign('page_localization','Jastrzębie-Zdrój');
         getSmarty()->assign('page_email','pucmarcin@gmail.com');
         getSmarty()->assign('page_phone','666-666-666');
         
         getSmarty()->assign('datas',$this->datas);

         getSmarty()->display('ResultView.tpl');
       }
}