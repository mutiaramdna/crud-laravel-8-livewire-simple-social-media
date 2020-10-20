<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListPost extends Component
{

	public $post_id, $user_id, $body;
	public $isModal = 0;
	protected $listeners = [
		'postCreated' => '$refresh'
	];

    public function render()
    {
        return view('livewire.list-post', [
        	'posts' => Post::latest()->get()
        ]);
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $this->post_id = $id;
        $this->user_id = $post->user_id;
        $this->body = $post->body;

        $this->openModal();
    }

    public function store()
    {
        $this->validate([
            'body' => 'required'
        ]);

        Post::updateOrCreate(['id' => $this->post_id], [
            'body' => $this->body,
        ]);

        session()->flash('info', $this->post_id ? 'Post Update Successfully' : 'Post Created Successfully' );
        $this->closeModal();
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        session()->flash('message', $post->name . ' Dihapus');
    }
}
