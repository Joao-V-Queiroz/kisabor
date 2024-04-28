<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClienteResource\Pages;
use App\Filament\Resources\ClienteResource\RelationManagers;
use App\Models\Cliente;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClienteResource extends Resource
{
    protected static ?string $model = Cliente::class;
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                ->columns(12)
                ->schema([
                   TextInput::make('nome')
                        ->label('Nome')
                        ->placeholder('Nome do cliente')
                        ->columnSpan(6)
                        ->required(),
                    TextInput::make('telefone')
                        ->label('Telefone')
                        ->placeholder('Telefone do cliente')
                        ->columnSpan(6)
                        ->mask('(99) 99999-9999')
                        ->required(),
                    TextInput::make('cep')
                        ->label('CEP')
                        ->placeholder('CEP do cliente')
                        ->columnSpan(6)
                        ->mask('99999-999')
                        ->required(),
                    TextInput::make('cidade')
                        ->label('Cidade')
                        ->placeholder('Cidade do cliente')
                        ->columnSpan(6)
                        ->required(),
                    TextInput::make('endereco')
                        ->label('Endereço')
                        ->placeholder('Endereço do cliente')
                        ->columnSpan(6)
                        ->required(),
                    TextInput::make('bairro')
                        ->label('Bairro')
                        ->placeholder('Bairro do cliente')
                        ->columnSpan(6)
                        ->required(),
                    TextInput::make('estado')
                        ->label('Estado')
                        ->placeholder('Estado do cliente')
                        ->columnSpan(6)
                        ->required(),
                    Textarea::make('complemento')
                        ->label('Complemento')
                        ->rows(3)
                        ->columnSpan(12)
                        ->placeholder('Complemento do cliente')
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nome')
                  ->label('Nome')
                  ->searchable()
                  ->sortable(),
                TextColumn::make('telefone')
                  ->label('Telefone'),
                TextColumn::make('endereco')
                  ->label('Endereço'),
            ])->defaultSort('nome', 'asc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListClientes::route('/'),
            'create' => Pages\CreateCliente::route('/create'),
            'edit' => Pages\EditCliente::route('/{record}/edit'),
            'view' => Pages\ViewCliente::route('/{record}'),
        ];
    }
}
