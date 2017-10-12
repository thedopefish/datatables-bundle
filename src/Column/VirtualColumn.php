<?php

/*
 * Symfony DataTables Bundle
 * (c) Omines Internetbureau B.V. - https://omines.nl/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omines\DatatablesBundle\Column;

use Symfony\Component\OptionsResolver\OptionsResolver;

class VirtualColumn extends AbstractColumn
{
    protected function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'orderable' => false,
            'searchable' => false,
        ]);

        return $this;
    }
}
