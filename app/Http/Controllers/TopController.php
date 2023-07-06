<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sampleテキストです。"; //変数の宣言

        //参照
        $records = DB::connection('mysql')->select("select * from items"); // query 実行処理 実行結果を $records に代入
        $name = $records[0] -> name; //dddの処理を削除するため、$name 変数に代入する内容へ変更

        //追加
        //$insertResult = DB::connection("mysql") ->insert("insert into items (id,name,price) values (null, 'メロン',2000)");
        //ddd( $insertResult ); // 処理をここで停止して引数に指定した値を確認する。ddd(デバッグ)

        //更新
        //$updateResult = DB::connection("mysql") -> update("update items set price = 600 where name = 'apple' ");
        //ddd( $updateResult);

        //削除
        //$deleteResult = DB::connection("mysql")->delete("delete from items where id = '3' ");
        //ddd($deleteResult);

        return view("top/index" , ["sampleValue" => $sampleValue]);
    }
}