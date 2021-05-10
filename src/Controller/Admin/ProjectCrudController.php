<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    public function configureFields(string $pageName): iterable
    {
        if (Crud::PAGE_NEW === $pageName || Crud::PAGE_EDIT === $pageName) {
            return [
                TextField::new('title'),
                TextEditorField::new('description'),
                DateTimeField::new('created_at'),
                TextField::new('illustration'),
                AssociationField::new('technos')
            ];
        } else {
            return [
                IdField::new('id'),
                TextField::new('title'),
                TextEditorField::new('description'),
                DateTimeField::new('created_at'),
                TextField::new('illustration'),
                AssociationField::new('technos')
            ];
        }
    }
}
