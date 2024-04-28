<?php

namespace App\Filament\Resources\ProdutoResource\Pages;

use App\Filament\Resources\ProdutoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateProduto extends CreateRecord
{
    protected static string $resource = ProdutoResource::class;
    protected static ?string $title = 'Cadastrar Produto';

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Produto cadastrado');
    }

    public function getHeaderActions(): array
    {
        return [
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
