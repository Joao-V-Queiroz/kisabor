<?php

namespace App\Filament\Resources\PedidoResource\Pages;

use App\Filament\Resources\PedidoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPedido extends ViewRecord
{
    protected static string $resource = PedidoResource::class;
	protected static ?string $title = 'Visualizar Pedido';

	protected function getHeaderActions(): array
	{
		return [
			Actions\DeleteAction::make(),
			Actions\EditAction::make(),
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
