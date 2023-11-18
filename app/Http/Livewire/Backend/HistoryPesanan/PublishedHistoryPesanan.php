<?php

namespace App\Http\Livewire\Backend\HistoryPesanan;

use App\Models\ListOrder;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Str;

class PublishedHistoryPesanan extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('Name', 'name')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                    <div class='table-links'>
                        <a taret='_blank' href='" . route('detail-history-pesanan', $row->id) . "'>View</a>
                        <div class='bullet'></div>
                        <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                    </div>
                ";
            })->asHtml(),
            Column::make('Rute', 'rute')->searchable()->format(function ($value, $column) {
                return Str::limit($value, 30, '...');
            })->asHtml(), 
        ];
    }

    public function query(): Builder
    {
        return ListOrder::query();
    }
}
