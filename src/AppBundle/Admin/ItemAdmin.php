<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use AppBundle\Entity\Categorie;
use AppBundle\Entity\Couleur;
use AppBundle\Entity\Taille;

class ItemAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('prix')
            ->add('poids')
            ->add('description')
            ->add('disponible')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nom')
            ->add('prix')
            ->add('poids')
            ->add('description')
            ->add('disponible')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nom')
            ->add('prix')
            ->add('poids')
            ->add('description')
            ->add('disponible')
			->add('categorie', 'sonata_type_model', array(
				'class' => 'AppBundle\Entity\Categorie',
				'required' => false))
			->add('couleur', 'sonata_type_model', array(
				'class' => 'AppBundle\Entity\Couleur',
				'required' => false))
			->add('taille', 'sonata_type_model', array(
				'class' => 'AppBundle\Entity\Taille',
				'required' => false))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nom')
            ->add('prix')
            ->add('poids')
            ->add('description')
            ->add('disponible')
        ;
    }
}
