<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->maxSize(1024)
                        ->disk('public'),
                    Forms\Components\TextInput::make('title')
                        ->autofocus()
                        ->required()
                        ->placeholder('Enter title'),
                    Forms\Components\Textarea::make('content')
                        ->autofocus()
                        ->required()
                        ->placeholder('Enter content'),
                    Forms\Components\TextInput::make('author')
                        ->autofocus()
                        ->required()
                        ->placeholder('Enter author'),
                    Forms\Components\FileUpload::make('picture')
                        ->image()
                        ->maxSize(1024)
                        ->disk('public'),
                    Forms\Components\TextInput::make('grade')
                        ->autofocus()
                        ->required()
                        ->placeholder('Enter grade'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\TextColumn::make('author')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
