<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class HomeController extends Controller
{
    public function home(){
    	return view('home');
    }

    public function article_list(){
    	$all_article = ArticleModel::get_all();
    	$data = array(
    		'article_list' => $all_article
    	);

    	return view('article_list',$data);
    }

    public function create_article(){
    	return view('create_article');
    }

    public function edit_article($id){
        $n = ArticleModel::get_by_id($id);
        return view('edit_article',['a'=> $n]);
    }

    public function submit_article(Request $request){
    	$data_q = array();
    	$data_q['judul'] = $request->judul;
    	$data_q['isi'] = $request->isi;
    	$data_q['tag'] = $request->tag;
    	$data_q['creator'] = 1; //Seed sendiri di database pada table users dengan user_id = 1, baru bisa jalan. Karena ini foreign key
    	$data_q['slug'] = str_replace(" ", "-", strtolower($request->judul));
        $data_q['created_at'] = date("Y-m-d H:i:s");
        $data_q['updated_at'] = date("Y-m-d H:i:s");
    	$new_q = ArticleModel::save($data_q);

    	return redirect('/artikel');
    }

    public function show($id){
        $n = ArticleModel::get_by_id($id);
        $k = $n[0]->tag;
        $k_1 = explode(" ", $k);
        return view('single-article',['a'=> $n,'tag'=>$k_1]);
    }

    public function update_article(Request $request, $id){
        $data_q = array();
        $data_q['article_id'] = $id;
        $data_q['judul'] = $request->judul;
        $data_q['isi'] = $request->isi;
        $data_q['tag'] = $request->tag;
        $data_q['slug'] = str_replace(" ", "-", strtolower($request->judul));
        $data_q['updated_at'] = date("Y-m-d H:i:s");
        $new_q = ArticleModel::update($data_q);

        return redirect('/artikel');
    }

    public function delete_article($id){
        ArticleModel::delete($id);
        return redirect('/artikel');
    }
}
