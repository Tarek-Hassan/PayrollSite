<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\HomePage;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Wizard;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\HomePageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\HomePageResource\RelationManagers;

class HomePageResource extends Resource
{
    protected static ?string $model = HomePage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    // Wizard::make([
                    Tabs::make('Heading')->tabs([
                        //Wizard\Stepmake('Main Banner')->schema([
                        Tabs\Tab::make('Main Banner')->schema([
                            Forms\Components\Textarea::make('main_banner_content_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('main_banner_content_en')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\TextInput::make('main_banner_link')
                                ->maxLength(255),
                        ]),
                        Tabs\Tab::make('About')->schema([
                     
                        Grid::make(2)->schema([
                            Forms\Components\TextInput::make('about_title_ar')
                                ->required()
                                
                                ->maxLength(255),
                            Forms\Components\TextInput::make('about_title_en')
                                ->required()
                                ->maxLength(255),
                            ]),
                     
                            Forms\Components\Textarea::make('about_header_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('about_header_en')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('about_footer_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('about_footer_en')
                                ->required()
                                ->maxLength(65535),
                           
                            Grid::make(2)->schema([
                            Forms\Components\TextInput::make('years_exper')
                                ->required(),
                            Forms\Components\TextInput::make('expert_at_service')
                                ->required(),
                            ]),
                        ]),
                        Tabs\Tab::make('Why First')->schema([
                            
                            Forms\Components\TextInput::make('why_first_link')
                                ->maxLength(255),
                        ]),
                        Tabs\Tab::make('How it works')->schema([
                            Forms\Components\Textarea::make('how_works_header_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('how_works_header_en')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('how_works_Body_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('how_works_Body_en')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('how_works_footer_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('how_works_footer_en')
                                ->required()
                                ->maxLength(65535),
                        ]),
                        Tabs\Tab::make('Employeer')->schema([
                       
                        Grid::make(2)->schema([
                            Forms\Components\TextInput::make('featured_candidates_title_ar')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('featured_candidates_title_en')
                                ->required()
                                ->maxLength(255),
                            ]),
                            Forms\Components\Textarea::make('featured_candidates_content_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('featured_candidates_content_en')
                                ->required()
                                ->maxLength(65535),
                            
                        ]),
                        Tabs\Tab::make('Job Applicants')->schema([
                     
                        Grid::make(2)->schema([
                            Forms\Components\TextInput::make('job_applicants_title_ar')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('job_applicants_title_en')
                                ->required()
                                ->maxLength(255),
                            ]),
                            Forms\Components\Textarea::make('job_applicants_content_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('job_applicants_content_en')
                                ->required()
                                ->maxLength(65535),
                        ]),
                        Tabs\Tab::make('Partner')->schema([
                            Forms\Components\Textarea::make('partner_content_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('partner_content_en')
                                ->required()
                                ->maxLength(65535),
                            SpatieMediaLibraryFileUpload::make('thumbnail')->collection('Partner')
                            ->multiple()
                            ->enableReordering()
                            ->hint('only the first 6 image will display')
                            ,
                        ]),

                    ]),

                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                // Tables\Columns\TextColumn::make('main_banner_content_ar'),
                Tables\Columns\TextColumn::make('main_banner_content_en'),
                
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
            'index' => Pages\ListHomePages::route('/'),
            'edit' => Pages\EditHomePage::route('/{record}/edit'),
        ];
    }    
}
