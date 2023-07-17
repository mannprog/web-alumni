<?php

namespace App\DataTables;

use Carbon\Carbon;
use App\Models\Berita;
use App\Models\LaporanBeritum;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class LaporanBeritaDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addIndexColumn()
        ->addColumn('created_at_formatted', function ($row) {
            return Carbon::parse($row->created_at)->format('d M Y H:i');
        })
        ->addColumn('updated_at_formatted', function ($row) {
            return Carbon::parse($row->updated_at)->format('d M Y H:i');
        });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Berita $model): QueryBuilder
    {
        return $model->newQuery()
        ->with('user');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('laporanberita-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->addColumnDef([
                        'responsivePriority' => 1,
                        'targets' => 1,
                    ])
                    ->orderBy(2, 'asc')
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')
                ->title('No')
                // ->width(5)
                ->searchable(false)
                ->orderable(false)
                ->addClass("text-sm font-weight-normal")
                ->addClass('text-center'),
            Column::make('user.name')
                ->addClass("text-sm font-weight-normal text-wrap")
                ->orderable(false)
                ->title('Penulis'),
            Column::make('judul')
                ->addClass("text-sm font-weight-normal text-wrap")
                ->title('Judul'),
            Column::make('created_at_formatted')
                ->addClass("text-sm font-weight-normal text-wrap")
                ->title('Tanggal Dibuat'),
            Column::make('updated_at_formatted')
                ->addClass("text-sm font-weight-normal text-wrap")
                ->title('Tanggal Diedit'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'LaporanBerita_' . date('YmdHis');
    }
}
