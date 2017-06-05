<?php

namespace App\Form;

use Zend\Form\Form;
use Zend\Form\Element;

class StatusForm extends Form {

    public function __construct($name = 'status', $options = array()) {

        parent::__construct($name, $options);

        $this->add([
            'name' => 'id',
            'type' => Element\Hidden::class
        ]);

        $this->add([
            'name' => 'arquivo',
            'type' => Element\Text::class,
            'options' => [
                'label' => 'Nome do Arquivo'
            ],
            'attributes' => [
                'id' => 'arquivo'
            ]
        ]);

        $this->add([
            'name' => 'atualizado_em',
            'type' => Element\DateTime::class,
            'options' => [
                'label' => 'Atualizado Em',
                'format' => 'd/m/Y H:i:s',
            ],
            'attributes' => [
                'id' => 'atualizado-em',
                'value' => date('d/m/Y H:i:s'),
                'step' => 'any'
            ]
        ]);

        $this->add([
            'name' => 'hash',
            'type' => Element\Text::class,
            'options' => [
                'label' => 'Hash'
            ],
            'attributes' => [
                'id' => 'hash'
            ]
        ]);

        $this->add([
            'name' => 'status',
            'type' => Element\Select::class,
            'options' => [
                'label' => 'Status',
                'value_options' => [
                    1 => 'Ativo',
                    0 => 'Inativo'
                ],
            ],
            'attributes' => [
                'id' => 'status'
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => Element\Button::class,
            'options' => [
                'label' => 'Salvar'
            ],
            'attributes' => [
                'type' => 'submit'
            ]
        ]);
    }

}
