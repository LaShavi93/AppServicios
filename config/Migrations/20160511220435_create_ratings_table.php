<?php

use Phinx\Migration\AbstractMigration;

class CreateRatingsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        //Con esto creamos nuestra tabla.
        /*$table = $this->table('ratings'); 
        
        //Añadimos a la tabla creada columnas, con sus respectivos nombres, limites de caractetes y demas caracteristicas.
        $table->addColumn('value', 'integer', ['limit' => 2])
              ->addColumn('date', 'datetime')
              ->addColumn('state', 'integer', ['limit' => 3])
              ->create(); //Con esto decimos que se cree la tabla con los campos definidos arriba.
              
        $refTable = $this->table('ratings');
        
        $refTable->addColumn('costumer_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('costumer_id', 'users', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
        
                 ->addColumn('technical_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('technical_id', 'users', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 
                 ->addColumn('application_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('application_id', 'applications', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 
                 ->update();
                 */
    }
}
