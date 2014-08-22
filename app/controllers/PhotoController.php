<?php

class PhotoController extends BaseController
{
    public function upload()
    {
        $user = Auth::user();
        $cnt = 0;
        foreach (Input::file('ff') as $img) {
            $img->move(storage_path()."/photo/{$user->email}", ($cnt++).'.'.$img->getClientOriginalExtension());
        }
    }
}
