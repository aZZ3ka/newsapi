<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\StoreCommentRequest;
use App\Models\Comment;
use App\Http\Resources\API\CommentResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $data = $request->post_id == null ? Comment::all() : Comment::where('post_id', $request->post_id)->get();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCommentRequest $request
     * @param Post $post
     * @return JsonResponse
     */
    public function store(StoreCommentRequest $request)
    {
        $data = $request->validated();
        $comment = Comment::create($data);

        return response()->json(['Comment created successfully.', new CommentResource($comment)]);
    }

    /**
     * Display the specified resource.
     *
     * @param Comment $comment
     * @return JsonResponse
     */
    public function show(Comment $comment)
    {
        return response()->json(new CommentResource($comment));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Comment $comment
     * @return JsonResponse
     */
    public function update(Request $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);

        return response()->json(['Comment updated successfully.', new CommentResource($comment)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return JsonResponse
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json('Comment deleted successfully.');
    }
}
