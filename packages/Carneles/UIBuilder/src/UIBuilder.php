<?php

namespace Carneles\UIBuilder;

class UIBuilder {
    
    public function generate_table($arr_data) {
        $result = '<table id="dataTable" class="table table-bordered table-hover">';
        
        $result .= '<thead>';
        $result .= '<tr>';
        foreach ($arr_data as $data) {
            foreach (array_values($data->tableField) as $field) {
                $result .= '<th>' . $field . '</th>';
            }
            $result .= '<th width="150px"><a class="btn btn-block btn-sm btn-success" href="'. url($data->baseURL . '/add') .'"><i class="fa fa-plus"></i> Add New</a></th>';
        }
        $result .= '</tr>';
        $result .= '</thead>';
        
        $result .= '<tbody>';
        foreach ($arr_data as $data) {
            $result .= '<tr>';
            foreach (array_keys($data->tableField) as $field) {
                $result .= '<td>' . $data[$field] . '</td>';
            }
            $result .= '<td>';
            $result .= '<div class="btn-group">';
            $result .= '    <a class="btn btn-warning" href="' . url($data->baseURL . '/edit/'.$data->id) . '"><i class="fa fa-edit"></i></a>';
            $result .= '    <a class="btn btn-danger" href="' . url($data->baseURL . '/delete/' . $data->id) . '" onclick="return confirm(\'Are you sure you want to delete this data?\')"><i class="fa fa-trash-o"></i></a>';
            $result .= '</div>';
            $result .= '</td>';
            $result .= '</tr>';
        }
        $result .= '</tbody>';
        
        $result .= '</table>';
        return $result;
    }
}
