<?php

use Phinx\Migration\AbstractMigration;

class CreateServicesTable extends AbstractMigration
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
        /*$table = $this->table('services'); 
        
        //Añadimos a la tabla creada columnas, con sus respectivos nombres, limites de caractetes y demas caracteristicas.
        $table->addColumn('name', 'string', ['limit' => 100])
              ->addColumn('description', 'text')
              ->addColumn('price', 'integer', ['limit' => 30])
              ->addColumn('price_points', 'integer', ['limit' => 30])
              ->addColumn('money', 'string', ['limit' => 50])
              ->addColumn('photo', 'string', ['limit' => 250])
              ->addColumn('photo_dir', 'string', ['limit' => 250])
              ->addColumn('term_condition', 'text')
              ->addColumn('warranty', 'text')
              ->addColumn('specification', 'text')
              ->addColumn('state', 'integer', ['limit' => 3])
              ->create(); //Con esto decimos que se cree la tabla con los campos definid
              */
    }
}
