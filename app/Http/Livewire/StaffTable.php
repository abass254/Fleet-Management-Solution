<?php

namespace App\Http\Livewire;

use App\Models\Staff;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

class StaffTable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp()
    {
        $this->showCheckBox()
            ->showPerPage()
            ->showExportOption('download', ['excel', 'csv'])
            ->showSearchInput();
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Builder
    {
        return Staff::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('full_name')
            ->addColumn('contact')
            ->addColumn('role')
            ->addColumn('status')
            ->addColumn('gender')
            ->addColumn('created_at_formatted', function(Staff $model) { 
                return Carbon::parse($model->created_at)->format('d/m/Y H:i:s');
            })
            ->addColumn('updated_at_formatted', function(Staff $model) { 
                return Carbon::parse($model->updated_at)->format('d/m/Y H:i:s');
            });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns aaded columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */
    public function columns(): array
    {
        return [
            Column::add()
                ->title(__('ID'))
                ->field('id')
                ->makeInputRange(),

            Column::add()
                ->title(__('FULL NAME'))
                ->field('full_name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('CONTACT'))
                ->field('contact')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('ROLE'))
                ->field('role')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('STATUS'))
                ->field('status')
                ->makeInputRange(),

            Column::add()
                ->title(__('GENDER'))
                ->field('gender')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('CREATED AT'))
                ->field('created_at_formatted')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('created_at'),

            Column::add()
                ->title(__('UPDATED AT'))
                ->field('updated_at_formatted')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('updated_at'),

        ]
;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable this section only when you have defined routes for these actions.
    |
    */

    /*
    public function actions(): array
    {
       return [
           Button::add('edit')
               ->caption(__('Edit'))
               ->class('bg-indigo-500 text-white')
               ->route('staff.edit', ['staff' => 'id']),

           Button::add('destroy')
               ->caption(__('Delete'))
               ->class('bg-red-500 text-white')
               ->route('staff.destroy', ['staff' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable this section to use editOnClick() or toggleable() methods
    |
    */

    /*
    public function update(array $data ): bool
    {
       try {
           $updated = Staff::query()->find($data['id'])->update([
                $data['field'] => $data['value']
           ]);
       } catch (QueryException $exception) {
           $updated = false;
       }
       return $updated;
    }

    public function updateMessages(string $status, string $field = '_default_message'): string
    {
        $updateMessages = [
            'success'   => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field' => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field' => __('Error updating custom field.'),
            ]
        ];

        return ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);
    }
    */

    public function template(): ?string
    {
        return null;
    }

}
