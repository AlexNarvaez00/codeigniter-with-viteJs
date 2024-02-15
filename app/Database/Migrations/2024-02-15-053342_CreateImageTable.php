<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateImageTable extends Migration
{
  public function up()
  {
    $this->forge->addField([
      "name" => [
        "type" => "text",
        "null" => false,
      ]
    ]);
    $this->forge->createTable("images");
  }

  public function down()
  {
    $this->forge->dropTable("images");
  }
}
