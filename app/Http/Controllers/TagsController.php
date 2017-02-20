<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;

class TagsController extends Controller
{
    /**
     * Filter posts by Tag
     * Display a listing of posts with selected tags.
     *
     * @param \App\Tag
     * @return \Illuminate\Http\Response
     */
    public function index(Tag $tag)
    {
		return redirect('/posts' . '?tag=' . $tag->name);
    }	

    /**
     * Return list of tags as json object
     *
     * @return JSON - array of tags as json objects
     */
    public function list()
    {
        return Tag::all();
    } 

    /**
     * Return list of tags for specific object !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! WORK in PROCESS
     *      create list of all tags
     *      mark Post tags as selected 
     *      return list as JSON array 
     * @param \App\Post 
     * @return JSON - array of tags as json objects
     */
    public function postTags(Post $post)
    {
        $tags = Tag::all(['name'])->toArray();

        // array_walk($tags, function(&$element){
        //      $element['selected'] = $post->hasTag($element['name'])
        // });

        var_dump($tags[0]);
        return 'Done';
    } 

    /**
     * Create new Tag, return new Tag a json object
     *
     * @return \App\Tag as json objects
     */     
    public function store()
    {
        // validatetion
        $this->validate(request(), [
            'name' => 'required|unique:tags,name'
        ]);

        return Tag::create(request(['name']));
    }   

    /**
     * Update Tag, return updated Tag as json object
     *
     * @return \App\Tag as json objects
     */     
    public function update(Tag $tag)
    {
        // validatetion
        $this->validate(request(), [
            'name' => 'required|unique:tags,name'
        ]);

        $tag->update(request(['name']));
        return 'Updated';
    } 

    /**
     * Delete a Tag
     *
     * @return string
     */     
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return 'Deleted';
    }  
}
