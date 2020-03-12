INSTALLAZIONE
-------------

1. Scaricare l'archivio Zip del progetto (pulsante verde Clone or download, poi Download Zip)
2. Scompattare il contenuto dell'archivio nella cartella C:/wamp64/www/hugo
3. Avviare un'applicazione terminal CLI ( tipo PowerShell)
4. Dall'interno della cartella C:/wamp64/www/hugo avviare il commando: composer install (ci metterà un pò per scaricare tutti i pacchetti necessari per l'applicazione)
5. Scaricare dal seguente link il pacchetto con icons FontAwesome: https://fontawesome.com/v4.7.0/get-started/. Selezionare il pulsante "Download" nella sezione Download & Customize e poi l'opzione "No thanks, just download Font Awesome 4"
6. Scompattare il pacchetto delle icone in una nuova cartella font-awesome-4.7.0 che dovete creare in C:/wamp64/www/hugo/vendor/font-awesome-4.7.0  
7. Modificare il file C:/wamp64/www/hugo/vendor/kartik-v/yii2-icons/src/FontAwesomeAsset.php , sostituendo la classe FontAwesomeAsset con il seguente codice:
    class FontAwesomeAsset extends \kartik\base\AssetBundle {

        public $sourcePath = '@vendor/font-awesome-4.7.0';
        public $depends = array(
            'yii\web\YiiAsset',
            'yii\bootstrap4\BootstrapAsset'
        );

        /**
         * @inheritdoc
         */
        public function init() {
            $this->setupAssets('css', ['css/font-awesome']);
            parent::init();
        }

    }

