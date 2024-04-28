<?php

namespace App\Filament\Resources\ClienteResource\Pages;

use App\Filament\Resources\ClienteResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCliente extends ViewRecord
{
    protected static string $resource = ClienteResource::class;
	protected static ?string $title = 'Visualizar Cliente';

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
