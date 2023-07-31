<?php

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use Filament\Tables;
use App\Models\Service;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Filament\Resources\ServiceResource\Pages\EditService;
use App\Filament\Resources\ServiceResource\Pages\ListServices;
use App\Filament\Resources\ServiceResource\Pages\CreateService;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-support';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([

                    TextInput::make('title')->placeholder('title')
                        ->autofocus()->required()
                        ->minLength(3)
                        ->reactive()
                        ->unique(ignoreRecord: true)
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug'),
                    SpatieMediaLibraryFileUpload::make('thumbnail')->collection('services'),
                    // RichEditor::make('description')->required(),
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
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('slug'),
                IconColumn::make('is_published')
                            ->boolean()
                            ->trueIcon('heroicon-o-badge-check')
                            ->falseIcon('heroicon-o-x-circle'),
                SpatieMediaLibraryImageColumn::make('thumbnail')->collection('services'),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }    
}
