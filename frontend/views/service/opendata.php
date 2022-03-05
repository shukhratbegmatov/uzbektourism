<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 16.12.2019
 */
$lang = Yii::$app->language;


?>
    <style>
        body{
            font-family: 'Open Sans', sans-serif !important;
        }
    </style>
<?php if ($data != null){
    $this->title = $data->{'name_'.$lang};
    $this->params['breadcrumbs'][] = ['label' => Yii::t('app','Ochiq ma\'lumotlar'), 'url' => ['/service/opendata']];
    $this->params['breadcrumbs'][] = $this->title;
    $this->params['titlebreadcrumbs'] = $this->title;
    ?>
    <title><?= Yii::t('app','Ochiq ma\'lumotlar') ?></title>

    <?= $data->{'text_'.$lang};?>
<?php }else{
    $this->title = Yii::t('app','Ochiq ma\'lumotlar');
    $this->params['breadcrumbs'][] = Yii::t('app','Ochiq ma\'lumotlar');
    $this->params['titlebreadcrumbs'] = $this->title;

    ?>
    <title><?= Yii::t('app','Ochiq ma\'lumotlar') ?></title>

    <br>
    <div id="print-content">
        <table class="table table-responsive table-bordered">
            <thead class="text-center">
            <td>№</td>
            <td><?= Yii::t('app','Ochiq ma\'lumotlarning nomi'); ?></td>
            <td><?= Yii::t('app','Ma\'lumotlar bazasi formati'); ?></td>
            </thead>
            <tr class="success">
                <td>1</td>
                <td><a href="/service/opendata?id=0"><?= Yii::t('app','Litsenziyaga ega turoperatorlar ro\'yxati'); ?></a></td>
                <td><a href="https://data.egov.uz/data/610b6fa01a64fdd0373a8eab">link</a></td>
            </tr>
            <tr class="info">
                <td>2</td>
                <td><a href="/service/opendata?id=1"><?= Yii::t('app','Sertikatga ega mehmonxonalar ro\'yxati'); ?></a></td>
                <td><a href="https://data.egov.uz/data/610b6fe11a64fdd0373a8eaf">link</a></td>
            </tr>
            <tr class="success">
                <td>3</td>
                <td><a href="/service/opendata?id=2">
                    <?= Yii::t('app', "Tashkilotning nomi, manzili va joylashuv ma'lumotlari"); ?>
                    </a>
                </td>
                <td>
                    <a href="https://data.egov.uz/data/610b6eaa1a64fdd0373a8e9d">link</a></td>
            </tr>
            <tr class="info">
                <td>4</td>
                <td><a href="/service/opendata?id=3">
                    <?= Yii::t('app', "O'zbekiston Respublikasi turizm va sport vazirligining tashkilotlari"); ?>
                    </a>
                </td>
                <td><a href="https://data.egov.uz/data/610b6ee91a64fdd0373a8ea1">link</a></td>
            </tr>
            <tr class="success">
                <td>5</td>
                <td><a href="/service/opendata?id=4">
                    <?= Yii::t('app', "Bo’sh ish o’rinlari"); ?>
                    </a>
                </td>
                <td><a href="https://data.egov.uz/data/610b6f201a64fdd0373a8ea5">link</a>
                </td>
            </tr>
            <tr class="info">
                <td>6</td>
                <td><a href="/service/opendata?id=5">
                    <?= Yii::t('app', "Asosiy ko'rsatkichlar, statistik ma'lumotlar, investitsion loyihlar to'g'risida ma'lumotlar"); ?>
                    </a>
                </td>
                <td>
                    <a href="https://data.gov.uz/uz/datasets/download/2048/pdf"target="_blank">pdf</a>
                </td>
            </tr>
            <tr class="success">
                <td>7</td>
                <td><a href="/service/opendata?id=6">
                    <?= Yii::t('app', "Rahbariyatning qabul vaqtlari, telefon raqamlari"); ?>
                    </a>
                </td>
                <td><a href="https://data.egov.uz/data/610b6e741a64fdd0373a8e9b">link</a>
                </td>
				<tr class="info">
                <td>8</td>
                <td><a href="/service/opendata?id=7">
                    <?= Yii::t('app', "Turizm va sport vazirligining xizmat uylari va boshqa ko'chmas mulklari"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/xizmat_uylari.pdf"target="_blank">pdf</a>
                    </td>
					<tr class="success">
                <td>9</td>
                <td><a href="/service/opendata?id=8">
                    <?= Yii::t('app', "Turizm va sport vazirligining xizmat avtotransport vositalari to‘g‘risida ma'lumot					
"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/mashina.pdf"target="_blank">pdf</a>
                    </td>
					<tr class="info">
                <td>10</td>
                <td><a href="/service/opendata?id=9">
                    <?= Yii::t('app', "Tasdiqlangan yillik xarajatlar smetasi bilan bir qatorda, uning ijrosi, shu jumladan obyektlarni qurish, rekonstruksiya qilish va kapital ta’mirlash ishlari, avtomototransport vositalarini sotib olish va saqlash xarajatlari to‘g‘risidagi ma’lumotlar"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/otchet_ob_ispolnenii_god2021.pdf"target="_blank">pdf</a>
                    </td>
					<tr class="success">
                <td>11</td>
                <td><a href="/service/opendata?id=10">
                    <?= Yii::t('app', "Mansabdor shaxslarning xizmat safarlari va xorijdan tashrif buyurgan mehmonlarni kutib olish xarajatlari (xizmat safarining yoki tashrifning maqsadi, sutkalik pul, transport va yashash bilan bog‘liq xarajatlar (davlat sirlari va xizmatda foydalanish uchun mo‘ljallangan maʼlumotlar bundan mustasno)	
"); ?>
                    </a>
                </td>
                <td><a href="https://data.egov.uz/data/61403f16ba3615f6f0770f44"target="_blank">link</a>
                    </td>
					<tr class="info">
                <td>12</td>
                <td><a href="/service/opendata?id=11">
                    <?= Yii::t('app', "Davlat organlari va tashkilotlari huzuridagi jamoatchilik kengashlari to‘g‘risidagi maʼlumotlar, shu jumladan: <br>jamoatchilik kengashining tasdiqlangan aʼzolari haqidagi maʼlumotlar bilan bir qatorda ularning aloqa maʼlumotlari (telefon, pochta va elektron manzillari); <br>jamoatchilik kengashining yig‘ilishlari va kun tartibidagi masalalar"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/jamoatchilik.pdf"target="_blank">pdf1-</a><a href="https://uzbektourism.uz/downloads/files/jamoatchilik2.pdf"target="_blank">-pdf2</a>
                    </td>
					<tr class="success">
                <td>13</td>
                <td><a href="/service/opendata?id=12">
                    <?= Yii::t('app', "Vazirlik huzuridagi  oliy ta’lim muassasalarining daromadlari va xarajatlari to‘g‘risidagi ma’lumotlar"); ?>
                    </a>
                </td>
                <td><a href="https://data.egov.uz/data/61792ba4c90c443f4d0149df"target="_blank">link</a>
                    </td>
					<tr class="info">
                <td>14</td>
                <td><a href="/service/opendata?id=13">
                    <?= Yii::t('app', "O‘zbekiston Respublikasi davlat muhofazasiga olingan moddiy madaniy meros obyektlari hududida tadbirkorlik faoliyatini olib borish uchun berilgan ruxsatnoma egalari to‘g‘risidagi maʼlumotlar"); ?>
                    </a>
                </td>
                <td><a href="https://data.egov.uz/data/61792b27c90c443f4d0149dd"target="_blank">link</a>
                    </td>
					<tr class="success">
                <td>15</td>
                <td><a href="/service/opendata?id=14">
                    <?= Yii::t('app', "Turizm va sport vazirligi tomonidan 2021-yil 3 va 4-choraklarda Davlat budjeti, davlat maqsadli jamg‘armalari hamda budjetdan tashqari jamg‘armalari hisobidan amalga oshirilgan (elektron do‘kon, tanlov, auksion, tender hamga to‘g‘ridan to‘g‘ri shartnomalar bo‘yicha) Davlat xaridlari to‘g‘risidagi ma’lumot"); ?>
                    </a>
                </td>
                <td><a href="https://data.egov.uz/data/61403ec3ba3615f6f0770f42"target="_blank">link</a>
                    </td>
					<tr class="info">
		<td>16</td>
                <td><a href="/service/opendata?id=15">
                    <?= Yii::t('app', "Turizm va sport vazirligining tasdiqlangan yarim yillik ish rejasi"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/ish_reja_2022-1.pdf"target="_blank">pdf</a>
			</td>
					<tr class="success">
		<td>17</td>
                <td><a href="https://uzbektourism.uz/downloads/files/2021_yil_9_oylik_hisobot.xlsx">
                    <?= Yii::t('app', "2021-yil 9 oylik hisobot"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/2021_yil_9_oylik_hisobot.xlsx"target="_blank">xlsx</a>
			</td>


					<tr class="info">
		<td>18</td>
                <td><a href="https://uzbektourism.uz/downloads/files/2021_taqsimot.xlsx">
                    <?= Yii::t('app', "2021-yil taqsimot"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/2021_taqsimot.xlsx"target="_blank">xlsx</a>
			</td>


					<tr class="success">
		<td>19</td>
                <td><a href="https://uzbektourism.uz/downloads/files/Forma_RJ.xlsx">
                    <?= Yii::t('app', "Forma RJ"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/Forma_RJ.xlsx"target="_blank">xlsx</a>
			</td>

					<tr class="info">
		<td>20</td>
                <td><a href="https://uzbektourism.uz/downloads/files/Forma_BMMJ.xlsx">
                    <?= Yii::t('app', "Forma_BMMJ"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/Forma_BMMJ.xlsx"target="_blank">xlsx</a>
			</td>

					<tr class="success">
		<td>21</td>
                <td><a href="https://uzbektourism.uz/downloads/files/Forma_2.xlsx">
                    <?= Yii::t('app', "Forma 2"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/Forma_2.xlsx"target="_blank">xlsx</a>
			</td>

			
					<tr class="info">
		<td>22</td>
                <td><a href="https://uzbektourism.uz/downloads/files/Balans_2-chorak.xlsx">
                    <?= Yii::t('app', "Balans 2-chorak"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/Balans_2-chorak.xlsx"target="_blank">xlsx</a>
			</td>

					<tr class="success">
		<td>23</td>
                <td><a href="https://uzbektourism.uz/downloads/files/Debitor_va_kreditorlik_qarzlari_togrisida_malumot.xlsx">
                    <?= Yii::t('app', "Debitor va kreditorlik qarzlari to'g'risida ma'lumot.xlsx"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/Debitor_va_kreditorlik_qarzlari_togrisida_malumot.xlsx"target="_blank">xlsx</a>
			</td>


				<tr class="info">
		
		<td>24</td>
                <td><a href="/service/opendata?id=21">
                    <?= Yii::t('app', "Madaniy meros namoyish obyektlari"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/madaniy_meros_namoyish_obyektlari.pdf"target="_blank">pdf</a>
			</td>

					<tr class="success">
		
		<td>24</td>
                <td><a href="https://uzbektourism.uz/downloads/files/subsidiya.pdf">
                    <?= Yii::t('app', "Tadbirkorlarni qo'llab quvvatlash"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/subsidiya.pdf"target="_blank">pdf</a>
			</td>
	
		<tr class="info">
		
		<td>25</td>
                <td><a href="/service/opendata?id=24">
                    <?= Yii::t('app', "Davlat xaridlarini amalga oshiruvchi komissiya"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/downloads/files/davlat_xaridlarini_amalga_oshiruvchi_komissiya.pdf"target="_blank">pdf</a>
			</td>

			<tr class="success">
		<td>26</td>
                <td><a href="/service/opendata?id=26">
                    <?= Yii::t('app', "Turizm va sport vazirligining budjet to‘g‘risidagi qonunchilik hujjatlariga muvofiq ochiq ma’lumotlar 2021-yil 3-chorak"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/service/opendata?id=26"target="_blank">link</a>
			</td>

			<tr class="info">
		<td>27</td>
                <td><a href="/service/opendata?id=27">
                    <?= Yii::t('app', "Turizm va sport vazirligining budjet to‘g‘risidagi qonunchilik hujjatlariga muvofiq ochiq ma’lumotlar 2021-yil 4-chorak"); ?>
                    </a>
                </td>
                <td><a href="https://uzbektourism.uz/service/opendata?id=27"target="_blank">link</a>
			</td>

            </tr>
        </table>
        <br><br>
    </div>
<?php }?>























































