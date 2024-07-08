<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MembarResource\Pages;
use App\Filament\Resources\MembarResource\RelationManagers;
use App\Models\Membar;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Nette\Utils\ImageColor;

class MembarResource extends Resource
{
    protected static ?string $model = Membar::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel= 'Teams';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               TextInput::make('name')->required()->placeholder('Name'),
               TextInput::make('designation')->required(),
               TextInput::make('fb_url')->url()->label('Facebook Id Link'),
               TextInput::make('tw_url')->url()->label('Twitter Id Link'),
               TextInput::make('in_url')->url()->label('Instagram Id Link'),
               FileUpload::make('image'),
               Select::make('status')->required()->options([
                1 => 'Active',
                0 => 'Inactive',
            ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->width(50),
                TextColumn::make('name'),
                TextColumn::make('designation'),
                
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
            'index' => Pages\ListMembars::route('/'),
            'create' => Pages\CreateMembar::route('/create'),
            'edit' => Pages\EditMembar::route('/{record}/edit'),
        ];
    }

   

    
}
