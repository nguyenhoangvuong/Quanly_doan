<?php
    function save($table,$data){
        $val ="";
        $filed = "";
        // kiểm tra có phải 1 mảng hay không
        if(is_array($data)){
            $i = 0;
            foreach($data as $key =>$value){
                if($key != "addNew"){
                    $i++;
                    if($i == 1){
                        $filed .= $key;
                        $val .="'".$value."'";
                    }
                    else{
                        $filed .=','.$key;
                        $val .=",'".$value."'";
                    }
                }
            }
        }
        $sqlInsert = "insert into $table ($filed) values ($val)";
        return $sqlInsert;
    }
?>