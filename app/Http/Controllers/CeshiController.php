<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeshiController extends Controller
{
    public function index()
    {
        $data['list'] = [
            [
                'id' => 1,
                'src' => '',
                'author' => '张三',
                'title' => '我爱学习',
                'loveNumber' => 123,
                'commentNumber' => 2333,
                'shareNumber' => 333,
            ],
            [
                'id' => 2,
                'src' => '',
                'author' => '李四',
                'title' => '我爱学习',
                'loveNumber' => 123,
                'commentNumber' => 2333,
                'shareNumber' => 333,
            ],
            [
                'id' => 3,
                'src' => '',
                'author' => '王五',
                'title' => '我爱学习',
                'loveNumber' => 123,
                'commentNumber' => 2333,
                'shareNumber' => 333,
            ],
        ];
        return response()->json($data);
    }

    public function getVideo(){
        $data['list'] = [
            [
                'id' => 1,
                'src' => 'http://www.admin-api.test/storage/statics/123.mp4',
                'author' => '张三',
                'title' => '啦啦啦11111',
                'loveNumber' => 145655,
                'commentNumber' => 23335,
                'shareNumber' => 3320,
            ],
            [
                'id' => 2,
                'src' => 'http://www.admin-api.test/storage/statics/456.mp4',
                'author' => '李四',
                'title' => '啦啦啦2222222222222',
                'loveNumber' => 23567,
                'commentNumber' => 2333,
                'shareNumber' => 333,
            ],
            [
                'id' => 1,
                'src' => 'http://www.admin-api.test/storage/statics/789.mp4',
                'author' => '王五',
                'title' => '啦啦啦33333333333',
                'loveNumber' => 12345,
                'commentNumber' => 23332,
                'shareNumber' => 33345,
            ],
        ];
        return response()->json($data);
    }

    public function getCity()
    {
        return response()->json(config('headercity'));
    }
}
