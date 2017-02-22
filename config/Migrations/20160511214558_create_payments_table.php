<?php

use Phinx\Migration\AbstractMigration;

class CreatePaymentsTable extends AbstractMigration
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
        /*$table = $this->table('payments'); 
        
        //Añadimos a la tabla creada columnas, con sus respectivos nombres, limites de caractetes y demas caracteristicas.
        $table->addColumn('date', 'datetime')
              ->addColumn('reference', 'string', ['limit' => 250])
              ->addColumn('state', 'integer', ['limit' => 3])
              ->create(); //Con esto decimos que se cree la tabla con los campos definidos arriba.
              
        $refTable = $this->table('payments');
        
        $refTable->addColumn('user_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('user_id', 'users', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 
                 ->addColumn('method_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('method_id', 'methods', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 
                 ->addColumn('promotion_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('promotion_id', 'promotions', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 
                 ->addColumn('progress_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('progress_id', 'progress', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))                 
                 
                 ->update();
                 */
    }
}
