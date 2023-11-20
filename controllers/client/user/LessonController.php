<?php

require_once 'model/chapter.php';
require_once 'model/course.php';
require_once 'model/lesson.php';

class LessonController
{
    function create()
    {
        validate_api($_POST, [
            'name' => ['required:tên bài học'],
            'description' => ['required:mô tả'],
            'chapter' => ['required:mục'],
            'course_id' => ['required:tham số'],
            'video' => ['required:video'],
            'time' => ['required:thời gian']
        ]);

        $user = user();
        $course = (new Course)->where('id', '=', $_POST['course_id'])->where('user_id', '=', $user['id'])->first();
        if (!$course) {
            return api(['status' => -101, 'msg' => 'Không tìm thấy khoá học']);
        }

        $chapter = (new Chapter)->where('id', '=', $_POST['chapter'])->first();
        if (!$chapter) {
            return ['status' => -102, 'msg' => 'Không tìm thấy mục đã chọn'];
        }

        (new Lesson)->insert(['course_id' => $_POST['course_id'], 'chapter_id' => $_POST['chapter'], 'name' => $_POST['name'], 'description' => $_POST['description'], 'video_url' => $_POST['video'], 'time' => $_POST['time']]);
        return api(['status' => 200, 'msg' => 'Đăng bài học thành công']);
    }
    function info()
    {
        validate_api($_POST, [
            'id' => ['required:tham số'],
        ]);

        $lesson = (new Lesson)->where('id', '=', $_POST['id'])->first();
        if (!$lesson) {
            return ['status' => -102, 'msg' => 'Không tìm thấy bài học'];
        }

        return api(['status' => 200, 'data' => $lesson]);
    }
    function edit()
    {
        validate_api($_POST, [
            'id' => ['required:tham số'],
            'name' => ['required:tên bài học'],
            'description' => ['required:mô tả'],
            'chapter' => ['required:mục'],
            'video' => ['required:video'],
            'time' => ['required:thời gian']
        ]);

        $lesson = (new Lesson)->where('id', '=', $_POST['id'])->first();
        if (!$lesson) {
            return ['status' => -102, 'msg' => 'Không tìm thấy bài học'];
        }

        (new Lesson)->where('id', '=', $lesson['id'])->update(['chapter_id' => $_POST['chapter'], 'name' => $_POST['name'], 'description' => $_POST['description'], 'video_url' => $_POST['video'], 'time' => $_POST['time']]);
        return api(['status' => 200, 'msg' => 'Chỉnh bài học thành công']);
    }
    function delete()
    {
        validate_api($_POST, [
            'id' => ['required:tham số'],
        ]);

        $lesson = (new Lesson)->where('id', '=', $_POST['id'])->first();
        if (!$lesson) {
            return ['status' => -102, 'msg' => 'Không tìm thấy bài học'];
        }

        (new Lesson)->where('id', '=', $lesson['id'])->delete();
        return api(['status' => 200, 'msg' => 'Xoá bài học thành công']);
    }
}
