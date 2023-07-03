<?php

namespace App\DataTables;

use Carbon\Carbon;
use App\Models\Loker;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class LokerDataTable extends DataTable
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
            ->addColumn('action', function ($row) {
                return view('admin.pages.loker.component.action', compact('row'))->render();
            })
            ->addColumn('tanggal_mulai_formatted', function ($row) {
                return Carbon::parse($row->tanggal_mulai)->format('d-m-Y');
            })
            ->addColumn('tanggal_akhir_formatted', function ($row) {
                return Carbon::parse($row->tanggal_akhir)->format('d-m-Y');
            })
            ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Loker $model): QueryBuilder
    {
        $userId = Auth::id();
        return $model->newQuery()
            ->where('user_id', $userId)
            ->with('user');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('loker-table')
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
                ->title('Perusahaan'),
            Column::make('nama')
                ->addClass("text-sm font-weight-normal text-wrap")
                ->title('Lowongan'),
            Column::make('tanggal_mulai_formatted')
                ->addClass("text-sm font-weight-normal text-wrap")
                ->title('Tanggal Mulai'),
            Column::make('tanggal_akhir_formatted')
                ->addClass("text-sm font-weight-normal text-wrap")
                ->title('Tanggal Akhir'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                // ->width(30)
                ->addClass("text-sm font-weight-normal")
                ->addClass('text-center')
                ->title('Aksi'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Loker_' . date('YmdHis');
    }
}