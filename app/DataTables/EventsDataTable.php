<?php

namespace App\DataTables;

use App\Model\Event;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EventsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->of($query);

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Model\Event $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Event::where('id','=','1');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    -> parameters([
        'dom' => 'Bfrtip',
        'buttons' => ['excel', 'csv', 'print', 'copy', 'pageLength'],
        'pageLength' => 50,
        'stateSave' => false,
        'responsive' => true,
        'processing'=>true,
        'serverSide'=>true,
        "autoWidth" => false,
        "aLengthMenu" => [[25, 50, 100, 200, 500, -1], [25, 50, 100, 200, 500,'All']],
    ]);

    }

    /**
     * Get columns.
     *
     * @return array
     */
    public function setOrderBy(): array
    {
        return [[0, 'asc']];
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id'=>['data'=>'id','name'=> 'id','title'=>'S.N'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Events_' . date('YmdHis');
    }
}
