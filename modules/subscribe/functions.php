<?php
api_expose('save_subscribe');
function save_subscribe($data)
{
    if (!is_admin()) {
        return;
    }
    $table = "subscribe";
    return db_save($table, $data);
}

function get_subscribe($params=array())
{
    if (is_string($params)) {
        $params = parse_params($params);
    }
    $params['table'] = "subscribe";
    return db_get($params);
}

api_expose('delete_subscribe');
function delete_subscribe($params)
{
    if (!is_admin()) {
        return;
    }
    if (isset($params['id'])) {
        $table = "subscribe";
        $id = $params['id'];
        return db_delete($table, $id);
    }
}
