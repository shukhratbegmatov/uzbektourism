<?php

namespace common\models;

use Yii;
use yii\httpclient\Client;

/**
 * This is the model class for table "telegrambot".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property int|null $status
 * @property string|null $created_date
 * @property string|null $about
 */
class Telegrambot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telegrambot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['created_date'], 'safe'],
            [['about'], 'string'],
            [['username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'status' => 'Status',
            'created_date' => 'Created Date',
            'about' => 'About',
        ];
    }
    public function getData($data)
    {
        return json_decode(file_get_contents($data), TRUE);
    }
    private function getKeyBoard($data)
    {
        $keyboard = array(
            "keyboard" => $data,
            "one_time_keyboard" => false,
            "resize_keyboard" => true
        );
        return json_encode($keyboard);
    }

    

    public function goBot($data)
    {


        // API Telegramdan kelgan ma'lumotlar massivi
        $arrData = $this->getData($data);


        // Kelgan massivdan kerakli ma'lumotlarni ajratib olish
        if (array_key_exists('message', $arrData)) {
            $chat_id = $arrData['message']['chat']['id'];
            $message = "";
            if (isset($arrData['message']['contact']['phone_number'])) {
                $message = $arrData['message']['contact']['phone_number'];
            } elseif (isset($arrData['message']['text'])) {
                $message = $arrData['message']['text'];
            }
        } elseif (array_key_exists('callback_query', $arrData)) {
            $chat_id = $arrData['callback_query']['message']['chat']['id'];
            $message = $arrData['callback_query']['data'];
        }


        // Til menyu Start
        $startText = "Assalomu alaykum dustim men kecha tug'ildim shu sababli hali yaxshi suzlashaolmayman";
        $startKeyboard = $this->getKeyBoard([
            [['text' => "Uz"], ['text' => "Ru"],],
        ]);


        // Router
        switch ($message) {

            // Start command
            case '/start':
                $dataSend = array(
                    'chat_id' => $chat_id,
                    'text' => $startText,
//                    'parse_mode' => 'markdown',
//                    'reply_markup' => $startKeyboard,
                );

                $res = $this->requestToTelegram($dataSend, "sendMessage");
                var_dump($res);die;
                break;

        }
    }


    public function requestToTelegram($data, $type)
    {
        $myBotToken = '1090403427:AAG-FA9AB5r5RI3Xno1T9q2n2-Fsxj941wA';
        $client = new Client();
        $client->createRequest()
        ->setMethod('post')
        ->setUrl('https://api.telegram.org/bot' . $myBotToken . '/' . $type)
        ->setData($data)
        ->send();
    }

    public function sendDatas($ip)
    {
        $startText = "Ushbu ".$ip." user http://new.uzbektourism.uz/ saytga hujum qillishga urundi";
        $dataSend = array(
            'chat_id' => '461501565',
            'text' => $startText,
        );
        $myBotToken = '1090403427:AAG-FA9AB5r5RI3Xno1T9q2n2-Fsxj941wA';
        $client = new Client();
        $client->createRequest()
            ->setMethod('post')
            ->setUrl('https://api.telegram.org/bot' . $myBotToken . '/' . 'sendMessage')
            ->setData($dataSend)
            ->send();

    }


}