<?php

/**
 * BaseContact
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nom
 * @property string $prenom
 * @property integer $position_id
 * @property string $email
 * @property integer $company_id
 * @property string $telephone
 * @property string $mobile
 * @property string $commentaire
 * @property boolean $rappel
 * @property Company $Company
 * @property Position $Position
 * @property Doctrine_Collection $Job
 * 
 * @method string              getNom()         Returns the current record's "nom" value
 * @method string              getPrenom()      Returns the current record's "prenom" value
 * @method integer             getPositionId()  Returns the current record's "position_id" value
 * @method string              getEmail()       Returns the current record's "email" value
 * @method integer             getCompanyId()   Returns the current record's "company_id" value
 * @method string              getTelephone()   Returns the current record's "telephone" value
 * @method string              getMobile()      Returns the current record's "mobile" value
 * @method string              getCommentaire() Returns the current record's "commentaire" value
 * @method boolean             getRappel()      Returns the current record's "rappel" value
 * @method Company             getCompany()     Returns the current record's "Company" value
 * @method Position            getPosition()    Returns the current record's "Position" value
 * @method Doctrine_Collection getJob()         Returns the current record's "Job" collection
 * @method Contact             setNom()         Sets the current record's "nom" value
 * @method Contact             setPrenom()      Sets the current record's "prenom" value
 * @method Contact             setPositionId()  Sets the current record's "position_id" value
 * @method Contact             setEmail()       Sets the current record's "email" value
 * @method Contact             setCompanyId()   Sets the current record's "company_id" value
 * @method Contact             setTelephone()   Sets the current record's "telephone" value
 * @method Contact             setMobile()      Sets the current record's "mobile" value
 * @method Contact             setCommentaire() Sets the current record's "commentaire" value
 * @method Contact             setRappel()      Sets the current record's "rappel" value
 * @method Contact             setCompany()     Sets the current record's "Company" value
 * @method Contact             setPosition()    Sets the current record's "Position" value
 * @method Contact             setJob()         Sets the current record's "Job" collection
 * 
 * @package    Physalix_Backend
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseContact extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contact');
        $this->hasColumn('nom', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('prenom', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('position_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('company_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('telephone', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('mobile', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('commentaire', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('rappel', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Company', array(
             'local' => 'company_id',
             'foreign' => 'id'));

        $this->hasOne('Position', array(
             'local' => 'position_id',
             'foreign' => 'id'));

        $this->hasMany('Job', array(
             'local' => 'id',
             'foreign' => 'contact_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}