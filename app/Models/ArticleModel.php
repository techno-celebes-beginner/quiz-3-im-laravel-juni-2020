<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArticleModel
{
	public static function get_all(){
		$pertanyaan = DB::table('article')->get();
		return $pertanyaan;
	}

	public static function get_by_id($id){
		$pertanyaan = DB::table('article')->where("article_id",$id)->get();
		return $pertanyaan;
	}

	public static function save($data){
		$new_q = DB::table('article')->insert($data);
		return $new_q;
	}

	public static function update($data){
		$new_q = DB::table('article')->where('article_id',$data['article_id'])->update(['slug'=>$data['slug'],'judul'=>$data['judul'],'isi'=>$data['isi'],'tag'=>$data['tag'],'updated_at'=>$data['updated_at']]);
		return $new_q;
	}

	public static function delete($id){
		$new_q = DB::table('article')->where('article_id',$id)->delete();
		return $new_q;
	}    //
}
