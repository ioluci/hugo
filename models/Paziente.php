<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pazienti".
 *
 * @property int $id_paz
 * @property string|null $cognome_paz
 * @property string|null $nome_paz
 * @property string|null $cfisc_paz
 * @property int|null $piva_paz
 * @property string|null $dt_nas_paz
 * @property string|null $comune_nas_paz
 * @property string|null $prov_nas_paz
 * @property int|null $cap_res_paz
 * @property string|null $comune_res_paz
 * @property string|null $prov_res_paz
 * @property string|null $indirizzo_res_paz
 * @property string|null $telefono_paz
 * @property string|null $medico_paz
 * @property string|null $specialista_paz
 * @property string|null $email_paz
 * @property int|null $stato_paz 1=attivo 2=non attivo
 */
class Paziente extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'pazienti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['id_paz'], 'required'],
            [['id_paz', 'piva_paz', 'cap_res_paz', 'stato_paz'], 'integer'],
            [['dt_nas_paz'], 'safe'],
            [['cognome_paz', 'nome_paz', 'cfisc_paz', 'prov_nas_paz', 'prov_res_paz'], 'string', 'max' => 50],
            [['comune_nas_paz'], 'string', 'max' => 53],
            [['comune_res_paz'], 'string', 'max' => 55],
            [['indirizzo_res_paz'], 'string', 'max' => 65],
            [['telefono_paz', 'specialista_paz'], 'string', 'max' => 60],
            [['medico_paz'], 'string', 'max' => 58],
            [['email_paz'], 'string', 'max' => 70],
            [['id_paz'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id_paz' => 'Id',
            'cognome_paz' => 'Cognome',
            'nome_paz' => 'Nome',
            'cfisc_paz' => 'Cfisc',
            'piva_paz' => 'Piva',
            'dt_nas_paz' => 'Dt Nas',
            'comune_nas_paz' => 'Comune Nas',
            'prov_nas_paz' => 'Prov Nas',
            'cap_res_paz' => 'Cap Res',
            'comune_res_paz' => 'Comune Res',
            'prov_res_paz' => 'Prov Res',
            'indirizzo_res_paz' => 'Indirizzo Res',
            'telefono_paz' => 'Telefono',
            'medico_paz' => 'Medico',
            'specialista_paz' => 'Specialista',
            'email_paz' => 'Email',
            'stato_paz' => 'Stato',
        ];
    }

}
