<?php
use Phinx\Migration\AbstractMigration;

class AddiconoToSociales extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('sociales');
        $table->addColumn('icono', 'string', [
            'default' => null,
            'limit' => 60,
            'null' => false,
        ]);
        $table->update();
    }
}
