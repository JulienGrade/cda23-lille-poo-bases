<?php

class Subclass extends BaseClass
{
    public function getParentProtectedProperty():string
    {
        return $this->protectedProperty;
    }

    public function getParentPrivateProperty():string
    {
        // Cette fois cette ligne renverra une erreur
        //return $this->privateProperty;

        // Afin d'accéder à la propriété privée nous devons utiliser le getter
        return $this->getPrivateProperty();
    }
}