<?php

namespace App\Filament\Resources\PedidoResource\Pages;

use App\Filament\Resources\PedidoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPedido extends EditRecord
{
    protected static string $resource = PedidoResource::class;
    protected static ?string $title = 'Editar Pedido';

    protected function getHeaderActions(): array
    {
        return [
			Actions\DeleteAction::make(),
            Actions\Action::make('back')
                ->label('Voltar')
                ->url($this->getRedirectUrl()),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
