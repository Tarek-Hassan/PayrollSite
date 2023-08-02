<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePageResource\Pages;
use App\Filament\Resources\HomePageResource\RelationManagers;
use App\Models\HomePage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Card;

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
                    Wizard::make([

                        Wizard\Step::make('Main Banner')->schema([
                            Forms\Components\Textarea::make('main_banner_content_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('main_banner_content_en')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\TextInput::make('main_banner_link')
                                ->maxLength(255),
                        ]),
                        Wizard\Step::make('About')->schema([
                            Forms\Components\TextInput::make('about_title_ar')
                                ->required()
                                
                                ->maxLength(255),
                            Forms\Components\TextInput::make('about_title_en')
                                ->required()
                                ->maxLength(255),
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
                            Forms\Components\TextInput::make('years_exper')
                                ->required(),
                            Forms\Components\TextInput::make('expert_at_service')
                                ->required(),
                        ]),
                        Wizard\Step::make('Why First')->schema([
                            
                            Forms\Components\TextInput::make('why_first_link')
                                ->maxLength(255),
                        ]),
                        Wizard\Step::make('How it works')->schema([
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
                        Wizard\Step::make('Employeer')->schema([
                            
                            Forms\Components\TextInput::make('featured_candidates_title_ar')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('featured_candidates_title_en')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\Textarea::make('featured_candidates_content_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('featured_candidates_content_en')
                                ->required()
                                ->maxLength(65535),
                            
                        ]),
                        Wizard\Step::make('Job Applicants')->schema([
                            Forms\Components\TextInput::make('job_applicants_title_ar')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('job_applicants_title_en')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\Textarea::make('job_applicants_content_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('job_applicants_content_en')
                                ->required()
                                ->maxLength(65535),
                        ]),
                        Wizard\Step::make('Partner')->schema([
                            Forms\Components\Textarea::make('partner_content_ar')
                                ->required()
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('partner_content_en')
                                ->required()
                                ->maxLength(65535),
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
