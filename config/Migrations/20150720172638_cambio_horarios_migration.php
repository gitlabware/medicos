<?php

use Phinx\Migration\AbstractMigration;

class CambioHorariosMigration extends AbstractMigration {

  /**
   * Change Method.
   *
   * Write your reversible migrations using this method.
   *
   * More information on writing migrations is available here:
   * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
   */
  public function change() {
    $table = $this->table('consultorios');
    $table->changeColumn('horarios', 'text', [
      'default' => null,
      'null' => true,
    ]);
    $table->update();
  }

}
