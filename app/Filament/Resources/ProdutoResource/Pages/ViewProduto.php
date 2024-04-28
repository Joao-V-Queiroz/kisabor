<?php

namespace App\Filament\Resources\ProdutoResource\Pages;

use App\Filament\Resources\ProdutoResource;
use Filament\Actions;
use Filament\Actions\Modal\Actions\Action;
use Filament\Resources\Pages\ViewRecord;

class ViewProduto extends ViewRecord
{
    protected static string $resource = ProdutoResource::class;
	protected static ?string $title = 'Visualizar Produto';

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
