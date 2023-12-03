<?php

namespace App\Filament\Resources\CommentResource\Widgets;

use App\Filament\Resources\CommentResource;
use App\Models\Comment;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestCommentsWidget extends BaseWidget
{
    protected int|string|array $columnSpan = 2;
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Comment::where('created_at', '>=', now()->subDays(14))
                    ->orderBy('created_at', 'desc')
            )
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('user.name'),
                TextColumn::make('post.title'),
                TextColumn::make('comment'),
                TextColumn::make('created_at')
                    ->date()->sortable()
            ])
            ->actions([
                \Filament\Tables\Actions\Action::make('View')
                    ->url(fn(Comment $record): string => CommentResource::getUrl('edit', [$record]))
            ]);
    }


}
