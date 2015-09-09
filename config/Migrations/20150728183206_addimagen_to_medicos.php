<?php
use Phinx\Migration\AbstractMigration;

class AddimagenToMedicos extends AbstractMigration
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
        $table = $this->table('medicos');
        $table->addColumn('url', 'string', [
            'default' => null,
            'limit' => 160,
            'null' => true,
        ]);
        $table->update();
    }
}
