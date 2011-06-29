<?php

/**
 * Model_Base_Debate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_email
 * @property string $user_url
 * @property string $content
 * @property boolean $markdown
 * @property Model_User $User
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Model_Base_Debate extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('debate');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('user_name', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('user_email', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('user_url', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('content', 'string', 1000, array(
             'type' => 'string',
             'length' => '1000',
             ));
        $this->hasColumn('markdown', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Model_User as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $versionable0 = new Doctrine_Template_Versionable(array(
             'versionColumn' => 'version',
             'className' => '%CLASS%Version',
             'auditLog' => true,
             ));
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($versionable0);
        $this->actAs($timestampable0);
    }
}