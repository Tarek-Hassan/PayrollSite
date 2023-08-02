<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Setting;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SettingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SettingResource\RelationManagers;
use Filament\Forms\Components\Wizard;


class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Wizard::make([
                    Wizard\Step::make('About')->schema([
                        Forms\Components\Textarea::make('about_en')
                            ->required(),
                        Forms\Components\Textarea::make('about_ar')
                            ->required(),
                    ]),
                Wizard\Step::make('contact')
                    ->schema([
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->tel()
                            ->required()
                            ->maxLength(255),
                            Forms\Components\TextInput::make('address_en')
                                    ->maxLength(255),
                        Forms\Components\TextInput::make('address_ar')
                                ->maxLength(255),
                        Forms\Components\TextInput::make('fax')
                                ->maxLength(255),
                        Forms\Components\Textarea::make('map')
                                ->maxLength(65535),
                    ]),
                    Wizard\Step::make('social')
                    ->schema([
                        Forms\Components\TextInput::make('twitter')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('facebook')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('linkedin')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('instagram')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('youtube')
                            ->maxLength(255),
                    ]),



                ]),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
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
            'index' => Pages\ListSettings::route('/'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }    
}
