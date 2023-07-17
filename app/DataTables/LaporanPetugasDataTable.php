<?php

namespace App\DataTables;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class LaporanPetugasDataTable extends DataTable
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
        ->addColumn('roles', function ($row) {
            return $row->roles[0]->name;
        });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        return $model->newQuery()
        ->role(['admin', 'kepalasekolah', 'petugas'])
        ->with(['petugasDetail', 'userKontak', 'roles']);
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('laporanpetugas-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
            ->addColumnDef([
                'responsivePriority' => 1,
                'targets' => 1,
            ])
            ->orderBy(1, 'asc')
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
                ->searchable(false)
                ->orderable(false)
                ->addClass("text-sm font-weight-normal")
                ->addClass('text-center'),
            Column::make('name')
                ->addClass("text-sm font-weight-normal text-wrap")
                ->title('Nama Lengkap'),
            Column::make('username')
                ->addClass("text-sm font-weight-normal text-wrap")
                ->title('Username'),
            Column::make('email')
                ->addClass("text-sm font-weight-normal text-wrap")
                ->title('Email'),
            Column::make('roles')
                ->addClass("text-sm font-weight-normal text-wrap")
                ->orderable(false)
                ->title('Jabatan'),
        ];
    }

    /**
     * Get the filename for export.
     */
    public function filename(): string
    {
        return 'LaporanPetugas_' . date('YmdHis');
    }
}
