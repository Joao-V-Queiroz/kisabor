<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdutoResource\Pages;
use App\Filament\Resources\ProdutoResource\RelationManagers;
use App\Models\Produto;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Leandrocfe\FilamentPtbrFormFields\Money;
use Filament\Tables\Enums\FiltersLayout;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use NumberFormatter;

class ProdutoResource extends Resource
{
    protected static ?string $model = Produto::class;
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                    ->columns(12)
                    ->schema([
                        TextInput::make('nome')
                            ->label('Nome')
                            ->placeholder('Nome do produto')
                            ->columnSpan(4)
                            ->required()
                            ->required(),
                        Money::make('valor')
                            ->prefix('R$')
                            ->label('Valor')
                            ->columnSpan(4)
                            ->required(),
                        Select::make('tipo')
                            ->label('Tipo')
                            ->placeholder('Selecione o tipo do produto')
                            ->live()
                            ->options([
                                'sanduiche' => 'Sanduíche',
                                'bebida' => 'Bebida',
                                'sobremesa' => 'Sobremesa',
                            ])
                            ->columnSpan(4)
                            ->required(),
                        Textarea::make('ingredientes')
                            ->label('Ingredientes')
                            //só irá aparecer se o tipo for igual a sanduiche e sobremesa
                            ->hidden(fn (Get $get) => $get('tipo') !== 'sanduiche' && $get('tipo') !== 'sobremesa')
                            ->placeholder('Ingredientes do produto')
                            ->rows(4)
                            ->columnSpan(12),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nome')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('valor')
                    ->label('R$'),
                TextColumn::make('tipo')
                    ->label('Tipo'),
            ])->defaultSort('nome', 'asc')
            ->filters([
                SelectFilter::make('tipo')
                    ->options([
                        'sanduiche' => 'Sanduíche',
                        'bebida' => 'Bebida',
                        'sobremesa' => 'Sobremesa',
                    ])
                    ->label('Tipo'),
            ], layout: FiltersLayout::AboveContent)
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
            'index' => Pages\ListProdutos::route('/'),
            'create' => Pages\CreateProduto::route('/create'),
            'edit' => Pages\EditProduto::route('/{record}/edit'),
            'view' => Pages\ViewProduto::route('/{record}'),
        ];
    }
}
