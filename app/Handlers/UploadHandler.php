<?php
namespace App\Handlers;

class UploadHandler
{
//    protected $allowed_ext = ["png", "jpg", "gif", 'jpeg'];

    public function save($file)
    {
        // 文件具体存储的物理路径
        $upload_path = public_path() . '/uploads/files';

        // 获取文件的后缀名
        $extension = strtolower($file->getClientOriginalExtension());

        // 拼接文件名
        $filename = date('Y-m-d-H-i-s', time()) . '_' . uniqid() . '.' . $extension;

        // 如果上传的不是指定类型扩展名的文件将终止操作
//        if ( !in_array($extension, $this->allowed_ext)) {
//            return false;
//        }

        // 将文件移动到我们的目标存储路径中
        $file->move($upload_path, $filename);

        return [
            'path' => "files/$filename"
        ];
    }
}