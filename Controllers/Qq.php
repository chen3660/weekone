<?php

namespace App\Http\Controllers;
use App\Data;
use Illuminate\Http\Request;

class Qq extends Controller
{
    public function reg(){
        return view('qq.reg');
    }

    public function create(Request $request){
        $this->validate($request, [
            'nickname' => 'required|unique:data',
            'pwd' => 'required',
            'phone' => 'required',
        ]);

        $model = new Data;

        $model->nickname = $request['nickname'];
        $model->pwd = md5($request['pwd']);
        $model->phone = $request['phone'];
        $model->idcard = rand(10000000,99999999);
        if ($model->save()){
            return  $this->login();
        }else{
            return  $this->reg();
        }

    }

    public function login(){
        return view('qq.login');
    }

    public function logindo(Request $request){
        $this->validate($request, [
            'pwd' => 'required',
            'idcard' => 'required',
        ]);
        $model = new Data;

        $data = $model -> where('idcard',$request['idcard']) -> where('pwd',md5($request['pwd'])) -> first();

        if (empty($data)){
            echo "登录信息错误";
        }else{
            return view('qq.info',['data'=>$data]);
        }

    }
}
