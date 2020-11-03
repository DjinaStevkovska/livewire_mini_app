<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use App\Http\Livewire\SearchDropdown;

class SearchDropdownTest extends TestCase
{
    /** @test */
    public function home_page_contains_search_component()
    {
        $this
            ->get('/home')
            ->assertSeeLivewire('search-dropdown');
    }
    
    /** @test */
    public function search_drop_down_searches_correctly_if_song_exists()
    {
        Livewire::test(SearchDropdown::class)
        ->assertDontSee('John Lennon')
        ->set('search', 'Imagine')
        ->assertSee('John Lennon')
        ;
    }

    /** @test */
    public function search_drop_down_shows_message_if_no_song_exists()
    {
        Livewire::test(SearchDropdown::class)
        ->set('search', 'fdbfsgsgsgs')
        ->assertDontSee('No results found!')
        ;
    }

}
