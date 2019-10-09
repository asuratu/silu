<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoardRequest;
use App\Models\Board;
use Illuminate\Http\Request;

class BoardsController extends CommonController
{
    //
    public function store(BoardRequest $request, Board $board)
    {
        $board->fill($request->all());
        $board->save();

        return response()->json(array(
            'status' => 1,
            'msg' => '提交成功',
        ));
    }
}
