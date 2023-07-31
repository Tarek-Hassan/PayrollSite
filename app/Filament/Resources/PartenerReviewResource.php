<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\PartenerReview;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PartenerReviewResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\PartenerReviewResource\RelationManagers;

class PartenerReviewResource extends Resource
{
    protected static ?string $model = PartenerReview::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('postion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('review')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rate')
                    ->numeric()
                    ->required(),
                SpatieMediaLibraryFileUpload::make('thumbnail')->collection('partener_reviews'),
                Forms\Components\Toggle::make('is_published')
                ->onColor('success')
                ->offColor('danger'),
            ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('postion')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('rate')->sortable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()
                    ->trueIcon('heroicon-o-badge-check')
                    ->falseIcon('heroicon-o-x-circle'),
                SpatieMediaLibraryImageColumn::make('thumbnail')->collection('partener_reviews'),
            ])
            ->filters([
                Filter::make('Published')->toggle()
                    ->query(fn (Builder $query): Builder => $query->where('is_published', true)),
                Filter::make('Un Published')->toggle()
                    ->query(fn (Builder $query): Builder => $query->where('is_published', false)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPartenerReviews::route('/'),
            'create' => Pages\CreatePartenerReview::route('/create'),
            'edit' => Pages\EditPartenerReview::route('/{record}/edit'),
        ];
    }    
}
