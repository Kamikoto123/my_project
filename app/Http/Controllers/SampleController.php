<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {
        $index = "sampleテキストです。"; //変数の宣言

        //参照
        //$records = DB::connection('mysql')->select("select * from users"); // query 実行処理 実行結果を $records に代入
        //$name = $records[0] -> email; //dddの処理を削除するため、$name 変数に代入する内容へ変更

        //追加
        //$insertResult = DB::connection("mysql") -> insert("insert into users (id,email,name,password) values (null,'b@b','b.b','bbb'),(null,'c@c','c.c','ccc')");
        //ddd( $insertResult ); // 処理をここで停止して引数に指定した値を確認する。ddd(デバッグ)

        //更新
        //$updateResult = DB::connection("mysql") -> update("update items set price = 600 where name = 'apple' ");
        //ddd( $updateResult);

        //削除
        $deleteResult = DB::connection("mysql")->delete("delete from users where id = '2' ");
        ddd($deleteResult);

        return view("sample/index" , ["index" => $index]);
    }
}