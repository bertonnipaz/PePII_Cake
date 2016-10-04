<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paciente Entity
 *
 * @property int $id
 * @property string $name
 * @property string $endereco
 * @property int $rg
 * @property string $cpf
 * @property string $email
 * @property string $nasc
 * @property string $fone1
 * @property string $fone2
 */
class Paciente extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
