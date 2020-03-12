<?php

namespace app\helpers;

use Yii;
use yii\db\Query;

class PazienteHelper {

    public static function getIndexData() {

        $array = (new Query())
                ->select([
                    'id_paz AS id',
                    'CONCAT(cognome_paz, " ", nome_paz) AS paziente',
                    'cfisc_paz AS codice_fiscale',
                    'comune_res_paz AS comune',
                    'prov_res_paz AS provincia',
                    'telefono_paz AS telefono',
                    'medico_paz AS medico',
                    'email_paz AS email'
                ])
                ->from('pazienti')
                ->where(['not', ['cognome_paz' => null]])
                ->andWhere(['not', ['nome_paz' => null]])
                ->orderBy(['paziente' => SORT_ASC])
                ->all();

        return $array;
    }

}
