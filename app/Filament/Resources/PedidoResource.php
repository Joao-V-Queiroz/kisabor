<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PedidoResource\Pages;
use App\Filament\Resources\PedidoResource\RelationManagers;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Produto;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Leandrocfe\FilamentPtbrFormFields\Money;
use Filament\Tables\Enums\FiltersLayout;

class PedidoResource extends Resource
{
    protected static ?string $model = Pedido::class;
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(12)
                    ->schema([
                        // Select::make('cliente')
                        //     ->label('Cliente')
                        //     ->columnSpan(12)
                        //     ->relationship('produtos', titleAttribute: 'nome')
                        //     ->options(Cliente::all()->pluck('nome', 'id')->toArray())
                        //     ->searchable()
                        //     ->required(),
                        Select::make('produtos')
                            ->label('Produtos')
                            ->columnSpan(12)
                            ->relationship('produtos', titleAttribute: 'nome')
                            ->options(Produto::all()->pluck('nome', 'id')->toArray())
                            ->searchable()
                            ->multiple()
                            ->required(),
                        TextInput::make('quantidade')
                            ->label('Quantidade')
                            ->placeholder('Quantidade de produtos')
                            ->columnSpan(6)
                            ->numeric()
                            ->mask('999')
                            ->required(),
                        Money::make('valor')
                            ->prefix('R$')
                            ->label('Valor')
                            ->columnSpan(6)
                            ->required(),
                        Select::make('forma_pagamento')
                            ->label('Pagamento')
                            ->columnSpan(6)
                            ->options([
                                'dinheiro' => 'Dinheiro',
                                'cartao' => 'Cartão',
                                'pix' => 'Pix',
                            ])
                            ->required(),
                        Select::make('tipo_pedido')
                            ->label('Tipo de Pedido')
                            ->columnSpan(6)
                            ->options([
                                'entrega' => 'Entrega',
                                'retirada' => 'Retirada',
                            ])
                            ->required(),
                        Select::make('status')
                            ->label('Status')
                            ->columnSpan(6)
                            ->options([
                                'pendente' => 'Pendente',
                                'preparando' => 'Preparando',
                                'entregue' => 'Entregue',
                            ])
                            ->required(),
                        Textarea::make('endereco_entrega')
                            ->label('Endereço de Entrega')
                            ->rows(4)
                            ->columnSpan(12)
                            ->required(),
                        Textarea::make('observacoes')
                            ->label('Observações')
                            ->rows(4)
                            ->columnSpan(12),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('produtos.nome')
                    ->label('Produto')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('quantidade'),
                TextColumn::make('valor')
                    ->label('R$'),
                TextColumn::make('forma_pagamento')
                    ->label('Pagamento'),
                TextColumn::make('tipo_pedido')
                    ->label('Tipo de Pedido')
                    ->searchable(),
                SelectColumn::make('status')
                    ->label('Status')
                    ->options([
                        'pendente' => 'Pendente',
                        'preparando' => 'Preparando',
                        'entregue' => 'Entregue',
                    ]),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'pendente' => 'Pendente',
                        'preparando' => 'Preparando',
                        'entregue' => 'Entregue',
                    ]),
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
            'index' => Pages\ListPedidos::route('/'),
            'create' => Pages\CreatePedido::route('/create'),
            'edit' => Pages\EditPedido::route('/{record}/edit'),
        ];
    }
}
