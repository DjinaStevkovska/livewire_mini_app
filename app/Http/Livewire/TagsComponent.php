<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Tag;

class TagsComponent extends Component
{
    public $tags;

    protected $listeners = ['tagAdded', 'tagRemoved'];

    public function tagAdded($tag)
    {
        Tag::create(['name' => $tag]);
        $this->emit('tagAddedFromBackend', $tag);
    }

    public function tagRemoved($tag)
    {
        Tag::where('name', $tag)->first()->delete();
    }

    public function mount()
    {
        $allTags = Tag::all();
        $this->tags = json_encode($allTags->pluck('name'));
        // dd($this->tags);
    }
    public function render()
    {
        return view('livewire.tags-component');
    }
}
