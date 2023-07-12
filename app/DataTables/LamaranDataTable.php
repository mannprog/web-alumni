<?php

namespace App\DataTables;

use Carbon\Carbon;
use App\Models\Lamaran;
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

class LamaranDataTable extends DataTable
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
        // ->addColumn('action', function ($row) {
        //     return view('notadmin.pages.lamaran.component.action', compact('row'))->render();
        // })
        ->addColumn('lowongan_nama', function ($row) {
            $loker = Loker::find($row->loker_id);
            return $loker ? $loker->nama : '-';
        })
        ->addColumn('tanggal_lamaran_formatted', function ($row) {
            return Carbon::parse($row->tanggal_lamaran)->format('d M Y');
        })
        ->addColumn('status_lamaran', function ($row) {
            $acc = 'Lamaran Disetujui';
            $rej = 'Lamaran Ditolak';
            $null = 'Belum Ditentukan';
            if ($row->is_accept === 0) {
                return $acc;
            } elseif($row->is_accept === 1) {
                return $rej;
            } else {
                return $null;
            }
        })
        ->rawColumns(['status_lamaran'])
        ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Lamaran $model): QueryBuilder
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
                    ->setTableId('lamaran-table')
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
                    // ->width(5)
                    ->searchable(false)
                    ->orderable(false)
                    ->addClass("text-sm font-weight-normal text-center"),
                Column::make('lowongan_nama')
                    ->addClass("text-sm font-weight-normal text-wrap")
                    ->title('Lowongan'),
                Column::make('tanggal_lamaran_formatted')
                    ->addClass("text-sm font-weight-normal text-wrap")
                    ->title('Tanggal Lamaran'),
                Column::make('status_lamaran')
                    ->addClass("text-sm font-weight-normal text-wrap")
                    ->title('Status'),
                // Column::computed('action')
                //     ->exportable(false)
                //     ->printable(false)
                //     // ->width(30)
                //     ->addClass("text-sm font-weight-normal")
                //     ->addClass('text-center')
                //     ->title('Aksi'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Lamaran_' . date('YmdHis');
    }
}
