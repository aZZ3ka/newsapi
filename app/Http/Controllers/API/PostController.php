<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\StorePostRequest;
use App\Http\Requests\API\UpdatePostRequest;
use App\Http\Resources\API\PostResource;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        return response()->json(Post::all());
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
     * @param StorePostRequest $request
     * @return JsonResponse
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

//        if($validator->fails()){
//            return response()->json($validator->errors());
//        }

        $post = Post::create($data);

        return response()->json(['Post created successfully.', new PostResource($post)]);
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return JsonResponse
     */
    public function show(Post $post)
    {
        return response()->json(new PostResource($post));
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
     * @param UpdatePostRequest $request
     * @param Post $post
     * @return JsonResponse
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();

//        if($validator->fails()){
//            return response()->json($validator->errors());
//        }
        $post->update($data);

        return response()->json(['Post updated successfully.', new PostResource($post)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return JsonResponse
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json('Post deleted successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return JsonResponse
     */
    public function upvote(Post $post)
    {
        $post->increment('amount_of_upvote', 1);
        return response()->json(['Upvoted successfully.', new PostResource($post)]);
    }
}
