<?php
function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    //query lain, buat bikin di SP
    // $ci->db->get_where('user_access_menu',[
    //     'role_id' => $role_id,
    //     'menu_id' => $menu_id
    // ]);

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}