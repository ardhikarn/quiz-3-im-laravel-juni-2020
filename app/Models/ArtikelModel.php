<?php

  namespace App\Models;
  use Illuminate\Support\Facades\DB;

  class ArtikelModel {
    public static function get_all() {
      $artikels = DB::table('artikel')->get();
      return $artikels;
    }

    public static function save($data) {
      $new_artikel = DB::table('artikel')->insert($data);
      return $new_artikel;
    }

    public static function find_by_id($id) {
      $item = DB::table('artikel')->where('id', $id)->first();
      return $item;
    }

    public static function update($data) {
      $update_item = DB::table('artikel')->where('id', $data['id'])->update($data);
      return $update_item;
    }

    public static function destroy($id) {
      $item = DB::table('artikel')->where('id', $id)->delete();
      return 'delete';
    }
  }

?>