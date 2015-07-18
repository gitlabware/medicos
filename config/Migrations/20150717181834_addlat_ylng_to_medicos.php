<?php
use Phinx\Migration\AbstractMigration;

class AddlatYlngToMedicos extends AbstractMigration
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
        $table->addColumn('lat', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('lng', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->update();
    }
}
