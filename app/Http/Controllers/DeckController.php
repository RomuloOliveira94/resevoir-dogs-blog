<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DeckController extends Controller
{

    public function index()
    {
        $input = [
            'title' => 'deck 2',
            'slug' => 'Demo Title',
            'user_id' => Auth::user()->id,
            'deck' => [
                'title' => 'deck de fuleiro',
                'author' => 'fuleiro',
                'poder' => 3.5,
                'custo' => 2.5,
                'card_01' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
                'card_02' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
                'card_03' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
                'card_04' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
                'card_05' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
                'card_06' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
                'card_07' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
                'card_08' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
                'card_09' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
                'card_10' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
                'card_11' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
                'card_12' => [
                    'name' => 'carta do fuleiro',
                    'image' => Storage::disk('public')->url('posts/thumbnails/i3tuQDd7Ur2W0QBItrGExQfcqc6BJS-metaYXN0cm9uYXV0LWRhbmNpbmctb24tcm9ja2V0LTQyNzg1ODQtMzU1MDUyOS5wbmc=-.png'),
                    'link' => 'http´://google.com'
                ],
            ]
        ];

        $item = Deck::create($input);

        dd($item->deck);
    }
}
