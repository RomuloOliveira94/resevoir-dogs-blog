<?php

use App\Models\Deck;
use App\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('deck_post', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignIdFor(Post::class);
        //     $table->foreignIdFor(Deck::class);
        //     $table->timestamps();
        // });

        Schema::table('decks', function (Blueprint $table) {
            $table->dropColumn('post_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deck_post');
    }
};
