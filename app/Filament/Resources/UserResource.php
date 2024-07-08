<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ViewUser;

use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\Page;
use App\Models\User;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page as PagesPage;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password;


class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Section::make('User Info')->schema([
                TextInput::make('name')->required(),
                TextInput::make('email')->required()->unique(ignoreRecord: true),
                TextInput::make('password')->required()->password()->dehydrateStateUsing(fn ($state)=>Hash::make($state))
                ->visible(fn($livewire)=>$livewire instanceof CreateUser)->rule(Password::default()),
               ]),


               Section::make('User Password')->schema([
                
                TextInput::make('old_password')->required()->currentPassword()->rule(Password::default()),
                TextInput::make('new_password')->required()->password()->rule(Password::default()),
                
                TextInput::make('Password_comfirmation')->required()->password()->same('new_password')->requiredWith('new_password'),
               ])->visible(fn($livewire)=>$livewire instanceof EditUser),
            ]);


            

    }

    public static function table(Table $table): Table
    {
        
        return $table
            ->columns([
                
                TextColumn::make('name'),
                TextColumn::make('email'),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            // ->recordUrl(function($record){
            //     if($record){
            //         return null;
            //     }
            //     return Pages\ViewUser::getUrl([$record->id]);
            // })
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
