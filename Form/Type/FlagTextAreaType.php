<?php

namespace translation\pxTranslationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Creates a form field object to show a field value
 *
 */
class FlagTextAreaType extends AbstractType {

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'attr' => array(
                'size' => 16,
                'class' => 'span9'
            ),
        ));
    }

    public function getParent() {
        return 'text';
    }

    public function getName() {
        return 'flag_textarea';
    }

}

?>
