<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\About;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AboutResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AboutResource\RelationManagers;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $pluralLabel = 'About Us';
    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\Textarea::make('page_banner_content_en')
                        ->required()
                        ->rows(2)
                        ->maxLength(500),
                    Forms\Components\Textarea::make('page_banner_content_ar')
                        ->rows(2)
                        ->required()
                        ->maxLength(500),
                   
                    Grid::make(2)->schema([
                        Forms\Components\DatePicker::make('page_banner_date')
                            ->required(),
                        Forms\Components\TextInput::make('page_banner_read')
                            ->numeric()
                            ->required(),
                    ]),
                    Tabs::make('Heading')->tabs([
                        Tabs\Tab::make('Foundation')->schema([
                            Grid::make(2)->schema([
                                Forms\Components\TextInput::make('foundation_title_en')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),
                                    Forms\Components\TextInput::make('foundation_title_ar')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),
                            ]),
                            RichEditor::make('foundation_content_en')
                                ->disableToolbarButtons(['attachFiles',])
                                ->required(),
                            RichEditor::make('foundation_content_ar')
                                ->disableToolbarButtons(['attachFiles','codeBlock',])
                                ->required(),
                        ]),
                        Tabs\Tab::make('Vision')->schema([
                            Grid::make(2)->schema([
                                Forms\Components\TextInput::make('vision_title_en')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('vision_title_ar')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),
                            ]),
                            RichEditor::make('vision_content_en')
                                ->disableToolbarButtons(['attachFiles','codeBlock',])
                                ->required(),
                            RichEditor::make('vision_content_ar')
                                ->disableToolbarButtons(['attachFiles','codeBlock',])
                                ->required(),
                        ]),
                        Tabs\Tab::make('Mission')->schema([
                            Grid::make(2)->schema([
                                Forms\Components\TextInput::make('mission_title_en')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('mission_title_ar')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),
                            ]),
                            RichEditor::make('mission_content_en')
                                ->disableToolbarButtons(['attachFiles','codeBlock',])
                                ->required(),
                            RichEditor::make('mission_content_ar')
                                ->disableToolbarButtons(['attachFiles','codeBlock',])
                                ->required(),
                        ]),
                        Tabs\Tab::make('Values Principles')->schema([
                            Grid::make(2)->schema([
                                Forms\Components\TextInput::make('values_principles_title_en')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('values_principles_title_ar')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),
                            ]),
                            RichEditor::make('values_principles_content_en')
                                ->disableToolbarButtons(['attachFiles','codeBlock',])
                                ->required(),
                            RichEditor::make('values_principles_content_ar')
                                ->disableToolbarButtons(['attachFiles','codeBlock',])
                                ->required(),
                        ]),
                        Tabs\Tab::make('Team Work')->schema([
                            Grid::make(2)->schema([
                                Forms\Components\TextInput::make('team_title_en')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('team_title_ar')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),
                            ]),
                            RichEditor::make('team_content_en')
                                ->disableToolbarButtons(['attachFiles','codeBlock',])
                                ->required(),
                            RichEditor::make('team_content_ar')
                                ->disableToolbarButtons(['attachFiles','codeBlock',])
                                ->required(),
                            SpatieMediaLibraryFileUpload::make('thumbnail')->collection('team_work'),
                        ]),
                    ]),
                ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('page_banner_content_en'),
                Tables\Columns\TextColumn::make('page_banner_content_ar'),
            ])
            ->filters([
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
            'index' => Pages\ListAbouts::route('/'),
            // 'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }    
}
