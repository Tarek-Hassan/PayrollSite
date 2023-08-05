<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Models\FeaturedCandidate;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use Filament\Pages\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FeaturedCandidateResource\Pages;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\FeaturedCandidateResource\RelationManagers;
use App\Filament\Resources\FeaturedCandidateResource\Pages\EditFeaturedCandidate;
use App\Filament\Resources\FeaturedCandidateResource\Pages\ListFeaturedCandidates;
use App\Filament\Resources\FeaturedCandidateResource\Pages\CreateFeaturedCandidate;

class FeaturedCandidateResource extends Resource
{
    protected static ?string $model = FeaturedCandidate::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    Grid::make(2)->schema([

                            Forms\Components\TextInput::make('title_ar')
                                ->required()
                                ->disabled()
                                ->placeholder('title_ar')
                                ->maxLength(255),

                            Forms\Components\TextInput::make('title_en')
                                ->placeholder('title_en')
                                ->required()
                                ->disabled()
                                ->maxLength(255),
                    ]),

                Forms\Components\Textarea::make('content_ar')
                    ->required()
                    ->placeholder('content_ar')
                    ->maxLength(65535),

                Forms\Components\Textarea::make('content_en')
                    ->required()
                    ->placeholder('content_en')
                    ->maxLength(65535),
                Grid::make(2)->schema([
                    Forms\Components\TextInput::make('tag1_ar')
                        ->required()
                        ->placeholder('tag1_ar')
                        ->disabled()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('tag1_en')
                        ->required()
                        ->placeholder('tag1_en')
                        ->disabled()
                        ->maxLength(255),
                ]),
                Grid::make(2)->schema([
                    Forms\Components\TextInput::make('tag2_ar')
                        ->required()
                        ->placeholder('tag2_ar')
                        ->disabled()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('tag2_en')
                        ->required()
                        ->placeholder('tag2_en')
                        ->disabled()
                        ->maxLength(255),
                    ]),

                    SpatieMediaLibraryFileUpload::make('thumbnail')->collection('featured_candidate'),
                    Toggle::make('is_published')
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
                Tables\Columns\TextColumn::make('title_ar')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('title_en')->sortable()->searchable(),
                // Tables\Columns\TextColumn::make('content_ar')->sortable()->searchable(),
                // Tables\Columns\TextColumn::make('content_en')->sortable()->searchable(),
                IconColumn::make('is_published')
                                    ->boolean()
                                    ->trueIcon('heroicon-o-badge-check')
                                    ->falseIcon('heroicon-o-x-circle'),
            ])
            ->filters([
                Filter::make('Published')->toggle()
                    ->query(fn (Builder $query): Builder => $query->where('is_published', true)),
                Filter::make('Un Published')->toggle()
                    ->query(fn (Builder $query): Builder => $query->where('is_published', false)),
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListFeaturedCandidates::route('/'),
            'edit' => Pages\EditFeaturedCandidate::route('/{record}/edit'),
        ];
    }    
}
