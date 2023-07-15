<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserComment;

class UserCommentController extends Controller
{
    public function show()
    {
        $models = UserComment::all();

        return view('UserComment.show-users', ['userComments' => $models]);
    }

    public function create(Request $request)
    {
        $rules = ['name' => 'required|string|max:30', 'email' => 'required|string|max:30|email', 'comment' => 'required|string|max:1000'];
        $this->validate($request, $rules);

        $userData = $request->all();
        $name = $userData['name'];
        $email = $userData['email'];
        $comment = $userData['comment'];

        $model = new UserComment();

        $model->name = $name;
        $model->email = $email;
        $model->message = $comment;

        $model->save();

        return redirect()->back();
    }
}
