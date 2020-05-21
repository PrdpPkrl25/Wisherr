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
            ->of($query)
            -> editColumn('action', function ($event_id) {
        return "<a href=\"/events/$event_id->id\"><button class=\"form-control theme-white theme-blue-bg\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Show</font></font></button></a>";
    })
              -> rawColumns(['action']);

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Model\Event $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Event::all();
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
                        'buttons'=>['pageLength'],
                        'pageLength' => 10,
                        'stateSave' => false,
                        'responsive' => true,
                        'processing'=>true,
                        'serverSide'=>true,
                        "autoWidth" => false,
                        "aLengthMenu" => [[25, 50, 100, 200, 500, -1], [25, 50, 100, 200, 500,'All']],
                        "order" => $this -> setOrderBy(),
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
            'event_name'=>['data'=>'event_name','name'=> 'event_name','title'=>'Event Name'],
            'event_date'=>['data'=>'event_date','name'=> 'id','title'=>'Event Date'],
            'action'=>['title'=>'Action'],
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
